<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font - Change to a different font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>ServiceSphere</title>

  <style>
  
  .navbar-nav .nav-link {
    color: #fff !important;
    font-weight: bold;
  }

  .navbar-nav .nav-link:hover {
    color: grey !important;
  }
  .navbar-nav .nav-link {
    color: #fff !important;
    font-weight: bold;
  }

  
  
    .contact-form-container {
      background-color: #f0f0f0;
      padding: 20px;
      border-radius: 10px;
    }

    .navbar {
      background-color: #98ff98;
    }

    .navbar-brand {
      display: none; 
    }

    .mainHeading h1 {
      color: #333;
      font-size: 36px; 
    }

    .mainHeading p {
      font-size: 18px; 
    }

    footer {
      color: #fff;
      background-color: #333;
    }

    footer a {
      color: #fff;
    }
  </style>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav mx-auto" style="font-family: 'Roboto', sans-serif;">
      <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
      <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
      <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
      <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
    </ul>
  </div>
</nav>
<!-- End Navigation -->
  
  
  
  
  
 <!-- Start Header Jumbotron-->
<header class="jumbotron position-relative" style="background-image: url(images/Banner1.jpeg); background-size: cover;">
  <!-- Blur Overlay -->
  <div class="container d-flex flex-column justify-content-center align-items-center text-center text-white" style="height: calc(100vh - 200px); backdrop-filter: blur(1px);">
  </div>
</header> <!-- End Header Jumbotron -->

<div class="myclass mainHeading">
  <div class="d-flex justify-content-center flex-column align-items-center">
    <h1 class="font-weight-bold" style="color: #e77400; word-spacing: 5px; letter-spacing: 2px; font-family: 'Arial', sans-serif;">Welcome to ServiceSphere</h1>

    <p class="font-italic" style="color: #8db600; word-spacing: 20px; letter-spacing: 5px;">Get your Electrical and Electronics Items Repaired Here</p>

    <div class="d-flex justify-content-center">
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger">Sign Up</a>
    </div>
  </div>
</div>















  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
   <h3 class="text-center" style="font-weight: bold;">ServiceSphere</h3>

      <p>
        ServiceSphere is your premier destination for electrical and electronics repair in Bokaro Steel City. With a commitment to excellence and customer satisfaction, we've established ourselves as a trusted name in the industry. Our team of skilled technicians is dedicated to providing top-notch repair services for all your electronic devices.<br> 

<br>As we continue to grow, our vision extends beyond the borders of Bokaro Steel City. We aspire to expand our reach throughout the state and ultimately across the country, and we can't do it without your support. With your trust and patronage, we aim to become a household name synonymous with reliability, quality, and unparalleled service.<br>

<br>Join us on this journey as we strive to elevate the standards of electrical and electronics repair and set new benchmarks for excellence. Together, let's build a brighter future for ServiceSphere and redefine the landscape of repair services nationwide.
      </p>

    </div>
  </div>
  <!--Introduction Section End-->
 <!-- Start Services -->
<div class="container text-center border-bottom" id="Services" style="background-color: #bfff7f; margin-top: 20px; margin-bottom: 20px;">
  <h2>Our Services</h2>
  <div class="row mt-4">
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-cog fa-4x text-dark"></i></a>
      <h4 class="mt-4">Smart Device Solutions</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-wrench fa-4x text-dark"></i></a>
      <h4 class="mt-4">Proactive maintenance</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-toolbox fa-4x text-dark"></i></a>
      <h4 class="mt-4">Emergency Repairs</h4>
    </div>
  </div>
</div>
<!-- End Services -->




  <!-- Start Happy Customer  -->
  <div class="jumbotron bg-danger" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center text-white">Customers Ratings</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Ramesh Kumar</h4>
              <p class="card-text">Excellent service! My laptop was repaired quickly and works perfectly now. It was good and I highly recommend this service center.</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Shruti Kumari</h4>
              <p class="card-text">Overall, I had a good experience. The repair was done well. I liked the overall experience.</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Suresh Kumar</h4>
              <p class="card-text">The repair was satisfactory. I had a great experience. The staffs were good.</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Avantika Kumari</h4>
              <p class="card-text">Outstanding service! The staff was friendly and knowledgeable, and my phone was fixed faster than I anticipated. I'll definitely be coming back here for any future repairs.</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

<!-- Start Registration  -->
<?php include('UserRegistration.php') ?>
<!-- End Registration  -->


<div style="margin-bottom: 100px;"></div>

<!--Start Contact Us-->
<div class="container" id="Contact">
  <!--Start Contact Us Container-->
  <h2 class="text-center mb-4">Contact Us</h2> <!-- Contact Us Heading -->
  <div class="row justify-content-center">

    <!--Start Contact Us Row-->
    <div class="col-md-6 order-md-2">
      <?php include('contactform.php'); ?>
    </div>
    <div class="col-md-6 text-center mt-4 contact-form-container order-md-1">
      <!-- Start Contact Us 2nd Column-->
<strong>Branch:</strong> <br>
ServiceSphere Pvt Ltd, <br>
Sector - 4, Bokaro Steel City, 827004 <br>
Phone: 6542350111 <br>
Email: <a href="mailto:info@servicesphere.com">info@servicesphere.com</a><br>
<a href="#" target="_blank">www.servicesphere.com</a> <br>
</div> <!-- End Contact Us 2nd Column-->
</div> <!-- End Contact Us Row-->
</div> <!-- End Contact Us Container-->
<!-- End Contact Us -->


  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #a6ff4c;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
         
          <small>Last Updated On 10-10-2024</small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>

