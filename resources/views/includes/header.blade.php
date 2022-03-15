<header class="bg-white">
    <div class="container">            
        <nav>
            <div class="row d-flex">
                <div class="col-left">
                  <figure>
                    <img src="{{asset('images/dc-logo.png')}}" alt="Logo DC" />
                  </figure>
                </div>
                <div class="col-center">
                  <ul class="d-flex">
                    <li>
                        <a href="{{ route('home') }}">CHARACTERS</a>
                    </li>
                    <li>
                        <a href="{{ route('comics') }}">COMICS</a>
                    </li>
                    <li>
                        <a href="{{ route('movies') }}">MOVIES</a>
                    </li>
                    <li>
                        <a href="{{ route('tv') }}">TV</a>
                    </li>
                    <li>
                        <a href="{{ route('games') }}">GAMES</a>
                    </li>
                    <li>
                        <a href="{{ route('collectibles') }}">COLLECTIBLES</a>
                    </li>
                    <li>
                        <a href="{{ route('videos') }}">VIDEOS</a>
                    </li>
                    <li>
                        <a href="{{ route('fans') }}">FANS</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">NEWS</a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}">SHOP</a>
                    </li>
                  </ul>
                </div>
                <div class="col-right">
                    <input type="text" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </nav>
    </div>
</header>  