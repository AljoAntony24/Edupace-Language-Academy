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
    <title>Nurses to Germany</title>
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
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
<?php include("../header/index.php") ?>
    <!-- hero section -->
    <div class="about-container header-image-full ">
        <div
          class="hero-container-aboutus"
          style="
            background-image: url('../assets/slider/nurses-to-germany-in-thrissur.jpg');
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
        <img src="../assets/slider/IELTS Mobile.jpg" class="img-fluid" alt="Best Study Abrod Institute Coaching Center">
    </div>
</section>
    <div class="carrer-abroad-container container">
      <div class="carrer-abroad-head text-center mt-5 mb-5">
        <h2>Nurses to Germany</h2>
        <p style="text-align: center; font-size: 1.5rem; color: darkblue; "  >We Support How You Support!</p>
      </div>

      <div class="carrer-abroad-body">
        <div class="container-fluid">
          <!-- Content here -->
          <div
            class="row align-items-start justify-content-center py-3 "
          >
          <div class="col-md-6 mb-4 mb-md-0">
            <div class="carrer-abroad-body-right text-justify">
                <img src="https://careoptionsforkids.com/hubfs/Imported_Blog_Media/Is-It-Hard-to-Become-a-Nurse-1.jpg" alt="Nurses To Germany" />
                <h4>PATHWAYS FOR FOREIGN NURSES IN GERMANY</h4>
                <p style="text-align: justify;">
                    A knowledge examination known as an anpassungslehrgang or kenntnisprufung, is a mandatory requirement in 
                    Germany for foreign nursing professionals who want to practice their profession there. <br><br>

                    A course called Anpassungslehrgang bridges knowledge or skill gaps between the foreign nurse's education 
                    and the German system by offering both theoretical and practical training. It facilitates their acquainting 
                    themselves with the German legal system, medical terminology, and healthcare practices. <br><br>

                    The Kenntnisprüfung is a test in Germany to assess a candidate's nursing knowledge and abilities to ensure 
                    that they fulfill the standards and requirements set by the German healthcare system. The German nursing 
                    licensure process, known as The Kenntnisprüfung, requires passing both theoretical and practical parts in
                     order for a candidate to be recognized as a nurse. <br>
                </p>
                
            </div>
        </div>
        

            <div class="col-md-6 text-justify">
              <div class="carrer-abroad-body-left py-3 text-justify">
                <h4>About Program</h4>
                <p style="text-align: justify;">
                    Germany has noticed a growing need for qualified nurses as the global demand for healthcare workers continues 
                    to rise. Germany will need 3,000,000 nurses by 2030 to make up for the shortage in the labor market. <br><br>

                    Several factors, such as an aging population and improvements in medical technology, are responsible for 
                    this demand. Similar to other industrialized nations, Germany is witnessing a change in its population 
                    towards an older age group. The need for nurses is growing as a result of the aging population's greater 
                    need for specialized care and healthcare services.
                </p>
                <a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="#"
                    role="button"
                    >Get Brochure</a
                >
                
                
                
              </div>
              <h4 style="font-size: 30px; color: #101663;">Facts About German</h4>
                <ul style="font-size:20px; font-family: PT serif;">
                    <li><a title="Nurses To Germany | Nurses To Spain | Doctors To Germany | Drivers To Germany">Germany is a 16-Lander Federation, and each region has its own areas of accountability.</a></li>
                    <li><a title="Nurses To Germany | Nurses To Spain | Doctors To Germany | Drivers To Germany">As of January 2023, Germany has a population of 83.31 million.</a></li>
                    <li><a title="Nurses To Germany | Nurses To Spain | Doctors To Germany | Drivers To Germany">Berlin serves as the capital city.</a></li>
                    <li><a title="Nurses To Germany | Nurses To Spain | Doctors To Germany | Drivers To Germany">The country boasts extensive higher education and career programs, along with global research initiatives.</a></li>
                    <li><a title="Nurses To Germany | Nurses To Spain | Doctors To Germany | Drivers To Germany">Germany is centrally located in Europe and shares borders with nine other countries.</a></li>
                    <li><a title="Nurses To Germany | Nurses To Spain | Doctors To Germany | Drivers To Germany">All children in Germany are required to attend school.</a></li>
                    <li><a title="Nurses To Germany | Nurses To Spain | Doctors To Germany | Drivers To Germany">The country has a complex network of public insurances that provides protection against existential threats.</a></li>
                </ul>
            </div>
          </div>
        
        </div>
      </div>







    </div>
<!-- image carousel -->

<div class="carrer-slider1-container">

  <div class="carrer-slider1">
    <?php
        $result=mysqli_query($con,"SELECT * FROM career_abroad where category='Nurses To Germany' AND status=1 order by id desc limit 10");
        
        while ($user_data=mysqli_fetch_array($result)) {                 
    ?>
      <div class="carrer-card1">
          <img src="../Admin/img/Career_Abroad/<?php echo $user_data['image']; ?>" alt="Doctors To Spain Thrissur">
      </div>
    <?php } ?>
      <!-- <div class="carrer-card1">
          <img src="assets/index/nurses_to_germany/Nurses To Germany Thrissur - 2.jpeg" alt="Doctors To Spain Thrissur">
      </div>
      <div class="carrer-card1">
          <img src="assets/index/nurses_to_germany/Nurses To Germany Thrissur - 3.jpeg" alt="Doctors To Spain Thrissur">
      </div>
      <div class="carrer-card1">
          <img src="assets/index/nurses_to_germany/Nurses To Germany Thrissur - 4.jpeg" alt="Doctors To Spain Thrissur">
      </div>
      <div class="carrer-card1">
          <img src="assets/index/nurses_to_germany/Nurses To Germany Thrissur - 1.jpeg" alt="Doctors To Spain Thrissur">
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
                              <img src="../assets/images/about-avatar-group.png" alt="Nurses To Germany">
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
                              <p>
                                  Can't find the answer you're looking for?
                                  Please chat with our friendly team.
                              </p>
                              
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
                                         and many more. Our goal is to cater to a wide array of language learners                                    </div>
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
