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
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/bookinfor.css')}}">
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
                    <!-- this is nav  -->
                    @include('share.nav')
                    <!-- this is information of book when user checkin -->
                    <div class="book-infor head df-s">
                        <!-- this is book  -->
                        <div class="roow-1">
                            <div class="book-img ">
                                <div class="img-sm active df-l">
                                    <img class="img-c" src="{{asset('storage/images/'. $book->img)}}" alt="">
                                    <img class="img-c" src="{{asset('storage/images/'. $book->img)}}" alt="">
                                    <img class="img-c" src="{{asset('storage/images/'. $book->img)}}" alt="">
                                </div>
                                <img class="img-c" src="{{asset('storage/images/'. $book->img)}}" alt="">
                            </div>
                            <div class="book-tb">
                                <ul>
                                    <li>
                                        <strong>ចំណងជើង</strong>
                                        <p>{{$book->title}}</p>
                                    </li>
                                    <li>
                                        <strong>ពិពណ៌នា</strong>
                                        <p>{{$book->descript == '' ? 'មិនមានការពិពណ៌នានោះទេ': $book->descript}}</p>
                                    </li>
                                    <li>
                                        <strong>ចំនួន</strong>
                                        <p>{{$book->length}}ក្បាល</p>
                                    </li>
                                    <li>
                                        <strong>ជួរទូ</strong>
                                        <p>{{$book->range->title}}</p>
                                    </li>
                                    <li>
                                        <strong>លេខទូ</strong>
                                        <p>{{$book->closet->title}}</p>
                                    </li>
                                    <li>
                                        <strong>ជាន់ទូ</strong>
                                        <p>{{$book->floor->title}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- this is book of closet  -->
                        <div class="roow-2">
                            <div class="book-closet">
                                <div class="book-closet-header df-s">
                                    <h2>សៀវភៅទាំងអស់នៃ{{$book->closet->title}}</h2>
                                    <div class="icon icon-ra icon-sm df-c">
                                        <i class="fa-solid fa-xmark"></i>
                                    </div>
                                </div>
                                <ul class="scroll-y">
                                    @foreach ($book_closet as $book)
                                    <li class="df-l" onclick="location.href='{{route('bookinfor',$book->id)}}'">
                                        <div class="closet-img">
                                            <img src="{{asset('storage/images/'.$book->img)}}" alt="">
                                        </div>
                                        <div class="closet-text">
                                            <h2>{{$book->title}}</h2>
                                            <p>{{$book->descript == '' ? 'មិនមានការពិពណ៌នានោះទេ': $book->descript}}</p>
                                            <a><span><i class="fa-solid fa-star"></i></span> <span>{{$book->star}}</span></a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="book-closet-header df-s">
                                    <p>ដើម្បីមើលសៀវភៅជាច្រើន</p>
                                    <a class="btn">បន្ថែម</a>
                                </div>
                           </div>
                        </div>
                    </div>
                    <!-- this is all book of range  -->
                    <div class="books">
                        <div class="books-body">
                            <ul>
                                @foreach ($book_rage as $book)
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>