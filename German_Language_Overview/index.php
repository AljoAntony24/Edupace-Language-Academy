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
  <title>Best Study Abroad Agency in Thrissur</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
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
        background-image: url('../assets/images/blog.jpg');
        background-size: cover; 
        background-position: center;
        height: 600px;
      "
    >
      <!-- Content for the hero section goes here -->
    </div>
</div>


    
    <div class="blog-body-container container mt-5 mb-5 ">
        <div class="blog-content">
            <div class="container-fluid">
                <!-- Content here -->
                <div class="row" id="blog">
                    <?php
                      $result=mysqli_query($con,"SELECT * FROM blog order by id desc limit 1");
                      while ($user_data=mysqli_fetch_array($result)) {                 
                    ?> 
                    <div class="col-md-8  py-5 blog-col" id="scrollable-column">
                      
                        <!-- <img src="./assets/images/blog-1.jpg" alt="" style="border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);"> -->
                        <div class="blog-content-top">
                            <h1><?php echo $user_data['title']; ?></h1>
                            <p><?php echo $user_data['description']; ?></p>



                           

                            <div class="blog-admin">
                                <p><i class="fa-solid fa-user"></i> &ensp; By: <?php echo $user_data['name']; ?></p>
                                <p><i class="fa-solid fa-calendar-days"></i> &ensp; Date: <?php echo $user_data['date']; ?></p>


                                <?php
                                    $resultone = mysqli_query($con, "SELECT * FROM comments order by id desc");

                                    // Initialize an array to store all messages
                                    $messages = array();

                                    while ($user_data_one = mysqli_fetch_array($resultone)) {
                                        // Add the description of each blog to the messages array
                                        $messages[] = $user_data_one['message'];
                                    }

                                    // Count the total number of messages
                                    $numMessages = count($messages);
                                ?>
                                <p><i class="fa-solid fa-comments"></i> &ensp; Comments: <?php echo $numMessages ?></p>
                            
                            </div>
                        
                        </div>

                        <div class="blog-comments">
                            <h4>Feedback</h4>
                            
                            <div class="blog-comments-container mb-5 mb-md-0 py-5">
                                <form action="comments_action.php" method="POST">
                                    <div class="row mb-1">
                                        <div class="col">
                                            <label class="form-label">First Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" aria-label="name" >
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Email</label>
                                            <input type="text" name="email" class="form-control" placeholder="Enter Your Email Id" aria-label="Email_ID" >
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-1">
                                        <div class="col">
                                            <label class="form-label">Message</label>
                                            <textarea type="text" name="message" class="form-control" placeholder="Message"
                                                aria-label="Message" ></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
                                </form>
                            </div>
                        </div>
                        <hr>
                         
                        <div class="blog-comments">
                            <!-- <h4>Message</h4> -->
                            <?php
                              $resultOne=mysqli_query($con,"SELECT * FROM comments where status=1 order by id desc limit 3");
                              while ($user_data_one=mysqli_fetch_array($resultOne)) {                 
                            ?>
                            <p><?php echo $user_data_one['message']; ?></p>
                             <div class="blog-admin">
                                <p><i class="fa-solid fa-user"></i> &ensp; By: <?php echo $user_data_one['name']; ?></p>
                                
                            </div>
                             <?php } ?>
                        </div>
                   
                    </div>
                <?php } ?>


                    <div class="col-md-4 text-center text-md-start py-5 sidebar" id="sidebar">
                        <h2 class="text-left">Course Overview</h2>
                        <div class="popular-post mb-5 mb-md-0 py-3">
                            <div class="row ">
                                <div class="col-md-3">
                                        <div class="popular-post-left">
                                        <img src="../assets/images/g (4).jpg" alt="Nurses to Germany in thrissur" >
                                        </div>
                                </div>
                               
                                <div class="col-md-9 text-left">
                                    <div class="popular-post-right">
                                    <a href="../German_Language_Training">
                                        <h6>
                                            Speak the language of success - German connects worlds
                                        </h6>
                                    </a>

                                        <p><i class="fa-solid fa-calendar-days"></i> &ensp; Date: 01.01.2021</p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row ">
                                <div class="col-md-3">
                                        <div class="popular-post-left">
                                        <img src="../assets/images/ielts_blog.jpg" alt="Best Study Abroad in Thrissur" >
                                        </div>
                                </div>
                               
                                <div class="col-md-9 text-left">
                                    <div class="popular-post-right">
                                        <a href="../ielts">
                                        <h6>The IELTS Examination is intended to assess the linguistic skills of persons who 
                                            want to study or work in countries where English is the primary language.</h6>
                                        </a>
                                        <p><i class="fa-solid fa-calendar-days"></i> &ensp; Date: 01.01.2021</p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row ">
                                <div class="col-md-3">
                                        <div class="popular-post-left">
                                        <img src="../assets/index/nurses_to_germany/Spanish Thrissur - 1.jpeg" alt="Spanish Language coaching in thrissur">
                                        </div>
                                </div>
                               
                                <div class="col-md-9 text-left">
                                    <div class="popular-post-right">
                                        <a href="../spanish_Language_Training">
                                            <h6>Speak Spanish with confidence and conquer the world!</h6>
                                        </a>
                                        <p><i class="fa-solid fa-calendar-days"></i> &ensp; Date: 01.01.2021</p>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <?php
                            $result=mysqli_query($con,"SELECT * FROM ads where category='OET' AND status=1 order by id desc limit 1");
                            while ($user_data=mysqli_fetch_array($result)) {                 
                        ?>
                        <div class="popular-image">
                            <img src="../Admin/img/Ads/<?php echo $user_data['image']; ?>" alt="Pathway program in thrissur" >
                        </div>
                    <?php } ?>
                       

                        <div class="popular-tag py-5 text-left ">
                            <!-- <p class="text-left">Tags</p> -->
                            <ul>
                                <li><a href="../German_Language_Training" title="Ausbildung in Germany">German Language Coaching in Thrissur</a></li>
                                <li><a href="../Drivers_To_Germany" title="Auzbildung">German Language Coaching Center</a></li>
                            </ul>
                            <ul>
                                <li><a href="../Best_German_Language_Institute_Thrissur" title="GCC countries">Study Abroad Coaching Center</a></li>
                                <li><a href="../Nurses_To_Germany">Nurses to Germany in Thrissur</a></li>
                            </ul>
                            <ul>
                                <li><a href="../Ausbildung_in_Germany">Ausbildung Program in Germany</a></li>
                                <li><a href="#">Nurses to Spain</a></li>
                            </ul>
                            <ul>
                                <li><a href="../Doctors_To_Germany" title="">Doctors To Germany in Trissur</a></li>
                                <li><a href="../Drivers_To_Germany">Drivers To Germany</a></li>
                            </ul>


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