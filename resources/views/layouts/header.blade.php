@php $data = DB::table('logo')->where('id','1')->first(); @endphp

<!-- ======= Header ======= -->
  <header id="header" class="sticky-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="/" class="logo me-auto"><img src="{{ asset($data->featured_image) }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          @if(Auth::guest())
          <li><a class="nav-link" href="{{route('protect-websites')}}">Protect websites</a></li>
          <li><a class="nav-link" href="{{route('copyright-works')}}">Copyright works</a></li>
          <li><a class="nav-link" href="{{route('professional-takedowns')}}">Takedowns</a></li>
          <li><a class="nav-link" href="{{route('login')}}">Log in</a></li>
          <li><a class="nav-link" href="{{route('register')}}">Register</a></li>
          @else
          <li><a class="nav-link" href="{{route('websites')}}">Websites</a></li>
          <li><a class="nav-link" href="{{route('work')}}">Work</a></li>
          <li><a class="nav-link" href="{{route('takedown')}}">Takedowns</a></li>
          <li class="dropdown"><a href="#"><span>Tools</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('spy')}}">Website spy</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="{{route('pricing')}}">Upgrade</a></li>
          <li class="dropdown"><a href="#"><span>My Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('settings')}}">Settings</a></li>
              <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none"> @csrf </form>
              </li>
            </ul>
          </li>
          @if(isset(auth()->user()->admin) && auth()->user()->admin == 1)
          <li><a class="getstarted" href="{{route('dashboard')}}">Dashboard</a></li>
          @endif
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->