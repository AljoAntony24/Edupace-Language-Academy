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
  <title>Ausbildung Program</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/infographics.css">
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("../header/index.php") ?>
    <!-- carousel-slider -->
    <div id="demo" class="carousel slide header-image-full" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../assets/slider/ausbildung in Germany_ Edupace Language Academy.jpg" alt="Ausbildung-Germany">
            
          </div>
          <div class="carousel-item">
            <img src="../assets/slider/ausbildung in Germany_ Edupace Language Academy 1.jpg" alt="Ausbildung-Spain">
            
          </div>
          
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <section>
        <div class="header-image-full-mobile">
            <img src="../assets/slider/Ausbildung-Germany,-Thrissur_Edupace-Language-Academy.jpg" class="img-fluid" alt="Ausbildung">
        </div>
    </section>
<div class="ausbildung-container-body container">
            <div class="ausbildung-head  text-center mt-5 mb-5 ">
                <h1>Opportunities for Ausbildung Program in Germany</h1>
                
            </div>
            <div class="ausbildung-body container">
                
                <!-- Content here -->
                <div class="row align-items-center justify-content-center py-3 ausbildung-row mb-5 mt-5 ">
                    <div class="col-md-8 text-justify">
                        <div class="ausbildung-content">
                        <h4>Germany Calling</h4>  
                        <p>Germany is renowned for its dual education system, which blends real-world work experience with 
                            vocational instruction. This method has also been included into nursing school, with a focus 
                            on theoretical understanding as well as practical abilities. In Germany, nurses have the 
                            option to pursue additional specialization and on going education in a range of nursing 
                            practice domains following the completion of their basic nursing education. This enables 
                            them to progress in their professions and get more knowledge in particular healthcare domains.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ausbildung-content">
                            <div class="flip-card" id="card-1-flip">
                                <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <?php
                                        $result=mysqli_query($con,"SELECT * FROM study_abroad where category='Ausbildung In Germany' order by id desc limit 1");
                                        while ($user_data=mysqli_fetch_array($result)) {                 
                                    ?>
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $user_data['youtube_link']; ?>" frameborder="0" allowfullscreen></iframe>
                                <?php } ?>
                                    <button type="button" class="btn btn flip-btn-1" id="flip-btn-1">Click Here</button>
                                    
                                </div>
                                <div class="flip-card-back">
                                    <ul>
                                        <?php
                                            $result=mysqli_query($con,"SELECT * FROM study_abroad where category='Vocational Training Program' order by id desc limit 3");
                                            while ($user_data=mysqli_fetch_array($result)) {                 
                                        ?>
                                        <li><?php echo $user_data['description']; ?></li>
                                    <?php } ?>
                                    </ul>
                                    <button type="button" class="btn btn-primary flip-btn-1" id="flip-btn-2">Button</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row align-items-center justify-content-center py-3 ausbildung-row mb-5 mt-5 ">
                    
                    <div class="col-md-6">
                        <div class="ausbildung-content">
                            <img src="../assets/slider/Study Abroad.jpg" alt="Ausbildung-Germany" class="img-fluid" id="aus-img">
                        </div>
                    </div>
                    
                    <div class="col-md-6 py-3">
                        <div class="ausbildung-content">
                        <h4>Citizenship Progression</h4>  
                        <ul>
                            <li>Arriving Germany on a Training Visa.</li>
                            <li>After Five Years, Aquire Permenent Residency.</li>
                            <li>Able to Accept any employment opportunities</li>
                            <li>After ATS you can become a German Citizen and enjoy the best social security in Europe</li>
                            <li>You will be Eligible for Health Insurance oldage pension etc...</li>
                            

                        </ul>
                        </div>
                    </div>
                
                </div>
                
                
                
                
            </div>

            <!-- Germany Offers -->
            <div class="aus-germany-offer container">
                <h4 >What Germany Offers You</h4>
                <ul>
                    <li>Spend three years living in one of the world's most developed and prosperous economies, 
                        Germany you'll be surrounded by orderly people and live in a clean, healthy atmosphere.</li>
                    <li>Receive instruction from one of Germany's top-ranked and most reputable institutions, 
                        including hands-on training in renowned hospitals</li>
                    <li>To take part in specialized training that will prepare you both academically and practically 
                        so that you can work as a specialized nurse in Germany and the European Union's main cities.</li>
                    <li>Assured work visa and employment in Germany, as well as the ability to seek for permanent 
                        residence (after the course, once you have worked for two years)</li>
                    
                </ul>
            </div>

            <!-- How To Get Started -->
            <div class="how-to-start container">
                <h3>How To Get Started</h3>
                <div class="container-fluid">
                <!-- Content here -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="how-to-start-left">
                                <h4>Qualifications Required</h4>
                                
                                    <ul>
                                        <li>Higher Secondary School Certificate in any Stream</li>
                                        <li>Age limit 18 to 28 Years</li>
                                        <li>German Language Proficiency with Goethe, OSD, ECL</li>
                                        <li>Telc B1 Level for General program</li>
                                        <li>Police Clearance Certificate</li>
                                    </ul>    
                            </div>
                            <div class="how-to-start-left">
                                <h4>Program Coverage</h4>
                                
                                    <ul>
                                        <li>German Language Training</li>
                                        <li>Documentation Assitance</li>
                                        <li>Visa Processing Assistance</li>
                                        <li>Translation and Attestation</li>
                                        <li>Accomodation Arranged in Germany</li>
                                    </ul>    
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="how-to-start-right">
                                <ol class="olcards">
                                    <li style="--cardColor:#fc374e">
                                        <div class="content">
                                            
                                            <div class="title">Application Process</div>
                                            <div class="text">Submit Detailed CV</div>
                                        </div>
                                    </li>
                                    <li style="--cardColor:#36aeb3">
                                        <div class="content">
                                            
                                            <!-- <div class="title">Lorem Ipsum</div> -->
                                            <div class="text">Pre Interview with German Consultant</div>
                                        </div>
                                    </li>
                                    <li style="--cardColor:#162d59">
                                        <div class="content">
                                            
                                            <!-- <div class="title">Lorem Ipsum</div> -->
                                            <div class="text">Start Language Learning</div>
                                        </div>
                                    </li>
                                    <li style="--cardColor:#f15f0e">
                                        <div class="content">
                                            
                                            <!-- <div class="title">Lorem Ipsum</div> -->
                                            <div class="text">Submit all Documents</div>
                                        </div>
                                    </li>
                                    <li style="--cardColor:#6666ff">
                                        <div class="content">
                                            
                                            <!-- <div class="title">Lorem Ipsum</div> -->
                                            <div class="text">After Completing B2 Level, the Candidate can obtain Admission.</div>
                                        </div>
                                    </li>
                                    <li style="--cardColor:#ff3399">
                                        <div class="content">
                                            
                                            <!-- <div class="title">Lorem Ipsum</div> -->
                                            <div class="text">Apply Training Apprenticeship Visa</div>
                                        </div>
                                    </li>
                                    <li style="--cardColor:#0099e6">
                                        <div class="content">
                                            
                                            <!-- <div class="title">Lorem Ipsum</div> -->
                                            <div class="text">FLY to Germany </div>
                                        </div>
                                    </li>
                                    
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
           


            <!-- ausbildung program -->

            <div class="ausbildung-program container mt-5 mb-5 py-5">
                <h3>Ausbildung Programs in Germany</h3>
                <!-- <div class="container-fluid"> -->
                <!-- Content here -->
                    <div class="row align-items-start justify-content-start py-5 ">
                        <div class="col-md-6 align-items-start">
                            <div class="ausbildung-program-left">
                                
                                <ol class="alternate">
                                    <li style="--accent-color: #36b9ea">IT Specialist: Training in programming, network administration, and software development.</li>
                                    <li style="--accent-color: #3ecbb1">Automation Technology: Focus on manufacturing processes, robotics, and control systems.</li>
                                    <li style="--accent-color: #fcc003">Materials Testing Specialists: Involved in evaluating material properties and quality control.</li>
                                    <li style="--accent-color: #fb337b">Tool & Die Specialist: Specializes in the development and creation of equipment and tools for the metalworking and manufacturing industries.</li>
                                    <li style="--accent-color: #9c54e5">Sewage Technology Specialist: Training in managing wastewater and operating sewage treatment facilities.</li>
                                    <li style="--accent-color: #0080ff">Food Technology Technician: Focus on food preparation, quality assurance, and hygiene in the food industry.</li>
                                    
                                  </ol>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ausbildung-program-right">
                                
                                <ol class="alternate">
                                    <li style="--accent-color: #0080ff">Technical Product Designers: Skills in CAD, technical drawing, and product development for the manufacturing and engineering sectors.</li>
                                    <li style="--accent-color: #9c54e5">Construction Industry Expert: Involves building management, civil engineering, and architectural design in the construction industry.</li>
                                    <li style="--accent-color: #fb337b">Architect: Training in architectural drawing, building regulations, and design principles.</li>
                                    <li style="--accent-color: #fcc003">Cook: Culinary arts training, including various cooking methods, menu planning, and food presentation.</li>
                                    <li style="--accent-color: #3ecbb1">Heavy Driver: Training for operating and maintaining large vehicles in logistics and transportation.</li>
                                    <li style="--accent-color: #36b9ea">Office Secretary: Administrative tasks and office management across various sectors.</li>
                                    
                                  </ol>
                            </div>
                        </div>

                    </div>

                   
                    
                </div>
                    
            </div>
    
            <!-- faq -->

            

       <div class="faq-container">
        <div class="container-fluid">
        <!-- Content here -->
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-left text-center py-5">
                    <div class="faq-content-left my-5">
                        <img src="../assets/images/about-avatar-group.png" alt="Ausbildung-Spain">
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
    
    
    
    
</div>





<?php include("../header/footer.php") ?>




<!-- flipcard -->
<script>
    // script.js
    document.getElementById('flip-btn-1').addEventListener('click', function() {
  console.log("Button clicked!");  // Check if the button click is being captured
  const card = document.getElementById('card-1-flip');
  console.log(card);  // Check if the card element is being selected
  card.classList.add("active");
  });
    document.getElementById('flip-btn-2').addEventListener('click', function() {
  console.log("Button clicked!");  // Check if the button click is being captured
  const card = document.getElementById('card-1-flip');
  console.log(card);  // Check if the card element is being selected
  card.classList.remove("active");
  });

    document.getElementById('flip-btn-3').addEventListener('click', function() {
  console.log("Button clicked!");  // Check if the button click is being captured
  const card = document.getElementById('card-2-flip');
  console.log(card);  // Check if the card element is being selected
  card.classList.add("active");
  });
    document.getElementById('flip-btn-4').addEventListener('click', function() {
  console.log("Button clicked!");  // Check if the button click is being captured
  const card = document.getElementById('card--flip');
  console.log(card);  // Check if the card element is being selected
  card.classList.remove("active");
  });

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>