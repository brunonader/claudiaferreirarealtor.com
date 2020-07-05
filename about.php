<!doctype html>
<html lang="en">

<head>
  <title>Claudia Ferreira &mdash; Realtor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700"
    rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/heart.png">
</head>

<body>

  <header class="site-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-4 site-logo" data-aos="fade"><a href="index.php">Claudia Ferreira</a></div>
        <div class="col-8">


          <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
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
                      <li><a href="index.php">Home</a></li>
                      <li class="active"><a href="about.php">About</a></li>
                      <li><a href="blog.php">Blog</a></li>
                      <li><a href="contact.php">Contact</a></li>
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

  <section class="site-hero overlay page-inside" style="background-image: url(img/home2.jpg)">
    <div class="container">
      <div class="row site-hero-inner align-items-center">
        <div class="col-md-7 text-left mr-auto">
          <h1 class="heading" data-aos="fade-up">About Us</h1>
        </div>
      </div>
      <a href="#next-section" class="smoothscroll scroll-down">Scroll Down</a>
    </div>
  </section>
  <!-- END section -->

  <section class="section" id="next-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <img src="img/Claudiagrey.jpg" alt="Image" class="img-fluid rounded img-shadow">
        </div>
        <div class="col-lg-4 ml-auto">
          <h3 class="mb-3" style="margin-top: 15px;">About Me</h3>
          <p>I am realtor in CT that specializes in residential real estate, with a focus on finding a home that fits
            your lifestyle, I concentrate my efforts in Fairfield County, but I can work anywhere in CT. When you are
            ready to sell your home or buy a new one, you need a REALTOR who is dedicated to meeting your goals in a
            fast, friendly and non-threatening manner. I would like to be your REALTOR. For more information, check me
            on google using the search term: "claudia ferreira realtor"</p>
        </div>
      </div>
    </div>
  </section>
  
  <?php
      include("includes/good-reviews-section.php"); 
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