@extends('layouts.master_home')
@section('home_content')


{{-- <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Portolio</h2>
        <ol>
        <li><a href="{{route('main.home')}}">Home</a></li>
          <li>Portolio</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs --> --}}
<section id="hero" class="hero-section d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8">
        <h1 class="hero-title" data-aos="fade-down" data-aos-delay="200">
          مرحباً بك في معرضنا الإبداعي
        </h1>
        <p class="hero-subtitle mt-3" data-aos="fade-up" data-aos-delay="400">
          استعرض أفضل أعمالنا بكل أناقة واحترافية
        </p>
        <a href="#portfolio" class="btn btn-hero mt-4 scrollto" data-aos="zoom-in" data-aos-delay="600">
          تصفح المعرض
        </a>
      </div>
    </div>
  </div>
</section>






  <section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h1 class="hero-title">مرحباً بك في معرض الصور</h1>
        <p class="hero-subtitle mt-3">اكتشف أعمالنا وابدأ رحلتك البصرية معنا</p>
        <a href="#portfolio" class="btn btn-primary mt-4 scrollto">شاهد المعرض</a>
      </div>
    </div>
  </div>
</section>


  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">
  {{-- @if(!empty($img->image)) --}}
        @foreach ($images as $img)

             <div class="col-lg-4 col-md-6 portfolio-item filter-app">
  <a href="{{ asset($img->image) }}" class="venobox" data-gall="portfolioGallery" title="تفاصيل">
    <img src="{{ asset($img->image) }}" class="img-fluid" alt="">
  </a>
</div>



        @endforeach




      </div>

    </div>
  </section


@endsection
