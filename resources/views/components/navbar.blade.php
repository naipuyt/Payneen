<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #387BBE;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{route('welcome')}}">
            <img src="{{asset('Assets/payneen.png')}}" style="height: 40px;" alt="">
        </a>
        <div class="ms-auto d-flex align-items-center">
            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Login</a>
            @else
                <span class="text-white me-3">{{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-light btn-sm">Logout</button>
                </form>
            @endguest
        </div>
    </div>
</nav>