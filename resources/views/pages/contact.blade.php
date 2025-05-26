@extends('layouts.master_home')
@section('home_content')


{{-- <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Contact</h2>
        <ol>
          <li><a href="{{route('main.home')}}">Home</a></li>
          <li>Contact</li>
        </ol>
      </div>

    </div>
  </section> --}}
<section class="section-title-area">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-down">
      <div class="col-lg-8 text-center">
        <h2 class="section-title">📍 تواصل معنا</h2>
        <p class="section-subtitle">نحن هنا لمساعدتك في أي وقت، لا تتردد في التواصل معنا.</p>
      </div>
    </div>
  </div>
</section>





  <!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <div class="map-section">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3626.195709452236!2d46.703822775193174!3d24.6513909780664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f04f777535ae1%3A0xa908e46a3d016b42!2sAl%20Rasheed%20Pastries%20%26%20Sweets!5e0!3m2!1sen!2ssa!4v1748292103380!5m2!1sen!2ssa" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
{{-- <div id="map" style="width: 100%; height: 450px;"></div> --}}


  <section id="contact" class="contact">
    <div class="container">

      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
              <p>{{$contacts->address}}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>{{$contacts->email}}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>{{$contacts->phone}}</p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          @if(Session::has('message'))
          <div class="alert alert-success">
              {{Session::get('message')}}
          </div>
          @endif
        <form action="{{route('contact.form')}}" method="post">
          @csrf
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name"   />

              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email"   />

              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject"  placeholder="Subject"  />

            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5"  placeholder="Message"></textarea>

            </div>

            <button class="btn btn-success" type="submit">Send Message</button>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

@endsection
