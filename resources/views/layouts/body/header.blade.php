@php
    $social = DB::table('sociallinks')->first();

@endphp

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto">
            <a href="{{ route('main.home') }}"> <img src="{{ asset('frontend/assets/img/1.jpg') }}"
                    class="logo-img-full"></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block" style="
    direction: rtl;
    font-family: 'Cairo', sans-serif;
    direction: rtl;
    text-align: right;
">

            <ul>
                <li class="active"><a href="{{ route('main.home') }}">الريئسة</a></li>
                <li><a href="#about-us">معلومات عنا</a></li>
                <li><a href="#services">ما نقدمه</a></li>
                <li class="drop-down"><a href="#">أعمالنا</a>
                    <ul style="max-height: 300px; overflow-y: auto; direction: rtl;">
                        <li><a href="{{route('portfolio', $id=1)}}"style="font-size: 20px;">بنرات</a></li>
                        <li><a href="{{route('portfolio', $id=2)}}"style="font-size: 20px;">استكرات</a></li>
                        <li><a href="{{route('portfolio', $id=3)}}"style="font-size: 20px;">بنرات</a></li>
                        <li><a href="{{route('portfolio', $id=4)}}"style="font-size: 20px;">استكرات</a></li>
                        <li><a href="{{route('portfolio', $id=5)}}"style="font-size: 20px;">فولدرات</a></li>
                        <li><a href="{{route('portfolio', $id=6)}}"style="font-size: 20px;">طباعة كتب ومجلات</a></li>
                        <li><a href="{{route('portfolio', $id=7)}}"style="font-size: 20px;">طباعة برشورات</a></li>
                        <li><a href="{{route('portfolio', $id=8)}}"style="font-size: 20px;">طباعة كروت شخصية</a></li>
                        <li><a href="{{route('portfolio', $id=9)}}"style="font-size: 20px;">طباعة فواتير</a></li>
                        <li><a href="{{route('portfolio', $id=10)}}"style="font-size: 20px;">سندات</a></li>
                        <li><a href="{{route('portfolio', $id=11)}}"style="font-size: 20px;">مجسمات</a></li>
                        <li><a href="{{route('portfolio', $id=12)}}"style="font-size: 20px;">كابات</a></li>
                        <li><a href="{{route('portfolio', $id=13)}}"style="font-size: 20px;">كاسات ورقية</a></li>
                        <li><a href="{{route('portfolio', $id=14)}}"style="font-size: 20px;">اكياس ورقية</a></li>
                        <li><a href="{{route('portfolio', $id=15)}}"style="font-size: 20px;">شنط</a></li>
                        <li><a href="{{route('portfolio', $id=16)}}"style="font-size: 20px;">دروع</a></li>
                        <li><a href="{{route('portfolio', $id=17)}}"style="font-size: 20px;">Id</a></li>
                        <li><a href="{{route('portfolio', $id=18)}}"style="font-size: 20px;">لوحات زنكور</a></li>
                        <li><a href="{{route('portfolio', $id=19)}}"style="font-size: 20px;">لوحات استيل</a></li>
                        <li><a href="{{route('portfolio', $id=20)}}"style="font-size: 20px;">لوحات اكريلك</a></li>
                        <li><a href="{{route('portfolio', $id=21)}}"style="font-size: 20px;">فينيل</a></li>
                        <li><a href="{{route('portfolio', $id=22)}}"style="font-size: 20px;">كتيبات</a></li>
                        <li><a href="{{route('portfolio', $id=23)}}"style="font-size: 20px;">بوكسات</a></li>
                        <li><a href="{{route('portfolio', $id=24)}}"style="font-size: 20px;">هدايا دعائية</a></li>
                        <li><a href="{{route('portfolio', $id=25)}}"style="font-size: 20px;">اكياس</a></li>
                    </ul>
                </li>


                {{-- <li><a href="{{ route('portfolio') }}">Portfolio</a></li> --}}
                <li><a href="#clients">عملاؤنا</a></li>
                <li><a href="{{ route('contact') }}">تواصل معنا</a></li>

            </ul>
        </nav><!-- .nav-menu -->

        <div class="header-social-links">
            <a href="{{ $social->tw }}" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="{{ $social->fb }}" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="{{ $social->ins }}" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="{{ $social->ln }}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>

    </div>
</header>
