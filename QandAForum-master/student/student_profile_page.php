<!DOCTYPE html>
<?php
include('../databases/connection.php');
session_start();

$u_srn=$_SESSION['user_srn_session'];
$u_name=$_SESSION['user_name_session'];
$u_department=$_SESSION['user_department_session'];
$u_semester=$_SESSION['user_semester_session'];
$u_section=$_SESSION['user_section_session'];
$u_email=$_SESSION['user_email_session'];
$u_dob=$_SESSION['user_dob_session'];

$sql   ="SELECT department_name FROM department WHERE department_id='$u_department'";
$result =  mysqli_query($conn, $sql);
$row= mysqli_fetch_array($result);
$u_department=$row['department_name'];

?>


</html>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>QandA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 200);
        }

    </script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="../css/courses.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
    <!-- //Fonts -->
</head>

<body>
  <div class="">

    <?php if (!strlen(@$_GET['message'])=="") {
    ?>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"> Message</li>
              <li class="breadcrumb-item active"><?php echo $_GET['message'] ; ?></li>
          </ol>
      <?php
}
    ?>

  </div>


    <div class="banner-content inner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                      <h1> <a href="index.php"><span>Q</span>&A</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                      <li class="active"><a href="student_home_page.php">Home</a></li>
                      <li><a href="student_ask_question.php">Ask Question</a></li>
                      <li><a href="my_questions.php">My question</a></li>
                      <li>

                        <!-- First Signin Drop Down -->
                        <label for="drop-2" class="toggle">Profile <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                        <a href="#">Profile <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                          <li> <a href="#" class="scroll"> <?php echo $_SESSION['user_name_session']; ?>  </a> </li>
                          <li><a href="student_profile_page.php" class="">Profile Details</a></li>
                          <li><a href="../logout.php">Logout</a></li>
                        </ul>
                      </li>
                      <li><a href="student_explore.php">Explore</a></li>

                    </ul>
                </nav>
            </div>
        </header>
    </div>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Profile</li>
    </ol>
    <!---->



    <section class="banner-bottom py-lg-5 py-4">
      <div class="container">
        <div class="inner-sec-w3ls py-lg-5 py-4">
          <h3 class="tittle text-center my-lg-5 my-3"><span class="sub-tittle">User</span> Profile</h3>
          <div class="row mt-lg-5 mt-4 justify-content-center">
            <div class="col-md-6 team-gd text-center">
              <div class="team-img mb-4">
                <img src="../images/team.jpg" class="img-fluid rounded-circle" alt="user-image">
              </div>
              <div class="team-info">
                <h3 class="mt-md-4 mt-3 text-uppercase"><span class="sub-tittle-team"><?php echo $u_srn; ?></span> <?php echo $u_name; ?></h3>
                <p class="text-uppercase">From <?php echo $u_department; ?> Department</p>
                <ul class="social_section_1info mt-md-4 mt-3">
                  <table class="table">
                    <tr>
                      <td> Semester: </td>
                      <td>  <?php echo $u_semester; ?> </td>
                    </tr>
                    <tr>
                      <td> Section: </td>
                      <td class="text-uppercase">  <?php echo $u_section; ?> </td>
                    </tr>
                    <tr>
                      <td> Dob: </td>
                      <td>  <?php echo $u_dob; ?> </td>
                    </tr>
                    <tr>
                      <td> Email: </td>
                      <td>  <?php echo $u_email; ?></td>
                    </tr>
                  </table>
                </ul>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>



    <footer>
      <section class="footer footer_1its py-5">
        <div class="container py-md-4">
          <div class="row footer-top mb-md-5 mb-4">
            <div class="col-lg-4 col-md-6 footer-grid_section_1its">
              <div class="footer-title-w3ls">
                <h3>Address</h3>
              </div>
              <div class="footer-text">
                <p>Address :  Bangalore - 56006</p>
                <p>Phone : +91- </p>
                <p>Email : <a href="mailto:info@.edu.in">info@.edu.in</a></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
              <div class="footer-title-w3ls">
                <h3>Quick Links</h3>
              </div>
              <div class="row">
                <ul class="col-6 links">
                  <li><a href="../index.php">Home </a></li>
                  <li><a href="#about">About </a></li>
                  <li><a href="../explore.php">Explore</a></li>
                  <li><a href="../registerform.php">Register</a></li>
                  <li><a href="../index#loginform">Sign in </a></li>
                </ul>
                <ul class="col-6 links">
                  <li><a href="../about.php">About Us </a></li>
                  <li><a href="../Synopsis.pdf">Synopsis </a></li>
                  <li><a href="https://.edu.in/faq">Faq's </a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 mt-lg-0 mt-4 col-sm-12 footer-grid_section_1its">
              <div class="footer-title-w3ls">
                <h3>Newsletter</h3>
              </div>
              <div class="footer-text">
                <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                <form action="subscribe.php" method="post">
                  <input type="email" name="subscriber" placeholder="Enter your email..." required="">
                  <button type="submit" class="btn1 btn"><span class="fa fa-paper-plane-o" aria-hidden="true"></span></button>
                  <div class="clearfix"> </div>
                </form>
              </div>
            </div>
          </div>
          <div class="footer-grid_section text-center">
            <div class="footer-title-w3ls mb-3">
              <a href="index.php"><span>Q</span>&A</a>
            </div>
            <div class="footer-text">
              <p>University Question and Answer forum is a web
  application project developed for university students to share
  their questions, learn and gain knowledge regarding a particular
  subject.
  University professors and lecturers visit the web application
  each day to solve problems related to a subject, share ideas
  and resources to the students.</p>
            </div>
            <ul class="social_section_1info">
              <li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook mr-1"></span>facebook</a></li>
              <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter mr-1"></span>twitter</a></li>
              <li class="google"><a href="#"><span class="fa fa-google-plus mr-1"></span>google</a></li>
              <li class="linkedin"><a href="#"><span class="fa fa-linkedin mr-1"></span>linkedin</a></li>
            </ul>
          </div>
          <div class="move-top-w3layouts text-center mt-3">
            <a href="#home" class="move-top"> <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a>
          </div>

        </div>
      </section>
    </footer>
    <!-- //footer -->

    <!-- copyright -->
    <div class="cpy-right text-center py-3">
      <p class="">© 2019 Q&A. All rights reserved | Design by Gagan and Team.
      </p>
    </div>
    <!-- //copyright -->

</body>

</html>