<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>الغرفة الرقمية</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
  {{-- <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 <style>
  #header .logo {
    max-width: 350px;  /* ✅ العرض الطويل */
    height: auto;
    margin-right: auto;
  }

  .logo a {
    display: block;
    width: 100%;
  }

  .logo-img-full {
    width: 100%;
    height: auto;
    object-fit: contain;
    display: block;
  }

  /* Responsive للتحكم في الجوال */
  @media (max-width: 768px) {
    .logo {
      max-width: 250px;
    }
  }
  #hero .carousel-content  {
       font-family: 'Cairo', sans-serif;
            direction: rtl;
            text-align: right;
  }
  .row{
       font-family: 'Cairo', sans-serif;
            direction: rtl;
            text-align: right;
  }
  [data-aos^=fade][data-aos^=fade].aos-animate{
       font-family: 'Cairo', sans-serif;
            direction: rtl;
            text-align: right;

  }

 /* تكبير الصورة داخل Venobox */
.vbox-content img {
  max-width: 100% !important;
  max-height: 100vh !important;
  object-fit: contain;
  width: auto;
  height: auto;
}

/* اجعل أزرار التالي/السابق أوضح */
.vbox-next, .vbox-prev {
  font-size: 40px;
  color: #fff !important;
  text-shadow: 0 0 10px rgba(0,0,0,0.8);
  z-index: 9999;
}

.vbox-close {
  font-size: 30px;
  color: #fff !important;
  right: 20px;
  top: 10px;
}


.hero-section {
  height: 100vh;
  background: linear-gradient(rgba(10, 10, 10, 0.6), rgba(10, 10, 10, 0.6)),
              url('/images/your-header.jpg') center center / cover no-repeat;
  color: #fff;
  position: relative;
  text-align: center;
  padding-top: 100px;
}

.hero-title {
  font-size: 48px;
  font-weight: 700;
  line-height: 1.3;
}

.hero-subtitle {
  font-size: 20px;
  color: #e0e0e0;
}

.btn-hero {
  background-color: #ff4c60;
  border: none;
  padding: 12px 30px;
  font-size: 16px;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.btn-hero:hover {
  background-color: #e63950;
  transform: scale(1.05);
}
.section-title-area {
  background-color: #f9f9f9;
  padding: 80px 0 40px;
  margin-top: 70px; /* لتعويض الهيدر الثابت */
  border-bottom: 1px solid #eee;
}

.section-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: #333;
}

.section-subtitle {
  font-size: 1rem;
  color: #777;
  margin-top: 10px;
}




</style>


</head>

<body>


 <!-- ======= Header ======= -->
  @include('layouts.body.header')
 <!-- End Header -->

  <!-- ======= Hero Section ======= -->

 <!-- End Hero -->

  <main id="main">

    @yield('home_content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.body.footer')
  <!-- End Footer -->



  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>




</body>

</html>
