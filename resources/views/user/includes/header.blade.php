<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-end">

      <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">PH Memorial Academy</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('index') }}" class="active">Home</a></li>
          <li class="dropdown"><a href="{{ route('about') }}"><span>About us</span> </a>
          </li>
           <li class="dropdown"><a href="{{ route('mandatory.discloser') }}"><span>Mandatory Discloser</span> </a>
          </li>
          {{-- <li class="dropdown"><a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">News Details</a></li>
              <li><a href="#">Gallery</a></li>
            </ul>
          </li> --}}
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>