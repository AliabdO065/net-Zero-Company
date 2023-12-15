<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Dashboard  {{Auth::user()->name}} </title>
    <meta property="og:title" content="Dashboard">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="https://uselooper.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta property="og:url" content="https://uselooper.com">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <script type="application/ld+json">
      {
        "name": "Looper - Bootstrap 4 Admin Theme",
        "description": "Responsive admin theme build on top of Bootstrap 4",
        "author":
        {
          "@type": "Person",
          "name": "Beni Arisandi"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Dashboard",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('dashboard/assets/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('dashboard/assets/favicon.ico')}}">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/flatpickr/flatpickr.min.css')}}"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/stylesheets/theme.min.css')}}" data-skin="default">
    <link rel="stylesheet" href="{{asset('dashboard/assets/stylesheets/theme-dark.min.css')}}" data-skin="dark">
    <link rel="stylesheet" href="{{asset('dashboard/assets/stylesheets/custom.css')}}">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add flag class to html immediately
      if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!-- .app -->
    <div class="app">
      <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
      <!-- .app-header -->
      <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <!-- toggle aside menu -->
            <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
            <a href="{{route('dashboard.index')}}">
                <img src="{{asset('dashboard/assets/logo.png')}}" alt="" class="top-bar-brand-img" style="width: 100px;">
            </a>
          </div><!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-full">
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
              <!-- .nav -->
              <ul class="header-nav nav">
                <!-- .nav-item -->
                <!-- .nav-item -->
                <a href="{{route('dashboard.contact.contact.allmessage')}}" class="nav-item">
                  <a class="nav-link" href="{{route('dashboard.contact.contact.allmessage')}}">
                    <span class="oi oi-envelope-open"></span></a> <!-- .dropdown-menu -->
                </a>

                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-grid-three-up"></span></a> <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <div class="dropdown-arrow"></div><!-- .dropdown-sheets -->
                    <div class="dropdown-sheets">
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="{{route('dashboard.services')}}" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i class="fa fa-server"></i></span> <span class="tile-peek">Services</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="{{route('dashboard.projects')}}" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i class="oi oi-fork"></i></span> <span class="tile-peek">Projects</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="{{route('dashboard.news')}}" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i class="fa fa-newspaper"></i></span> <span class="tile-peek">News</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                    </div><!-- .dropdown-sheets -->
                  </div><!-- .dropdown-menu -->
                </li><!-- /.nav-item -->
              </ul><!-- /.nav -->
              <!-- .btn-account -->
              <div class="dropdown d-none d-md-flex">
                <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name">{{Auth::user()->name}} </span></span></button> <!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                  <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                  <h6 class="dropdown-header d-none d-md-block d-lg-none">{{Auth::user()->name}} </h6>
                  <a class="dropdown-item" href="{{route('logout')}}"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                </div><!-- /.dropdown-menu -->
              </div><!-- /.btn-account -->
            </div><!-- /.top-bar-item -->
          </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
      </header>



      <!-- /.app-header -->

@include('dashboard.layouts.side')


      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        @yield('content')


      </main>

      <!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="{{asset('dashboard/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="{{asset('dashboard/assets/vendor/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/stacked-menu/js/stacked-menu.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/chart.js/Chart.min.js')}}"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="{{asset('dashboard/assets/javascript/theme.min.js')}}"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{asset('dashboard/assets/javascript/pages/dashboard-demo.js')}}"></script> <!-- END PAGE LEVEL JS -->

  </body>
</html>
