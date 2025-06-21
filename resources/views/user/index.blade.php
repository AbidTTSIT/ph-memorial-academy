@extends('user.layouts.master')
@section('content')
    <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="hero-wrapper">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-delay="100">
              <h1>Inspiring Excellence Through Education</h1>
              <p>Join a community committed to academic success and personal growth. At PH Memorial Academy, we believe in nurturing potential and empowering students to reach their highest aspirations.</p>
              <div class="stats-row">
                <div class="stat-item">
                  <span class="stat-number">96%</span>
                  <span class="stat-label">Success Rate</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">12:1</span>
                  <span class="stat-label">Student-Teacher Ratio</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">50+</span>
                  <span class="stat-label">Faculties</span>
                </div>
              </div>
              <div class="action-buttons">
                <a href="{{ route('contact') }}" class="btn-primary">Start Your Journey</a>
                <a href="{{ route('about') }}" class="btn-secondary">More</a>
              </div>
            </div>
            <div class="col-lg-6 hero-media" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{ asset('assets/user/img/showcase-6.jpeg') }}" alt="Education" class="img-fluid main-image">
              <div class="image-overlay">
                <div class="badge-accredited">
                  <i class="bi bi-patch-check-fill"></i>
                  <span>Accredited Excellence</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="feature-cards-wrapper" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-book-fill"></i>
                </div>
                <div class="feature-content">
                  <h3>Innovative Curriculum</h3>
                  <p>Modern, practical, and engaging learning designed for real-world success.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-card active">
                <div class="feature-icon">
                  <i class="bi bi-laptop-fill"></i>
                </div>
                <div class="feature-content">
                  <h3>Modern Facilities</h3>
                  <p>Smart classrooms, labs, library, and sports areas for all-round growth.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="feature-content">
                  <h3>Expert Faculty</h3>
                  <p>Experienced teachers who mentor, inspire, and guide every student.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="upcoming-event" data-aos="fade-up" data-aos-delay="400">
        <div class="container">
          <div class="event-content">
            <div class="event-date">
              <span class="day">15</span>
              <span class="month">JUL</span>
            </div>
            <div class="event-info">
              <h3>Spring Semester Open College</h3>
              <p>Visit our campus to explore facilities, interact with faculty, and get details on admission & scholarships.</p>
            </div>
            <div class="event-action">
              <a href="#" class="btn-event">RSVP Now</a>
              <span class="countdown">Starts in 3 weeks</span>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-content" data-aos="fade-up" data-aos-delay="200">
              <h3>Our Story</h3>
              <h2>Educating Minds, Inspiring Hearts</h2>
              <p>Since 2000, PH Memorial Academy has been a pillar of quality education and values. From a humble beginning to a modern institution, we’ve continued to grow while staying true to our mission — nurturing young minds and shaping futures.</p>

              <div class="timeline">
                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h4>2000</h4>
                    <p>Foundation laid with a vision to provide accessible, value-based education.</p>
                  </div>
                </div>

                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h4>2007</h4>
                    <p>Expanded with new classrooms and science labs to meet growing student needs.</p>
                  </div>
                </div>

                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h4>2015</h4>
                    <p>Introduced computer education and activity-based learning programs.</p>
                  </div>
                </div>

                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h4>2022</h4>
                    <p>Upgraded campus infrastructure with modern facilities to support digital learning.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-image" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{ asset('assets/user/img/education/campus-5.jpeg') }}" alt="Campus" class="img-fluid rounded">

              <div class="mission-vision" data-aos="fade-up" data-aos-delay="400">
                <div class="mission">
                  <h3>Our Mission</h3>
                  <p>To provide holistic education that balances academics, values, and creativity — empowering students to lead with knowledge and character.</p>
                </div>

                <div class="vision">
                  <h3>Our Vision</h3>
                  <p>To be a leading educational institution known for excellence, inclusivity, and innovation in shaping tomorrow’s leaders.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-12">
            <div class="core-values" data-aos="fade-up" data-aos-delay="500">
              <h3 class="text-center mb-4">Core Values</h3>
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-book"></i>
                    </div>
                    <h4>Academic Excellence</h4>
                    <p>Pursuing the highest standards in teaching and learning.</p>
                  </div>
                </div>

                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-people"></i>
                    </div>
                    <h4>Community Engagement</h4>
                    <p>Building strong connections with families and society.</p>
                  </div>
                </div>

                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-lightbulb"></i>
                    </div>
                    <h4>Innovation</h4>
                    <p>Encouraging creativity and forward thinking.</p>
                  </div>
                </div>

                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-globe"></i>
                    </div>
                    <h4>Global Perspective</h4>
                    <p>Fostering cultural awareness and global outlook.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Featured Programs Section -->
    <section id="featured-programs" class="featured-programs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Programs</h2>
        <p>Highlighting our top academic offerings for 2025. Committed to excellence and student success.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div class="program-banner">
              <div class="banner-image">
                <img src="{{ asset('assets/user/img/education/campus-3.jpeg') }}" alt="Program" class="img-fluid">
                <div class="banner-badge">
                  <span class="badge-text">Popular</span>
                </div>
              </div>
              <div class="banner-info">
                <div class="program-header">
                  <h3>Engineering &amp; Technology</h3>
                  <div class="program-stats">
                    <span><i class="bi bi-people-fill"></i> 450+ Students</span>
                    <span><i class="bi bi-award-fill"></i> 95% Success Rate</span>
                  </div>
                </div>
                <p>Offering cutting-edge programs in engineering and technology. Equipping students with skills for a tech-driven future.</p>
                <div class="program-details">
                  <div class="detail-item">
                    <i class="bi bi-calendar-check"></i>
                    <span>Duration: 4 Years</span>
                  </div>
                  <div class="detail-item">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span>Bachelor's Degree</span>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Program Banner -->

          <div class="col-lg-6">
            <div class="programs-grid">
              <div class="row g-3">
                <div class="col-12" data-aos="fade-left" data-aos-delay="200">
                  <div class="program-item">
                    <div class="item-icon">
                      <img src="{{ asset('assets/user/img/education/education-4.webp') }}" alt="Program" class="img-fluid">
                    </div>
                    <div class="item-content">
                      <h4>Business Management</h4>
                      <p>Nurturing future leaders with comprehensive business skills.</p>
                      <div class="meta-info">
                        <span>3 Years</span>
                        <span>Master's Degree</span>
                      </div>
                    </div>
                    <div class="item-arrow">
                      <i class="bi bi-arrow-right"></i>
                    </div>
                  </div>
                </div>

                <div class="col-12" data-aos="fade-left" data-aos-delay="300">
                  <div class="program-item">
                    <div class="item-icon">
                      <img src="{{ asset('assets/user/img/education/computer-lab.jpeg') }}" alt="Program" class="img-fluid">
                    </div>
                    <div class="item-content">
                      <h4>Computer Lab</h4>
                      <p>Providing state-of-the-art facilities for hands-on learning.</p>
                      <div class="meta-info">
                        <span>2 Years</span>
                        <span>Certificate</span>
                      </div>
                    </div>
                    <div class="item-arrow">
                      <i class="bi bi-arrow-right"></i>
                    </div>
                  </div>
                </div>

                <div class="col-12" data-aos="fade-left" data-aos-delay="400">
                  <div class="program-item">
                    <div class="item-icon">
                      <img src="{{ asset('assets/user/img/education/ground-play.jpeg') }}" alt="Program" class="img-fluid">
                    </div>
                    <div class="item-content">
                      <h4>Play Ground</h4>
                      <p>Promoting physical health and teamwork through sports.</p>
                      <div class="meta-info">
                        <span>5 Years</span>
                        <span>Bachelor's Degree</span>
                      </div>
                    </div>
                    <div class="item-arrow">
                      <i class="bi bi-arrow-right"></i>
                    </div>
                  </div>
                </div>

                <div class="col-12" data-aos="fade-left" data-aos-delay="500">
                  <div class="program-item">
                    <div class="item-icon">
                      <img src="{{ asset('assets/user/img/education/education-10.webp') }}" alt="Program" class="img-fluid">
                    </div>
                    <div class="item-content">
                      <h4>Creative Arts</h4>
                      <p>Fostering creativity and artistic expression.</p>
                      <div class="meta-info">
                        <span>3 Years</span>
                        <span>Bachelor's Degree</span>
                      </div>
                    </div>
                    <div class="item-arrow">
                      <i class="bi bi-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Programs Grid -->

        </div>

      </div>

    </section><!-- /Featured Programs Section -->

    <!-- Students Life Block Section -->
    <section id="students-life-block" class="students-life-block section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Students Life</h2>
        <p>Explore a vibrant campus with 2500+ active students, engaging programs, and year-round events.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5 mb-5">
          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            <div class="hero-image-wrapper">
              <img src="{{ asset('assets/user/img/education/student-life.jpeg') }}" alt="Student Life" class="img-fluid main-image">
              <div class="floating-card" data-aos="zoom-in" data-aos-delay="400">
                <div class="card-icon">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="card-content">
                  <span class="card-number">2500+</span>
                  <span class="card-label">Active Students</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <div class="content-wrapper">
              <div class="section-badge" data-aos="fade-up" data-aos-delay="350">
                <span>Student Life</span>
              </div>
              <h2 data-aos="fade-up" data-aos-delay="400">Inspiring Student Experience</h2>
              <p class="lead-text" data-aos="fade-up" data-aos-delay="450">Engage in dynamic learning with inclusive programs and vibrant community life.</p>

              <div class="info-grid" data-aos="fade-up" data-aos-delay="500">
                <div class="info-item">
                  <div class="info-icon">
                    <i class="bi bi-calendar-event"></i>
                  </div>
                  <div class="info-text">
                    <strong>Year-Round Events</strong>
                    <span>Diverse activities throughout the year</span>
                  </div>
                </div>

                <div class="info-item">
                  <div class="info-icon">
                    <i class="bi bi-award"></i>
                  </div>
                  <div class="info-text">
                    <strong>Achievement Programs</strong>
                    <span>Designed to unlock student potential</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="activities-showcase">
          <div class="row g-4">
            <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
              <div class="featured-activity">
                <div class="activity-media">
                  <img src="{{ asset('assets/user/img/education/activities-2.webp') }}" alt="Featured Activity" class="img-fluid">
                  <div class="activity-overlay">
                    <div class="overlay-content">
                      <h4>Student Organizations</h4>
                      <p>Join vibrant student-led groups to build leadership, teamwork, and real-world skills.</p>
                      <a href="#" class="overlay-btn">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
              <div class="activities-list">
                <div class="activity-item" data-aos="slide-up" data-aos-delay="350">
                  <div class="activity-thumb">
                    <img src="{{ asset('assets/user/img/education/activities-6.webp') }}" alt="Research Projects" class="img-fluid">
                  </div>
                  <div class="activity-info">
                    <h6>Research Projects</h6>
                    <p>Learn by doing and exploring new ideas</p>
                  </div>
                </div>

                <div class="activity-item" data-aos="slide-up" data-aos-delay="400">
                  <div class="activity-thumb">
                    <img src="{{ asset('assets/user/img/education/activities-1.webp') }}" alt="Community Service" class="img-fluid">
                  </div>
                  <div class="activity-info">
                    <h6>Community Service</h6>
                    <p> Make a difference through social work</p>
                  </div>
                </div>

                <div class="activity-item" data-aos="slide-up" data-aos-delay="450">
                  <div class="activity-thumb">
                    <img src="{{ asset('assets/user/img/education/activities-4.webp') }}" alt="Innovation Labs" class="img-fluid">
                  </div>
                  <div class="activity-info">
                    <h6>Innovation Labs</h6>
                    <p> Build and experiment with creative solutions</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Students Life Block Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Hear what our students and faculty have to say about their experience at our college.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonial-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>

          <div class="swiper-wrapper">

            <!-- Testimonial Slide 1 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="testimonial-header">
                  <img src="{{ asset('assets/user/img/person/person-f-12.webp') }}" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>The courses here are comprehensive and well-structured, preparing me for a successful career.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Priya Sharma</h5>
                  <span>Writer</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 2 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="300">
                <div class="testimonial-header">
                  <img src="{{ asset('assets/user/img/person/person-m-8.webp') }}" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>The faculty support and resources have been invaluable to my research work.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Arjun Patel</h5>
                  <span>Professor of Engineering</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 3 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="400">
                <div class="testimonial-header">
                  <img src="{{ asset('assets/user/img/person/person-f-6.webp') }}" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Great campus life and excellent opportunities for extracurricular activities.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Neha Reddy</h5>
                  <span>Arts Student</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 4 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="500">
                <div class="testimonial-header">
                  <img src="{{ asset('assets/user/img/person/person-m-12.webp') }}" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>The practical training programs have greatly enhanced my skills.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Vikram Singh</h5>
                  <span>Mechanical Engineering Student</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 5 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="600">
                <div class="testimonial-header">
                  <img src="{{ asset('assets/user/img/person/person-f-10.webp') }}" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>The college provides a supportive environment for personal growth.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Anjali Gupta</h5>
                  <span>Counseling Faculty</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

          </div>

          <div class="swiper-navigation">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <div class="intro-content" data-aos="fade-up" data-aos-delay="200">
              <h2 class="section-heading">Empowering Futures with Exceptional Education</h2>
              <p class="section-description">Providing world-class education and innovative learning opportunities. Committed to fostering talent and preparing students for global challenges.</p>
            </div>
          </div>
        </div>

        <div class="row g-4 mt-4">
          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="metric-card" data-aos="flip-left" data-aos-delay="300">
              <div class="metric-header">
                <div class="metric-icon-wrapper">
                  <i class="bi bi-mortarboard-fill"></i>
                </div>
                <div class="metric-value">
                  <span data-purecounter-start="0" data-purecounter-end="87" data-purecounter-duration="1" class="purecounter"></span>%
                </div>
              </div>
              <div class="metric-info">
                <h4>Success Rate</h4>
                <p>Alumni employment within 6 months</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="metric-card" data-aos="flip-left" data-aos-delay="400">
              <div class="metric-header">
                <div class="metric-icon-wrapper">
                  <i class="bi bi-building"></i>
                </div>
                <div class="metric-value">
                  <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
                </div>
              </div>
              <div class="metric-info">
                <h4>Campus Locations</h4>
                <p>Across the country serving students</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="metric-card" data-aos="flip-left" data-aos-delay="500">
              <div class="metric-header">
                <div class="metric-icon-wrapper">
                  <i class="bi bi-trophy-fill"></i>
                </div>
                <div class="metric-value">
                  <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>+
                </div>
              </div>
              <div class="metric-info">
                <h4>Awards Received</h4>
                <p>Recognition for educational excellence</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="metric-card" data-aos="flip-left" data-aos-delay="600">
              <div class="metric-header">
                <div class="metric-icon-wrapper">
                  <i class="bi bi-globe"></i>
                </div>
                <div class="metric-value">
                  <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>+
                </div>
              </div>
              <div class="metric-info">
                <h4>Countries Represented</h4>
                <p>Diverse international student body</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-12">
            <div class="highlights-section" data-aos="fade-up" data-aos-delay="700">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="highlights-content">
                    <h3 class="highlights-title">Shaping Future Innovators Today</h3>
                    <p class="highlights-text">Nurturing creativity and leadership with cutting-edge education. Dedicated to equipping students with skills for a dynamic world.</p>
                    <div class="highlights-features">
                      <div class="feature-item" data-aos="fade-right" data-aos-delay="800">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Innovative curriculum design</span>
                      </div>
                      <div class="feature-item" data-aos="fade-right" data-aos-delay="900">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>World-class faculty expertise</span>
                      </div>
                      <div class="feature-item" data-aos="fade-right" data-aos-delay="1000">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Comprehensive student support</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="highlights-gallery">
                    <div class="gallery-grid">
                      <div class="gallery-item large" data-aos="zoom-in" data-aos-delay="800">
                        <img src="{{ asset('assets/user/img/education/campus-3.jpeg') }}" alt="Campus Life" class="img-fluid" loading="lazy">
                        <div class="gallery-overlay">
                          <h5>Modern Campus</h5>
                        </div>
                      </div>
                      <div class="gallery-item small" data-aos="zoom-in" data-aos-delay="900">
                        <img src="{{ asset('assets/user/img/education/travel-bus.jpeg') }}" alt="Students" class="img-fluid" loading="lazy">
                        <div class="gallery-overlay">
                          <h6>Bus Facilities</h6>
                        </div>
                      </div>
                      <div class="gallery-item small" data-aos="zoom-in" data-aos-delay="1000">
                        <img src="{{ asset('assets/user/img/education/teacher-7.webp') }}" alt="Faculty" class="img-fluid" loading="lazy">
                        <div class="gallery-overlay">
                          <h6>Expert Faculty</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Stats Section -->

  </main>
@endsection