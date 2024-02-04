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
  <title>DHA</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("../header/index.php") ?>
<div class="about-container">
    <div
      class="hero-container-aboutus"
      style="
        background-image: url('../assets/slider/DHA-Coaching--in-Thrissur.jpg');
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
                        <h3>DHA - Dubai Health Authority</h3>
                        <p>The Dubai Health Authority (DHA) is a government entity that not only oversees the Emirate of 
                            Dubai's health system, but also provides healthcare services to all citizens through official 
                            hospitals, private healthcare facilities, clinics, and other healthcare facilities that fall 
                            under its jurisdiction. This powerful program, established in 2008, provides services such as 
                            launching and strictly enforcing appropriate policies and strategies for quality medical care 
                            in all public and private healthcare organizations in Dubai, allowing genuine partnership 
                            between healthcare firms, and, last but not least, providing licensure and authentication 
                            of medical and paramedical professionals and health facilities. The DHA's Health Regulation 
                            Department is solely responsible for regulating medical services, and healthcare practitioners 
                            who apply for a license must strictly pass the DHA exam in order to practice in Dubai.
                        </p>
                        <p>DHA exams are meant for the following categories:</p>
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
                            <a href="../Doctors_in_Dubai"><li class="active">DHA</li></a>
                            <a href="../Doctors_in_Abu-Dhabi"><li>HAAD</li></a>
                            <a href="../Doctors_in_GCC_Contries"><li>SAUDI PROMETRIC</li></a>
                            <a href="../Doctors_in_Qatar"><li>QATAR PROMETRIC</li></a>
                            <a href="../Pharmacist_in_GCC_Contries"><li>VUE - OMAN</li></a>
                            <!-- <a href="#"><li>OET</li></a> -->
                            <a href="../Nurses_in_GCC_Contries"><li >NHRA - BAHRAIN</li></a>
                            <a href="../Labtechnician_in_GCC_Contries"><li>MOH</li></a>
                        </ul>      
                        
                    </div>
                    <?php
                        $result=mysqli_query($con,"SELECT * FROM ads where category='DHA' AND status=1 order by id desc limit 1");
                        $active = "active";
                        while ($user_data=mysqli_fetch_array($result)) {                 
                    ?>
                        <img src="../Admin/img/Ads/<?php echo $user_data['image']; ?>" alt="Study Abroad Coching Center Thrissur | Kerala | India" class="img-fluid" >
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
                                            What are the certificates needed for DHA Exam ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <strong>The certificates and documents needed for DHA exam are:</strong>
                                        <ol>
                                                <li>SSLC</li>
                                                <li>Plus Two</li>
                                                <li>Degree/Diploma</li>
                                                <li>Mark lists / Transcript</li>
                                                <li>Registration Certificate</li>
                                                <li>BLS (For Nurses)</li>
                                                <li>Good Standing Certificate</li>
                                                <li>Experience Certificate</li>
                                                <li>Passport</li>
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
                                            What are the additional certificates needed for nurses attending the DHA Exam ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Compared to other professions, a Good Standing Certificate and BLS card are 
                                        compulsory for nurses attending the DHA exam.                                   
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Accordion Item 3 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Is it possible to work outside the Emirate of Dubai for a candidate who passed the DHA Exam ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        If a candidate has passed the DHA exam; after working in the Emirate of Dubai 
for six months, he/she can convert to HAAD or MOH licence without attending the HAAD / MOH exam.
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 4 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            How many times ccan a candidate attend the DHA Exam ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        A candidate can attend the DHA examination three times in his/her lifetime.
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 5 -->
                            <div class="card-faq">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Can you provide information about exam process involved and pattern of DHA Exam ?
                                        </button>
                                    </h2>
                                </div>
                        
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <strong>The total duration of DHA exam is two and half hours and there is a total of 100 
                                            Multiple Choice Questions in the test. The different processes involved in DHA exam are:
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
                <div class="col-md-4 py-4 text-center justify-content-center align-items-center">
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