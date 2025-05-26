<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>إعادة تعيين كلمة المرور</title>

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
        <div class="card-header bg-primary text-white text-center">
          <h4 class="mb-0">استعادة كلمة المرور</h4>
        </div>
        <div class="card-body p-5">
          @if (session('status'))
          <div class="alert alert-success mb-4">{{ session('status') }}</div>
          @endif

          <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
              <label for="email">البريد الإلكتروني</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="example@email.com" value="{{ old('email') }}" required autofocus>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-3">إرسال رابط إعادة التعيين</button>
            <p class="text-center mt-3 mb-0">
              <a href="{{ route('login') }}" class="text-blue">العودة لتسجيل الدخول</a>
            </p>
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
