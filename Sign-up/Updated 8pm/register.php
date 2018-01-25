<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A B2B Wholesale E-commerce Platform">
    <meta name="author" content="kalakal">
    <link rel="icon" type="image" href="./bootstrap/img/favicon.png" />

    <title>Kalakal: A B2B Wholesale E-Commerce Platform</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="./bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="./bootstrap/css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./bootstrap/css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Kalakal.ph</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
         </li>
        <li class="nav-item" >
          <a class="nav-link" href="register.php">Register</a>
          </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#newsletter">Newsletter</a>
            </li>
            <li class="nav-item" style="background: orange">
              <img style="float: left; margin: 5px;" src="./bootstrap/img/cart-icon.png" alt="error">
              <a class="nav-link js-scroll-trigger"style="float: right;">Visit Store</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- Sign-Up -->
<section id="register">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Sign-Up</h2>
            <hr class="my-4">
            <p class="mb-5">Create an account with us.</p>
          </div>
        </div>
        <div class="row" >
        <div class="col-lg-8 mx-auto">
        <form method="post" action="register.php">
        <?php include('errors.php'); ?>
                <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <input  type="username" class="form-control" name="username" size="50" style = "margin: 5px" placeholder="Username" required="required" data-validation-required-message="Please enter a username.">
                  <p class="help-block text-danger"></p>
                  </div>
                  </div>
                <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <input type="password" class="form-control" size="50" style = "margin: 5px" placeholder="Password" required="required" data-validation-required-message="Please enter your desired password.">
                <p class="help-block text-danger"></p>
                </div>
                </div>
                <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <input type="password" class="form-control" size="50" style = "margin: 5px" placeholder="Confirm Password" required="required" data-validation-required-message="Please enter the same password.">
                <p class="help-block text-danger"></p>
                </div>
                 </div>
                 <div class="control-group">
                 <div class="form-group floating-label-form-group controls mb-0 pb-2">
                 <input type="email" class="form-control" size="50" style = "margin: 5px" placeholder="Email Address" required="required" data-validation-required-message="Please enter a email.">
                 <p class="help-block text-danger"></p>
                </div>
                </div>
            <a class="btn btn-secondary btn-l js-scroll-trigger" type="submit">Create</a>
            <p>
  	        	Already a member? <a href="login.php">Log-In</a>
  	        </p>
        </form>
        </div>
        </div>
    </section>
    

    <!-- Footer -->
    <footer class ="bg-secondary" style="padding: 25px; color: WHITE;" >
      <div class="row">
        <div class="col-sm-2">
          <img src= "./bootstrap/img/kalakal-logo2.png" alt="error" style="width:190px;height:40px;">
      	 </div>
         <div class=" col-sm-3">
           <ul class="list-unstyled">
             <h4>Company</h4>
             <li><a href="#">About Us</a></li>
             <li><a href="#">Jobs</a></li>
             <li><a href="#">Legal and Privacy</a></li>
             <li><a href="#">Blog</a></li>
           </ul>
         </div>
         <div class="col-sm-3">
           <ul class="list-unstyled">
             <h4>Services</h4>
             <li><a href="#">Become a Partner</a></li>
             <li><a href="#">Vendors Location</a></li>
             <li><a href="#">Fees</a></li>
           </ul>
         </div>
         <div class="col-sm-3">
           <ul class="list-unstyled">
             <h4>Costumer Support</h4>
             <li><a href="#">Personal</a></li>
             <li><a href="#">Business</a></li>
             <li><a href="#">FAQs</a></li>
             <li><a href="#">Terms and Conditions</a></li>
           </ul>
         </div>
       </div>
       <p><center> Copyright 2018 Kalakal Ph, All rights reserved </center></p>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="./bootstrap/js/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="./bootstrap/js/jquery.easing.min.js"></script>
    <script src="./bootstrap/js/scrollreveal.min.js"></script>
    <script src="./bootstrap/js/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="./bootstrap/js/creative.min.js"></script>

  </body>

</html>
