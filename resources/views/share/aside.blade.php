<aside class="web-aside">
    <div class="con">
        <div class="head df-l head-logo">
            <div class="icon-bar" onclick="document.querySelector('.web-aside').classList.toggle('web-aside-active')">
                <a><i class="fa-solid fa-bars"></i></a>
            </div>
            <div class="logo">
                <a href="#"><img class="img-c" src="{{asset('images/library_icon.png')}}" alt=""></a>
            </div>
        </div>
        <div class="menu scroll-y">
            <div class="head df-l">
                <h2>youmenu</h2>
            </div>
            <ul>
                <li class="{{ Request::routeIs('homepage') ? 'active' : '' }}">
                    <a href="{{route('homepage')}}" class="db-c">
                        <div class="box df-l">
                            <div class="icon icon-ra icon-sm"><p class="txt-bol"><i class="fa-solid fa-infinity"></i></p></div>
                            <div class="text"><h2>Home</h2></div>
                        </div>
                    </a>
                </li>
                <li class="{{ Request::routeIs('new') ? 'active' : '' }}">
                    <a href="{{route('new')}}" class="db-c">
                        <div class="box df-l">
                            <div class="icon icon-ra icon-sm"><p class="txt-bol"><i class="fa-solid fa-wand-magic-sparkles"></i></p></div>
                            <div class="text"><h2>New</h2></div>
                        </div>
                    </a>
                </li>
                <li class="{{ Request::routeIs('popular') ? 'active' : '' }}">
                    <a href="{{route('popular')}}" class="db-c">
                        <div class="box df-l">
                            <div class="icon icon-ra icon-sm"><p class="txt-bol"><i class="fa-solid fa-rocket"></i></p></div>
                            <div class="text"><h2>Popular</h2></div>
                        </div>
                    </a>
                </li>
                <li class="{{ Request::routeIs('palylist') ? 'active' : '' }}">
                    <a href="{{route('palylist')}}" class="db-c">
                        <div class="box df-l">
                            <div class="icon icon-ra icon-sm"><p class="txt-bol"><i class="fa-solid fa-list"></i></p></div>
                            <div class="text"><h2>playlists</h2></div>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="head df-l">
                <h2>our menu</h2>
            </div>
            <ul class="our-menu">
                <li>
                    <a href="#" class="db-c">
                        <div class="box df-l">
                            <div class="icon icon-ra icon-sm"><p class="txt-bol">A</p></div>
                            <div class="text"><h2>About</h2></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="db-c">
                        <div class="box df-l">
                            <div class="icon icon-ra icon-sm"><p class="txt-bol">C</p></div>
                            <div class="text"><h2>Contact</h2></div>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="head df-l">
                <h2>our menu</h2>
            </div>
            <ul class="our-menu">
                <li>
                    <a href="#" class="db-c">
                        <div class="box df-l">
                            <div class="icon icon-ra icon-sm"><p class="txt-bol">A</p></div>
                            <div class="text"><h2>About</h2></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="db-c">
                        <div class="box df-l">
                            <div class="icon icon-ra icon-sm"><p class="txt-bol">C</p></div>
                            <div class="text"><h2>Contact</h2></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer df-l">
            <ul>
                <li>Copright Khl All service</li>
                <li>KhmerLibrary v1.0.0</li>
            </ul>
        </div>
    </div>
    <div class="as-bg" onclick="document.querySelector('.web-aside').classList.toggle('web-aside-active')"></div>
</aside>
<script>
    var web_aside = document.querySelector('.web-aside');
    // Function to recalculate heights
    function setSidebarHeight() {
        var sceen_height = web_aside.offsetHeight;
        var asidHeader = web_aside.querySelector('.con > .head').offsetHeight;
        var asidfooter = web_aside.querySelector('.con > .footer').offsetHeight;
        web_aside.querySelector('.menu').style.height = (sceen_height - (asidHeader + asidfooter)) + "px";
    }
    // Set initial heights
    setSidebarHeight();
    // Listen for window resize
    window.addEventListener('resize', setSidebarHeight);
</script>