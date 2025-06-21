@extends('user.layouts.master')
@section('content')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

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

    <!-- Leadership Section -->
    <section id="leadership" class="leadership section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="intro-wrapper">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="intro-image">
                <img src="{{ asset('assets/user/img/education/40059.jpg') }}" alt="School Leadership" class="img-fluid rounded-lg">
                <div class="experience-badge">
                  <span class="years">25+</span>
                  <span class="text">Years of Educational Excellence</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="300">
              <div class="intro-content">
                <span class="subtitle">Administration &amp; Leadership</span>
                <h2 class="title">Visionary Leaders Guiding Tomorrow's Innovators</h2>
                <p class="description">Dedicated to excellence in education and leadership development. Our commitment drives student success and innovation.</p>
                <div class="highlights">
                  <div class="highlight-item">
                    <div class="icon-box">
                      <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <div class="content">
                      <h4>Expert Faculty</h4>
                      <p>Experienced educators shaping future leaders.</p>
                    </div>
                  </div>
                  <div class="highlight-item">
                    <div class="icon-box">
                      <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div class="content">
                      <h4>Leadership Development</h4>
                      <p>Programs designed to build strong leadership skills.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection