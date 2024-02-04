<!DOCTYPE html>
<html lang="en">
<?php
    include("../Admin/connection/config.php");
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
  <title>HAAD - HEALTH AUTHORITY OF ABU DHABI</title>
  <link rel="stylesheet" href="../css/style.css" title="it ausbildung in germany">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" title="it ausbildung in germany">
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
        background-image: url('../assets/slider/HAAd-Coaching--in-Thrissur\ \(1\).jpg');
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
        <img src="../assets/slider/HAAD-Coaching-In-Thrissur-Edupace-Language-Academy.jpg" class="img-fluid" alt="it ausbildung in germany
">
    </div>
</section>
<div class="medical-pro-container-body container">
    <div class="medical-pro-content" >
        <div class="container-fluid">
            <!-- Content here -->
            <div class="row align-items-start justify-content-center  py-5" >
                <div class="col-md-8 ">
                    <div class="medical-pro-content-left py-5 " id="dha">
                        <h3>HAAD - HEALTH AUTHORITY OF ABU DHABI</h3>
                        <p>The Health Authority of Abu Dhabi (HAAD) is a model organization that grants licenses to medical 
                            professionals through the HAAD Exam so they can work in any area of healthcare inside the Emirate 
                            of Abu Dhabi. Prior to working in any healthcare industry in Abu Dhabi, all healthcare professionals 
                            must receive their license. The license must be current, valid, and renewed three months before it 
                            expires while the practitioner is using it. The healthcare industry that a health professional works 
                            for is truly connected to their licensing. Physicians from the UAE who are employed in the Emirate of 
                            Abu Dhabi may simultaneously practice in the public and private sectors.
                        </p>
                        <p>HAAD exams are meant for the following categories:</p>
                        <ul>
                            <li>(Consultant/Specialist/ General Practitioner)</li>
                            <li>Dentists (Consultant/Specialist/ General Practitioner Dentist)</li>
                            <li>Nurses (Registered Nurse/ Registered Midwife/ Assistant Nurse)</li>
                            <li>Pharmacist</li>
                            <li>Medical Lab Technician</li>
                            <li>Physiotherapist</li>
                            <li>Biochemistry</li>
                            <li>Microbiologist</li>
                            <li>Other allied health care</li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="medical-pro-content-right text-center py-5">  

                        <ul >
                            <a href="../Doctors_in_Dubai"><li >DHA</li></a>
                            <a href="../Doctors_in_Abu-Dhabi"><li class="active">HAAD</li></a>
                            <a href="../Doctors_in_GCC_Contries"><li>SAUDI PROMETRIC</li></a>
                            <a href="../Pharmacist_in_GCC_Contries"><li>QATAR PROMETRIC</li></a>
                            <a href="../oman_prometric"><li>VUE - OMAN</li></a>
                            <!-- <a href="#"><li>OET</li></a> -->
                            <a href="../Nurses_in_GCC_Contries"><li >NHRA - BAHRAIN</li></a>
                            <a href="../Labtechnician_in_GCC_Contries"><li>MOH</li></a>
                        </ul>      
                        
                    </div>
                    <?php
                        $result=mysqli_query($con,"SELECT * FROM ads where category='HAAD' AND status=1 order by id desc limit 1");
                        $active = "active";
                        while ($user_data=mysqli_fetch_array($result)) {                 
                    ?>
                        <img src="../Admin/img/Ads/<?php echo $user_data['image']; ?>" alt='it ausbildung' class="img-fluid" >
                    <?php } ?>
                </div>
            </div>
        </div>   
    </div>
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
                                            What are the certificates needed for HAAD Exam ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <strong>The certificates and documents needed for HAAD exam are:</strong>
                                        <ol>
                                            <li>Passport</li>
                                            <li>Birth Certificate</li>
                                            <li>Medical Report</li>
                                            <li>Passport</li>
                                            <li>Birth Certificate</li>
                                            <li>Medical Report</li>
                                            <li>Passport</li>
                                            <li>Birth Certificate</li>
                                            <li>Medical Report</li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                        
                            <!-- Accordion Item 2 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How many times can a candidate attend the Exam ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        A candidate can attend the HAAD examination three times in his/her lifetime.                                    </div>
                                </div>
                            </div>
                        
                            <!-- Accordion Item 3 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Is it possible for converting the HAAD exam Data FLow to DHA/MOH ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Yes, it is possible to convert the data flow procedures from HAAD to DHA / MOH. 
                                        After completing the data flow and credentialing process, the candidate should take the required test (DHA/MOH).
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 4 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Is it possible to work outside the Emirate of Abu Dhabi for a candidate who passes the Exam ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        If a candidate has passed the HAAD exam; after working in Abu Dhabi for six months, 
                                        he/she can convert to DHA or MOH licence without attending the DHA / MOH exam.
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 5 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Can you provide information about exam process involved and pattern of HAAD Exam ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <strong>The total duration of HAAD exam is two and half hours and there is a total of 100 
                                            Multiple Choice Questions in the test. The different processes involved in HAAD exam are:
                                        </strong>
                                        <ol>
                                            <li>Credential</li>
                                            <li>Data Flow</li>
                                            <li>Exam registration</li>
                                            
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-4 text-center justify-content-start align-items-center mx-auto">
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