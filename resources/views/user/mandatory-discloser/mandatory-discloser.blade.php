@extends('user.layouts.master')
@section('content')
<main class="main">
 <!-- News Hero Section -->
    <section id="news-hero" class="news-hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <!-- Main Content Area -->
          <div class="col-lg-12">
            <!-- Featured Article -->
            <article class="featured-post position-relative mb-4" data-aos="fade-up">
              <img src="{{ asset('assets/user/img/blog/Mandatory-disclosure.jpg') }}" alt="Featured post" class="img-fluid">
              <div class="post-overlay">
                <div class="post-content">
                  <h2 class="post-title">
                    {{-- <a href="#">Mandatory Discloser</a> --}}
                  </h2>
                </div>
              </div>
            </article>


          </div><!-- End Main Content Area -->

        </div>
      </div>
    </section><!-- /News Hero Section -->


  <div class="page-title light-background">
    <div class="container">
      <iframe 
        src="https://drive.google.com/file/d/1lILiw8j2ax3JwVC79REVob_8-XKLT6jn/preview" 
        width="640" 
        height="480" 
        class="mx-auto d-block"
        allow="autoplay">
      </iframe>
    </div>
  </div>
</main>
@endsection