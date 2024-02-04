<!DOCTYPE html>
<html lang="en">
<?php
    include("../Admin/connection/config.php");
    error_reporting(0);
    session_start();
?>
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FNMQFLX2MT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FNMQFLX2MT');
</script>
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
        background-image: url('../assets/slider/NHRA-Coaching--in-Thrissur.jpg');
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
                        <h3>NHRA - BAHRAIN</h3>
                        <p>The National Health Regulatory Authority, also referred to as NHRA, is a government agency in Bahrain that oversees the country's whole healthcare system. Regarding earning their professional licenses, the NHRA oversees all healthcare professions in Bahrain. Be aware that the Professional Qualification criteria, or PQR, of the candidate determine the specific exam criteria for each healthcare profession. NHRA exams are meant for the following categories:
                        </p>
                        
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
                        <h3>NHRA Bahrain DataFlow Application</h3>
                        <ul>
                            <li>Document verification, also called as Primary Source Verification (PSV), is a specialty of the NHRA Bahrain DataFlow. With the use of this procedure, it is made sure that the candidates' personal and professional backgrounds are truthful and genuine.</li>
                            <li>Document verification, also called as Primary Source Verification (PSV), is a specialty of the NHRA Bahrain DataFlow. With the use of this procedure, it is made sure that the candidates' personal and professional backgrounds are truthful and genuine.</li>
                            <li>Only positive or negative outcomes will be reported in the NHRA Bahrain DataFlow verification report. A candidate's DataFlow report is subject to re-verification if they receive a negative outcome.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="medical-pro-content-right text-center py-5">  

                        <ul >
                            <a href="../Doctors_in_Dubai"><li >DHA</li></a>
                            <a href="../Doctors_in_Abu-Dhabi"><li>HAAD</li></a>
                            <a href="../Doctors_in_GCC_Contries"><li >SAUDI PROMETRIC</li></a>
                            <a href="../Doctors_in_Qatar"><li>QATAR PROMETRIC</li></a>
                            <a href="../Pharmacist_in_GCC_Contries"><li>VUE - OMAN</li></a>
                            <!-- <a href="#"><li>OET</li></a> -->
                            <a href="../Nurses_in_GCC_Contries"><li class="active">NHRA - BAHRAIN</li></a>
                            <a href="../Labtechnician_in_GCC_Contries"><li >MOH</li></a>
                        </ul>      
                        
                    </div>
                    <?php
                        $result=mysqli_query($con,"SELECT * FROM ads where category='NHRA' AND status=1 order by id desc limit 1");
                        // $active = "active";
                        while ($user_data=mysqli_fetch_array($result)) {                 
                    ?>
                        <img src="../Admin/img/Ads/<?php echo $user_data['image']; ?>" alt="Nurses In Germany" class="img-fluid" >
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
                                            Are all medical professionals can apply for the NHRA Dataflow Application ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Yes, all medical professionals can apply to the NHRA exam application as long as they meet all the requirements and qualifications needed for the exam application.</p>

                                    </div>
                                </div>
                            </div>
                        
                            <!-- Accordion Item 2 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How long does NHRA Dataflow Application process takes ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>The standard time frame for completing the candidate’s PSV application for Bahrain is 30- 60 working days. Still, the processing time per application may differ depending on the location or the origin where the documents came from.</p>                                   
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Accordion Item 3 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Does NHRA Dataflow reports has validity ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>NHRA Dataflow report has no validity but still may be subject to an update depending on its issued date.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 4 -->
                           
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
</body>
</html>