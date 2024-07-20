<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khmer library | playlist</title>
    <!-- this is root  -->
    <link rel="shortcut icon" href="{{asset('images/favicon.webp')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- this is header style  -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <!-- this is aside for website  -->
    <link rel="stylesheet" href="{{ asset('css/aside.css') }}">
    <!-- this is style for this page  -->
    <link rel="stylesheet" href="{{ asset('css/playlist.css') }}">
    <!-- this is font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <!-- this is header of website  -->
    @include('share.header')
    <!-- this is content  -->
    <main class="web-main">
        <div class="web-main-body df-s">
            <!-- this is aside of website  -->
            @include('share.aside')
            <!-- this is content of website  -->
            <div class="web-content">
                <div class="con">
                    <!-- this is navegation  of website we show title playlists  -->
                    @include('share.nav')
                    <!-- this is content of playlist  -->
                    <div class="books db-c">
                        <div class="books-body db-c">
                            <div class="playlists db-c">
                                <ul>
                                    @foreach($playlists as $playlist)
                                        <li class="df-l" onclick="location.href='{{route('palylistinfor',$playlist->id)}}'">
                                            <div class="img">
                                                <img src="{{asset('storage/images/'.$playlist->img)}}" alt="">
                                            </div>
                                            <div class="text df-l">
                                            <div class="db-c">
                                                <h2>{{$playlist->title}}</h2>
                                                <p>{{ $playlist->saveplaylists_count }}<span>Title</span></p>
                                            </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>