@extends('layouts.master_home')

@section('home_content')
@include('layouts.body.slider')

<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>معلومات عنا</strong></h2>
      </div>

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-right">
        <h2>{{$abouts->title}}</h2>
          <h3>{{$abouts->short_dis}}</h3>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
          <p>
            {{$abouts->long_dis}}
          </p>
          <ul>
          <li><i class="ri-check-double-line"></i> {{$abouts->l1}}</li>
            <li><i class="ri-check-double-line"></i> {{$abouts->l2}}</li>
            <li><i class="ri-check-double-line"></i>{{$abouts->l3}} </li>
          </ul>
          {{-- <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p> --}}
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>ما نقدمه</strong></h2>
      <p>{{$service->mtitle}}</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <i class="bx bxl-dribbble"></i>
            </div>
            <h4><a href="">{{$service->ctitle1}}</a></h4>
            <p>{{$service->cdsc1}}</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <i class="bx bx-file"></i>
            </div>
            <h4><a href="">{{$service->ctitle2}}</a></h4>
            <p>{{$service->cdsc2}}</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-pink">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <i class="bx bx-tachometer"></i>
            </div>
            <h4><a href="">{{$service->ctitle3}}</a></h4>
            <p>{{$service->cdsc3}}</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-yellow">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <i class="bx bx-layer"></i>
            </div>
            <h4><a href="">{{$service->ctitle4}}</a></h4>
            <p>{{$service->cdsc4}}</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <i class="bx bx-slideshow"></i>
            </div>
            <h4><a href="">{{$service->ctitle5}}</a></h4>
            <p>{{$service->cdsc5}}</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-teal">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <i class="bx bx-arch"></i>
            </div>
            <h4><a href="">{{$service->ctitle6}}</a></h4>
            <p>{{$service->cdsc6}}</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up" style="
    text-align: center;
    padding-bottom: 30px;
">
        <h2>أعمالنا</h2>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">

        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">

        @foreach ($images as $img)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="{{ asset($img->image)}}" class="img-fluid" alt="">
          {{-- <div class="portfolio-info"> --}}
            {{-- <h4>PORTFOLIO</h4> --}}

            {{-- <a href="{{ asset($img->image)}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a> --}}
              {{-- <a href="{{ asset($img->image)}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1" ><i class="bx bx-plus"></i></a> --}}
            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"></i></a> --}}
          {{-- </div> --}}
        </div>
        @endforeach



        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Our Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>عملاؤنا</h2>
      </div>

      <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

        @foreach ($brands as $brand)
        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
          <img src="{{$brand->brand_image}}" class="img-fluid" alt="{{$brand->brand_name}}" style="
    height: 90px;
    width: 190px;
">
          </div>
        </div>
        @endforeach




      </div>

    </div>
  </section><!-- End Our Clients Section -->


  @endsection
