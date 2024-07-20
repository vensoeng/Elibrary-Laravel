<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khmer library</title>
    <!-- this is root  -->
    <link rel="shortcut icon" href="{{asset('images/favicon.webp')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- this is header style  -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <!-- this is aside for website  -->
    <link rel="stylesheet" href="{{ asset('css/aside.css') }}">
    <!-- this is style for this page  -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- this is style for noresult  -->
    <link rel="stylesheet" href="{{ asset('css/noresult.css') }}">
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
                    <!-- this is header of content  -->
                    <div class="head df-s">
                        <div class="roow-1">
                            <ul>
                                <li><h2>អានសៀវភៅឥឡូវនេះដើម្បីកម្ពុជា</h2></li>
                                <li><p>អំណាន់ជាផ្នែកមួយដ៏សំខាន់នៅក្នុងជីវិតរបស់</p></li>
                                <li class="top-05"><a href="#" class="btn icon-ra">មើលបន្ថែម</a></li>
                            </ul>
                        </div>
                        <div class="roow-2">
                            <button class="web-user">
                                <div class="profile icon">
                                    <img class="img-c" src="{{asset('images/admin_profile.jpg')}}" alt="">
                                </div>
                                <ul class="roow-2-ul">
                                    <li class="df-l"><span class="icon icon-ra"><i class="fa-solid fa-at"></i></span><a href="#">seymveonseong</a></li>
                                    <li class="df-l"><span class="icon icon-ra"><i class="fa-regular fa-envelope"></i></span><a href="#">seymvenseong003@gmail.com</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                    <div class="books">
                        <div class="books-body">
                            <ul>
                                @foreach ($books as $book)
                                <li onclick="location.href='{{route('bookinfor',$book->id)}}'">
                                    <div class="book-img">
                                        <img src="{{asset('storage/images/'.$book->img)}}" alt="">
                                    </div>
                                    <div class="book-title df-s">
                                        <h2>{{$book->title}}</h2>
                                        <p class="btn"><span><i class="fa-solid fa-star"></i></span><span>{{$book->star}}</span></p>
                                    </div>
                                    <div class="text">
                                        <div class="text-con">
                                            <div class="title"><h2>{{$book->title}}</h2></div>
                                            <blockquote><p>{{$book->descript}}</p></blockquote>
                                            <div class="buttons df-l">
                                                <a href="{{route('bookinfor',$book->id)}}" class="btn icon-ra">Watch now</a>
                                                <a href="#" class="btn icon-ra"><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            @if(isset($Emty) && $Emty == '0')
                            <div class="noresul">
                                <div class="noresult-body">
                                    <h2 style="font-size: 70px;">😔</h2>
                                    <h2>Sorry! No result found:(</h2>
                                    <p>Please add your student in here<br>
                                        best data and awesome
                                    </p>
                                    <span style="display: none;">)</span>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>