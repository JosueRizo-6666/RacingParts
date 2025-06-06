<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>@yield('TituloPagina')</title>

    <style>
        /* Custom CSS for the Auto Parts Navbar */
        .navbar-autoparts {
            /* Main background: Deep black for a sleek, powerful look */
            background-color: #0d0d0d !important; /* Almost black */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4); /* Stronger shadow for depth */
            padding-top: 0.9rem;
            padding-bottom: 0.9rem;
            border-bottom: 4px solid #dc3545; /* Prominent racing red border at the bottom */
        }

        /* Brand styling - "RacingParts" */
        .navbar-autoparts .navbar-brand {
            color: #dc3545 !important; /* Racing red for the brand name */
            font-weight: bold;
            font-size: 2.2rem; /* Larger and more impactful */
            letter-spacing: 1.5px; /* Adds a modern touch */
            transition: color 0.3s ease;
        }
        .navbar-autoparts .navbar-brand:hover {
            color: #ff4d4d !important; /* Brighter red on hover */
        }

        /* Nav links styling */
        .navbar-autoparts .navbar-nav .nav-link {
            color: #e9ecef !important; /* Light grey for regular links */
            transition: color 0.3s ease, background-color 0.3s ease, border-radius 0.3s ease;
            border-radius: 6px; /* Slightly more rounded */
            padding: 0.7rem 1.1rem; /* More generous padding */
            margin-right: 0.6rem; /* Good spacing between links */
            font-weight: 500;
            display: flex; /* Use flexbox to align icon and text */
            align-items: center; /* Vertically center icon and text */
        }
        .navbar-autoparts .navbar-nav .nav-link:hover {
            color: #fff !important; /* White text on hover */
            background-color: rgba(220, 53, 69, 0.15); /* Subtle red tint on hover */
        }

        /* Active link styling */
        .navbar-autoparts .navbar-nav .nav-item.active .nav-link,
        .navbar-autoparts .navbar-nav .nav-link.active {
            color: #dc3545 !important; /* Racing red for active link text */
            font-weight: bold;
            background-color: rgba(220, 53, 69, 0.25); /* More prominent red background */
            border-bottom: 2px solid #dc3545; /* Red underline for active link */
            padding-bottom: calc(0.7rem - 2px); /* Adjust padding due to border */
        }

        /* Toggler icon color for dark background */
        .navbar-autoparts .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E") !important;
        }

        /* Dropdown menu styling */
        .navbar-autoparts .dropdown-menu {
            background-color: #1a1a1a; /* Slightly lighter black for dropdown */
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
            padding: 0.6rem 0;
        }
        .navbar-autoparts .dropdown-item {
            color: #e9ecef;
            transition: background-color 0.3s ease, color 0.3s ease;
            padding: 0.8rem 1.2rem; /* More padding for dropdown items */
            display: flex; /* Enable flexbox for icon alignment */
            align-items: center;
        }
        .navbar-autoparts .dropdown-item:hover,
        .navbar-autoparts .dropdown-item:focus {
            background-color: #dc3545; /* Red background on hover */
            color: #fff; /* White text on hover */
        }

        /* Style for icons in nav links and dropdowns */
        .navbar-nav .nav-link i,
        .navbar-nav .dropdown-item i {
            margin-right: 12px; /* More space for icons */
            min-width: 22px; /* Ensure icons align properly */
            text-align: center;
        }

        /* Search input and button styling */
        .navbar-autoparts .form-control {
            background-color: rgba(255, 255, 255, 0.18); /* More opaque input background */
            border-color: rgba(255, 255, 255, 0.5);
            color: #fff;
            padding: 0.7rem 0.9rem; /* Adjust padding for input */
            transition: all 0.3s ease;
        }
        .navbar-autoparts .form-control:focus {
            background-color: rgba(255, 255, 255, 0.28);
            border-color: #dc3545; /* Red border on focus */
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.35); /* Red glowing effect on focus */
        }
        .navbar-autoparts .form-control::placeholder {
            color: rgba(255, 255, 255, 0.8); /* Brighter placeholder text */
        }
        .navbar-autoparts .btn-outline-light {
            border-color: #dc3545; /* Red border for search button */
            color: #dc3545; /* Red text */
            transition: all 0.3s ease;
            padding: 0.7rem 1.2rem; /* Match input height */
        }
        .navbar-autoparts .btn-outline-light:hover {
            background-color: #dc3545; /* Red background on hover */
            color: #fff; /* White text on hover */
        }

        /* Shopping Cart Badge */
        .navbar-autoparts .badge {
            background-color: #dc3545 !important; /* Racing red badge background */
            color: #fff !important;
            font-size: 0.8em; /* Slightly larger badge text */
            vertical-align: middle;
            margin-left: 0.3rem;
            padding: 0.4em 0.6em; /* More padding for the badge */
        }
    </style>

  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark navbar-autoparts">
        <a class="navbar-brand" href="{{ url('/') }}">RacingParts</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}" aria-current="page">
                  <i class="fas fa-home"></i> Inicio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('categorias') ? 'active' : '' }}" href="{{ url('/categorias') }}">
                  <i class="fas fa-th-large"></i> Categorías
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="repuestosDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-car-alt"></i> Repuestos por Vehículo
              </a>
              <ul class="dropdown-menu" aria-labelledby="repuestosDropdown">
                <li><a class="dropdown-item" href="{{ url('/repuestos/autos') }}"><i class="fas fa-car-side"></i> Para Autos</a></li>
                <li><a class="dropdown-item" href="{{ url('/repuestos/motos') }}"><i class="fas fa-truck"></i> Para Camiones</a></li>
                <li><a class="dropdown-item" href="{{ url('/repuestos/camiones') }}"><i class="fas fa-trailer"></i> Para furgones</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ url('/ofertas') }}"><i class="fas fa-fire-alt"></i> Ofertas Flash</a></li>
              </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('proveedores') ? 'active' : '' }}" href="">
                    <i class="fas fa-truck-loading"></i> Proveedores
                </a>
            </li>
            <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="soporteDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="fas fa-life-ring"></i> Soporte
                </a>
                <ul class="dropdown-menu" aria-labelledby="soporteDropdown">
                  <li><a class="dropdown-item" href="{{ url('/contacto') }}"><i class="fas fa-headset"></i> Contáctanos</a></li>
                  <li><a class="dropdown-item" href="{{ url('/faqs') }}"><i class="fas fa-question-circle"></i> Preguntas Frecuentes</a></li>
                  <li><a class="dropdown-item" href="{{ url('/garantia') }}"><i class="fas fa-award"></i> Garantía y Devoluciones</a></li>
                </ul>
              </li>
          </ul>

          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <form class="d-flex" action="{{ url('/buscar') }}" method="GET">
                    <input
                      class="form-control me-2"
                      type="search"
                      placeholder="Buscar repuestos..."
                      aria-label="Buscar"
                      name="query"
                    />
                    <button class="btn btn-outline-light" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/carrito') }}">
                    <i class="fas fa-shopping-cart"></i> Carrito
                    <span class="badge text-bg-light rounded-pill">0</span>
                </a>
            </li>

            {{-- Dynamic User Authentication Links --}}
            @guest
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Registrarse</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle"></i> {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">
                            <i class="fas fa-user-cog"></i> Mi Perfil
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                        </a></li>
                        <li><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form></li>
                    </ul>
                </li>
            @endguest
          </ul>
        </div>
      </nav>

      <br>
    @yield('contenido')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>