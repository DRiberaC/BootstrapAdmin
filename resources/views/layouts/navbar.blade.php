<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>


            @if (Route::has('login'))
                <nav class="d-flex nav">
                    @auth
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-sm btn-outline-secondary">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </div>
</nav>