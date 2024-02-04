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
  <title>Edupace Language Academy</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    <?php include("../header/index.php") ?>
<div class="about-container">
    <div
      class="hero-container-aboutus"
      style="
        background-image: url('../assets/slider/German Languge For.jpg');
        background-size: cover;
        background-position: center;
        height: 600px;
      "
    >
      <!-- Content for the hero section goes here -->
    </div>

</div>

<div class="medical-pro-container-body container">
    <div class="medical-pro-content">
        <div class="container-fluid">
            <!-- Content here -->
            <div class="row align-items-start justify-content-center py-5">
                <div class="col-md-8 ">
                    <div class="medical-pro-content-left py-5 " id="dha">
                        <h3>MOH - MINISTRY OF HEALTH</h3>
                        <p>The MOH medical license exam is an assessment test developed by the UAE Ministry of Health for the purpose of selecting healthcare professionals to operate in various healthcare sectors throughout the UAE. Applicants who pass the MOH examination are eligible to work in all five Emirates except Dubai and Abu-Dhabi.
                        </p>
                        <p>The UAE Ministry of Health administers a qualifying exam for medical health practitioners who wish to practice in Sharjah, Ras Al Khaimah, Ajman, Fujairah, and Umm Al Quwain. (Dubai and Abu Dhabi each have their own qualifying examination.) This exam is held as a pen and paper test for the nursing profession, although most other healthcare workers must take a computer-based test. DHA exams are meant for the following categories:</p>
                        <ul>
                            <li>Physicians</li>
                            <li>Dentists</li>
                            <li>Pharmacists</li>
                            <li>Nurses and midwives</li>
                            <li>Medical lab technicians</li>
                            <li>Other complementary and alternative physicians, practitioners and technicians.</li>

                        </ul>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="medical-pro-content-right text-center py-5">  

                        <ul >
                            <a href="../Doctors_in_Dubai"><li >DHA</li></a>
                            <a href="../Doctors_in_Abu-Dhabi"><li>HAAD</li></a>
                            <a href="../Doctors_in_GCC_Contries"><li>SAUDI PROMETRIC</li></a>
                            <a href="../Doctors_in_Qatar"><li>QATAR PROMETRIC</li></a>
                            <a href="../Pharmacist_in_GCC_Contries"><li>VUE - OMAN</li></a>
                            <!-- <a href="#"><li>OET</li></a> -->
                            <a href="../Nurses_in_GCC_Contries"><li >NHRA - BAHRAIN</li></a>
                            <a href="../Labtechnician_in_GCC_Contries"><li class="active">MOH</li></a>
                        </ul>      
                        
                    </div>
                    <?php
                        $result=mysqli_query($con,"SELECT * FROM ads where category='MOH' AND status=1 order by id desc limit 1");
                        // $active = "active";
                        while ($user_data=mysqli_fetch_array($result)) {                 
                    ?>
                        <img src="../Admin/img/Ads/<?php echo $user_data['image']; ?>" alt="Best Study Abroad Coaching Center" class="img-fluid" >
                    <?php } ?>
                </div>
            </div>
        </div>   
    </div>
    <div class="medical-faq">
        <div class="container-fluid">
            <!-- Content here -->
            <div class="row align-items-start justify-content-center py-5">
                <div class="col-md-8">
                    <div class="medical-faq-left">
                        <h2>FAQ</h2>
                        <div class="accordion" id="accordionExample">
                            <!-- Accordion Item 1 -->
                            <div class="card-faq">
                                <div class="card-header " id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What are the certificates needed for MOH Exam ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <strong>The certificates and documents needed for HAAD exam are:</strong>
                                        <ol>
                                            <li><a title="where is a bds degree valid">SSLC</a></li>
                                            <li><a title="it opportunities in germany">Plus Two</a></li>
                                            <li><a title="colleges in germany for indian Candidate">Degree/Diploma</a></li>
                                            <li><a title="master engineering in germany">Mark lists / Transcript</a></li>
                                            <li><a title="german free education">Registration Certificate</a></li>
                                            <li><a title="best countries for dentists">BLS (For Nurses)</a></li>
                                            <li><a title="where is a bds degree valid">Good Standing Certificate</a></li>
                                            <li><a title="free education in germany">Experience Certificate</a></li>
                                            <li><a title="free education in germany">Passport</a></li>
                                            <li><a title="where is a bds degree valid">Photo</a></li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                        
                            <!-- Accordion Item 2 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Can you explain in detail about the exam booking procedures for MOH Exam ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>After completing the Credentialing and Data Flow procedures, the candidate will get the approval for exam. The exam dates are provided by the UAE Ministry of Health. The available exam dates can be seen in the candidate’s application. The test taker can select the dates accordingly.</p>                                   
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Accordion Item 3 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Call all medical professionals attend the MOH exam at centre's in India ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <strong>No, the following medical professionals need to attend the MOH exam at Sharjah Medical Centre:</strong>
                                        <ol>
                                            <li>Nurse</li>
                                            <li>MLT Diploma Holders</li>
                                            <li>Ayurveda Doctors</li>
                                            <li>Homeopathy Doctors</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 4 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Is it possible for converting the MOH exam Data flow to DHA / HSSD ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Yes, it is possible to convert the data flow procedures from MOH to DHA / HAAD. After completing the credentialing and data flow process, the candidate should take the required test (DHA/HAAD).</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 5 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            What is the experience required for MOH examination ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>A candidate attending the MOH examination should have minimum two years work experience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-4 text-center justify-content-center align-items-center">
                    <div class="medical-faq-right py-5">
                        <ul>
                            <li>STUDY MATERIALS</li>
                            <li>EXAM REGISTRATION</li>
                            <li>DATA FLOW</li>
                            <li>ELIGIBILITY</li>
                        </ul>
                    </div>
                </div>
                

            </div>
    </div>
    
</div>
</div>
<?php include("../header/footer.php") ?>


<script>
    function changeTab(element, pageLink) {
        // Remove 'active' class from all tabs
        var tabs = document.querySelectorAll('.list-group-item');
        tabs.forEach(function(tab) {
            tab.classList.remove('active');
        });

        // Add 'active' class to the clicked tab
        element.classList.add('active');

        // Change background color to dark blue
        element.style.backgroundColor = '#001f3f';

        // Link to the specified page
        window.location.href = pageLink;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>