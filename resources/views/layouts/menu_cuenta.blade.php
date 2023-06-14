<div class="b-blog__aside-categories wow zoomInUp" data-wow-delay="0.3s">

    <nav>
        <ul class="b-blog__aside-categories-list">


            <li @if (Route::current()->getName() == 'publicaciones') class="m-active" @endif><a
                    href="{{ route('publicaciones') }}">Publicaciones </a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Clubes</a></li>
            <li><a href="#">Garaje</a></li>

        </ul>
    </nav>
</div>


<div class="b-blog__aside-categories wow zoomInUp" data-wow-delay="0.3s">
    <header class="s-lineDownLeft">
        <h2 class="s-titleDet">Cuenta</h2>
    </header>
    <nav>
        <ul class="b-blog__aside-categories-list">
            <li><a href="#">Mensajes</a></li>
            <li><a href="#">Notificación</a></li>
            <li><a href="#">Favorito</a></li>
            <li><a href="#">Configuración</a></li>
        </ul>
    </nav>
</div>
<div class="b-blog__aside-text wow zoomInUp" data-wow-delay="0.3s">
    <header class="s-lineDownLeft">
        <h2 class="s-titleDet">Avisos</h2>
    </header>

    <div class="alert alert-danger" role="alert">
        This is a danger alert—check it out!
    </div>
    <p>Curabitur libero. Donec facilisis velit edu est
        Phasellus conside quat. Aenean vitae quam.
        Vivamus etdu nunc. Nunc conseq sem velde
        metus imperdiet lacinia. Cras ornare pretum
        tortor. Donec sed augue sed nunc rutru me
        egestas. Bulum ante ipsum primisn faucibus
        orci luctus et ultrices posuere.</p>
</div>


<img src="{{ asset('images/500x500_disponible.jpg') }}" alt="Header Logo" class="img-fluid img-thumbnail mb-3">
<hr>
<img src="{{ asset('images/500x500_disponible.jpg') }}" alt="Header Logo" class="img-fluid img-thumbnail">
