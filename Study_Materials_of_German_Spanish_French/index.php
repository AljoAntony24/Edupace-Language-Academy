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
  <title>Downloads</title>
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
        background-image: url('../assets/slider/download-edupace_language-academy_best-german-language-acdemy-in-thrissur\ \(1\).jpg');
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
        <img src="../assets/slider/Downloads_Edupace-Language-Academy.jpg" class="img-fluid" alt="...">
    </div>
</section>

  <div class="download-card-container">
    <h1>Brochures</h1>
    <div class="download-cards-inner">
    <div class="download-card">
        <img src="../assets/brochure/Doctors To Spain.jpeg" alt=" Doctors To Spain">
        <a href="../assets/brochure/Doctors To Spain.pdf" download="Doctors To Spain">Download</a>
        <h4>Doctors To Spain</h4>
    </div>
    <div class="download-card">
        <img src="../assets/brochure/vocational training to spain_edupace language academy.jpg" alt="">
        <a href="../assets/brochure/VOCATIONAL.pdf" download="Vocational Training Program">Download</a>
        <h4>Vocational Training Program</h4>
    </div>
    <div class="download-card">
        <img src="../assets/brochure/Ausbildung educational Language Academy.jpg" alt="Ausbildung educational Language Academy">
        <a href="../assets/brochure/Ausbildung.pdf" download="Ausbildung Germany">Download</a>
        <h4>Ausbildung Germany</h4>
    </div>
    
    </div>
<div class="download-cards-inner">
    <div class="download-card">
        <img src="../assets/brochure/NURSE TO GERMANY_EDUPACE LANGUAGE ACADEMY.jpg" alt="NURSE TO GERMANY_EDUPACE LANGUAGE ACADEMY">
        <a href="../assets/brochure/nurses to germany.pdf" download="Nurses To Germany">Download</a>
        <h4>Nurses To Germany</h4>
    </div>
    <div class="download-card">
        <img src="../assets/brochure/DRIVERS TO GERMANY_EDUPACE LANGUAGE ACADEMY.jpg" alt="DRIVERS TO GERMANY_EDUPACE LANGUAGE ACADEMY">
        <a href="../image.webp" download="image1">Download</a>
        <h4>Drivers To Germany</h4>
    </div>
    <div class="download-card">
        <img src="../assets/brochure/Masters Program at germany_edupace.jpg" alt="Masters Program at germany_edupace">
        <a href="../image.webp" download="image1">Download</a>
        <h4>Master Program at Germany</h4>
    </div>
    
    
</div>
<div class="download-cards-inner">
    
    <div class="download-card">
        <img src="../assets/brochure/doctors to europe.edupace.jpg" alt="doctors to europe.edupace">
        <a href="../image.webp" download="image1">Download</a>
        <h4>Doctors to Europe</h4>
    </div>
    <div class="download-card">
        <img src="../assets/brochure/paid internship program spain_edupace.jpg" alt="paid internship program spain_edupace">
        <a href="../image.webp" download="image1">Download</a>
        <h4>Paid Internship Program</h4>
    </div>
    <div class="download-card">
        <img src="../assets/brochure/Truck Drivers To Germany.jpeg" alt="paid internship program spain_edupace">
        <a href="../image.webp" download="image1">Download</a>
        <h4>Truck Drivers to Germany</h4>
    </div>
    
</div>
</div>

</body>
<?php include("../header/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>