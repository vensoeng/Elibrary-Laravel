<nav class="con-nav df-l">
    <ul class="df-l scroll-y">
        <li class="main"><a class="btn"><i class="fa-solid fa-compass"></i></a></li>
        <li class="active"><a href="#" class="btn">All</a></li>
        @foreach($playlists as $playlist)
        <li class="
            @if(isset($lists) && $lists->isNotEmpty())
                {{$lists->firstOrFail()->playlist->id == $playlist->id ? 'active': ''}}
            @endif
        ">
            <a href="{{route('showplaylist',$playlist->id)}}" class="btn a-i">
                {{$playlist->title}}
                @if($playlist->status == '1')
                     <i class="fa-solid fa-globe"></i>
                @else
                     <i class="fa-solid fa-lock"></i>
                @endif
            </a>
        </li>
        @endforeach
    </ul>
</nav>