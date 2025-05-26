<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>لوحة التحكم</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700|Tajawal:400,500,700&display=swap" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('backend/assets/css/sleek.rtl.css')}}" />

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />

  <!-- FAVICON -->
  <link href="{{asset('backend/assets/img/favicon.png')}}" rel="shortcut icon" />

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('backend/assets/plugins/nprogress/nprogress.js')}}"></script>
  <style>
    body, html {
      font-family: 'Cairo', 'Tajawal', sans-serif;
    }
/* responsive sidebar */
@media (max-width: 768px) {
  .sidebar {
    position: fixed;
    right: 0;
    top: 0;
    height: 100%;
    width: 250px;
    background-color: #343a40;
    z-index: 9999;
    transform: translateX(100%);
    transition: transform 0.3s ease-in-out;
  }

  .sidebar.sidebar-toggle-display {
    transform: translateX(0);
  }

  .page-wrapper {
    margin-right: 0 !important;
  }

  .mobile-sticky-body-overlay {
    display: none;
    position: fixed;

  </style>
</head>

<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>

  <div class="mobile-sticky-body-overlay"></div>
  <div class="wrapper">
    @include('admin.body.sidebar')

    <div class="page-wrapper">
      <header class="main-header " id="header">
        {{-- <nav class="navbar navbar-static-top navbar-expand-lg">
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">إظهار/إخفاء القائمة</span>
          </button>

          <div class="navbar-right ">
            <ul class="nav navbar-nav">
              <li class="dropdown notifications-menu">
                <button class="dropdown-toggle" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                </button>
              </li>

              <li class="dropdown user-menu" >
                /* <li class="dropdown user-menu" style="margin-right: auto;"> */

                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  /* <span class="d-none d-lg-inline-block">{{Auth::user()->name}}</span> */
                /* </button> */
                <ul class="dropdown-menu dropdown-menu-left">
                  <li class="dropdown-header">
                    <div class="d-inline-block">
                      /* {{Auth::user()->name}} <small class="pt-1">{{Auth::user()->email}}</small> */
                    </div>
                  </li>
                  <li>
                    /* <a href="{{route('chnage.profile')}}"> */
                      <i class="mdi mdi-account"></i> حسابي
                    </a>
                  </li>
                  <li>
                    /* <a href="{{route('chnage.password')}}"> */
                      /* <i class="mdi mdi-lock"></i> تغيير كلمة المرور */
                    </a>
                  </li>
                  <li>
                    <a href="#"> <i class="mdi mdi-settings"></i> الإعدادات </a>
                  </li>
                  <li class="dropdown-footer">
                    /* <a href="{{route('user.logout')}}"> <i class="mdi mdi-logout"></i> تسجيل الخروج </a> */
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav> --}}
        <nav class="navbar navbar-static-top navbar-expand-lg">

  <!-- الزر الجانبي -->

  <button id="sidebar-toggler" class="sidebar-toggle">
  <span class="sr-only">إظهار/إخفاء القائمة</span>
</button>

  <!-- اسم المستخدم على اليسار (أقصى شيء) -->
  <ul class="nav navbar-nav ms-auto" style="margin-inline-start: auto;">
    <li class="dropdown user-menu">
      <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
        <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end" style="
    margin-right: -100px;
">
         <li class="dropdown-header">
                    <div class="d-inline-block">
                      {{Auth::user()->name}} <small class="pt-1">{{Auth::user()->email}}</small>
                    </div>
                  </li>
                  <li>
                    <a href="{{route('chnage.profile')}}">
                      <i class="mdi mdi-account"></i> حسابي
                    </a>
                  </li>
                  <li>
                    <a href="{{route('chnage.password')}}">
                      <i class="mdi mdi-lock"></i> تغيير كلمة المرور
                    </a>
                  </li>
                  <li>
                    <a href="#"> <i class="mdi mdi-settings"></i> الإعدادات </a>
                  </li>
                  <li class="dropdown-footer">
                    <a href="{{route('user.logout')}}"> <i class="mdi mdi-logout"></i> تسجيل الخروج </a>
                  </li>
      </ul>
    </li>
  </ul>

  <!-- الباقي -->
  <div class="navbar-right">
    <ul class="nav navbar-nav">
      <!-- التنبيهات وغيرها -->
    </ul>
  </div>
</nav>

      </header>

      <div class="content-wrapper">
        <div class="content">
          @yield('admin')
        </div>
      </div>

      <footer class="footer mt-auto">
        <div class="copyright bg-white">
          <p>
            &copy; <span id="copy-year">2019</span> تصميم بواسطة
            <a class="text-primary" href="#" target="_blank">الغرفة الرقمية</a>
          </p>
        </div>
        <script>
          document.getElementById("copy-year").innerText = new Date().getFullYear();
        </script>
      </footer>
    </div>
  </div>

  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
  <script src="{{asset('backend/assets/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/toaster/toastr.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/charts/Chart.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/ladda/spin.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/ladda/ladda.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/select2/js/select2.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/daterangepicker/moment.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/jekyll-search.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/sleek.js')}}"></script>
  <script src="{{asset('backend/assets/js/chart.js')}}"></script>
  <script src="{{asset('backend/assets/js/date-range.js')}}"></script>
  <script src="{{asset('backend/assets/js/map.js')}}"></script>
  <script src="{{asset('backend/assets/js/custom.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
    @if(Session::has('message'))
      var type = "{{Session::get('alert-type','info')}}"
      switch(type) {
        case 'info': toastr.info("{{Session::get('message')}}"); break;
        case 'success': toastr.success("{{Session::get('message')}}"); break;
        case 'warning': toastr.warning("{{Session::get('message')}}"); break;
        case 'error': toastr.error("{{Session::get('message')}}"); break;
      }
    @endif



  document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.querySelector('.sidebar');
    const overlay = document.querySelector('.mobile-sticky-body-overlay');
    const toggler = document.getElementById('sidebar-toggler');

    toggler.addEventListener('click', function () {
      sidebar.classList.toggle('sidebar-toggle-display');
      overlay.classList.toggle('active');
    });

    overlay.addEventListener('click', function () {
      sidebar.classList.remove('sidebar-toggle-display');
      overlay.classList.remove('active');
    });
  });
  </script>



</body>
</html>
