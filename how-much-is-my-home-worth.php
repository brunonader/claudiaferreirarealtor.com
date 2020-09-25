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
  <body style='height: 100%;'>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade">            
          </div>
          <div class="col-8">
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero overlay" style="background-image: url(img/how-much-is-your-home-worth.jpg);">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
          <div class="col-md-7 text-left ml-auto">
            <h1 class="heading" data-aos="fade-up">How much is my<br> home worth?</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">If you would like to know the value of your home, enter your information below. I will provide you a thorought home address report</p>
            <form action="thank-you.php" method="post" class="bg-white p-md-5 p-4 mb-5" style="margin-top: -1px;">
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
                  <label for="address">Property Address</label>
                  <input type="text" name="propertyAddress" id="address" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Get my personalized estimate" class="btn btn-primary">
                </div>
              </div>
            </form>
            <br /><br />            
          </div>
        </div>
        <!-- <a href="#next-section" class="smoothscroll scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->
    
    <?php    
  include("includes/squeeze-page-footer.php"); 
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