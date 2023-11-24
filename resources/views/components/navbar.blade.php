<div class="d-flex justify-content-center align-items-center">
    <nav class="navbar navbar-expand-lg bg-b mt-2 rounded-5 nav-custom">
        <div class="container-fluid gap-2">

            <a class="navbar-brand" href="#"><img src="media/LOGO.png" class="logo ms-3" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-1">
                    <li class="nav-item">
                        <a class="nav-link homeLink fw-semibold" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Annunci</a>
                    </li>
                </ul>
                
                @guest
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
                @else
                <ul class="navbar-nav mb-2 mb-lg-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::User()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{route('auth.dashboard')}}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('products.create') }}">Nuovo annuncio</a></li>
                            
                            <form class="ps-1" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn t-o">Logout</button>
                            </form>
                        </ul>
                    </li>
                </ul>
                @endguest
                
            </div>
        </div>
    </nav>
</div>