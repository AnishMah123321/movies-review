<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebMovie</title>
  <link rel="shortcut icon" type="image/png" href="/img/favicon.png">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
 
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
        <a class="navbar-brand" href="">Web<span>Movie</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#testimonial">Movies</a></li>
        
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
              
              <p class="small-text">Get all your favourite movies packed up in one single place where you can rent them in the best price and quality you can get anywhere. <br>We offer the servieces a web-based platform has to offer.</p>             
            </div>
             <div class="intro-para text-center quote">
              <p class="big-text">Here are your prefrences.</p>     
            </div>
            @if (session('Status'))
              <p style="color:#50E83B;" class="big-text">{{session('Status')}}</p>
              @endif
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
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Welcome to your account</h2>
          <p>Welcome to your very own movie viewing and reviewing foreground. Here you can create or add new movies you saw, updated them as you wish and also delete them. You dont have to keep track of movies from now on we will do that for you.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Fast!</h4>
                <p>Fast way to navigate around without having the hassle to wait around for the page to load. Get around the entire website with wearing out your patience</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-clock-o"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Easy!</h4>
                <p>Easy to use and navigate around the entire site, no need of any special lessons for the application. You dont have to worry about getting lost.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-tv"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Secure!</h4>
                <p>We use the best security when it comes to securing your data. You will not have to worry about getting hacked or your contents leaking</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-lock"></i>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
   <section id="testimonial" class="section-padding">
      <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">Movies</h2>
           <p class="white">Movie reviews you have saved</p>
           <hr class="bottom-line">
    <ul class="tilesWrap">
      
       @foreach ($movie as $movie)
             
             
  <li>
   By: {{ $movie->owners }}
    <h3><u>{{$movie->heading}}</u></h3>

    <p>
     {{$movie->information}}
    </p>
    Rating: {{$movie->rating}} <b class="fa fa-star"></b>
    
    <form method="get" action="/members/successlogin/{{ $movie->id }}/edit">
    <button type="submit">Edit Movie</button>
    <br/><br/>
   
</form>

  </li>

  @endforeach
</ul>
<div id="app">
<posts></posts>
     </div>  
     <br/><br/> 
    <form method="get" action="/members/successlogin/create">
    <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Create new movie review</button>
</form>
 
 </div>
    </div>
    </div>
    </section>

  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Contact Us</h2>
          <p>Our Support services are the best in the business, with a high customer satisfaction rating<br> We'll always be there to help you.</p>
          <hr class="bottom-line">
        </div>
        <p>Telephone no. : 9860244431</p>
        Send Mail : <a style="color: #717f86;" href = "mailto: maharjan.anish.yt@gmail.com">Click here</a>
        <p>Location:</p>
   <iframe width="100%" height="700" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=700&amp;hl=en&amp;q=27.642597,%2085.328366+(my%20address)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
      </div>
    </div>
  </section>
  <!--/ Contact-->
  <!--Footer-->
  <footer id="footer" class="footer">
    <script src="{{ asset('/js/app.js')}}" type="text/javascript"></script>
    <div class="container text-center">

      <h3>Our Social Sites</h3>
      <!-- End newsletter-form -->
      <ul class="social-links">
        <li><a href="https://twitter.com/"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="https://myaccount.google.com/"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      ©2020 Anish Maharjan. All rights reserved
      <div class="credits">
       
        Designed by <a href="">Anish Maharjan</a>
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
