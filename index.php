<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>


<?php
  
  session_start();

 
  if (!isset($_SESSION['username'])) {
    
    header("Location: index2.php");
    
    exit();
  }
?>




<!DOCTYPE html>
<html lang="en">

<head>

  <title>BIA Salon Management System || Home Page</title>
 
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  
  <link href="css/font-awesome.min.css" rel="stylesheet">
  
  <link href="css/style.css" rel="stylesheet">
  
</head>

<body>
  <?php include_once('includes/header.php'); ?>

  <!-- home page  -->
  <div class="hero-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h1 class="hero-title">Bia SALON MANAGEMENT SYSTEM <i class="fa fa-scissors"></i></h1>
          <p class="hero-text"><strong>YOUR TYPES <i class="fa fa-users"></i> , YOUR STYLE <i
                class="fa fa-angellist"></i> , YOUR COLOR <i class="fa fa-asterisk"></i> .</strong> </p>
                <p class="hero-text2"><strong>ANY TIME ANYWHERE "24X7" OPEN</strong> </p>

          <a href="appointment.php" class="btn btn-default">Make an Appointment <i class="fa fa-bookmark-o"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- home page end -->

  <!-- about us section-->
  <div class="space-medium bg-default">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="images/about.jpg" alt=""
            class="img-responsive"></div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <div class="well-block">
            <?php
            $ret = mysqli_query($con, "select * from tblpage where PageType='aboutus' ");
            $cnt = 1;
            while ($row = mysqli_fetch_array($ret)) {

              ?>
              <h1>
                <?php echo $row['PageTitle']; ?>
              </h1>
              <h5 class="small-title ">best experience ever</h5>
              <p>
                <?php echo $row['PageDescription']; ?>
              </p>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- about us section end-->

  <h2 class="mission_vision-title">Misson & Vision</h2>

  <!-- mission vision section -->
  <section class="mission-vision">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="mission">
            <h3>Our Mission <i class="fa fa-user-secret"></i></h3>
            <p>At our salon management system, our mission is to provide top-notch salon services to our clients by
              using high-quality products, providing personalized attention, and creating a relaxing atmosphere. We
              strive to exceed our clients' expectations by staying up-to-date with the latest trends and techniques,
              while also maintaining an eco-friendly and sustainable approach to our business.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="vision">
            <h3>Our Vision <i class="fa fa-opencart"></i></h3>
            <p>Our vision is to become a leading salon management system by empowering salon owners to streamline their
              operations, enhance their customer experiences, and increase their profitability. We aim to achieve this
              vision by leveraging cutting-edge technology, fostering a culture of innovation and collaboration, and
              providing unparalleled customer service to our clients.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <div class="what-we-do">
    <h2>What We Do</h2>
    <ul>
      <li> <i class="fa fa-check-circle-o"></i> <b>Haircuts:</b> Our stylists and barbers are experts in men's haircuts,
        from classic cuts to modern styles. We take the time to understand your individual style and preferences, so you
        can trust us to deliver the perfect cut every time.</li>
      <li> <i class="fa fa-check-circle-o"></i><b> Beard and Mustache Grooming: </b> Whether you're looking to keep your
        beard neat and tidy or want to try out a new style, our barbers have the skills and expertise to help you
        achieve the perfect look.</li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Shaves:</b> There's nothing like a hot towel shave to leave you
        feeling refreshed and rejuvenated. Our barbers use the latest techniques and premium products to give you the
        closest, smoothest shave possible.</li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Coloring:</b> Whether you want to cover up gray hair or try out a new
        look, our stylists can help you achieve the perfect hair color to suit your style and personality.</li>
      <li> <i class="fa fa-check-circle-o"></i><b> Styling: </b>From special occasions to everyday looks, our stylists
        can help you achieve the perfect style to suit any occasion. We use the latest techniques and products to ensure
        that your hair looks great all day.</li>
    </ul>
  </div>
  <!-- what we do section end -->


  <!-- why choose us section -->
  <section id="why-choose">
    <div class="container">
      <h2 class="section-title">Why Choose Us?</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="why-choose-item">
            <i class="fa fa-scissors"></i>
            <h3>Experienced Stylists</h3>
            <p>Our stylists have years of experience and are always up-to-date with the latest styles and techniques.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="why-choose-item">
            <i class="fa fa-trophy"></i>
            <h3>Quality Service</h3>
            <p>We pride ourselves on providing top-notch service and ensuring every customer leaves our salon looking
              and feeling great.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="why-choose-item">
            <i class="fa fa-money"></i>
            <h3>Affordable Prices</h3>
            <p>Our prices are competitive and we offer a variety of packages and deals to make sure you get the most for
              your money.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- why choose us section end-->


  <!-- our services section -->
  <section class="services">
    <div class="container">
      <h2>Our Services</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="service">
            <img src="images/hair.jpg" alt="Haircut,colour and styling">
            <h3>Haircut <i class="fa fa-scissors"></i> </h3>
            <p>Our expert stylists specialize in women’s haircuts, color treatments, and styling—offering everything from classic looks to the latest trends. We take the time to understand your individual preferences and hair type to create a personalized look that enhances your natural beauty. Whether you're looking for a simple trim, a bold new color, or a glamorous style for a special occasion, we use high-quality products and advanced techniques to ensure you leave feeling confident and refreshed.</p>
            <a href="service-list.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
 <div class="col-md-4">
          <div class="service">
            <img src="images/care.jpg" alt="Color">

<br><br>

<h3>Facials, Skincare & Body Care <i class="fa fa-leaf"></i></h3>
<p>Indulge in our luxurious range of facials, skincare treatments, and body care services designed exclusively for women. Whether you're looking to hydrate and brighten your skin, treat specific skin concerns, or simply relax and rejuvenate, our experts use premium products and techniques tailored to your skin type. From deep-cleansing facials and exfoliating scrubs to full-body treatments and nourishing masks, we ensure your skin feels refreshed, healthy, and glowing from head to toe.</p>


            <a href="service-list2.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
       <div class="col-md-4">
          <div class="service">
            <img src="images/makeup.jpg" alt="makeup">
            <br><br>
            <h3>Makeup Services <i class="fa fa-magic"></i></h3>
<p> Using Whether it's for a wedding, engagement, party, photoshoot, or any special occasion, our professional makeup artists are dedicated to creating a flawless look that enhances your natural beauty. We specialize in a variety of makeup styles including bridal makeup, HD makeup, party makeup, and natural glam. Each session is customized to match your skin tone, face shape, outfit, and event type, ensuring you look and feel your absolute best.Using only premium, skin-friendly products and the latest techniques.</p>

            <a href="service-list2.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
   <section class="gallery">
    <h2>Photo Gallery</h2>
    <div class="gallery-container">
      <img src="images/p1.jpg" alt="Photo 1">
      <img src="images/p22.jpg" alt="Photo 2">
      <img src="images/p3.jpg" alt="Photo 3">
      <img src="images/p4.jpg" alt="Photo 4">
      <img src="images/p5.jpg" alt="Photo 5">
      <img src="images/p6.jpg" alt="Photo 6">
    </div>
  </section>
  
  <div class="space-small bg-primary">
    <!-- call to action -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-7 col-md-8 col-xs-12">
          <h1 class="cta-title">Book your online Appointment</h1>
        </div>
        <div class="col-lg-4 col-sm-5 col-md-4 col-xs-12">
          <a href="appointment.php" class="btn btn-white btn-lg mt20">Book Appointment <i
              class="fa fa-bookmark-o"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- book appointment section end -->


  <!-- /.footer-->
  <?php include_once('includes/footer.php'); ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/menumaker.js"></script>
  <!-- sticky header -->
  <script src="js/jquery.sticky.js"></script>
  <script src="js/sticky-header.js"></script>



</body>

</html>