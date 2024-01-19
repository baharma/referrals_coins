  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">

          <h1 class="logo me-auto"><a href="index.html">Laravel Fullstack</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                  <li><a class="nav-link scrollto" href="#about">About</a></li>
                  <li><a class="nav-link scrollto" href="#services">Services</a></li>
                  <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
                  <li><a class="nav-link scrollto" href="#team">Team</a></li>
                  @if (Auth::check())
                  <li class="dropdown"><a href="#"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link scrollto p-3">Logout</button>
                        </form></li>
                          <li><a href="#">My Refferals</a></li>
                      </ul>
                  </li>
                  @else
                  <li><a class="getstarted scrollto" href="{{route('login')}}">Get Started</a></li>
                  @endif

              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->
