<nav class="b-nav">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-4">
        <a href="{{ url('/') }}" class="header-logo">
          <img src="{{ asset('template/images/logo/dark.png') }}" alt="Header Logo">
        </a>
      </div>
      <div class="col-sm-9 col-xs-8">
        <div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse navbar-main-slide" id="nav">
            <ul class="navbar-nav-menu">
              <li><a href="#">Eventos</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle='dropdown' href="#">Servicios <span
                    class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu h-nav">
                  <li><a href="#">Seguro</a></li>
                  <li><a href="#">Servicios Legales</a></li> 
                </ul>
              </li>
              <li><a href="#">Directorio</a></li>
              <li><a href="#">Clubes</a></li>
              <li><a href="#">Tienda</a></li>
              <li><a href="#">Contacto</a></li> 
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
