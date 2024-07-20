<nav class="con-nav df-l">
    <ul class="df-l scroll-y">
        <li class="main" onclick="document.querySelector('.web-aside').classList.toggle('web-aside-active')"><a class="btn"><i class="fa-solid fa-compass"></i></a></li>
        <li class="active"><a href="{{route('homepage')}}" class="btn">All</a></li>
        @foreach ($playlists as $playlist)
            <li class="
            @if(isset($lists) && $lists->isNotEmpty())
                {{$lists->firstOrFail()->playlist->id == $playlist->id ? 'active': ''}}
            @endif
            ">
                <a href="{{route('palylistinfor',$playlist->id)}}" class="btn">{{$playlist->title}}</a>
            </li>
        @endforeach
    </ul>
</nav>