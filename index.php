<!doctype html>
<html lang="en">
  <head>
    <title>Real Estate Agent | CT Realtor | Claudia Ferreira</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Real Estate Agent, Claudia Ferreira, Claudia Ferreira Realtor, Real Estate Agent Near Me, Full Time Realtor, Connecticut Realtor, Finding the home that fits your lifestyle, moving to ct, moving to connecticut, moving to fairfield county"/>
    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/heart.png">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154109939-2">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-154109939-2');
    </script>
  </head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><a href="index.php">Claudia Ferreira</a>
            
          </div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="sell-your-property.php">Sell Your Property</a></li>
                        <li><a href="search-for-properties.php">Search For Properties</a></li>
                      </ul>
                    </div>
                    <?php
      include("includes/contact-social-media-section.php"); 
    ?>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero overlay" style="background-image: url(img/beautiful-real-estate-in-connecticut.jpg)">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
          <div class="col-md-7 text-left ml-auto">
            <h1 class="heading" data-aos="fade-up">I'm Your Realtor,<br />Get Your Key</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">We're here to help you find the<br /> home of your dreams.</p>
            <p data-aos="fade-up" data-aos-delay="100"><a href="contact.php" class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block" style="margin-left: 100px; width: 200px;">Get In Touch</a> 
              <!-- <a href="contact.php" class="btn uppercase btn-outline-light d-sm-inline d-block">Download</a></p> -->
          </div>
        </div>
        <a href="#next-section" class="smoothscroll scroll-down">Scroll Down</a>
      </div>
    </section>
    <!-- END section -->

    <section class="section visit-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading" data-aos="fade-up">Featured Properties</h2>
          </div>
        </div>
        <div class="row">
        <?php
        for ($i=1; $i < 5; $i++) {
          $delay = $i * 100;
          switch($i) {
            case '1':
              $id = $i;
              $amount = '$900,000';
              $address = '49 Starr Lane, Bethel, CT 06801';
              $photoDirectory = '49-starr-lane-bethel-ct';
              $mainPhoto = 'entrance.jpg';        
            break;
            case '2':
              $id = $i;
              $amount = '$2,277,000';
              $address = '17 Twin Ridge Road, Ridgefield, CT 06877';
              $photoDirectory = '17-twin-ridge-road-ridgefield-ct';
              $mainPhoto = 'main.jpg';              
            break;
            case '3':
              $id = $i;
              $amount = '$640,000';
              $address = '78 Hobby Drive, Ridgefield, CT 06877';
              $photoDirectory = '78-hobby-drive-ridgefield-ct';
              $mainPhoto = 'main.jpg';        
            break;
            case '4':
              $id = $i;
              $amount = '$899,900';
              $address = '7 Vona Way, Newtown, CT 06470';
              $photoDirectory = '7-vonna-way-newtown-ct';
              $mainPhoto = 'main.jpg';              
            break;

            default: 
              $id = $i;
              $amount = '$2,277,000';
              $address = '17 Twin Ridge Road, Ridgefield, CT 06877';
              $photoDirectory = '17-twin-ridge-road-ridgefield-ct';
              $mainPhoto = 'main.jpg';            
            break;
          }
          
          echo '
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="' . $delay . '">
            <a href="featured-properties.php?id='. $id .'&address=' . $photoDirectory . '">
            <img src="img/listing/' . $photoDirectory . '/' . $mainPhoto . '" 
            alt="' . $address . '" class="img-fluid rounded"> </a>
            <h3><a href="featured-properties.php?id='. $i .'&address=' . $photoDirectory . '">' . $amount . '</a></h3>
            <div class="reviews-star float-left">
              ' . $address . '
            </div>
          </div>';
        }
        ?>
          <!-- <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up">
            <a href="featured-properties.php?id=1&address=49-starr-lane-bethel-ct"><img src="img/listing/49-starr-lane-bethel-ct/entrance.jpg" alt="49 Starr Lane Bethel, CT" class="img-fluid rounded"> </a>
            <h3><a href="featured-properties.php?id=1&address=49-starr-lane-bethel-ct">$900,000</a></h3>
            <div class="reviews-star float-left">
              49 Starr Lane, Bethel, CT 06801
            </div>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="100">
            <a href="featured-properties.php?id=2&address=17-twin-ridge-road-ridgefield-ct"><img src="img/listing/17-twin-ridge-road-ridgefield-ct/main.jpg" alt="17 Twin Ridge Road Ridgefield, CTr" class="img-fluid rounded"> </a>
            <h3><a href="featured-properties.php?id=2&address=17-twin-ridge-road-ridgefield-ct">$2,277.000</a></h3>
            <div class="reviews-star float-left">
              17 Twin Ridge Road, Ridgefield, CT 06877
            </div>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="200">
            <a href="property-single.php"><img src="img/img_3.jpg" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.php">$3,200</a></h3>
            <div class="reviews-star float-left">
              16321 Lone Corral Ct, Houston TX
            </div>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="300">
            <a href="property-single.php"><img src="img/img_4.jpg" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.php">$1,200</a></h3>
            <div class="reviews-star float-left">
              4029 26th Ave S, Houston TX
            </div>
          </div>


          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up">
            <a href="property-single.php"><img src="img/danbury-ct-home.jpg" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.php">$3,450</a></h3>
            <div class="reviews-star float-left">
              46 Brookflower Rd, Houston TX
            </div>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="100">
            <a href="property-single.php"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.php">$1,650</a></h3>
            <div class="reviews-star float-left">
              2724 20th Ave N, Houston TX
            </div>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="200">
            <a href="property-single.php"><img src="img/img_3.jpg" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.php">$3,200</a></h3>
            <div class="reviews-star float-left">
              16321 Lone Corral Ct, Houston TX
            </div>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="300">
            <a href="property-single.php"><img src="img/img_4.jpg" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.php">$1,200</a></h3>
            <div class="reviews-star float-left">
              4029 26th Ave S, Houston TX
            </div>
          </div> -->

        </div>
      </div>
    </section>
    <!-- END section -->
  
    <?php
      include("includes/happy-customers-section.php"); 
    ?>

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <img src="img/claudia-ferreira-realtor.jpg" alt="Image" class="img-fluid rounded img-shadow">
          </div>
          <div class="col-lg-4 ml-auto">
            <h3 class="mb-3" style="margin-top: 15px;">About Me</h3>
            <p>I am realtor in CT that specializes in residential real estate, with a focus on finding a home that fits your lifestyle, I concentrate my efforts in Fairfield County, but I can work anywhere in CT. When you are ready to sell your home or buy a new one, you need a REALTOR who is dedicated to meeting your goals in a fast, friendly and non-threatening manner. I would like to be your REALTOR.</p>
            <p>We help families to sell, buy and invest in real estate. We find the home that fits your lifestyle</p>
            <!-- <p><img src="img/signature.jpg" alt="Image" class="img-fluid w-25"></p> -->
            
          </div>
        </div>
      </div>
    </section>

<?php
      include("includes/good-reviews-section.php"); 
    ?>
    
    <section class="section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Recent Blog Post</h2>
            <p class="lead" data-aos="fade-up">Recent blog posts related to real estate, properties, finance, housing market and more.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4">
              <a href="how-to-pick-the-right-realtor.php" class="mb-4 d-block"><img src="img/danbury-ct-home.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">July 3, 2020</span>
                <h2 class="mt-0 mb-3"><a href="how-to-pick-the-right-realtor.php">How to pick the right realtor?</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="happy-forth-of-july-2020.html" class="mb-4 d-block"><img src="img/blog/happy-4th-of-july-elegant-white-fireworks-gif-picture.gif" 
                alt="Claudia Ferreira Realtor - Happy 4th of July" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">July 4, 2020</span>
                <h2 class="mt-0 mb-3"><a href="happy-forth-of-july-2020.html">Happy 4th of July</a></h2>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="transactions.php?id=20200727" class="mb-4 d-block"><img src="img/blog/just-sold-lakewood-condo.jpg" alt="Just Sold in Danbury, CT" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">July 24, 2020</span>
                <h2 class="mt-0 mb-3"><a href="transactions.php?id=20200727">Just Sold in Danbury, CT</a></h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="homebuyers-guide.php" class="mb-4 d-block"><img src="img/blog/Homebuyers-guide.png" alt="Claudia Ferreira Realtor | Homebuyers Guide - a step-by-step guide" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">August 26, 2020</span>
                <h2 class="mt-0 mb-3"><a href="homebuyers-guide.php">Homebuyers Guide - a step-by-step guide</a></h2>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->
    
    <?php
      include("includes/footer-menu.php"); 
    ?>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>