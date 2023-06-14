<header class="b-topBar wow slideInDown" data-wow-delay="0.7s">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-6">

      </div>
      <div class="col-md-2 col-xs-6">

      </div>
      <div class="col-md-6 col-xs-6">
        <nav class="b-topBar__nav">
          <ul>
            @guest
              @if (Route::has('register'))
                <li><a href="{{ route('register') }}">{{ __('Registro') }}</a></li>
              @endif
              @if (Route::has('login'))
                <li><a href="{{ route('login') }}">{{ __('Acceso') }}</a></li>
              @endif
            @else
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                  {{ __('Salir') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
              @auth
                <li><a href="{{ route('cuenta') }}"><b>Cuenta</b></a></li>
              @endauth
              <li>
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('profile.edit') }}" role="button"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name . ' ' . Auth::user()->last_name }}
                </a>
              </li>

              @can('administrador.view')
                <li>
                  <a id="navbarDropdown" target="_blank" class="nav-link dropdown-toggle"
                    href="{{ route('admin.index') }}">
                    Administrador
                  </a> 
                </li>
              @endcan 
            @endguest 
          </ul>
        </nav>
      </div>

    </div>
  </div>
</header>
