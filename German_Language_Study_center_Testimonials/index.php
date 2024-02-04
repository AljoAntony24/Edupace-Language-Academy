<!DOCTYPE html>
<?php
    include("../Admin/connection/config.php");
    error_reporting(0);
    session_start();
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Best Study Abroad Coaching Center In Thrissur</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon" title="German Education Consultants in Kerala Kochi |">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>


</head>
<body>

<!-- hero section -->
<?php include("../header/index.php") ?>
<div class="about-container">
    <div
      class="hero-container-aboutus"
      style="
        background-image: url('../assets/slider/German-testimonial-.jpg');
        background-size: cover; 
        background-position: center;
        height: 600px;
      "
    >
      <!-- Content for the hero section goes here -->
    </div>
</div>

<div class="testimonial-body container py-5">
    <div class="testimonial-body-head text-center mb-5 py-3">
        <h6>TESTIMONIALS</h6>
        <h1>What Our Clients Say</h1>
        <p class="text-muted py-3 text-center">We place huge value on strong relationships with our clients.</p>
    </div>
    
    
    <div class="row row-cols-1 row-cols-md-3 g-4 testimonial-single">
       <?php 
          //include "config.php";
          $limit = 9;  
          if (isset($_GET["page"]) && !empty($_GET['page'])) {
            $currentpage  = $_GET["page"]; 
            } 
            else{ 
            $currentpage = 1;
            };  
            $name=$_SESSION['Emp_Name'];
          $start_from = ($currentpage * $limit) - $limit;  
          $result = mysqli_query($con,"SELECT * FROM testimonials ORDER BY ID desc LIMIT $start_from, $limit");
          
        // $result=mysqli_query($con,"SELECT * FROM testimonials order by id desc");
        while ($user_data=mysqli_fetch_array($result)) {                 
    ?>
        <div class="col testimonial-single">
          <div class="card h-100 testimonial-single border-0 "> <!-- Removed the image tag -->
            <div class="card-body p-4">
              <h4 class="card-title testimonial-single"><?php echo $user_data['name']; ?></h4>
              <h6 class="card-title testimonial-single text-muted"><?php echo $user_data['place']; ?></h6>
              <p class="card-text testimonial-single py-3">
                <?php echo $user_data['description']; ?>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
        
        
      </div>
      
      
    
    
    
</div>
<?php  
  $result_db = mysqli_query($con,"SELECT COUNT(ID) FROM testimonials"); 
  $row_db = mysqli_fetch_row($result_db);  
  $total_records = $row_db[0];  
  $total_pages = ceil($total_records / $limit);
  $firstpage = 1;
  $nextPage = $currentpage + 1;
  $previousPage = $currentpage - 1; 
?>
  <nav aria-label="Page navigation" class="container">
    <ul class="pagination">
    <?php if($currentpage != $firstpage) { ?>
      <li class="page-item">
      <a class="page-link" href="?page=<?php echo $firstpage ?>" tabindex="-1" aria-label="Previous">
        <span aria-hidden="true">First</span>     
      </a>
      </li>
      <?php } ?>
      <?php if($currentpage >= 2) { ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
      <?php } ?>
      <li class="page-item active"><a class="page-link" href="?page=<?php echo $currentpage ?>"><?php echo $currentpage ?></a></li>
      <?php if($currentpage != $total_pages) { ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
        <li class="page-item">
        <a class="page-link" href="?page=<?php echo $total_pages ?>" aria-label="Next">
          <span aria-hidden="true">Last</span>
        </a>
        </li>
      <?php } ?>
    </ul>  
  </nav>
                            

<?php include("../header/footer.php") ?>

</body>
</html>