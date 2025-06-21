<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PH Memorial Academy</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  @include('user.includes.link')
</head>

<body class="index-page">

  @include('user.includes.header')

  @yield('content')

  @include('user.includes.footer')
 

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/glightbox/js/glightbox.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/user/js/main.js') }}"></script>

</body>

</html>