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

    <section class="site-hero overlay" style="background-image: url(img/newsletter.jpg)">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
          <div class="col-md-7 text-left ml-auto">
            <h1 class="heading" data-aos="fade-up">Thank you for <br>Sign up!</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">We won't share your email with anyone.</p>
            <p data-aos="fade-up" data-aos-delay="100">
            <!-- <a href="contact.php" class="btn uppercase btn-outline-light d-sm-inline d-block">Download</a></p> -->
          </div>
        </div>
        <a href="#next-section" class="smoothscroll scroll-down">Scroll Down</a>
      </div>
    </section>
    <?php 
    //var_dump($_POST);

    if($_POST) {
      //email
      $email = trim(stripslashes($_POST['email']));
   
      // Set Message
      $message = "Someone signed up for newsletter <br />";
      $message .= "Email address: " . $email . "<br />";

      // Set From: header
      $from = "homes@claudiaferreirarealtor.com";

      // Email Headers
      $headers = "From: newsletter form\r\n";
      $headers .= "Reply-To: ". $email . "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

      $siteOwnersEmail = 'homes@claudiaferreirarealtor.com';
      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
      $mail = mail($siteOwnersEmail, "Email from Website", $message, $headers);

      if ($mail) {
        echo "<p style='font-size: 19px; color: white; text-align: center'>Thank you for contacting me. I will get back to you shortly. If this is urgent, please call: 475-279-1488</p>";
      } else {
          echo "<p style='font-size: 19px; color: white; text-align: center'>Something went wrong. Please try again.</p>";
      }
    }
    ?>
    <!-- END section -->
  
    <section class="section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <img src="img/claudia-ferreira-realtor.jpg"" alt="Image" class="img-fluid rounded img-shadow">
          </div>
          <div class="col-lg-4 ml-auto">
            <h3 class="mb-3" style="margin-top: 15px;">Success!</h3>
            <p>Thank you for signing up for the Claudia Ferreira Realtor Newsletter. Your newsletter will be delivered shortly to the email address provided</p>
          </div>
        </div>
      </div>
    </section>
    
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