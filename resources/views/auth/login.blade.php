<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>الغرفة التجارية</title>

  <!-- خطوط قوقل -->
  <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&display=swap" rel="stylesheet">
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- إضافات CSS -->
  <link href="{{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <!-- ستايل القالب -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('backend/assets/css/sleek.css')}}" />

  <!-- أنميشن الخلفية -->
  <style>
    body, h4, p, input, button, label, a {
      font-family: 'Cairo', sans-serif;
    }
    body {
      background-color: #f8f9fa;
      overflow: hidden;
    }
    .animated-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      overflow: hidden;
    }
    .animated-bg span {
      position: absolute;
      display: block;
      width: 20px;
      height: 20px;
      background: rgba(0, 123, 255, 0.2);
      animation: animate 20s linear infinite;
      border-radius: 50%;
    }
    .animated-bg span:nth-child(odd) {
      background: rgba(0, 123, 255, 0.3);
    }
    @keyframes animate {
      0% {
        transform: translateY(100vh) scale(0);
        opacity: 0;
      }
      100% {
        transform: translateY(-10vh) scale(1.5);
        opacity: 1;
      }
    }
  </style>

  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!-- دعم المتصفحات القديمة -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>
<body class="bg-light-gray" id="body">
  <div class="animated-bg">
    <span style="left:10%; animation-delay: 0s;"></span>
    <span style="left:20%; animation-delay: 2s;"></span>
    <span style="left:30%; animation-delay: 4s;"></span>
    <span style="left:40%; animation-delay: 1s;"></span>
    <span style="left:50%; animation-delay: 3s;"></span>
    <span style="left:60%; animation-delay: 5s;"></span>
    <span style="left:70%; animation-delay: 0s;"></span>
    <span style="left:80%; animation-delay: 2s;"></span>
    <span style="left:90%; animation-delay: 4s;"></span>
  </div>

  <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="col-xl-5 col-lg-6 col-md-8">
      <div class="card shadow-lg border-0">
        @if(Session::has('message'))
        <div class="alert alert-success text-center">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="card-header bg-primary text-white text-center">
          <div class="app-brand">
            <a href="#" class="d-flex align-items-center justify-content-center text-white">
              <svg class="brand-icon mr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="33" viewBox="0 0 30 33">
                <g fill="none" fill-rule="evenodd">
                  <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                  <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                </g>
              </svg>
              <span class="brand-name h5 mb-0">لوحة التحكم</span>
            </a>
          </div>
        </div>
        <div class="card-body p-5">
          <h4 class="text-center text-dark mb-4">تسجيل الدخول</h4>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <label for="email">البريد الإلكتروني</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="example@email.com">
            </div>
            <div class="form-group">
              <label for="password">كلمة المرور</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="********">
            </div>
            <div class="d-flex justify-content-between align-items-center my-3">
              <div>
                <label class="control control-checkbox mb-0">تذكرني
                  <input type="checkbox" name="remember" />
                  <div class="control-indicator"></div>
                </label>
              </div>
              <a href="{{ route('password.request') }}" class="text-blue">نسيت كلمة المرور؟</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block">دخول</button>
            <p class="text-center mt-3 mb-0">ليس لديك حساب؟ <a href="{{ route('register') }}" class="text-blue">إنشاء حساب جديد</a></p>
          </form>
        </div>
      </div>
      <div class="text-center mt-3">
        <p class="mb-0">&copy; تصميم وتطوير بواسطة <a href="#" class="text-primary">الغرفة الرقمية</a></p>
      </div>
    </div>
  </div>
</body>
</html>
