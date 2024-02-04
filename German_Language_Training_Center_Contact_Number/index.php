<!DOCTYPE html>
<html lang="en">
<?php
    include("../Admin/connection/config.php");
    error_reporting(0);
    session_start();
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Contact Us</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script>
      'use strict';

      /** Helper function to generate a Google Maps directions URL */
      function generateDirectionsURL(origin, destination) {
        const googleMapsUrlBase = 'https://www.google.com/maps/dir/?';
        const searchParams = new URLSearchParams('api=1');
        searchParams.append('origin', origin);
        const destinationParam = [];
        // Add title to destinationParam except in cases where Quick Builder set
        // the title to the first line of the address
        if (destination.title !== destination.address1) {
          destinationParam.push(destination.title);
        }
        destinationParam.push(destination.address1, destination.address2);
        searchParams.append('destination', destinationParam.join(','));
        return googleMapsUrlBase + searchParams.toString();
      }

      /**
       * Defines an instance of the Locator+ solution, to be instantiated
       * when the Maps library is loaded.
       */
      function LocatorPlus(configuration) {
        const locator = this;

        locator.locations = configuration.locations || [];
        locator.capabilities = configuration.capabilities || {};

        const mapEl = document.getElementById('gmp-map');
        const panelEl = document.getElementById('locations-panel');
        locator.panelListEl = document.getElementById('locations-panel-list');
        const sectionNameEl =
            document.getElementById('location-results-section-name');
        const resultsContainerEl = document.getElementById('location-results-list');

        const itemsTemplate = Handlebars.compile(
            document.getElementById('locator-result-items-tmpl').innerHTML);

        locator.searchLocation = null;
        locator.searchLocationMarker = null;
        locator.selectedLocationIdx = null;
        locator.userCountry = null;

        // Initialize the map -------------------------------------------------------
        locator.map = new google.maps.Map(mapEl, configuration.mapOptions);

        // Store selection.
        const selectResultItem = function(locationIdx, panToMarker, scrollToResult) {
          locator.selectedLocationIdx = locationIdx;
          for (let locationElem of resultsContainerEl.children) {
            locationElem.classList.remove('selected');
            if (getResultIndex(locationElem) === locator.selectedLocationIdx) {
              locationElem.classList.add('selected');
              if (scrollToResult) {
                panelEl.scrollTop = locationElem.offsetTop;
              }
            }
          }
          if (panToMarker && (locationIdx != null)) {
            locator.map.panTo(locator.locations[locationIdx].coords);
          }
        };

        // Create a marker for each location.
        const markers = locator.locations.map(function(location, index) {
          const marker = new google.maps.Marker({
            position: location.coords,
            map: locator.map,
            title: location.title,
          });
          marker.addListener('click', function() {
            selectResultItem(index, false, true);
          });
          return marker;
        });

        // Fit map to marker bounds.
        locator.updateBounds = function() {
          const bounds = new google.maps.LatLngBounds();
          if (locator.searchLocationMarker) {
            bounds.extend(locator.searchLocationMarker.getPosition());
          }
          for (let i = 0; i < markers.length; i++) {
            bounds.extend(markers[i].getPosition());
          }
          locator.map.fitBounds(bounds);
        };
        if (locator.locations.length) {
          locator.updateBounds();
        }

        // Get the distance of a store location to the user's location,
        // used in sorting the list.
        const getLocationDistance = function(location) {
          if (!locator.searchLocation) return null;

          // Use travel distance if available (from Distance Matrix).
          if (location.travelDistanceValue != null) {
            return location.travelDistanceValue;
          }

          // Fall back to straight-line distance.
          return google.maps.geometry.spherical.computeDistanceBetween(
              new google.maps.LatLng(location.coords),
              locator.searchLocation.location);
        };

        // Render the results list --------------------------------------------------
        const getResultIndex = function(elem) {
          return parseInt(elem.getAttribute('data-location-index'));
        };

        locator.renderResultsList = function() {
          let locations = locator.locations.slice();
          for (let i = 0; i < locations.length; i++) {
            locations[i].index = i;
          }
          if (locator.searchLocation) {
            sectionNameEl.textContent =
                'Nearest locations (' + locations.length + ')';
            locations.sort(function(a, b) {
              return getLocationDistance(a) - getLocationDistance(b);
            });
          } else {
            sectionNameEl.textContent = `All locations (${locations.length})`;
          }
          const resultItemContext = {locations: locations};
          resultsContainerEl.innerHTML = itemsTemplate(resultItemContext);
          for (let item of resultsContainerEl.children) {
            const resultIndex = getResultIndex(item);
            if (resultIndex === locator.selectedLocationIdx) {
              item.classList.add('selected');
            }

            const resultSelectionHandler = function() {
              if (resultIndex !== locator.selectedLocationIdx) {
                selectResultItem(resultIndex, true, false);
              }
            };

            // Clicking anywhere on the item selects this location.
            // Additionally, create a button element to make this behavior
            // accessible under tab navigation.
            item.addEventListener('click', resultSelectionHandler);
            item.querySelector('.select-location')
                .addEventListener('click', function(e) {
                  resultSelectionHandler();
                  e.stopPropagation();
                });

            // Clicking the directions button will open Google Maps directions in a
            // new tab
            const origin = (locator.searchLocation != null) ?
                locator.searchLocation.location :
                '';
            const destination = locator.locations[resultIndex];
            const googleMapsUrl = generateDirectionsURL(origin, destination);
            item.querySelector('.directions-button')
                .setAttribute('href', googleMapsUrl);
          }
        };

        // Optional capability initialization --------------------------------------
        initializeSearchInput(locator);
        initializeDistanceMatrix(locator);

        // Initial render of results -----------------------------------------------
        locator.renderResultsList();
      }

      /** When the search input capability is enabled, initialize it. */
      function initializeSearchInput(locator) {
        const geocodeCache = new Map();
        const geocoder = new google.maps.Geocoder();

        const searchInputEl = document.getElementById('location-search-input');
        const searchButtonEl = document.getElementById('location-search-button');

        const updateSearchLocation = function(address, location) {
          if (locator.searchLocationMarker) {
            locator.searchLocationMarker.setMap(null);
          }
          if (!location) {
            locator.searchLocation = null;
            return;
          }
          locator.searchLocation = {'address': address, 'location': location};
          locator.searchLocationMarker = new google.maps.Marker({
            position: location,
            map: locator.map,
            title: 'My location',
            icon: {
              path: google.maps.SymbolPath.CIRCLE,
              scale: 12,
              fillColor: '#3367D6',
              fillOpacity: 0.5,
              strokeOpacity: 0,
            }
          });

          // Update the locator's idea of the user's country, used for units. Use
          // `formatted_address` instead of the more structured `address_components`
          // to avoid an additional billed call.
          const addressParts = address.split(' ');
          locator.userCountry = addressParts[addressParts.length - 1];

          // Update map bounds to include the new location marker.
          locator.updateBounds();

          // Update the result list so we can sort it by proximity.
          locator.renderResultsList();

          locator.updateTravelTimes();
        };

        const geocodeSearch = function(query) {
          if (!query) {
            return;
          }

          const handleResult = function(geocodeResult) {
            searchInputEl.value = geocodeResult.formatted_address;
            updateSearchLocation(
                geocodeResult.formatted_address, geocodeResult.geometry.location);
          };

          if (geocodeCache.has(query)) {
            handleResult(geocodeCache.get(query));
            return;
          }
          const request = {address: query, bounds: locator.map.getBounds()};
          geocoder.geocode(request, function(results, status) {
            if (status === 'OK') {
              if (results.length > 0) {
                const result = results[0];
                geocodeCache.set(query, result);
                handleResult(result);
              }
            }
          });
        };

        // Set up geocoding on the search input.
        searchButtonEl.addEventListener('click', function() {
          geocodeSearch(searchInputEl.value.trim());
        });

        // Initialize Autocomplete.
        initializeSearchInputAutocomplete(
            locator, searchInputEl, geocodeSearch, updateSearchLocation);
      }

      /** Add Autocomplete to the search input. */
      function initializeSearchInputAutocomplete(
          locator, searchInputEl, fallbackSearch, searchLocationUpdater) {
        // Set up Autocomplete on the search input. Bias results to map viewport.
        const autocomplete = new google.maps.places.Autocomplete(searchInputEl, {
          types: ['geocode'],
          fields: ['place_id', 'formatted_address', 'geometry.location']
        });
        autocomplete.bindTo('bounds', locator.map);
        autocomplete.addListener('place_changed', function() {
          const placeResult = autocomplete.getPlace();
          if (!placeResult.geometry) {
            // Hitting 'Enter' without selecting a suggestion will result in a
            // placeResult with only the text input value as the 'name' field.
            fallbackSearch(placeResult.name);
            return;
          }
          searchLocationUpdater(
              placeResult.formatted_address, placeResult.geometry.location);
        });
      }

      /** Initialize Distance Matrix for the locator. */
      function initializeDistanceMatrix(locator) {
        const distanceMatrixService = new google.maps.DistanceMatrixService();

        // Annotate travel times to the selected location using Distance Matrix.
        locator.updateTravelTimes = function() {
          if (!locator.searchLocation) return;

          const units = (locator.userCountry === 'USA') ?
              google.maps.UnitSystem.IMPERIAL :
              google.maps.UnitSystem.METRIC;
          const request = {
            origins: [locator.searchLocation.location],
            destinations: locator.locations.map(function(x) {
              return x.coords;
            }),
            travelMode: google.maps.TravelMode.DRIVING,
            unitSystem: units,
          };
          const callback = function(response, status) {
            if (status === 'OK') {
              const distances = response.rows[0].elements;
              for (let i = 0; i < distances.length; i++) {
                const distResult = distances[i];
                let travelDistanceText, travelDistanceValue;
                if (distResult.status === 'OK') {
                  travelDistanceText = distResult.distance.text;
                  travelDistanceValue = distResult.distance.value;
                }
                const location = locator.locations[i];
                location.travelDistanceText = travelDistanceText;
                location.travelDistanceValue = travelDistanceValue;
              }

              // Re-render the results list, in case the ordering has changed.
              locator.renderResultsList();
            }
          };
          distanceMatrixService.getDistanceMatrix(request, callback);
        };
      }
    </script>
    <script>
      const CONFIGURATION = {
        "locations": [
          {"title":"Edu pace Language Academy","address1":"4th Floor, RVK Tower, High Road, Thrissur","address2":"Thrissur, Kerala, India","coords":{"lat":10.5194229,"lng":76.2168823},"placeId":"ChIJUTgbY5TvpzsRHHktvfrcNfc","actions":[{"label":"Book appointment","defaultUrl":"https://wa.link/gsa6oj"}]}
        ],
        "mapOptions": {"center":{"lat":38.0,"lng":-100.0},"fullscreenControl":true,"mapTypeControl":false,"streetViewControl":false,"zoom":4,"zoomControl":true,"maxZoom":17,"mapId":""},
        "mapsApiKey": "YOUR_API_KEY_HERE",
        "capabilities": {"input":true,"autocomplete":true,"directions":false,"distanceMatrix":true,"details":false,"actions":true}
      };

      function initMap() {
        new LocatorPlus(CONFIGURATION);
      }
    </script>
    <script id="locator-result-items-tmpl" type="text/x-handlebars-template">
      {{#each locations}}
        <li class="location-result" data-location-index="{{index}}">
          <button class="select-location">
            <h2 class="name">{{title}}</h2>
          </button>
          <div class="address">{{address1}}<br>{{address2}}</div>
          <div class="options">
            {{#each actions}}
              {{#if defaultUrl}}
                <div class="option-container">
                  <div class="action-button">
                      <a href="{{defaultUrl}}" target="_blank" class="option">
                        <img class="open-icon" src="https://fonts.gstatic.com/s/i/googlematerialicons/open_in_new/v16/24px.svg" alt="open in new window"/>
                        <span>{{label}}</span>
                      </a>
                  </div>
                </div>
              {{/if}}
            {{/each}}
          </div>
          {{#if travelDistanceText}}
            <div class="distance">{{travelDistanceText}}</div>
          {{/if}}
          <a class="directions-button" href="" target="_blank" title="Get directions to this location on Google Maps">
            <svg width="34" height="34" viewBox="0 0 34 34"
                  fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.5867 9.24375L17.9403 8.8902V8.8902L17.5867 9.24375ZM16.4117 9.24375L16.7653 9.59731L16.7675 9.59502L16.4117 9.24375ZM8.91172 16.7437L8.55817 16.3902L8.91172 16.7437ZM8.91172 17.9229L8.55817 18.2765L8.55826 18.2766L8.91172 17.9229ZM16.4117 25.4187H16.9117V25.2116L16.7652 25.0651L16.4117 25.4187ZM16.4117 25.4229H15.9117V25.63L16.0582 25.7765L16.4117 25.4229ZM25.0909 17.9229L25.4444 18.2765L25.4467 18.2742L25.0909 17.9229ZM25.4403 16.3902L17.9403 8.8902L17.2332 9.5973L24.7332 17.0973L25.4403 16.3902ZM17.9403 8.8902C17.4213 8.3712 16.5737 8.3679 16.0559 8.89248L16.7675 9.59502C16.8914 9.4696 17.1022 9.4663 17.2332 9.5973L17.9403 8.8902ZM16.0582 8.8902L8.55817 16.3902L9.26527 17.0973L16.7653 9.5973L16.0582 8.8902ZM8.55817 16.3902C8.0379 16.9105 8.0379 17.7562 8.55817 18.2765L9.26527 17.5694C9.13553 17.4396 9.13553 17.227 9.26527 17.0973L8.55817 16.3902ZM8.55826 18.2766L16.0583 25.7724L16.7652 25.0651L9.26517 17.5693L8.55826 18.2766ZM15.9117 25.4187V25.4229H16.9117V25.4187H15.9117ZM16.0582 25.7765C16.5784 26.2967 17.4242 26.2967 17.9444 25.7765L17.2373 25.0694C17.1076 25.1991 16.895 25.1991 16.7653 25.0694L16.0582 25.7765ZM17.9444 25.7765L25.4444 18.2765L24.7373 17.5694L17.2373 25.0694L17.9444 25.7765ZM25.4467 18.2742C25.9631 17.7512 25.9663 16.9096 25.438 16.3879L24.7354 17.0995C24.8655 17.2279 24.8687 17.4363 24.7351 17.5716L25.4467 18.2742Z" fill="#1967d2"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 19.8333V17.75H15.6667V20.25H14V16.9167C14 16.4542 14.3708 16.0833 14.8333 16.0833H19V14L21.9167 16.9167L19 19.8333Z" fill="#1967d2"/>
              <circle class="directions-button-background" cx="17" cy="17" r="16.5" stroke="#e0e0e0"/>
            </svg>
          </a>
        </li>
      {{/each}}
    </script>

</head>
<body>
  <?php
    echo $error;
    echo $success;
  ?>
<?php include("../header/index.php") ?>

<!-- hero section -->
    <div class="about-container header-image-full">
        <div
          class="hero-container-aboutus"
          style="
            background-image: url('../assets/slider/Best-Study-Abroad-Agency-thrissur_-Contact-Number_-Edupace-language-academy.jpg');
            background-size: cover; 
            background-position: center;
            height: 600px;
          "
        >
          <!-- Content for the hero section goes here -->
        </div>
      </div>

<section>
    <div class="header-image-full-mobile">
        <img src="../assets/slider/Contacts_Edupace-Language-Academy.jpg" class="img-fluid" alt="...">
    </div>
</section>
<!-- contact-body-container -->

<div class="contact-body-container  py-5" >
    
    <div class="contact-head text-center mt-5 mb-5 ">
        <h6>Contact Us</h6>
        <h2>GET IN TOUCH</h2>
        <p>We’d love to hear from you. Please fill out this form.</p>
    </div>
    
    <div class="contact-map container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.6196943971427!2d76.21907477481402!3d10.37226206651903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7f6fc5260cb43%3A0xeca28f4e46ca5694!2z4LSO4LSf4LWBIOC0quC1h-C0uOC1jSDgtJXgtYvgtJrgtY3gtJrgtL_gtILgtJfgtY0g4LS44LWG4LW74LWN4LSx4LW8!5e0!3m2!1sml!2sin!4v1700296679870!5m2!1sml!2sin" 
      style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="edupace-contact-container py-5  justify-content-start py-5 container mb-5 ">
      <div class="row">
      <div class="col-md-6" >
        <div class="edu-contact-address">
            <p ><i class="fas fa-location me-3" ></i>
               Edupace Language Academy | RVK Tower | High Road | Thrissur-01
            </p>
            <p><i class="fas fa-envelope me-3" ></i>
              <a href="mailto:info@edupace.org" style="text-decoration:none; color: black;">info@edupace.com</a>
            </p>
            <p><i class="fas fa-phone me-3" ></i>
              <a href="tel:+918592925900" style="text-decoration:none; color:black;">
                 +91 8592925900
              </a>
            </p>
            <p><i class="fas fa-phone me-3" ></i> 
              <a href="tel:+919072545002" style="text-decoration:none; color:black;">+91 9072545002</a>
            </p>
        
        </div>
        <div class="edu-social-icons">
          
            <i class="fab fa-instagram me-3"></i>
            <i class="fab fa-facebook-f me-3"></i>
            <i class="fab fa-twitter me-3"></i>
            <i class="fab fa-youtube"></i>

        </div>
          
      </div>
      <div class="col-md-6">
          
          <div class="edu-contact-form" id="Contact_Form">
            <?php 
  
                  // if(isset($_POST['submit']))          
                  //     { 
                  //       $f_name=$_POST['f_name'];
                  //       $l_name=$_POST['l_name'];
                  //       $email_id=$_POST['email'];
                  //       $phone=$_POST['phone'];
                  //       $message=$_POST['message'];

                        
                  //       $sql = "INSERT INTO contact VALUE('','$f_name','$l_name','$email_id','$phone','$message')";

                  //       mysqli_query($con, $sql); 
                  //         $success = '<div class="alert alert-success alert-dismissible fade show">
                  //                       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  //                                Added Successfully.
                  //                     </div>';
                                      
                  //     }
                      
                ?>
                <?php
                  if (isset($_POST['submit'])) {
                      $f_name = $_POST['f_name'];
                      $l_name = $_POST['l_name'];
                      $email_id = $_POST['email'];
                      $phone = $_POST['phone'];
                      $message = $_POST['message'];

                      // Your SQL query for inserting data into the database
                      $sql = "INSERT INTO contact VALUES('', '$f_name', '$l_name', '$email_id', '$phone', '$message')";

                      // Execute the SQL query
                      mysqli_query($con, $sql);

                      // Email configuration
                      $to = $email_id; // Replace with the email where you want to receive form submissions
                      $subject = 'Edupace Language Academy';
                      $email_message = 'We will You Contact Soon !';
                      $message_body = "Hlo $f_name $l_name\nRegrads With $email_message";
                      $headers = "From: edupace@edupace.org";

                      // Send the email
                      if (mail($to, $subject, $message_body, $headers)) {
                          $success = '<div class="alert alert-success alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Please Check Your Email.
                                      </div>';
                      } else {
                          $success = '<div class="alert alert-danger alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Added Successfully. Email sending failed.
                                      </div>';
                      }
                  }
                  ?>
                  <!-- Your HTML form goes here -->

              <form class="contact-form" action="" method="POST">
                  <div class="contact-form-input-name">
                    <div class="contact-form-input">
                      <p>First Name</p>
                      <input type="text" name="f_name" placeholder="First Name" />
                    </div>
                    <div class="contact-form-input">
                      <p>Last Name</p>
                      <input type="text" name="l_name" placeholder="Last Name" />
                    </div>
                </div>
                <div class="contact-form-input">
                  <p>Email</p>
                  <input type="text" name="email" placeholder="example@gmail.com" />
                </div>
                <div class="contact-form-input">
                  <p>Phone Number</p>
                  <input type="text" name="phone" placeholder="Phone Number" />
                </div>
                <div class="contact-form-input">
                  <p>Message</p>
                  <textarea name="message" placeholder="Enter Your Message"></textarea>
            
                </div>
                <!-- <div class="contact-form-input-checkbox">
                    <input type="checkbox">
                    <p>You agree to our friendly <a href="#"> privacy policy</a>.</p>
                </div> -->
                <button name="submit">Send Message</button>
                </form>
          </div>
      </div>
      </div>
  </div>

      
    </div>

</div>

  
  <!-- MAp -->
              <div id="locations-panel">
                <div id="locations-panel-list">
                  <header>
                    <h1 class="search-title">
                      <img src="https://fonts.gstatic.com/s/i/googlematerialicons/place/v15/24px.svg" alt=""/>
                      Find a location near you
                    </h1>
                    <div class="search-input">
                      <input id="location-search-input" placeholder="Enter your address or zip code">
                      <div id="search-overlay-search" class="search-input-overlay search">
                        <button id="location-search-button">
                          <img class="icon" src="https://fonts.gstatic.com/s/i/googlematerialicons/search/v11/24px.svg" alt="Search"/>
                        </button>
                      </div>
                    </div>
                  </header>
                  <div class="section-name" id="location-results-section-name">
                    All locations
                  </div>
                  <div class="results">
                    <ul id="location-results-list"></ul>
                  </div>
                </div>
              </div>
              <div id="gmp-map"></div>
            </div>
            
            <!-- /Map -->
   <?php include("../header/footer.php") ?> 



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>