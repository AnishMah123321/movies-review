<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebMovie</title>
  <link rel="shortcut icon" type="image/png" href="/img/favicon.png">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--Navigation bar-->
   <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        &nbsp
    <img style="max-width: 43px; max-height: 43px" src="/img/favicons.png" >
        <a class="navbar-brand" href="/members/successlogin">Web<span>Movie</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#feature">Create or Edit</a></li>
          <li class="btn-triala"><a href="{{ url ('/logout')}}">Logout</a></li>
          
          <li>
          
                </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Modal box-->
  
  <!--/ Modal box-->
  <!--Banner-->
   <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec"><div>
                @if(isset(Auth::user()->name))
                <div>
                    {{ Auth::user() -> name}}
                </div>
                @else
                <script>window.location = "/";</script>
                @endif
            </div></h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">Best Place to View and List Movies.</p>
              <p class="small-text">Get all your favourite movies packed up in one single place where you can rent them in the best price and quality you can get anywhere. <br>We offer the servieces a web-based platform has to offer.</p>             
            </div>
             <div class="intro-para text-center quote">
              <p class="big-text">Here are your personal prefrences.</p>     
            </div>
            <a href="#feature" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  <!--Feature-->

  
  <!--/ feature-->
 @yield('content')
      <!-- End newsletter-form -->
      <footer id="footer" class="footer">
    <div class="container text-center">
      <ul class="social-links">
        <li><a href="https://twitter.com/"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="https://myaccount.google.com/"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      ©2020 Anish Maharjan . All rights reserved
      <div class="credits">
       
        Designed by <a href=""> Anish Maharjan</a>
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <!-- <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script> -->

</body>

</html>
