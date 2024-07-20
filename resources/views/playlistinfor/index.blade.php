<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khmer library | {{ $lists->firstOrFail()->playlist->title }}</title>
    <!-- this is root  -->
    <link rel="shortcut icon" href="{{asset('images/favicon.webp')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- this is header style  -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <!-- this is aside for website  -->
    <link rel="stylesheet" href="{{ asset('css/aside.css') }}">
    <!-- this is style for this page  -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
                    <!-- this is nav for content  -->
                    @include('share.nav')
                    <div class="books">
                        <div class="books-body">
                            <ul>
                                @foreach ($lists as $list)
                                    @if($list->book->status == '1')
                                    <li onclick="location.href='{{route('bookinfor',$list->book->id)}}'">
                                        <div class="book-img">
                                            <img src="{{asset('storage/images/'. $list->book->img)}}" alt="">
                                        </div>
                                        <div class="book-title df-s">
                                            <h2>{{ $list->book->title }}</h2>
                                            <p class="btn"><span><i class="fa-solid fa-star"></i></span><span>{{ $list->book->star }}</span></p>
                                        </div>
                                        <div class="text">
                                            <div class="text-con">
                                                <div class="title"><h2>{{ $list->book->title }}</h2></div>
                                                <blockquote><p>{{ $list->book->descript }}</p></blockquote>
                                                <div class="buttons df-l">
                                                    <a onclick="location.href='{{route('bookinfor',$list->book->id)}}'" class="btn icon-ra">Watch now</a>
                                                    <a href="#" class="btn icon-ra"><i class="fa-solid fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>