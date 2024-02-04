<!DOCTYPE html>
<html lang="en">
<?php
    include("../Admin/connection/config.php");
    error_reporting(0);
    session_start();
?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drivers to Germany </title>
    <link rel="stylesheet" href="../css/style.css"/>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"
    ></script>
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  </head>
  <body>
<?php include("../header/index.php") ?>
    <!-- hero section -->
    <div class="about-container header-image-full">
        <div
          class="hero-container-aboutus"
          style="
            background-image: url('../assets/slider/Drivers\ To\ Germany_Edupace\ Academy\ Thrissur.jpg');
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
        <img src="../assets/slider/Drivers-to-Germany-Language-Academy.jpg" class="img-fluid" alt="Best Study Abrod Institute Coaching Center In KEra">
    </div>
</section>

    <div class="carrer-abroad-container container">
      <div class="carrer-abroad-head text-center mt-5 mb-5">
        <h2>Drivers to Germany</h2>
        
      </div>

      <div class="carrer-abroad-body">
        <div class="container-fluid">
          <!-- Content here -->
          <div
            class="row align-items-start justify-content-center py-3 "
          >
          <div class="col-md-6 mb-4 mb-md-0">
            <div class="carrer-abroad-body-right text-justify">
                <img src="https://img.freepik.com/free-photo/male-worker-with-bulldozer-sand-quarry_1303-28112.jpg?size=626&ext=jpg&ga=GA1.2.767184273.1695731208&semt=sph" alt="ausbildung" />
                
                
            </div>
        </div>
        

            <div class="col-md-6 text-justify">
              <div class="carrer-abroad-body-left py-3 text-justify">
                <h6 style="font-size: 1.2rem; color: darkblue; ">About Program</h6>
                <h4 style="font-size: 1.5rem; color: #f03a03; ">Driving Opportunity in Germany!!
                    Your Journey Starts Here</h4>
                <p style="text-align: justify;">
                    Germany is currently facing a significant shortage of skilled drivers, and we're offering a unique 
                    opportunity for drivers to join the workforce. This shortage is, in part, due to the country's 
                    aging population. As a driver, you play a vital role in ensuring efficient and safe transportation.
                     Be part of the solution to meet the increasing demand for professional drivers in Germany. 
                     Seize the wheel of opportunity and drive your career forward with us!
               
                     
                
              </div>
            </div>
          </div>
        
        </div>
      </div>

    </div>
<!-- image carousel -->

<div class="carrer-slider1-container">

  <div class="carrer-slider1">
    <?php
        $result=mysqli_query($con,"SELECT * FROM career_abroad where category='Drivers To Germany' AND status=1 order by id desc limit 10");
        
        while ($user_data=mysqli_fetch_array($result)) {                 
    ?>
      <div class="carrer-card1">
          <img src="../Admin/img/career_Abroad/<?php echo $user_data['image']; ?>" alt="Doctors To Spain Thrissur">
      </div>
    <?php } ?>
      <!-- <div class="carrer-card1">
          <img src="assets/index/Drivers To German/Drivers To Germany Thrissur - 2.jpeg" alt="Doctors To Spain Thrissur">
      </div>
      <div class="carrer-card1">
          <img src="assets/index/Drivers To German/Drivers To Germany Thrissur - 3.jpeg" alt="Doctors To Spain Thrissur">
      </div>
      <div class="carrer-card1">
          <img src="assets/index/Drivers To German/Drivers To Germany Thrissur - 4.jpeg" alt="Doctors To Spain Thrissur">
      </div>
      <div class="carrer-card1">
          <img src="assets/index/Drivers To German/Drivers To Germany Thrissur - 5.jpeg" alt="Doctors To Spain Thrissur">
      </div> -->
 
      <i class="fa-solid fa-arrow-left" onclick="scrollslider1(-1)"></i>
      <i class="fa-solid fa-arrow-right" onclick="scrollslider1(1)"></i>
  </div>
</div>

            <!-- faq -->
            <div class="faq-container container my-5 py-5">
              <div class="container-fluid">
              <!-- Content here -->
                  <div class="row">
                      <div class="col-md-6 d-flex flex-column justify-content-center align-items-left text-center py-5">
                          <div class="faq-content-left my-5">
                              <img src="../assets/images/about-avatar-group.png" alt="ausbildung">
                              <h2>Still have questions?</h2>
                              <p>
                                  Can't find the answer you're looking for?
                                  Please chat with our friendly team.
                              </p>
                              <button type="button" class="btn btn-primary">Get In Touch</button>
                          </div>
                      </div>
                      
                      
                      <div class="col-md-6 ">
                          <div class="faq-content-right">
                              <h2>Still have questions?</h2>
                              <!-- <p>
                                  Can't find the answer you're looking for?
                                  Please chat with our friendly team.
                              </p> -->
                              
                          </div>
                          <div class="accordion" id="accordionExample">
                              <!-- Accordion Item 1 -->
                              <div class="card-faq">
                                  <div class="card-header" id="headingOne">
                                      <h2 class="mb-0">
                                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                              What languages does EduPace Language Academy offer courses in?
                                          </button>
                                      </h2>
                                  </div>
                          
                                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                      <div class="card-body">
                                          EduPace Language Academy offers a diverse range of language courses,
                                          including but not limited to English, Spanish, French, German, 
                                         and many more. Our goal is to cater to a wide array of language learners                                    
                                       </div>
                                  </div>
                              </div>
                          
                              <!-- Accordion Item 2 -->
                              <div class="card-faq">
                                  <div class="card-header" id="headingTwo">
                                      <h2 class="mb-0">
                                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                              Can I enroll in multiple language courses simultaneously ?
                                          </button>
                                      </h2>
                                  </div>
                          
                                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                      <div class="card-body">
                                          Yes, you can enroll in multiple courses simultaneously. Our flexible scheduling allows you 
                                          to tailor your language learning journey according to your preferences and availability.                                    </div>
                                  </div>
                              </div>
                          
                              <!-- Accordion Item 3 -->
                              <div class="card-faq">
                                  <div class="card-header" id="headingThree">
                                      <h2 class="mb-0">
                                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                              What is the duration of each course?
                                          </button>
                                      </h2>
                                  </div>
                          
                                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                      <div class="card-body">
                                          Course durations vary depending on the language and proficiency level. Typically, courses range from
                                          4 months to 6 months. You can find specific details on the duration of each course on our 
                                          website or by contacting our admissions team.
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                      </div>
                      
                      
                  
                  </div>
              </div>
      
      
          </div>
          

<?php include("../header/footer.php") ?>
<!-- carousel-slider -->

<script>

document.addEventListener('DOMContentLoaded', function () {
  // Your existing JavaScript code here


const slider1 = document.querySelector(".carrer-slider1"); // change to "carrer-slider1"
let card1Width = document.querySelector(".carrer-card1").offsetWidth; // change to "carrer-card1"


  // Clone the slider1 content for continuous scrolling
  slider1.innerHTML += slider1.innerHTML;

  function scrollslider1(direction) {
      if (direction === 1) {
          slider1.scrollBy({
              left: card1Width + 20,
              behavior: 'smooth'
          });
      } else if (direction === -1) {
          slider1.scrollBy({
              left: -card1Width - 20,
              behavior: 'smooth'
          });
      } else {
          slider1.scrollBy({
              left: card1Width + 20,
              behavior: 'smooth'
          });
      }

      // Reset scroll position to the beginning when it reaches the cloned set
      if (slider1.scrollLeft >= slider1.scrollWidth / 2) {
          slider1.scrollTo({
              left: 0,
              behavior: 'auto'
          });
      }
  }

  // Automatic scroll every 3 seconds
  setInterval(scrollslider1, 3000);

});
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
