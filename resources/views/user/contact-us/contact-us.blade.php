@extends('user.layouts.master')
@section('content')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-main-wrapper">
          <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d456954.51866274816!2d82.93269564578621!3d26.521501683711207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39916dcffc1d9b19%3A0xfcbadb943940eef1!2sP%20H%20Memorial%20School!5e0!3m2!1sen!2sin!4v1750483633130!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="contact-content">
            <div class="contact-cards-container" data-aos="fade-up" data-aos-delay="300">
              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="contact-text">
                  <h4>Location</h4>
                  <p>Add:- Vill:- Patarahatha, Post:- Siswa urf Siuwa (273403) Gorakhpur UP.</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="contact-text">
                  <h4>Email</h4>
                  <p>phma.principal@gmail.com</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="contact-text">
                  <h4>Call</h4>
                  <p>+91 738-830-7291 <br>
                    +91 900-522-2189</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-clock"></i>
                </div>
                <div class="contact-text">
                  <h4>Open Hours</h4>
                  <p>Monday-Saturday: 9AM - 4PM</p>
                </div>
              </div>
            </div>

            <div class="contact-form-container" data-aos="fade-up" data-aos-delay="400">
              <h3>Get in Touch</h3>
        
              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="form-submit">
                  <button type="submit">Send Message</button>
                  <div class="social-links">
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection