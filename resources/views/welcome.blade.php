<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{url('/')}}/asset/fonts/icomoon/style.css" />
    <link rel="stylesheet" href="{{url('/')}}/asset/fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="{{url('/')}}/asset/css/tiny-slider.css" />
    <link rel="stylesheet" href="{{url('/')}}/asset/css/aos.css" />
    <link rel="stylesheet" href="{{url('/')}}/asset/css/style.css" />

    <title>
      Property &mdash; Free Bootstrap 5 Website Template by Untree.co
    </title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

   @include('header')

   @yield('content')

   @include('footer')
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <script src="{{url('/')}}/asset/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/asset/js/tiny-slider.js"></script>
    <script src="{{url('/')}}/asset/js/aos.js"></script>
    <script src="{{url('/')}}/asset/js/navbar.js"></script>
    <script src="{{url('/')}}/asset/js/counter.js"></script>
    <script src="{{url('/')}}/asset/js/custom.js"></script>
  </body>
</html>
