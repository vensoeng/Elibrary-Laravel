<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khmer library| {{$playlist->title}}</title>
    <!-- this is root  -->
    <link rel="shortcut icon" href="{{asset('images/favicon.webp')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- this is header style  -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <!-- this is aside for website  -->
    <link rel="stylesheet" href="{{ asset('css/aside.css') }}">
    <!-- this is style for this page  -->
    <link rel="stylesheet" href="{{asset('css/dashsboard.css')}}">
    <!-- this is style for this page  -->
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/bookinfor.css')}}">
    <style>
        .web-content > .con > .head .roow-2{
            padding: 0rem;
        }
        .web-content > .con > .head .roow-2  form .btn{
            width: 2rem;
            height: 2rem;
            font-size: 0.9rem;
            padding: 0rem;
            font-weight: 400;
            border-radius: 10px;
            color: var(--sg-color-white);
            background: var(--sg-main-bg-btn-signin-hover);
        }
        .web-content > .con > .head .roow-2  form button{
            background: none;
            cursor: pointer;
            color: var(--sg-color-white);
        }
        .web-content > .con > .head .roow-2 li:hover form button .btn{
            color: var(--sg-color-white);
        }
        .web-content > .con > .head .roow-2 li form button:hover .btn{
            color: orangered;
        }
        .text-be:hover::before{
            top: -1rem;
        }
        .books-body ul li .text .buttons  button {
            background: none;
        }
        .web-content > .con > .head .roow-2 .book-closet-header .btn-play > button{
            position: relative;
            background:none;
        }
        .web-content > .con > .head .roow-2 .book-closet-header .btn-play > button:focus{
            background: var(--sg-main-bg-btn-signin);
        }
        .web-content > .con > .head .roow-2 .book-closet-header .btn-play ul{
            position: absolute;
            top: 2.1rem;
            right: 0.5rem;
            scale: 0;
            z-index: 11;
            overflow: hidden;
            border-radius: 10px;
            min-width: max-content;
            min-height: max-content;
            padding: 0.5rem;
            color: var(--sg-color-text);
            background: var(--sg-color-text-black);
            transition: all ease-in 0.3s;
        }
        .web-content > .con > .head .roow-2 .book-closet-header .btn-play > button:focus ul{
            scale:1;
        }
        .web-content > .con > .head .roow-2 .book-closet-header .btn-play a{
            font-family: var(--sg-font-bat);
            font-size: 0.9rem;
            color: var(--sg-color-text);
            padding: 0.3rem;
            font-weight: 550;
        }
        .web-content > .con > .head .roow-2 .book-closet-header .btn-play a i{
            font-size: 1rem;
        }
        .web-content > .con > .head .roow-2 .book-closet-header .btn-play a span{
            font-family: var(--sg-font-bat);
            margin: 0 0.3rem;
        }
    </style>
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
                    @include('share.navadmin')
                    <!-- this is information of book when user checkin -->
                    <div class="book-infor head df-s">
                        <!-- this is book of closet  -->
                        <div class="roow-2">
                            <div class="book-closet">
                                <div class="book-closet-header df-s">
                                    <h2>សៀវភៅនៃបញ្ជី{{$playlist->title}}</h2>
                                    <div class="btn-play df-c">
                                        <button class="icon icon-ra icon-sm df-c">
                                            <a><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                            <ul>
                                                <li><a href="{{ route('editplaylist', $playlist->id) }}" class="df-l"><i class="fa-solid fa-pen-to-square"></i><span>កែប្រែបញ្ជី</span></a></li>
                                                <li>
                                                    <form action="{{ route('deleteplaylist', $playlist->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="df-l" onclick="document.querySelector('#btn-delete-playlist').click()"><i class="fa-solid fa-trash"></i><span>លុបបញ្ជី</span></a>
                                                        <button type="submit" id="btn-delete-playlist" onclick="return confirm('Are you sure you want to delete this playlist?')" hidden></button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </button>
                                    </div>
                                </div>
                                <ul class="scroll-y">
                                    @foreach($lists as $list)
                                    <li class="df-l">
                                        <div class="closet-img">
                                            <img src="{{asset('storage/images/'. $list->book->img)}}" alt="">
                                        </div>
                                        <div class="closet-text">
                                            <h2>{{ $list->book->title }}</h2>
                                            <p>{{ $list->book->descript }}</p>
                                            <a><span><i class="fa-solid fa-star"></i></span> <span>{{ $list->book->star}}</span></a>
                                        </div>
                                        <div class="btn-lsit">
                                            <form action="{{ route('deletelist', $list->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><a class="btn btn-ra-sm btn-delete" onclick="return confirm('Are you sure you want to delete this book?')"><i class="fa-solid fa-trash"></i></a></button>
                                            </form>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="book-closet-header df-s">
                                    <p>ដើម្បីមើលសៀវភៅជាច្រើន</p>
                                    <a class="btn">ទំព័រ</a>
                                </div>
                           </div>
                        </div>
                    </div>
                    <!-- this is all book of range  -->
                    <div class="books">
                        <div class="books-body">
                            <ul>
                                @foreach($books as $book)
                                <li>
                                    <div class="book-img">
                                        <img src="{{asset('storage/images/'. $book->img)}}" alt="">
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
                                                <a href="#" class="btn icon-ra">Watch now</a>
                                                <form action="{{route('addlist')}}" method="post">
                                                    @csrf
                                                    <input type="text" hidden name="playlistid" value="{{$playlist->id}}">
                                                    <input type="text" hidden name="bookid" value="{{$book->id}}">
                                                    <button type="submit" ><a class="btn icon-ra text-be" style="--text-:'បន្ថែមទៅបញ្ជី'"><i class="fa-solid fa-plus"></i></a></button>
                                                </form>
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