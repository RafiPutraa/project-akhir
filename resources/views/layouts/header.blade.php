<header>
    <a class="navbar-brand" href="{{ route('beranda') }}">
        <img src="{{ url('images/logo.png') }}" alt="Logo" class="d-inline-block align-text-top">
    </a>
    <nav class="navbar">
        <a href="{{ route('beranda') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Beranda</a>
        <a href="{{ url('simulasi-rakit-pc') }}" class="{{ (request()->is('simulasi-rakit-pc*')) ? 'active' : '' }}">Simulasi Rakit PC</a>
        <a href="{{ url('katalog') }}" class="{{ (request()->is('katalog*')) ? 'active' : '' }}">Katalog</a>
        @if (Route::has('login'))
        @auth
        <a href="{{ url('keranjang') }}" class="{{ (request()->is('keranjang*')) ? 'active' : '' }}">Keranjang</a>
        @endauth
        @endif
        <a href="{{ url('about') }}" class="{{ (request()->is('about')) ? 'active' : '' }}">About</a>
            <!-- <div class="d-flex justify-content-center p-4">
              <div class="searchbar">
                <input class="search_input" type="text" name="" placeholder="Search...">
                <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
              </div>
            </div> -->
        
    </nav>
    @if (Route::has('login'))
            <div class="d-flex icon-nav">
                @auth
                <div class="dropdown">
                    <a href="#" class="fas fa-user user-profile icons"id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('rakitanku') }}">Rakitanku</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">Logout</a>
                            </form>
                        </li>
                    </ul>
                </div>
                @else
                    <div class="menu login"><a href="{{ route('login') }}">Log In</a></div>
                    <div class="menu"><a href="{{ route('register') }}">Register</a></div>              
                @endauth
            </div>
    @endif 
</header>
<!-- header section ends -->
<!-- home section starts  -->
<style>
body,html{
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
    
    }

    .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 45px;
    background-color: #353b48;
    border-radius: 15px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 23px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 250px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .search_icon{
    height: 25px;
    width: 25px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }

  </style>