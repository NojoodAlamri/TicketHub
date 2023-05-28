<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ticketing</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
  
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                  <path d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z"/>
                  <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z"/>
                </svg>
                حجوزات
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarText"
                aria-controls="navbarText"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fas fa-bars"></i>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">الرئيسية</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">قصتنا </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">تواصل معنا</a>
                  </li>
                </ul>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                    {{-- <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a> --}}

                                    <button type="button" class="btn btn-tertiary me-3">
                                      <a href="/login" class="link-light nav-link">تسجيل الدخول</a>
                                    </button>
                            @endif

                            @if (Route::has('register'))
                                    <button type="button" class="btn btn-primary me-3">
                                      <a href="/register" class="link-light nav-link">التسجيل </a>
                                    </button>
                            @endif
                        @else
                          <a id="navbarDropdown" class="nav-link dropdown-toggle text-light me-3" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                                

                                <div class=" me-3 dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل الخروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                        @endguest

              </div>
            </div>
          </nav>

          <header>
            @yield('header')
        </header>


    <main class="py-4">
        @yield('content')
    </main>




        <footer class="text-white bg-dark text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3">
              © 2023 Nojood Alamri
            </div>
            <!-- Copyright -->
          </footer>


    </div>
</body>
</html>



