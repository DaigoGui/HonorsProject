    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg">
        <a class="navbar-brand" href="#">Language Learning</a> 
        <a href="{{ route('admin.panel') }}" class="btn btn-primary">Go to Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('games.all') }}">Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog.all') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('materials.materials') }}">Materials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.profile.panel') }}">Profile</a>
                </li>                
                
                @auth
                <span class="navbar-text">
                  Welcome, {{ Auth::user()->name }}!
                </span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary ml-2">Logout</button>
                </form>
              
                @else
                <a href="{{ route('login') }}"><button class="btn btn-primary" >Login</button></a>
                <a href="{{ route('register') }}"><button class="btn btn-primary" >Register</button></a>
                @endauth
                <!-- Add additional nav items here -->
            </ul>
        </div>
    </nav>
    <hr class="bg-light mb-5">