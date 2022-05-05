<!DOCTYPE html>
<?php
include('../databases/connection.php');
session_start();
?>
<html lang="en">
<head>
  <title>QandA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
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

    <?php if(!strlen(@$_GET['message'])=="")
        {
          ?>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"> Message</li>
              <li class="breadcrumb-item active"><?php echo $_GET['message'] ;?></li>
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
                    <li class="active"><a href="../index.php">Home</a></li>
                    <li><a href="teacher_forgot_password.php">Forgot Password</a></li>
                    <li><a href="../about.php">About</a></li>
                    <li>

                      <!-- First Signin Drop Down -->
                      <label for="drop-2" class="toggle">Login<span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                      <a href="#">Login <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                      <input type="checkbox" id="drop-2" />
                      <ul>
                        <li><a href="../index#loginform" class="scroll">Student Login</a></li>
                        <li><a href="../admin/admin_login_form.php">Admin Login</a></li>
                        <li><a href="teacher_login_form.php">Refresh</a></li>
                      </ul>
                    </li>
                    <li><a href="../explore.php">Explore</a></li>

                  </ul>
                </nav>
            </div>
        </header>
    </div>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Teacher login</li>
    </ol>
    <!---->

    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-5 py-4">
            <h3 class="tittle text-center mb-lg-5 mb-3"><span class="sub-tittle">You can</span> Login here</h3>

            <div class="row justify-content-center login p-md-5 p-4 mx-auto bg-white mw-100">

              <div class="col-lg-5">
                <form action="teacher_login.php" method="post">
                  <div class="form-group">
                    <label>Teacher Id</label>
                    <input class="form-control" type="text" name="user_srn_teacher" placeholder="enter register number" required>
                  </div>

                  <div class="form-group">
                    <label>Password</label>

                      <input class="form-control" type="password" name="user_password_teacher" placeholder="enter password" required>
                  </div>



                  <button type="submit" name="login_button_teacher" class="btn btn-primary submit mb-4">Login</button>

                </form>
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
                <p>Address :  Bangalore - 5600</p>
                <p>Phone : +91- </p>
                <p>Email : <a href="mailto:info@.edu.in">info@edu.in</a></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
              <div class="footer-title-w3ls">
                <h3>Quick Links</h3>
              </div>
              <div class="row">
                <ul class="col-6 links">
                  <li><a href="../index.php">Home </a></li>
                  <li><a href="../about">About </a></li>
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
      <p class="">.
      </p>
    </div>
    <!-- //copyright -->

</body>

</html>
