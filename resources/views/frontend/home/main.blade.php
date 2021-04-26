<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT . Hoki Makmur Sejati</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset ('assets/img/hms.ico')}} " type="image/x-icon"/>
  {{-- <link href="assets/home/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/home/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/home/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/home/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/home/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/home/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v1.2.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  @include('frontend.home.topbar')

  <!-- ======= Header ======= -->
  @include('frontend.home.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('frontend.home.herosection')
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    @include('frontend.home.feature')
    <!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    @include('frontend.home.about')
    <!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    @include('frontend.home.skill')
    <!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    @include('frontend.home.counts')
    <!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    @include('frontend.home.client')
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    @include('frontend.home.service')
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('frontend.home.testi')
    <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('frontend.home.portofolio')
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    @include('frontend.home.team')
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    @include('frontend.home.pricing')
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    @include('frontend.home.frequent')
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    @include('frontend.home.contact')
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  {{-- @include('frontend.home.footer') --}}
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/home/vendor/jquery/jquery.min.js"></script>
  <script src="assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/home/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/home/vendor/php-email-form/validate.js"></script>
  <script src="assets/home/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/home/vendor/counterup/counterup.min.js"></script>
  <script src="assets/home/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/home/vendor/venobox/venobox.min.js"></script>
  <script src="assets/home/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/home/js/main.js"></script>

</body>

</html>
