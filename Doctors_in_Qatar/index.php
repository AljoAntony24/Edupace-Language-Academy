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
  <title>QATAR PROMETRIC</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    <?php include("../header/index.php") ?>
<div class="about-container header-image-full">
    <div
      class="hero-container-aboutus"
      style="
        background-image: url('../assets/slider/Qatar-Prometric-Coaching--in-Thrissur.jpg');
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
        <img src="../assets/slider/Qatar-Pre-Metric-Language-Academy.jpg" class="img-fluid" alt="Best Study Abrod Institute Coaching Center In KEra">
    </div>
</section>
<div class="medical-pro-container-body container">
    <div class="medical-pro-content">
        <div class="container-fluid">
            <!-- Content here -->
            <div class="row align-items-start justify-content-center  py-5">
                <div class="col-md-8 ">
                    <div class="medical-pro-content-left py-5 ">
                        <h3>PROMETRIC</h3>
                        <p>Prometric is a globally renowned subsidiary of Educational Testing Service (ETS) and an authentic 
                            provider of technology-enabled testing and assessment solutions, operating exam centers in almost 
                            180 countries worldwide. When it comes to exam development and solution delivery, Prometric is 
                            an unrivaled trailblazer; it operates independently and has already paved the way and opened wild 
                            gates for a large number of professionals all over the world through their effective test centers 
                            and comprehensive delivery of solutions in all. <br><br>

                            Prometric has an intricate section called Healthcare Licensure and Certification Solutions, 
                            as healthcare organizations worldwide have the entire authority to ensure that the medical 
                            and paramedical professionals providing service to the people are statutory. Prometric's 
                            Healthcare Licensure and Certification Solutions include exams for Doctors, Nurses, Pharmacists, 
                            Lab Technicians, Microbiologists, Radiologists, Renal Dialysis Technicians, Pediatrics, 
                            Physiotherapists, and others. Many medical and other healthcare job searchers have found 
                            fulfillment through the Saudi Prometric, Oman Prometric, and Qatar Prometric tests. <br>
                        </p>
                        <p>Florence Academy is the authorised coaching centre and Exam registration centre for Saudi Prometric, 
                            Qatar Prometric and Oman Prometric Examination.</p>
                        <ol>
                            <li>SAUDI PROMETRIC</li>
                            <li>OMAN PROMETRIC</li>
                            <li>QATAR PROMETRIC</li>
                        </ol>
                        <h3>QATAR PROMETRIC</h3>
                         <p>The Supreme Council of Health (SCH), Qatar, created in 2009, is solely responsible for shaping Qatar's
                             health sector in the best possible way. Qatar presently has the world's most modern and renowned 
                             health-care system. The SCH guarantees the quality and efficacy of public health services 
                             provided by primary, official, and private health centers. The SCH maintains a medical 
                             licensing department (MLD) that oversees programs such as license assessment and processing, 
                             license renewal, documentation of healthcare professionals and facilities, and research 
                             and development. 
                         </p>
                        <p>For getting eligibility the following documents for credentialing should be provided:</p>
                        <ol>
                            <li>Basic Qualification Certificate</li>
                            <li>Transcript / Mark list</li>
                            <li>Corresponding Council Registration</li>
                            <li>Experience/Still working</li>
                            <li>Passport Documents</li>
                            <li>A passport size photo in white background</li>
                        </ol>
                        
                        <p>Qatar Prometric exams are conducted for the following categories:
                        </p>
                        <ol>
                            <li>Doctors</li>
                            <li>Nurses</li>
                            <li>Pharmacists</li>
                            <li>Medical Lab Technicians</li>
                            <li>Microbiologists</li>
                            <li>Radiologists</li>
                            <li>Physiotherapists</li>
                            <li>Medical Microbiology</li>
                            
                        </ol>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="medical-pro-content-right text-center py-5">  

                        <ul >
                            <a href="../Doctors_in_Dubai"><li >DHA</li></a>
                            <a href="../Doctors_in_Abu-Dhabi"><li>HAAD</li></a>
                            <a href="../Doctors_in_GCC_Contries"><li >SAUDI PROMETRIC</li></a>
                            <a href="../Doctors_in_Qatar"><li class="active">QATAR PROMETRIC</li></a>
                            <a href="../Pharmacist_in_GCC_Contries"><li>VUE - OMAN</li></a>
                            <!-- <a href="#"><li>OET</li></a> -->
                            <a href="../Nurses_in_GCC_Contries"><li >NHRA - BAHRAIN</li></a>
                            <a href="../Labtechnician_in_GCC_Contries"><li>MOH</li></a>
                        </ul>      
                        
                    </div>
                    <div class="col-md-12 py-3">
                        <div class="medical-pro-content-right" id="saudi-img">
                            <?php
                                    $result=mysqli_query($con,"SELECT * FROM ads where category='SAUDI' AND status=1 order by id desc limit 1");
                                    // $active = "active";
                                    while ($user_data=mysqli_fetch_array($result)) {                 
                                ?>
                                <img src="../Admin/img/Ads/<?php echo $user_data['image']; ?>" alt="Nurses to Germany " class="img-fluid" >
                            <?php } ?>
                            <?php
                                    $result=mysqli_query($con,"SELECT * FROM ads where category='QATAR' AND status=1 order by id desc limit 1");
                                    while ($user_data=mysqli_fetch_array($result)) {                 
                                ?>
                                <img src="../Admin/img/Ads/<?php echo $user_data['image']; ?>" alt="Drivers To Germany" class="img-fluid" >
                            <?php } ?>
                            <?php
                                    $result=mysqli_query($con,"SELECT * FROM ads where category='MOH' AND status=1 order by id desc limit 1");
                                    while ($user_data=mysqli_fetch_array($result)) {                 
                                ?>
                                <img src="../Admin/img/Ads/<?php echo $user_data['image']; ?>" alt="Drivers To Germany" class="img-fluid" >
                            <?php } ?>
                            <!-- Tab panes -->
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>   
    </div>
    
    

    <!-- medical-faq -->
    <div class="medical-faq">
        <div class="container-fluid">
            <!-- Content here -->
            <div class="row align-items-start justify-content-center ">
                <div class="col-md-8">
                    <div class="medical-faq-left">
                        <h2>FAQ</h2>
                        <div class="accordion" id="accordionExample">
                            <!-- Accordion Item 1 -->
                            <div class="card-faq">
                                <div class="card-header " id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What are the certificates needed for Qatar Embassy Attestation ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <strong>The following certificates and documents are needed for Qatar Embassy attestation:</strong>
                                        <ol>
                                            <li>Degree/Diploma Certificate</li>
                                            <li>Final Year Marklist</li>
                                            <li>Verification letter from the college (Bonafide Certificate)</li>
                                            <li>Passport copy</li>
                                            <li>Photo</li>
                                            
                                        </ol>

                                    </div>
                                </div>
                            </div>
                        
                            <!-- Accordion Item 2 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                           For how long are the Qatar Prometric test result valid ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Qatar Prometric exam results are valid for three years.                                    </div>
                                </div>
                            </div>
                        
                            <!-- Accordion Item 3 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What is the total duration of Qatar Prometric Exam ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        The total duration of the Qatar Prometric Exam is 2:30 hours.
                                    </div>
                                </div>
                            </div>
                          
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4  text-center justify-content-center align-items-center mx-auto">
                    <div class="medical-faq-right ">
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