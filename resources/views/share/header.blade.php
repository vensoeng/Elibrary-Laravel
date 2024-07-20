<header class="web-header">
    <div class="head db-c">
        <div class="con box df-s">
            <ul class="df-l">
                <li class="web-logo"><a href="#"><img class="img-c" src="{{asset('images/library_icon.png')}}" alt=""></a></li>
                <li class="{{ Request::routeIs('homepage') ? 'active' : '' }}"><a href="{{route('homepage')}}">Home</a></li>
                <li class="{{ Request::routeIs('new') ? 'active' : '' }}"><a href="{{route('new')}}">New</a></li>
                <li class="{{ Request::routeIs('popular') ? 'active' : '' }}"><a href="{{route('popular')}}">Popular</a></li>
                <li class="{{ Request::routeIs('palylist') ? 'active' : '' }}"><a href="{{route('palylist')}}">Playlists</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <ul class="df-l">
                <li class="web-search" onclick="this.classList.add('web-search-active')">
                    <div class="box df-l">
                        <label for="web-search-txt" class="btn"><i class="fa-solid fa-magnifying-glass"></i></label>
                        <form id="search-form" action="{{ route('search') }}" method="GET">
                            @csrf
                            <input type="text" name="search-text" id="web-search-txt" required placeholder="Khmer library Search for books">
                            <button type="submit" hidden></button>
                        </form>
                    </div>
                </li>
                <li class="sign-in">
                    <a href="#" class="btn">sign in</a>
                </li>
                <li class="icon-bar" onclick="document.querySelector('.web-aside').classList.toggle('web-aside-active')">
                    <a class="btn"><i class="fa-solid fa-bars"></i></a>
                </li>
            </ul>
        </div>
    </div>
</header>