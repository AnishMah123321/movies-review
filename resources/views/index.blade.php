<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebMovie</title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

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
        </button> &nbsp
    <img style="max-width: 42px; max-height: 43px" src="img/favicons.png" >
        <a class="navbar-brand" href="/">Web<span>Movie</span></a>

      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#feature">Features</a></li>
          <li><a href="#organisations">Informations</a></li>
          <li><a href="#courses">Movies</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li class="btn-trial"><a href="/members-login">Login</a></li>
          <!-- <li class="btn-trial"><a href="#footer">Free Trail</a></li> -->
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
              <h2 class="text-dec">Fun & Entertainment</h2>
            </div>
            <div class="intro-para text-center quote">
              @if (session('Status'))
              <p style="color:#48C836;">{{session('Status')}}</p>
              @endif
              <p class="big-text">Best Place to View and List Movies.</p>             
              <p class="small-text">Get all your favourite movies packed up in one single place where you can rent them in the best price and quality you can get anywhere. <br>We offer the servieces a web-based platform has to offer.</p>              
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
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Features</h2>
          <p>Streaming or downloading movies on the internet has become the trend nowadays. The idea of buying movies on DVDs is being brushed off slowly. In the current times, people like subscribe to online movie stores that offer better quality download options.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Quick</h4>
                <p>Streaming media enable users to watch movies without downloading the whole movie file. Only after a few seconds' start-up delay, users can watch the VOD and the rest part of the movie will continue to be downloaded in the backstage server.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-flash"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Watching Ultra HD 4K content</h4>
                <p>While the majority of shows on WebMovie will be in Full HD, let's not forget the streaming service is one of the main places to watch shows in Ultra HD 4K resolution.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-tv"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Downloading Movies</h4>
                <p>Sometimes you'll be stuck in areas with no signal – the London Underground, on a plane, anywhere and in preparation it's good to have something downloaded already. WebMovie allows you to download a selection of shows.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-download"></i>
              </div>
               
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ feature-->
  <!--Organisations-->
  <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
          <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt"> Do you prefer watching movies in a theater or at home?</h3>
              <h4 class="sm-txt">(Updated for 2019)</h4>
            </hgroup>
            <p class="det-p">The data tells it all more people prefer to watch movie at the comfort of their own home rather than a theater. This is the main objective of the website, to provide movie expierence from the users home as many people seem to like convienence rather than the big screens.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>57%</h3>
              <p>At Home</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>23%</h3>
              <p>In a Theater</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>20%</h3>
              <p>Don't watch</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </section>

  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Upcoming Features</h2>
          <p>The website is still maturing and we would like for you to be patient for cool new features in the future.<br> Some of the things we are currently working on.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-users color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Set up multiple accounts</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-list-ol color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Adding movies to your list</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-music color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Getting Dolby Atmos</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ work-shop-->
  <!--/ Faculity member-->

  <!--Testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">See What Our Customer Are Saying?</h2>
          <p class="white">See what some of our customers are saying about our website</p>
          <hr class="bottom-line bg-white">
        </div>
        <div class="col-md-6 col-sm-6">
          <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Awesome website! and easy to use.</p>&mdash; Dean Cooper (@zdanganronpa) <a href="https://twitter.com/zdanganronpa/status/1213062809610784768?ref_src=twsrc%5Etfw">January 3, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-md-6 col-sm-6">
          <blockquote class="twitter-tweet"><p lang="en" dir="ltr">My favorite website for movie reviews. I hate Rotten Tomatoes!</p>&mdash; Dexter (@BittenRice) <a href="https://twitter.com/BittenRice/status/1214864219536912384?ref_src=twsrc%5Etfw">January 8, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonial-->
  <!--Courses-->
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>BlockBuster Movies</h2>
          <p>Some of the blockbuster movies of the decade each with its own unique story telling and unique visuals.<br> Movies from different genre all collected together.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course01.jpg" class="img-responsive">
            <figcaption>
              <h3>Blade Runner 2049</h3>
              <p>Rick Deckard, an ex-policeman, becomes a special agent with a mission to exterminate a group of violent androids. As he starts getting deeper into his mission, he questions his own identity.</p>
            </figcaption>
            {{-- <a href="#"></a> --}}
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course02.jpg" class="img-responsive">
            <figcaption>
              <h3>Wonder Woman 1984</h3>
              <p>Wonder Woman squares off against the Cheetah, a villainess who possesses superhuman strength and agility.</p>
            </figcaption>
      {{--       <a href="#"></a> --}}
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course03.jpg" class="img-responsive">
            <figcaption>
              <h3>Watchmen</h3>
              <p>When masked vigilantes are treated as criminals by government agencies, some band together to start a mutiny while others aim to stop it before it yields chaos.</p>
            </figcaption>
           {{--  <a href="#"></a> --}}
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course04.jpg" class="img-responsive">
            <figcaption>
              <h3>Avengers: Endgame</h3>
              <p>After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.</p>
            </figcaption>
            
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course05.jpg" class="img-responsive">
            <figcaption>
              <h3>Joker</h3>
              <p>Forever alone in a crowd, failed comedian Arthur Fleck seeks connection as he walks the streets of Gotham City. Arthur wears two masks -- the one he paints for his day job as a clown, and the guise he projects in a futile attempt to feel like he's part of the world around him. Isolated, bullied and disregarded by society, Fleck begins a slow descent into madness as he transforms into the criminal mastermind known as the Joker.</p>
            </figcaption>
           {{--  <a href="#"></a> --}}
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course06.jpg" class="img-responsive">
            <figcaption>
              <h3>Klaus</h3>
              <p>After proving himself to be the worst postman at the academy, a postman is posted to a frozen town in the North where he discovers Santa Claus is hiding out.</p>
            </figcaption>
           {{--  <a href="#"></a> --}}
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!--/ Courses-->
  <!--Pricing-->
  <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Our Pricing</h2>
          <p>We provide movies in the best quality and price for you utmost enjoyment. We even have quality selections for you to choose from to get a fast <br> movie viewing experience like never before. </p>
         
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Standard Definition (SD)</h4>
              <span class="fa fa-inr curency"></span> <span class="amount">200</span>
            </div>

            <!-- Plean Detail -->
            
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>High Definition (HD)</h4>
              <span class="fa fa-inr curency"></span> <span class="amount">400</span>
            </div>

            <!-- Plean Detail -->
            
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Ultra HD (4K)</h4>
              <span class="fa fa-inr curency"></span> <span class="amount">600</span>
            </div>
               
            <!-- Plean Detail -->
            
          </div>
        </div>
      </div>
    </div>
    <hr class="bottom-line">
  </section>

  <!--/ Pricing-->
  <!--Contact-->
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
    <div class="container text-center">

      <h3>Our Social Sites</h3>

     
      <!-- End newsletter-form -->
      <ul class="social-links">
        <li><a href="https://twitter.com/"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="https://myaccount.google.com/"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      ©2020 Anish Maharjan . All rights reserved
      <div class="credits">
       
        Designed by <a href="">Anish Maharjan</a>
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
