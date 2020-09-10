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
                        <li class="active"><a href="about.php">About</a></li>
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

    <?php 
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);
      $propertyId = $queries['id'];
      $amount = '';
      $address = '';
      $description = '';
      $img1 = '';
      $img2 = '';
      $photoDirectory = '';
      $mainPhoto = '';      
      if($propertyId == '1') {
        $amount = '$900,000';
        $address = '49 Starr Lane, Bethel, CT 06801';
        $photoDirectory = '49-starr-lane-bethel-ct';
        $mainPhoto = 'entrance.jpg';        
        $description = '<p>Build your dream home in a beautiful setting with plenty of space and privacy. This home will be built on 8+ private acres, at the end of the cul de sac, backing to 20+ acres of open space.</p>
        <p>Let our master builders and design team help you create your own paradise at home in Bethel.</p>
        <p>Great location for commuters. Deer Run Estates currently has 4 lots left. 30, 47 & 49 Starr Lane are to be built.</p>
        <p>33 Starr Lane has a spec home on it that is also for sale. The pricing and details of 30, 47 & 49 are arbitrary.</p>
        <p>Those homes will be priced and built according to buyers specific needs. They are 100% custom.
         33 Starr Lane is not custom and sold as is. It should be complete by July 2019.</p>';
        $img1 = '2.jpg';
        $img2 = '3.jpg';        
      } else if($propertyId == '2') {
        $amount = '$2,277,000';
        $address = '17 Twin Ridge Road, Ridgefield, CT 06877';
        $photoDirectory = '17-twin-ridge-road-ridgefield-ct';
        $mainPhoto = 'main.jpg';
        $description = '<p>Turnkey perfection one-hour from NYC and moments from the charming village of Ridgefield!</p>
        <p>Every detail has been considered in this thoughtful renovation offering luxurious, eco-conscious comfort throughout.</p>
        <p>Originally built in 1965, this 5 BR/5.5 BA home has gotten a 2020 makeover that wows from the moment you enter through the gracious entry foyer which is grounded by a handsome staircase and flanked by a chic sitting room and sizable study.</p>
        <p>Five-inch white Oak plank chevron floors lead to a bay-windowed dining room that flows to a butler pantry and magnificent chef\'s kitchen replete with Miele appliances, Rohl faucets & sinks, Leitch cabinets, and leathered quartzite slab counters with an automated TV mount for discreet viewing.</p>
        <p>Casual dining and family living orbit the kitchen and open to a newly-terraced pool and full-bath cabana for the ultimate entertaining experience.</p>
        <p>Two upper levels feature an impressive Master suite with a spacious walk-in closet and four guest rooms, three of which are en-suite. 
        The lower level boasts 900 Sqft of finished space to include a temperature-controlled wine cellar, recreation room, and gym.</p>
        <p>Cedar Finnish sauna, full system upgrades, mature plantings and pastoral topography ensure this home checks every box. This is modern country living at it\'s very best!</p>
        <p>Proof of funds/pre-approval, mask & gloves, 24 hours notice required for all showings. NO EXCEPTIONS. Home is occupied. DO NOT DRIVE UP TO THE PROPERTY WITHOUT AN APPOINTMENT.</p>';
        $img1 = '17-twin-ridge-road-ridgefield-ct-2.jpg';
        $img2 = '17-twin-ridge-road-ridgefield-ct-3.jpg';
      } else if ($propertyId == '3') {
        $amount = '$640,000';
        $address = '78 Hobby Drive, Ridgefield, CT 06877';
        $photoDirectory = '78-hobby-drive-ridgefield-ct';
        $mainPhoto = 'main.jpg';        
        $description = '<p>Welcome Home! Pride of ownership is evident in this lovingly maintained center hall 
        colonial in a quiet cul de sac neighborhood.</p>
        <p>Relax in the large family room with expansive built ins and gas fireplace. Entertain in the elegant living 
        room accented with chair rail and crown moldings or re-envision it into a formal dining room.</p>
        <p>Both front rooms are light and bright with sparkling bow windows. The chefs kitchen has been redone and 
        expanded with granite countertops, white cupboards and new appliances.</p>
        <p>Cultivate herbs and flowers in the conveniently constructed greenhouse window overlooking the magnificent gardens.</p>
        <p>Sliders allow easy access to the screened porch to enjoy the privacy of the serene backyard. 
        Theres an arts and craft room or home office adjacent to the kitchen. Four bedrooms - all with hardwood floors - are 
        on the upper level. The powder room and both full baths have been remodeled using the finest materials.</p>
        <p>The master bath has brushed nickel fixtures with a rain head shower faucet and hand held spray. 
        The hall bath has Kohler fixtures and a rain head shower with separate hand held spray.</p>
        <p>Extra living space is found in the finished, walk out lower level. 
        Through a set of sunny sliders you are greeted with a generous, flat yard and a patio for your fire pit on those crisp
         Autumn nights. From this quiet, walkable neighborhood you can easily access the Metro North train station , shopping, 
         schools or Ridgefield\'s wonderful downtown. A home for all seasons!</p>';
        $img1 = '2.jpg';
        $img2 = '3.jpg';        
      } else if ($propertyId == '4') {
        $amount = '$899,900';
        $address = '7 Vona Way, Newtown, CT 06470';
        $photoDirectory = '7-vonna-way-newtown-ct';
        $mainPhoto = 'main.jpg';        
        $description = '<p>Stunning new construction in highly desirable subdivision in the lovely Newtown CT. 
        Build your ultimate dream home in this unique community with private tranquil setting but be still relatively 
        close to all highways, town, and all the amenities. This state of the art 4 bedroom, 3 full/1 half bath 
        home will be built to perfection,the ideal blend of high quality craftsmanship with a high-end transitional finishes.</p>
        <p>Well thought out floor plan with large rooms and open concept living.</p>';
        $img1 = '2.jpg';
        $img2 = '3.jpg';        
      }
    ?>

    <section class="site-hero overlay page-inside" style="background-image: 
    url(img/listing/<?php echo($photoDirectory . '/' . $mainPhoto); ?>)">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
          <div class="col-md-7 text-left mr-auto" data-aos="fade-up">
            <h1 class="heading"><?php echo($amount); ?></h1>
            <p class="sub-heading"><?php echo($address); ?></p>
          </div>
        </div>
        <a href="#next-section" class="smoothscroll scroll-down">Scroll Down</a>
      </div>
    </section>
    <!-- END section -->


    <section class="section" id="next-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 mb-4 mb-md-0">
            <img src="img/listing/<?php echo($photoDirectory . '/' . $img1); ?>" alt="<?php echo($address);?>" class="img-fluid rounded img-shadow">
          </div>
          <div class="col-md-6">
            <img src="img/listing/<?php echo($photoDirectory . '/' . $img2); ?>" alt="<?php echo($address);?>" class="img-fluid rounded img-shadow">
          </div>
        </div>
        <div class="row mt-5">
          
          <div class="col-lg-8 ml-auto">
            <h3 class="mb-3"><?php echo($amount); ?></h3>
            <p class="mb-5"><?php echo($address); ?></p>
            <?php echo($description); ?>
            <p>&nbsp;</p>
            <p><a href="contact.php" class="btn btn-primary">Contact Me</a></p>            
          </div>
        </div>
      </div>
    </section>


    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <img src="img/claudia-ferreira-realtor.jpg" alt="Image" class="img-fluid rounded img-shadow">
          </div>
          <div class="col-lg-4 ml-auto">
            <h3 class="mb-3">Contact Agent</h3>
            <p>I'm Claudia Ferreira a realtor agent in CT, that specializes in residential real estate, with a focus on finding a home that fits
            your lifestyle, I concentrate my efforts in Fairfield County, but I can work anywhere in CT.</p>
            <p> Contact me know to learn more about this property and anyother ones in CT. I would like to be your REALTOR. For more information, check me
            on google using the search term: "claudia ferreira realtor"</p>
            <p><a href="contact.php" class="btn btn-primary">Contact Me</a></p>
            
          </div>
        </div>
      </div>
    </section>

    <?php include("includes/footer-menu.php"); ?>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>