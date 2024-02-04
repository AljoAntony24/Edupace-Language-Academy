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
    <title>About us</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
      crossorigin="anonymous"/>
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <!-- Include the Font Awesome CSS in the head of your HTML document -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iKu1rHN/8iS9I9W580HWUmGfeN1AiiHwtx9UOFAYHujnRL12P2U2bdJ+J" crossorigin="anonymous">

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
  </head>
  <body>
    <?php include("../header/index.php") ?>
    <div class="about-container header-image-full">
      <div
        class="hero-container-aboutus"
        style="
          background-image: url('../assets/slider/about.jpg');
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
            <img src="../assets/slider/About _Edupace Language Academy.jpg" class="img-fluid" alt="...">
        </div>
    </section>
    <div class="about-body-container container">
        <!-- Content for the body We Support How You Support! goes here -->
        <div class="about-support-body">
            <div class="row justify-content-center align-items-center g-2 my-5 text-center">
                <div class="col-md-4 mb-4">
                    <h4>Education</h4>
                    <p>
                        French, German, Spanish, and English are the languages that Edu Pace Language Academy specializes in teaching. The faculty members are courteous, approachable, and have extensive experience in their respective fields. For students to fully acquire the language, our courses adhere to the highest standards. They also understand the diverse educational needs of our students. They employ a method that is both focused and enjoyable to teach our students how to learn a new language efficiently.
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4>Study Abroad</h4>
                    <p>
                        Edupace Language Academy specializes in programs for a range of disciplines, such as business, engineering, hospitality, allied health sciences, and medicine, among others. In these fields, we offer postgraduate and doctorate studies in addition to MBBS and Doctorates. Students nowadays require a global perspective to succeed in this competitive atmosphere. Students who are eager to broaden their horizons can find these professional opportunities from Edupace Study Abroad, a leader in the field.
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4>Careers</h4>
                    <p>
                        Language Training We are uniquely positioned to work as your partner for managing the entire portfolio of selecting talents for your company. With a team of experienced professionals capable of understanding your company’s talent search needs, you remain dedicated to the growth of your business without letting the challenges of establishing your team get in the way. We assist our clients on placement services whether local or overseas for qualified talents in various industries.
                    </p>
                </div>
            </div>
        </div>
        <!-- Redefining Linguistic  -->
        <div class="about-redefining-container">
        
           <div class="container-fluid">
               <div class="row">
                   <div class="col-md-6 d-flex flex-column justify-content-start">
                       <div class="about-redefining-content-left">
                           <h6>Edu Pace Language Academy:</h6>
                           <h4>Redefining Linguistic Proficiency and HR Excellence </h4>
                       </div>
                       <div class="about-redefining-image my-5 " id="about-redefining-image">
                            <img src="../assets/images/pic 2.png" alt="">
                        </div>
                   </div>
                   <div class="col-md-6">
                       <div class="about-redefining-content-right">
                            <p><strong>Established</strong> in 2015, Edu Pace Language Academy stands tall as a revered service provider excelling 
                                in language training and human resources solutions. Our robust footprint spans across the Middle
                                 East, Europe, India, and Australia, fostering trust and expertise in fulfilling diverse 
                                 linguistic and HR needs. We pride ourselves on specializing in translating your HR strategies 
                                 into flawless execution, tailored precisely to your envisioned outcomes. <br><br>

                                Venturing boldly into advanced language training support in 2017, we embarked on a transformative 
                                journey catering to talent development across seven prominent languages: English, German,
                                 Spanish, French, Hindi, Malayalam, and Japanese. Seamlessly integrating offline and online 
                                 sessions, we empower our clients to meet stringent international employment requisites set 
                                 by both clients and governmental bodies. <br><br>
                                
                                At the core of our inception lies a collective of seasoned entrepreneurs, driven by an 
                                unwavering commitment to delivering unparalleled quality services. This steadfast dedication 
                                has yielded an exceptional client satisfaction rate of an impeccable hundred percent, a testament
                                 to our unwavering pursuit of excellence. <br><br>
                                
                                Continuously striving for brilliance, Edu Pace Language Academy remains dedicated to aiding all 
                                our customers in fostering their teams' growth in the most effective and efficient manner 
                                conceivable. Our relentless pursuit of excellence extends beyond language proficiency to 
                                encompass comprehensive HR solutions. <br><br>
                                
                                For further insights into Edu Pace Language Academy and our holistic language training and HR 
                                solutions, visit our website. Join us on a transformative journey towards linguistic mastery 
                                and HR prowess, tailored precisely to elevate your organizational success.
                            </p>
                        </div>             
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Edu Pace -->
        <div class="why-edu-container my-5 py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="why-edu-content-left">
                            <p>Edupace Language Academy is more than just a place to learn; it's a community of language enthusiasts.
                                Our forums, collaborative projects, and events foster a sense of belonging and provide opportunities
                                for students to practice their language skills in real-life scenarios. Whether you're a beginner
                                embarking on your first language learning adventure or an advanced learner seeking mastery,
                                Edupace Language Academy welcomes you.
                            </p>
                            <ul>
                                <li>Comprehensive Language Courses</li>
                                <li>Interactive Learning Tools</li>
                                <li>Intensive Language Training</li>
                                <li>Experienced Language Instructors</li>
                                <li>Personalized Learning Paths</li>
                                <li>Flexible Learning Options</li>
                                <li>Periodic Assessments</li>
                                <li>Placement Assistance</li>
                            </ul>
        
                            <div class="why-edu-button">
                                <button type="button" class="btn btn-primary">
                                    Show More
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="why-edu-content-right my-5 text-center text-md-right">
                            <h6>Why Edu Pace</h6>
                            <h4>Why Study With Us</h4>
                            <img src="../assets/images/about-girl.png" alt="">
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
                    <div class="col-md-6  justify-content-center align-items-left text-center py-5">
                        <div class="faq-content-left my-5">
                            <img src="../assets/images/about-avatar-group.png" alt="" id="faq-image">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
