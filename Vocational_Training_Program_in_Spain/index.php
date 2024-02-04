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
  <title>Vocation Training Program In Spain</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/infographics.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
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
            <img src="../assets/slider/vocational-training-program-in-spain_edupace-Academy-Thrissur.jpg" alt="Vocational Training Program">
            
          </div>
          <div class="carousel-item">
            <img src="../assets/slider/vocational-training-program-in-spain_edupace-Academy-Thrissur-1.jpg" alt="Vocational Training Program">
            
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
        <img src="../assets/slider/IELTS Mobile.jpg" class="img-fluid" alt="Best Study Abrod Institute Coaching Center In KEra">
    </div>
</section>
<div class="ausbildung-container-body container">
            <div class="ausbildung-head  text-center mt-5 mb-5 ">
                <h1>Vocation Training Program In Spain</h1>
                
            </div>
            <div class="ausbildung-body container">
                
                <!-- Content here -->
                <div class="row align-items-center justify-content-center py-3 ausbildung-row mb-5 mt-5 ">
                    <div class="col-md-8 text-justify">
                        <div class="ausbildung-content">
                        <h4>Opportunities For Professionals</h4>  
                        <p>Spain has a diverse economy, with key sectors including tourism, agriculture, manufacturing, 
                            technology, and services. Professionals in fields such as finance, information technology, 
                            engineering, tourism, and healthcare can find opportunities.Spain has a growing startup ecosystem, 
                            particularly in cities like Barcelona and Madrid. Entrepreneurs and professionals interested 
                            in startups may find opportunities in various industries, including fintech, biotech, 
                            and e-commerce.Professionals in law, finance, and accounting can find opportunities in 
                            Spain's business and financial sectors. Knowledge of Spanish business regulations and 
                            practices is often beneficial.It's important for professionals considering opportunities 
                            in Spain to research specific industries, understand the local job market, and consider 
                            factors such as language requirements and qualifications recognition. Networking and building 
                            connections within the professional community can also be valuable for job seekers.
                        </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ausbildung-content">
                            <div class="flip-card" id="card-1-flip">
                                <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <?php
                                        $result=mysqli_query($con,"SELECT * FROM study_abroad where category='Vocational Training Program' order by id desc limit 1");
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
                                        <li><?php echo $user_data['youtube_link']; ?></li>
                                        <?Php } ?>
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
                            <img src="../assets/index/Best Study Abroad in Spain.jpeg" alt="Vocational Training Program" class="img-fluid" id="aus-img">
                        </div>
                    </div>
                    
                    <div class="col-md-6 py-3">
                        <div class="ausbildung-content">
                        <h4>Facts About Spain</h4>  
                        <ul>
                            <li>Spain is located in southwestern Europe on the Iberian Peninsula, and it shares borders with Portugal to the
                                west and France to the northeast.</li>
                            <li>The capital city of Spain is Madrid.</li>
                            <li>The official language is Spanish (Castilian).</li>
                            <li>Spain has a population of over 47 million people.</li>
                            <li>Spain has diverse landscapes, including mountains, plains, and a long coastline.</li>
                            <li>Spain is home to numerous UNESCO World Heritage Sites, including the historic centers of cities like Toledo,
                                Córdoba, and Salamanca.</li>
                        </ul>
                        </div>
                    </div>
                
                </div>
                
                
                
                
            </div>

            <!-- Programs -->
            <div class="aus-germany-offer container">
                <h4 >Programs</h4>
                <ul>
                    <li>Auxiliary Nursing Care Technician: 1400 Hrs Duration, 960 Classroom Training.</li>
                    <li>Pharmacy and Parapharmacy Technician: Two years Duration, 1630 Classroom Training.</li>
                    <li>Senior Technician in Multiplatform Application Development: 2000 Hrs, 1630 Classroom Training.</li>
                    <li>Higher Technician in Computer Network Systems Management: 2 Years Duration, 1630 Classroom Training.</li>
                </ul>
            </div>

            <!-- How To Get Started -->
            <div class="how-to-start container" id="how-to-start-voc">
                <h3>How To Get Started</h3>
                <div class="container-fluid">
                <!-- Content here -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="how-to-start-left">
                                <h4>Qualifications Required</h4>
                                
                                    <ul>
                                        <li>Plus Two Required</li>
                                        <li>A1, A2, B1, B2 Proficiency is required in Spanish Language</li>
                                        <li>Age limit is under 35</li>
                                        <li>Application from overseas universities are also given preferences for this program</li>
                                        
                                    </ul>    
                            </div>
                            <div class="how-to-start-left">
                                <h4>Program Coverage</h4>
                                
                                    <ul>
                                        <li>B1, B2 Spanish Language</li>
                                        <li>Visa Process</li>
                                        <li>Document Attestation</li>
                                        <li>Translation and Attestation</li>
                                        <li>Immigration Clearance</li>
                                        <li>Local Registration</li>
                                        <li>Health Insurance</li>
                                        <li>Bank Account Opening Assitance</li>
                                    </ul>    
                            </div>
                            
                        </div>
                        <!-- infographics -->
                        <div class="col-md-6">
                            <div class="how-to-start-right">
                                <ol class="olcards">
                                    <li style="--cardColor:#fc374e">
                                        <div class="content">
                                            
                                            <div class="title">Application Process</div>
                                            <div class="text">Apply throungh Edupace Language Academy</div>
                                        </div>
                                    </li>
                                    <li style="--cardColor:#36aeb3">
                                        <div class="content">
                                            
                                            <!-- <div class="title">Lorem Ipsum</div> -->
                                            <div class="text">Take Part in the University screening process.</div>
                                        </div>
                                    </li>
                                    <li style="--cardColor:#162d59">
                                        <div class="content">
                                            
                                            <!-- <div class="title">Lorem Ipsum</div> -->
                                            <div class="text">After the completion the screening procedure, the candidate should 
                                                study Spanish Language.</div>
                                        </div>
                                    </li>
                                    <li style="--cardColor:#f15f0e">
                                        <div class="content">
                                            
                                            <!-- <div class="title">Lorem Ipsum</div> -->
                                            <div class="text">The Candidate have to submit the origin necessary documents.</div>
                                        </div>
                                    </li>
                                    <li style="--cardColor:#6666ff">
                                        <div class="content">
                                            
                                            <!-- <div class="title">Lorem Ipsum</div> -->
                                            <div class="text">After Completing A2 Level, the candidate can travel to Spain.</div>
                                        </div>
                                    </li>
                                    <li style="--cardColor:#ff3399">
                                        <div class="content">
                                            
                                            <!-- <div class="title">Lorem Ipsum</div> -->
                                            <div class="text">After Completing the B2 Level, the candidate can begin their Internship.</div>
                                        </div>
                                    </li>
                                    
                                    
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
                        <img src="../assets/images/about-avatar-group.png" alt="Vocational Training Program">
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