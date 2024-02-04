<!DOCTYPE html>
<html lang="en">
<?php
    include("Admin/connection/config.php");
    error_reporting(0);
    session_start();
?>
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FNMQFLX2MT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FNMQFLX2MT');
</script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="EDUPACE LANGUAGE ACADEMY">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    
    <meta property="og:type" content="website">
    <meta name="google-site-verification" content="b0kcgpDsVCYJX7SYm9XeBC2gHT9LdYynxSBtEm5OOSI" />
    <meta name="description" content="Best German Language Coaching Center in Thrissur - Best German Language Institute in Thrissur for Online & Offline German Classes .Best Centre for A1 to C1.">
    <meta property="og:title" content="Best German Language Coaching Center in Thrissur">
    
    
    <meta property="og:url" content="https://www.edupace.org/">
    <meta property="og:title" content="Edu Pace">
   
    <meta property="og:image" content="https://edupace.org/Admin/img/Event/">
    <meta property="og:image:alt" content="No-1 Best Study Abroad Academy In Thrissur">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon.png">

    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" title="German Education Consultants in Kerala Kochi |">
    <meta property="og:description" content="French, German, Spanish, and IELTS are the languages that EduPace Language Academy specializes in teaching.  The faculty members are courteous, approachable, and have extensive experience in their respective fields. For students to fully acquire the language, our courses adhere to the highest standards. They also understand the diverse educational needs of our students. They employ a method that is both focused and enjoyable to teach our students how to learn a new language efficiently.">

    <meta name="google-site-verification" content="FqeErNbvr72AUYUXiT38q-HmoW0OHD6T7AJ0rkXxRuc" />

    <title>Best German Language Coaching Center in Thrissur</title>
    
    <link rel="canonical" href="https://edupace.org/#Best_German_Coaching_center" title="German Education Consultants in Kerala Kochi |" />

    
  <link rel="stylesheet" href="./css/style.css" title="German Education Consultants in Kerala Kochi ">
  <link rel="stylesheet" href="./css/animation.css" title="German Education Consultants in Kerala Kochi ">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" title="German Education Consultants in Kerala Kochi " integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body >



<!-- navbar -->

<?php include("header/header.php") ?>

<!-- navbar ends -->


<!-- required bootstrap js -->
<!-- carousel-slider -->
<div id="demo" class="carousel slide header-image-full" data-ride="carousel" style="position:relative;">
  <ul class="carousel-indicators">
    <?php
        $result=mysqli_query($con,"SELECT * FROM banner where status=1 order by id desc limit 5");
        $active = "active";
        while ($user_data=mysqli_fetch_array($result)) {                 
    ?>
    <li data-target="#demo" data-slide-to="<?php echo $user_data['id']; ?>" class="<?php echo $active; ?>"></li>
    <?php
        $active = ""; // Remove "active" class after the first iteration
        }
    ?>
  </ul>
  <div class="carousel-inner">
    <?php
        $result=mysqli_query($con,"SELECT * FROM banner where status=1 order by id desc limit 5");
        $active = "active";
        while ($user_data=mysqli_fetch_array($result)) {                 
    ?>
    <div class="carousel-item <?php echo $active; ?>">
      <img src="Admin/img/Banner/<?php echo $user_data['image_slider']; ?>" alt="Best Study Abroad Language Academy in Thrissur">
    </div>
    <?php
        $active = ""; // Remove "active" class after the first iteration
        }
    ?>
  </div>
<?php
    $result=mysqli_query($con,"SELECT * FROM ads where status=1 and category='Home' order by id desc limit 1");
    while ($user_data=mysqli_fetch_array($result)) {                 
?>
  <img src="Admin/img/Ads/<?php echo $user_data['image']; ?>" class="ad-image" id="ad-image1" style="position: absolute; top: 100px; width: 500px; height: 500px; left: 520px;">
  <span class="fa-solid fa-xmark solidclosemark" id="close-mark1"></span>
<?php } ?>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

  <marquee style= "z-index: 2; font-weight: bold; font-size: 30px;">
    <?php
    $result=mysqli_query($con,"SELECT * FROM news where status=1 order by id desc limit 5");
    while ($user_data=mysqli_fetch_array($result)) {                 
?>
    <?php echo $user_data['news_feed']; ?>
    <?php } ?>
  </marquee>



<!-- carousel-slider ends -->

  
 <div class="header-image-full-mobile" >
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <?php
        $result=mysqli_query($con,"SELECT * FROM banner where status=1 order by id desc limit 5");
        $active = "active";
        while ($user_data=mysqli_fetch_array($result)) {                 
    ?>
      <li data-target="#demo" data-slide-to="<?php echo $user_data['id']; ?>" class="<?php echo $active; ?>"></li>
      <?php
        $active = ""; // Remove "active" class after the first iteration
        }
    ?>
    </ul>
    <div class="carousel-inner">
      <?php
        $result=mysqli_query($con,"SELECT * FROM banner where status=1 order by id desc limit 5");
        $active = "active";
        while ($user_data=mysqli_fetch_array($result)) {                 
    ?>
      <div class="carousel-item <?php echo $active; ?>">
        <img src="Admin/img/Banner/<?php echo $user_data['image_phone']; ?>" alt="Kerala No-1 Study Abroad Coaching Center | Institution">
      </div>
      <?php
        $active = ""; // Remove "active" class after the first iteration
        }
      ?>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>
<!-- homepage content -->

<div class="home-body-container">
  <div class="best-german-container container">
    <div class="text-lg-left">
      <div class="row best-german-content">
        <div class="col-md-8 d-flex flex-column justify-content-start">
          <!-- <h1>Welcome To Edupace Academy!</h1> -->
          <br>
          <h1 style="color:#101663;">Best German Language Coaching Center in Thrissur</h1>
          <br>
          <p>At our academy, we are dedicated to making the journey of learning German, Spanish, French, IELTS, 
            OET as an inspiring one. Our passionate instructors provide high-quality lessons to help you master 
            the German, Spanish, and French language with confidence. Whether you are a beginner or looking to 
            deepen your knowledge, you'll find the perfect learning environment here. Explore the richness of 
            culture and language with us!
          </p>
          <p>We are committed to providing an immersive and enriching experience for language learners of all levels. 
            Our team of experienced instructors is here to guide you on a journey of linguistic discovery, fostering a 
            supportive environment that empowers you to embrace the beauty of diverse languages.
          </p>
          <p>Join us in unlocking the doors to new cultures, connections, and possibilities through the power of language.
            Welcome to a world of words and endless possibilities!</p>
        </div>
        <div class="col-md-4 d-flex justify-content-center  best-german-image">
          <img src="./assets/index/Study Abroad Language Academy.jpg" alt="Best German Language Coaching Center in Thrissur">
        </div>
      </div>
      
    </div>
  </div>

  <!-- budhha content -->

  <div class="budhha-container container">
    <div class="budhha-head gap-top text-center">
      <h3 style="color:#101663;">Digital Boddhi</h3>
      <h5>बुद्धा शिक्षा विद्यालय</h5>
    </div>
  
    <div class="container-fluid text-lg-right mb-4 budhha-top">
      <div class="row">
        <div class="col-md-4 budhha-image">
          <img src="./assets/images/edu.jpg" alt="Best German Language Coaching Center in Thrissur">
        </div>
        <div class="col-md-8 budhha-content d-flex flex-column justify-content-start align-items-end">
          <p>The concept behind the logo of Digital Bodhi encapsulates a profound metaphorical journey a virtual tree crafted from 
            digital nodes and wires, analogous to the sacred Bodhi tree under which Lord Buddha attained enlightenment.
            In this ethereal digital realm, the fruits hanging from the branches represent pulsars and neutron stars,
            symbolizing the wisdom and knowledge that Digital Bodhi bears. Just as the Bodhi tree’s shade offered sanctuary and
            enlightenment to seekers, the hues of this hybrid digital tree aim to liberate individuals, fostering their 
            freedom to learn and transform their lives through language education.
          </p>
        </div>
      </div>
    </div>
    
    <div class="container-fluid text-lg-right mb-4 container-gap buddha-bottom">
      <div class="row ">
        <div class="col-md-8 budhha-content d-flex flex-column justify-content-center align-items-lg-start">
          <p>Digital Bodhi embodies the essence of the Bodhi tree's transformative power in a modern context, providing a virtual 
            haven where people gather under its metaphorical shade to embrace hybrid language learning. Just as the Bodhi tree 
            supported individuals on their spiritual quest, this digital rendition stands as a guiding beacon, nurturing 
            linguistic diversity and understanding. It represents a convergence of technology and enlightenment, 
            offering a space where individuals can flourish, liberated by the wisdom of languages and the transformative 
            potential of hybrid education.
          </p>
        </div>
        <div class="col-md-4 budhha-image">
          <img src="./assets/images/buddha (2).jpg" alt="Best German Language Coaching Center in Thrissur">
        </div>
      </div>
    </div>
    
  </div>
  

  <div class="mission-vision-container container">
    <div class="container-fluid ">
      <div class="row align-items-center justify-content-center text-lg-left gap-left">
        <div class="budhha-head gap-top text-center">
          <h4 style="color:#101663;">Mission-Boddhi</h4>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-lg-start mission-vision-image">
          <img src="./assets/images/Study Abroad Language Academy.png" alt="Kerala No-1 Study Abroad Coaching Center | Institution">
        </div>
        <div class="col-md-6">
          <div class="mission-vision-content text-justify">
            
            <p>At EduPace Language Academy, our mission is to seamlessly intertwine language proficiency and HR solutions, 
              empowering individuals and organizations to thrive in a diverse, interconnected world. Through cutting-edge h
              ybrid methodologies, personalized education, and tailored HR strategies, we aim to cultivate linguistic fluency, 
              foster cultural understanding, and drive professional growth, ensuring our learners and partners excel on the global stage.
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container-fluid ">
      <div class="row align-items-start justify-content-start text-lg-left py-4">
        <div class="col-md-6 d-flex flex-column align-items-start">
          <div class="mission-vision-content text-justify ">
            <div class="budhha-head gap-top text-center">
              <h4 style="color:#101663;">Vision-Boddhi</h4>
            </div>
              <p >At EduPace Language Academy, we envision a dynamic learning environment where language mastery and professional
                 growth intersect seamlessly. We are the trailblazers in revolutionizing hybrid language training and HR 
                 solutions, fostering a global community of culturally adept and linguistically agile individuals.
              </p>
              <p>
                  Our commitment lies in empowering learners and organizations alike through:  
              </p>
              <p><strong>Hybrid Language Proficiency:</strong> We embrace innovative pedagogies to deliver comprehensive language education that 
                transcends boundaries. Blending technology with immersive experiences, we empower learners to communicate 
                fluently and confidently in a multilingual world.
              </p>
              <p>Adaptive HR Solutions: We redefine HR solutions, integrating language proficiency as a cornerstone for 
                organizational success. Our tailored programs foster diverse workplaces where language skills serve as bridges, 
                enriching collaborations and fostering inclusivity. <br><br>

                Collaborative Learning Ecosystem: We cultivate an ecosystem where collaboration thrives. Through partnerships 
                with industry leaders, educators, and technology innovators, we create synergies that elevate both individual 
                language competence and organizational effectiveness. <br><br>
                
                Empowering Global Citizens: Beyond language mastery, we aim to nurture global citizens. Our programs instill 
                cultural empathy, enabling individuals to navigate diverse landscapes with respect, understanding, and 
                a spirit of inclusion.</p>
          </div>
      </div>
      
    
        <div class="col-md-6 d-flex d-flex flex-column align-items-start mission-vision-image">
          <div class="mission-vision-content text-justify ">
            <img src="./assets/images/Study Abroad Language Academy No-1.png" alt="Best German Language Coaching Center In Thrissur">
            <p><strong>Innovation and Agility:</strong> We remain at the forefront of innovation, constantly evolving our methodologies and 
              solutions to meet the ever-changing needs of the modern world. Our agility allows us to anticipate trends and 
              pioneer new approaches in language education and HR solutions.
            </p>
            <p><strong>Measurable Impact: </strong>We are committed to measurable outcomes. Through data-driven insights and continual assessment,
               we ensure that every learner and organization experiences tangible growth and development. <br><br>

              At EduPace, our vision transcends conventional boundaries, creating a future where language fluency and HR 
              excellence converge to shape a world of endless possibilities. <br><br>
              
              This vision captures EduPace Language Academy as a pioneering force in hybrid language education and HR 
              solutions, emphasizing the fusion of language proficiency and professional development for a globally connected 
              world.</p>
          </div>
        </div>
    </div>
    
      
      
    </div>
  </div>


  <div class="tabcontents container">
      <h2>Matching Talent With Opportunity For a Brighter Tomorrow</h2>
      

      <!-- Add tab 2, tab 3, and tab 4 content using the same structure -->
      <div class="tabcontent" id="tab_div2">
          <!-- Tab 2 French -->
          <div class="row education-card-container">
              <div class="col-md-4 mb-4">
                  <div class="card edu-card" onclick="location.href='ielts.php';">
                      <img src="assets/index/services/Thrissur No-1 IELTS Coaching Center.jpg" class="card-img-top" alt="Best Study Abroad in Thrissur" />
                  </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="card edu-card" onclick="location.href='oet.php';">
                      <img src="assets/index/services/Thrissur No-1 OET Coaching Center.jpg" class="card-img-top" alt="Best Study Abroad in Thrissur" />
                  </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="card edu-card" onclick="location.href='germany.php';">
                      <img src="assets/index/services/Thrissur No-1 GERMAN Coaching Center.jpg" class="card-img-top" alt="German Language Coaching" />
                  </div>
              </div>
              <!-- Add more cards here using the same structure -->
          </div>
      </div>
      <div class="tabcontent" id="tab_div2">
          <!-- Tab 2 French -->
          <div class="row education-card-container">
              <div class="col-md-4 mb-4">
                  <div class="card edu-card" onclick="location.href='french.php';">
                      <img src="assets/index/services/Thrissur No-1 FRENCH Coaching Center.jpg" class="card-img-top" alt="Best Study Abroad in Thrissur" />
                  </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="card edu-card" onclick="location.href='spanish.php';">
                      <img src="assets/index/services/Thrissur No-1 SPANISHCoaching Center.jpg" class="card-img-top" alt="Best Study Abroad in Thrissur" />
                  </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="card edu-card" onclick="location.href='#';">
                      <img src="assets/index/services/Thrissur No-1 PTE Coaching Center.jpg" class="card-img-top" alt="German Language Coaching" />
                  </div>
              </div>
              <!-- Add more cards here using the same structure -->
          </div>
      </div>
  </div>

  <!-- start your journey -->

  <div class="start-your-journey-container container">

      
    <div class="container-fluid mt-3  row-hover-hide">
      <h4 style="font-size: 30px; font-weight:200px; color:#101663; text-align: center;">Start Your Journey With Us!</h4>
      <br>
      <!-- <p style="text-align:center;  font-size: 28px;">Opportunities in Spain For Doctors, Engineers and Students. </p> -->
      <br>
      <div class="row">
        <?php
          $result=mysqli_query($con,"SELECT * FROM event order by id desc limit 4");
          while ($user_data=mysqli_fetch_array($result)) {                 
        ?>
        <div class="col-3 p-3 text-white">
          <img src="Admin/img/Event/<?php echo $user_data['image']; ?>"  class="row-hover" alt="Best German Language Coaching Center in Thrissur">
          <br><br>
          <button class="btn btn-primary"style="border: 3px solid white  ; margin-left: 35%; background-color: #101663; cursor: pointer; border-radius: 20px; ">Explore More</button>
        </div>
      <?php } ?>
      </div>
    </div>

  </div>   

  <!-- start your journey mobile -->

  <div class="start-your-journey-mobile">
    <div class="container-fluid">
      <h4 style="font-size: 30px; font-weight: 200px; color: #101663;" class="text-center mt-3">Start Journey With Us!</h4>

      <!-- Carousel -->
      <div id="mobileCardCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <!-- Card 1 -->
          <?php
              $result=mysqli_query($con,"SELECT * FROM event order by id desc limit 4");
              while ($user_data=mysqli_fetch_array($result)) {                 
          ?>
          <div class="carousel-item active">
            <div class="card">
              <img src="Admin/img/Event/<?php echo $user_data['image'] ?>" class="card-img-top" alt="Kerala No-1 Study Abroad Coaching Center in Thrissur">
              <div class="card-body">
                <button class="btn btn-primary">Explore</button>
              </div>
            </div>
          </div>
        <?php } ?>
          <!-- Card 2 -->
          

        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev d-none" type="button" data-bs-target="#mobileCardCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next d-none" type="button" data-bs-target="#mobileCardCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <!-- reels video -->


  <div class="what-does-container container">
    <br>
    <h4 style="font-size: 30px; font-weight: 200px; color: #101663; padding: 20px;" class="text-center">
      Speak Beyond Borders
  </h4>

    <div class="row justify-content-center " style="display: flex;">
      <?php
        $result=mysqli_query($con,"SELECT * FROM video_reel where status=1 order by id desc limit 3");
        while ($user_data=mysqli_fetch_array($result)) {                 
      ?>
      <div class="col-md-4 ">
        <div class="what-does-card reel">
          <!-- <video class="videoFrame" width="80%" height="100%" controls style="border-radius: 40px;">
            <source src="https://www.youtube.com/watch?v=NCYBE9xeJKU" type="video/mp4">
          </video> -->
          <iframe class="videoFrame" width="100%" height="1000px" src="https://youtube.com/embed/<?php echo $user_data['youtube_link']; ?>" frameborder="0" allowfullscreen  playsinline></iframe>
        </div>
      </div>

    <?php } ?>

      
    </div>
    <div class="button-container py-4">
      <button class="btn btn-primary border-0" style="background-color: #101663;">Explore Videos</button>
    </div>

  </div>


  <script>
    // Wait for the video to be loaded
    document.querySelectorAll('.videoFrame').forEach(function (videoElement) {
      videoElement.addEventListener('loadedmetadata', function () {
        // Pause the video
        videoElement.pause();
      });
    });
  </script>

  <div class="choose-us-container container">
    <h4 style="font-size: 30px; font-weight:200px; color:#101663;">WHY CHOOSE US ?</h4>
    

    <div class="container-fluid"  id="void">
    
        <div style="width: 45%; float: left; text-align: justify; margin-left: 30px;">
          <p style="text-align:center; font-size: 30px;  font-family: PT-serif; "><b>Your Journey to Fluency Starts Here!</b></p>
          <p style="text-align:justify; font-family: PT-serif; font-size:21px;">
          Edupace Language Academy is more than just a place to learn; it's a community of language enthusiasts.
          Our forums, collaborative projects, and events foster a sense of belonging and provide opportunities for 
          students to practice their language skills in real-life scenarios. Whether you're a beginner embarking on 
          your first language learning adventure or an advanced learner seeking mastery, Edupace Language Academy  
          welcomes you.</p>
          <ul>
            <li style="font-family: PT-serif; font-size: 21px;">Hybrid Language Learning</li>
            <li style="font-family: PT-serif; font-size: 21px;">Advanced Digital Language Labs</li>
            <li style="font-family: PT-serif; font-size: 21px;">Ai assistance 24/7</li>
            <li style="font-family: PT-serif; font-size: 21px;">Ai Guru as Companion</li>
            <li style="font-family: PT-serif; font-size: 21px;">Advanced Library Sharing System</li>
            <li style="font-family: PT-serif; font-size: 21px;">Comprehensive Language Courses</li>
            <li style="font-family: PT-serif; font-size: 21px;">Interactive Learning Tools</li>
            <li style="font-family: PT-serif; font-size: 21px;">Intensive Language Training</li>
            <li style="font-family: PT-serif; font-size: 21px;">Experienced Language Instructors</li>
          </ul>
          <!-- <img src="assets/index/Study-Abroad-Language-Academy.jpg" class="mx-auto d-block" alt="Best German Language Coaching Center in Thrissur"> -->
        </div>
    </div>

    <!-- animation -->

    <div class="void1" id="void1">
      <div class="crop1">
      <ul id="circle-card-list" style="--count: 6; " class="circle-card-list-ul">
        <li class="circle-li">
          <div class="circle-card-li">
            <a href="" class="circle-a">
              <span class="model-name">Personalized Learning Paths</span>
            </a>
          </div>
        </li>
        <li class="circle-li">
          <div class="circle-card-li">
            <a href="" class="circle-a">
              <span class="model-name">Flexible Learning Options</span>
            </a>
          </div>
        </li>
        <li class="circle-li">
          <div class="circle-card-li">
            <a href="" class="circle-a">
              <span class="model-name"> Periodic Assessments</span>
            </a>
          </div>
        </li>
        <li class="circle-li">
          <div class="circle-card-li">
            <a href="" class="circle-a">
              <span class="model-name">200+ Successful Recruitments</span>
            </a>
          </div>
        </li>
        <li class="circle-li">
          <div class="circle-card-li">
            <a href="" class="circle-a">
              <span class="model-name">Placement Assistance To Germany, Spain and Many Others</span>
            </a>
          </div>
        </li>
        
      </ul>
      <div class="last-circle1"></div>
      <div class="second-circle1"></div>
      </div>
      <div class="mask"></div>
      <div class="center-circle1"></div>
    <div>


    </div>

    </div>
  </div>


  <div class="choose-us-mob-container">
    <h4 style="font-size: 30px; font-weight:200px; color:#101663;">REASON TO SELECTORS ? </h4>
    <div class="choose-us-mob-cards">

      <div class="choose-us-mob-card"  style="background:url('./assets/images/scroll1.png');background-size: cover; ">
        <h4 style="font-size: 30px; font-weight:200px; color:white;">Personalized Learning Paths</h4>
      </div>
      <div class="choose-us-mob-card"  style="background:url('./assets/images/scroll2.png');background-size: cover;">
        <h4 style="font-size: 30px; font-weight:200px; color:white;">Flexible Learning Options</h4>
      </div>
      <div class="choose-us-mob-card"  style="background:url('./assets/images/scroll3.png');background-size: cover;">
        <h4 style="font-size: 30px; font-weight:200px; color:white;">Periodic Assessments</h4>
      </div>
      <div class="choose-us-mob-card"  style="background:url('./assets/images/scroll4.png');background-size: cover;">
        <h4 style="font-size: 30px; font-weight:200px; color: white;">200+ Successful 
              Recruitments</h4>
      </div>
      <div class="choose-us-mob-card"  style="background:url('./assets/images/scroll4.png');background-size: cover;">
        <h4 style="font-size: 30px; font-weight:200px; color: white;">Placement Assistance To Germany, Spain and Many Others</h4>
      </div>
    </div>
  </div>
    
  <!-- testimonials -->

  <div class="testimonal-container container" id="Best_German_Coaching_center">
    <div class="testimonal-head">
        <!-- <button>Testimonials</button> -->
        <h4 style="font-size: 30px; font-weight:200px; color:#101663;">What do you think!</h4>
    </div>

    <div class="testimonal ">
    
        <div class="row">
          <?php
            $result=mysqli_query($con,"SELECT * FROM testimonials order by id desc limit 6");
            while ($user_data=mysqli_fetch_array($result)) {                 
          ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                      <div class="card-body-left">
                          <!-- <img src="https://cdn-icons-png.flaticon.com/128/4140/4140047.png" alt="German Language Coaching"> -->
                      </div>
                      <div class="card-body-right">
                          <h4 class="card-title"><?php echo $user_data['name']; ?></h4>
                          <p><?php echo $user_data['place']; ?></p>

                          <!-- <img src="https://cdn-icons-png.flaticon.com/128/992/992001.png" alt=""> -->
                      </div>
                  
                      <p class="card-text" style="text-align:justify; font-family: PT-serif; font-size:17px;"><a href="https://www.edupace.com/#Best_German_Coaching_center" style="text-decoration: none; color:black;" target="_blank" rel="nofollow"><?php echo $user_data['description']; ?></a></p>
                  </div>
                </div>
            </div>
          <?php } ?>
            <div style="width: 100%; display: flex; justify-content: center;">
              <button class="btn" style="border: 5px solid #101663; border-radius: 50px;"><a style="text-decoration:none; color:black;" href="German_Language_Study_center_Testimonials">Read More !</a></button>
            </div>
            
        </div>
    </div>
  </div>   

<br><br>

</div>
<a
        href="https://wa.me/9072545003"
        class="whatsapp_float"
        target="_blank"
        rel="noopener noreferrer"
      >
        <i class="fa-brands fa-whatsapp whatsapp-icon"></i>
      </a>
<?php include("header/footer_index.php") ?>
<!-- Bootstrap JS (Optional, but needed for certain features like the toggle button) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
       document.addEventListener("DOMContentLoaded", function() {
       const closeMark = document.getElementById("close-mark1");
    const adImage = document.getElementById("ad-image1");

    closeMark.addEventListener("click", () => {
        closeMark.classList.add("active1");
        adImage.classList.add("active1");
        console.log("hello");
    });
   });
  

    </script>
</body>
</html>