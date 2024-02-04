<!DOCTYPE html>
<html lang="en">
<?php
include("connection/config.php");
error_reporting(0);
session_start();
// Check if the user is logged in
if ($_SESSION['username'] != '') {
    $username = $_SESSION['username'];
    // echo "Welcome, $username! This is your dashboard.";

    // Add your dashboard content here
} else {
    // If not logged in, redirect to login page
    header("location: login.php");
    die();
}
?>
<head>
    <meta charset="utf-8">
    <title>Edupace Language Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 style="color: white;">Edupace</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="banner.php" class="nav-item nav-link "><i class="fa fa-laptop me-2"></i>Banner</a>
                    <a href="news.php" class="nav-item nav-link"><i class="fa fa-image me-2"></i>Scroll News</a>
                    <a href="event.php" class="nav-item nav-link "><i class="fa fa-image me-2"></i>Event</a>
                    <a href="reel.php" class="nav-item nav-link "><i class="fa fa-table me-2"></i>Reel</a>
                    <a href="testimonials.php" class="nav-item nav-link "><i class="fa fa-keyboard me-2"></i>Testimonials</a>
                    <a href="get_in_touch.php" class="nav-item nav-link "><i class="fa fa-address-book me-2"></i>Get In Touch</a>
                    <a href="blog.php" class="nav-item nav-link "><i class="far fa-file-alt me-2"></i>Blog</a>
                    <a href="comments.php" class="nav-item nav-link "><i class="fa fa-comments me-2"></i>Comments</a>
                    <a href="ads.php" class="nav-item nav-link "><i class="fa fa-table me-2"></i>Ads</a>
                    <a href="language_training.php" class="nav-item nav-link active"><i class="fa fa-book me-2"></i>Training</a>
                    <a href="study_abroad.php" class="nav-item nav-link "><i class="fa fa-bookmark me-2"></i>Study Abroad</a>
                    <a href="career_abroad.php" class="nav-item nav-link "><i class="fa fa-child me-2"></i>Career Abroad</a>
                    <a href="contact.php" class="nav-item nav-link "><i class="fa fa-phone-alt me-2"></i>Contact</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Event</h6>
                            <div class="table-responsive">
                                <?php 
                                    //include "config.php";
                                    $limit = 10;  
                                    if (isset($_GET["page"]) && !empty($_GET['page'])) {
                                      $currentpage  = $_GET["page"]; 
                                      } 
                                      else{ 
                                      $currentpage = 1;
                                      };  
                                      
                                    $start_from = ($currentpage * $limit) - $limit;  
                                    $result = mysqli_query($con,"SELECT * FROM language_training ORDER BY ID desc LIMIT $start_from, $limit");
                                    ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">E-Mail</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                <?php
                                 // $sql="SELECT * FROM sub_category order by sub_cat_id desc";
                                 // $query=mysqli_query($con,$sql);
                                $i=1; 
                                if(!mysqli_num_rows($result) > 0 )
                                  {
                                    echo '<td colspan="7"><center>No Category-Data!</center></td>';
                                  }
                                else
                                  {  
                                   while($rows=mysqli_fetch_array($result))
                                    {
                                    echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$rows['name'].'</td>
                                            <td>'.$rows['email'].'</td>
                                            <td>'.$rows['phone'].'</td>
                                            <td>'.$rows['message'].'</td>';
                                     

                                    echo "<td><a  onClick=\"javascript:return confirm('Do you wants to delete this?');\" href='delete_language.php?lang=".$rows['id']."' class='btn btn-danger btn-flat btn-addon btn-xs m-b-10'  style='font-size:15px; padding:5px;'><i class='fa fa-trash'></i></a></td></tr>";


                                    // echo   '<a href="update_testimonials.php?upd='.$rows['id'].'" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5" style="font-size:15px; margin-left:5px; padding:5px;" ><i class="fa fa-edit" ></i></a>
                                            
                                    $i++;
                                      } 
                                      
                                  }
                                ?>
                                    </tbody>
                                </table>
                                <?php  

                                  $result_db = mysqli_query($con,"SELECT COUNT(ID) FROM language_training"); 
                                  $row_db = mysqli_fetch_row($result_db);  
                                  $total_records = $row_db[0];  
                                  $total_pages = ceil($total_records / $limit);
                                  $firstpage = 1;
                                  $nextPage = $currentpage + 1;
                                  $previousPage = $currentpage - 1; 
                                  /* echo  $total_pages; */
                                  // $pagLink = "<ul class='pagination'>";  
                                  // for ($i=1; $i<=$total_pages; $i++) {
                                  //               $pagLink .= "<li class='page-item'><a class='page-link' href='top_link_view.php?page=".$i."'>".$i."</a></li>"; 
                                  // }
                                  // echo $pagLink . "</ul>";  
                                  ?>
                                  <nav aria-label="Page navigation">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Edupace Language Academy </a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="plusitpark.com">Web Updates</a>
                            <br>Distributed By: <a href="plusitpark.com" target="_blank">Plus IT B Park</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>