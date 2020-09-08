<!doctype html>
<html lang="en">
  <head>
    <title>Claudia Ferreira &mdash; CT Realtor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
          <div class="col-4 site-logo" data-aos="fade"><a href="index.php">Claudia Ferreira</a></div>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li class="active"><a href="contact.php">Contact</a></li>
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

    <section class="site-hero overlay page-inside" style="background-image: url(img/ready-to-sell-your-property.jpg)">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
          <div class="col-md-7 text-left mr-auto">
            <h1 class="heading" data-aos="fade-up">Ready to Sell? We are here to do it quickly</h1>
          </div>
        </div>
        <!-- <a href="#next-section" class="smoothscroll scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->


    <section class="section bg-primary contact-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            
            <form action="thank-you.php" method="post" class="bg-white p-md-5 p-4 mb-5" style="margin-top: -150px;">
              <div class="row">
                  <p><strong>
                  Are you ready to sell your property? We are here to help you sell it quickly! 
                  <br />Contact us by filling out the form below and we'll get in touch with you shortly. </strong>
</p>
</div>
<div class="row"> 

                <div class="col-md-6 form-group">
                    
                  <label for="leadName">Name</label>
                  <input type="text" id="leadName" name="leadName" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" name="phone" class="form-control ">
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary">
                </div>
              </div>
            </form>

          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p><span class="d-block">Address:</span> <span style="font-size: 23px;">Bethel, CT</span></p>
                <p><span class="d-block">Phone:</span> <span style="font-size: 23px;">
                <a href="tel:+1-475-279-1488" style="color: white;">+1-475-279-1488</a></span></p>
                <p><span class="d-block">Email:</span> <span style="font-size: 23px;">
                <a href="mailto:homes@claudiaferreirarealtor.com" style="color: white;">homes@claudiaferreirarealtor.com</a></span></p>
              </div>
            </div>
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