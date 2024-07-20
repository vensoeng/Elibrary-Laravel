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
    <link rel="stylesheet" href="{{asset('css/dashsboard.css')}}">
    <!-- this is font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <!-- this is header of website  -->
    @include('share.header')
    <!-- this is form for insert range data  -->
    <div class="web-form" id="rang-form">
        <form action="{{route('addRang')}}" method="post" class="db-c">
            @csrf
            <div class="web-form-body">
                <!-- this is header  -->
                <div class="head df-s">
                    <a class="df-l">
                        <span class="icon icon-ra icon-ra-sm">
                            <img class="img-co" src="{{asset('images/favicon.webp')}}" alt="">
                        </span>
                    </a>
                    <a><span>ទម្រង់បង្កើតជួទូ</span></a>
                    <div class="icon-ra icon-sm df-c" onclick="document.querySelector('#rang-form').classList.toggle('web-form-active')">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
                <!-- this is content  -->
                <div class="con db-c">
                    <div class="con-body db-c">
                        <!-- header  -->
                        <div class="form-head">
                            <ul class="df-s">
                                <li class="profile-user df-l">
                                    <div class="profile-img df-c icon icon-ra icon-ra-sm">
                                        <img class="img-c" src="{{asset('images/admin_profile.jpg')}}" alt="">
                                    </div>
                                    <div class="profile-name left-05">
                                        <h2>ស៊ីម វិនសឹង្ហ</h2>
                                        <p>ថ្ងៃទី២ ខែកុម្ភះ ឆ្នាំ២៥៦៦</p>
                                    </div>
                                </li>
                        </ul>
                        </div>
                        <!-- this is content  -->
                        <div class="main scroll-y">
                            <div class="box">
                                <!-- thi is title  -->
                                <div class="txt-title">
                                    <label for="#">ចំណងជើង</label>
                                    <div class="txt-title-box">
                                        <input type="text" placeholder="បញ្ចូលចំណងជើងជួរ" name="txt-range">
                                    </div>
                                </div>
                                <!-- this is all txt range  -->
                                <div class="txt-range">
                                    <div class="box">
                                        <ul>
                                            @foreach ($rages as $rage)
                                                <li class="df-l" onclick="location.href='{{route('editrang', $rage->id)}}'">
                                                    <a href="#" class="icon icon-ra icon-ra-sm"><i class="fa-solid fa-xmark"></i></a>
                                                    <span>{{$rage->title}}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- this is footer  -->
                        <div class="foot">
                            <div class="foot-body df-s">
                                <h2>ជ្រើសរើសលខ្ខណៈបង្កើត</h2>
                                <ul class="df-c">
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បញ្ជីចាក់'" onclick="activateWebForm('#playlist-form')"><i class="fa-solid fa-list"></i></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជួរទូ'" onclick="activateWebForm('#rang-form')"><span>R</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'លេខទូ'" onclick="activateWebForm('#closet-form')"><span>C</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជាន់ទូ'" onclick="activateWebForm('#floor-form')"><span>F</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បន្ថែម'" onclick="activateWebForm('#book-form')"><i class="fa-solid fa-ellipsis"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- this is footer form  -->
                <div class="submit-form">
                    <div class="box df-c">
                        <button type="submit" class="btn icon-ra">បន្ថែមជួរថ្មី</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="form-b" onclick="document.querySelector('#rang-form').classList.toggle('web-form-active')"></div>
    </div>
    <!-- this is form for insert closet data  -->
    <div class="web-form" id="closet-form">
        <form action="{{route('addclosetnum')}}" method="post" class="db-c">
            @csrf
            <div class="web-form-body">
            <!-- this is header  -->
            <div class="head df-s">
                    <a class="df-l">
                        <span class="icon icon-ra icon-ra-sm">
                            <img class="img-co" src="{{asset('images/favicon.webp')}}" alt="">
                        </span>
                    </a>
                    <a><span>ទម្រង់បង្កើតលេខទូ</span></a>
                    <div class="icon-ra icon-sm df-c" onclick="document.querySelector('#closet-form').classList.toggle('web-form-active')">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
                <!-- this is content  -->
                <div class="con db-c">
                    <div class="con-body db-c">
                        <!-- header  -->
                        <div class="form-head">
                            <ul class="df-s">
                                <li class="profile-user df-l">
                                    <div class="profile-img df-c icon icon-ra icon-ra-sm">
                                        <img class="img-c" src="{{asset('images/admin_profile.jpg')}}" alt="">
                                    </div>
                                    <div class="profile-name left-05">
                                        <h2>ស៊ីម វិនសឹង្ហ</h2>
                                        <p>ថ្ងៃទី២ ខែកុម្ភះ ឆ្នាំ២៥៦៦</p>
                                    </div>
                                </li>
                        </ul>
                        </div>
                        <!-- this is content  -->
                        <div class="main scroll-y">
                            <div class="box">
                                <!-- thi is title  -->
                                <div class="txt-title">
                                    <label for="#">ចំណងជើង</label>
                                    <div class="txt-title-box">
                                        <input type="text" name="txt-closetnum" placeholder="បញ្ចូលចំណងជើងនៃសៀវភៅ">
                                    </div>
                                </div>
                                <!-- this is all txt range  -->
                                <div class="txt-range">
                                    <div class="box">
                                        <ul>
                                            @foreach ($closetnums as $closetnum)
                                            <li class="df-l" onclick="location.href='{{route('editclosetnum', $closetnum->id)}}'">
                                                <a href="#" class="icon icon-ra icon-ra-sm"><i class="fa-solid fa-xmark"></i></a><span>{{$closetnum->title}}</span>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- this is footer  -->
                        <div class="foot">
                            <div class="foot-body df-s">
                                <h2>ជ្រើសរើសលខ្ខណៈបង្កើត</h2>
                                <ul class="df-c">
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បញ្ជីចាក់'" onclick="activateWebForm('#playlist-form')"><i class="fa-solid fa-list"></i></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជួរទូ'" onclick="activateWebForm('#rang-form')"><span>R</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'លេខទូ'" onclick="activateWebForm('#closet-form')"><span>C</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជាន់ទូ'" onclick="activateWebForm('#floor-form')"><span>F</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បន្ថែម'" onclick="activateWebForm('#book-form')"><i class="fa-solid fa-ellipsis"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- this is footer form  -->
                <div class="submit-form">
                    <div class="box df-c">
                        <button class="btn icon-ra">បន្ថែមជួរថ្មី</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="form-b" onclick="document.querySelector('#closet-form').classList.toggle('web-form-active')"></div>
    </div>
    <!-- this is form for insert floor data  -->
    <div class="web-form" id="floor-form">
        <form action="{{route('addfloor')}}" method="post" class="db-c">
            @csrf
            <div class="web-form-body">
                <!-- this is header  -->
                <div class="head df-s">
                    <a class="df-l">
                        <span class="icon icon-ra icon-ra-sm">
                            <img class="img-co" src="{{asset('images/favicon.webp')}}" alt="">
                        </span>
                    </a>
                    <a><span>ទម្រង់បង្កើតជាន់នៃទូ</span></a>
                    <div class="icon-ra icon-sm df-c" onclick="document.querySelector('#floor-form').classList.toggle('web-form-active')">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
                <!-- this is content  -->
                <div class="con db-c">
                    <div class="con-body db-c">
                        <!-- header  -->
                        <div class="form-head">
                            <ul class="df-s">
                                <li class="profile-user df-l">
                                    <div class="profile-img df-c icon icon-ra icon-ra-sm">
                                        <img class="img-c" src="{{asset('images/admin_profile.jpg')}}" alt="">
                                    </div>
                                    <div class="profile-name left-05">
                                        <h2>ស៊ីម វិនសឹង្ហ</h2>
                                        <p>ថ្ងៃទី២ ខែកុម្ភះ ឆ្នាំ២៥៦៦</p>
                                    </div>
                                </li>
                        </ul>
                        </div>
                        <!-- this is content  -->
                        <div class="main scroll-y">
                            <div class="box">
                                <!-- thi is title  -->
                                <div class="txt-title">
                                    <label for="#">ចំណងជើង</label>
                                    <div class="txt-title-box">
                                        <input type="text" placeholder="បញ្ចូលចំណងជើងនៃសៀវភៅ" name="txt-floor">
                                    </div>
                                </div>
                                <!-- this is all txt range  -->
                                <div class="txt-range">
                                    <div class="box">
                                       <ul>
                                        @foreach ($floors as $floor)
                                            <li class="df-l" onclick="location.href='{{route('editfloor', $floor->id)}}'">
                                                <a href="#" class="icon icon-ra icon-ra-sm"><i class="fa-solid fa-xmark"></i></a><span>{{$floor->title}}</span>
                                            </li>
                                        @endforeach
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- this is footer  -->
                        <div class="foot">
                            <div class="foot-body df-s">
                                <h2>ជ្រើសរើសលខ្ខណៈបង្កើត</h2>
                                <ul class="df-c">
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បញ្ជីចាក់'" onclick="activateWebForm('#playlist-form')"><i class="fa-solid fa-list"></i></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជួរទូ'" onclick="activateWebForm('#rang-form')"><span>R</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'លេខទូ'" onclick="activateWebForm('#closet-form')"><span>C</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជាន់ទូ'" onclick="activateWebForm('#floor-form')"><span>F</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បន្ថែម'" onclick="activateWebForm('#book-form')"><i class="fa-solid fa-ellipsis"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- this is footer form  -->
                <div class="submit-form">
                    <div class="box df-c">
                        <button class="btn icon-ra">បន្ថែមជួរថ្មី</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="form-b" onclick="document.querySelector('#floor-form').classList.toggle('web-form-active')"></div>
    </div>
    <!-- this is form for insert playlists data  -->
    <div class="web-form" id="playlist-form">
        <form action="{{route('addplaylist')}}" method="post" class="db-c" enctype="multipart/form-data">
            @csrf
            <div class="web-form-body">
                <!-- this is header  -->
                <div class="head df-s">
                    <a class="df-l">
                        <span class="icon icon-ra icon-ra-sm">
                            <img class="img-co" src="{{asset('images/favicon.webp')}}" alt="">
                        </span>
                    </a>
                    <a><span>ទម្រង់បង្កើតផ្លេយលិស</span></a>
                    <div class="icon-ra icon-sm df-c" onclick="document.querySelector('#playlist-form').classList.toggle('web-form-active')">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
                <!-- this is content  -->
                <div class="con db-c">
                    <div class="con-body db-c">
                        <!-- header  -->
                        <div class="form-head">
                            <ul class="df-s">
                                <li class="profile-user df-l">
                                    <div class="profile-img df-c icon icon-ra icon-ra-sm">
                                        <img class="img-c" src="{{asset('images/admin_profile.jpg')}}" alt="">
                                    </div>
                                    <div class="profile-name left-05">
                                        <h2>ស៊ីម វិនសឹង្ហ</h2>
                                        <p>ថ្ងៃទី២ ខែកុម្ភះ ឆ្នាំ២៥៦៦</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="status df-c">
                                        <select name="status" id="#">
                                            <option value="1">សាធារណៈ</option>
                                            <option value="0">ឯកជនភាព</option>
                                        </select>
                                    </div>
                                </li>
                        </ul>
                        </div>
                        <!-- this is content  -->
                        <div class="main scroll-y">
                            <div class="box">
                                <!-- thi is title  -->
                                <div class="txt-title">
                                    <label for="#">ចំណងជើង</label>
                                    <div class="txt-title-box">
                                        <input type="text" name="title" placeholder="បញ្ចូលចំណងជើងនៃសៀវភៅ">
                                    </div>
                                </div>
                                <!-- this is content photo  -->
                                <input type="file" name="img" id="txt-photo_play" hidden="" onchange="previewImage(event,'.soeng_play')">
                                <div class="txt-photo df-c" onclick="document.querySelector('#txt-photo_play').click()">
                                    <div class="txt-photo-box soeng_play" id="#">
                                        <ul>
                                            <li class="icon-ra-sm"><i class="fa-solid fa-photo-film"></i></li>
                                            <li><h2>បញ្ចូលរូបភាពផ្លេយលិស</h2></li>
                                            <li><p>រូបភាព១៤៤០​*៧៥០px</p></li>
                                        </ul>
                                        <img src="#" alt="soeng">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- this is footer  -->
                        <div class="foot">
                            <div class="foot-body df-s">
                                <h2>ជ្រើសរើសលខ្ខណៈបង្កើត</h2>
                                <ul class="df-c">
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បញ្ជីចាក់'" onclick="activateWebForm('#playlist-form')"><i class="fa-solid fa-list"></i></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជួរទូ'" onclick="activateWebForm('#rang-form')"><span>R</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'លេខទូ'" onclick="activateWebForm('#closet-form')"><span>C</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជាន់ទូ'" onclick="activateWebForm('#floor-form')"><span>F</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បន្ថែម'" onclick="activateWebForm('#book-form')"><i class="fa-solid fa-ellipsis"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- this is footer form  -->
                <div class="submit-form">
                    <div class="box df-c">
                        <button class="btn icon-ra">បង្ហោះបញ្ជី</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="form-b" onclick="document.querySelector('#playlist-form').classList.toggle('web-form-active')"></div>
    </div>
    <!-- this is form for insert book data  -->
    <div class="web-form" id="book-form">
        <form action="{{route('addbook')}}" method="post" class="db-c" enctype="multipart/form-data">
            @csrf
            <div class="web-form-body">
            <!-- this is header  -->
            <div class="head df-s">
                    <a class="df-l">
                        <span class="icon icon-ra icon-ra-sm">
                            <img class="img-co" src="{{asset('images/favicon.webp')}}" alt="">
                        </span>
                    </a>
                    <a><span>ទម្រង់បញ្ចូលសៀវភៅ</span></a>
                    <div class="icon-ra icon-sm df-c" onclick="document.querySelector('#book-form').classList.toggle('web-form-active')">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
                <!-- this is content  -->
                <div class="con db-c">
                    <div class="con-body db-c">
                        <!-- header  -->
                        <div class="form-head">
                            <ul class="df-s">
                                <li class="profile-user df-l">
                                    <div class="profile-img df-c icon icon-ra icon-ra-sm">
                                        <img class="img-c" src="{{asset('images/admin_profile.jpg')}}" alt="">
                                    </div>
                                    <div class="profile-name left-05">
                                        <h2>ស៊ីម វិនសឹង្ហ</h2>
                                        <p>ថ្ងៃទី២ ខែកុម្ភះ ឆ្នាំ២៥៦៦</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="status df-c">
                                        <select name="status" id="#">
                                            <option value="1">សាធារណៈ</option>
                                            <option value="0">ឯកជនភាព</option>
                                        </select>
                                    </div>
                                </li>
                        </ul>
                        </div>
                        <!-- this is content  -->
                        <div class="main scroll-y">
                            <div class="box">
                                <!-- thi is title  -->
                                <div class="txt-title">
                                    <label for="#">ចំណងជើង</label>
                                    <div class="txt-title-box">
                                        <input type="text" name="title" placeholder="បញ្ចូលចំណងជើងនៃសៀវភៅ">
                                    </div>
                                </div>
                                <!-- this is discription  -->
                                <div class="text-caption">
                                    <label for="#">ពិពណ៌នា</label>
                                    <div class="txt-caption-box" data-replicated-value="null">
                                        <textarea name="descript" id="data-text" oninput="this.parentNode.dataset.replicatedValue = this.value" onblur="this.parentNode.dataset.replicatedValue = null" onclick="this.parentNode.dataset.replicatedValue = this.value" cols="30" rows="5" placeholder="សរសេរការពិពណ៌នារបស់អ្នក?"></textarea>
                                    </div>
                                </div>
                                <!-- this is content photo  -->
                                <input type="file" id="txt-photo" hidden="" name="img" onchange="previewImage(event)">
                                <div class="txt-photo df-c" onclick="document.querySelector('#txt-photo').click()">
                                    <div class="txt-photo-box soeng_book" id="#">
                                        <ul>
                                            <li class="icon-ra-sm"><i class="fa-solid fa-photo-film"></i></li>
                                            <li><h2>បញ្ចូលរូបភាពសៀវភៅ</h2></li>
                                            <li><p>រូបភាព(២៨៦​X៤២៤px)</p></li>
                                        </ul>
                                        <img src="#" class="img-c" alt="soeng">
                                    </div>
                                </div>
                                <!-- thi is number of book  -->
                                <div class="txt-title">
                                    <label for="#">ចំនួន</label>
                                    <div class="txt-title-box">
                                        <input type="text" name="length" placeholder="បញ្ចូលចំនួនសៀវភៅ">
                                    </div>
                                </div>
                                <!-- thi is rang of book  -->
                                <div class="txt-title">
                                    <label for="#">ផ្កាយ</label>
                                    <div class="txt-title-box">
                                        <input type="text" name="star" placeholder="បញ្ចូលចំនួនផ្កាយសៀវភៅ">
                                    </div>
                                </div>
                                <!-- this is seclect  -->
                                <div class="txt-select">
                                    <ul>
                                        <li>
                                            <label for="#">ជួរទូ</label>
                                            <div class="txt-select-list-con df-c">
                                                <select name="range_id" id="#">
                                                    <option value="#">ជ្រើសជួរទូ</option>
                                                    @foreach ($rages as $rage)
                                                    <option value="{{$rage->id}}">{{$rage->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <label for="#">លេខទូ</label>
                                            <div class="txt-select-list-con df-c">
                                                <select name="closet_id" id="#">
                                                    <option value="#">ជ្រើសលេខទូ</option>
                                                    @foreach ($closetnums as $closetnum)
                                                        <option value="{{$closetnum->id}}">{{$closetnum->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <label for="#">ជាន់ទី</label>
                                            <div class="txt-select-list-con df-c">
                                                <select name="floor_id" id="#">
                                                    <option value="#">ជ្រើសជាន់ទី</option>
                                                    @foreach ($floors as $floor)
                                                        <option value="{{$floor->id}}">{{$floor->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- this is popular  -->
                                <div class="df-l txt-popular">
                                    <div class="txt-popular-box df-l">
                                        <input type="hidden" name="popular" value="0">
                                        <input type="checkbox" name="popular" value="1">
                                        <p>បើសៀវភៅល្បីនេះជាជម្រើសល្អរបស់អ្នក</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- this is footer  -->
                        <div class="foot">
                            <div class="foot-body df-s">
                                <h2>ជ្រើសរើសលខ្ខណៈបង្កើត</h2>
                                <ul class="df-c">
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បញ្ជីចាក់'" onclick="activateWebForm('#playlist-form')"><i class="fa-solid fa-list"></i></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជួរទូ'" onclick="activateWebForm('#rang-form')"><span>R</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'លេខទូ'" onclick="activateWebForm('#closet-form')"><span>C</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជាន់ទូ'" onclick="activateWebForm('#floor-form')"><span>F</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បន្ថែម'" onclick="activateWebForm('#book-form')"><i class="fa-solid fa-ellipsis"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- this is footer form  -->
                <div class="submit-form">
                    <div class="box df-c">
                        <button class="btn icon-ra" type="submit">បង្ហោះសៀវភៅ</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="form-b" onclick="document.querySelector('#book-form').classList.toggle('web-form-active')"></div>
    </div>
    <script type="text/javascript">
        // ============================this is for add image and show image==============>
        function previewImage(event,boxImg = ".soeng_book") {
            var ShowImg = document.querySelectorAll(boxImg);

            var input = event.target;
           
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    ShowImg.forEach((element) => {
                        element.querySelector('img').src = e.target.result;
                        element.classList.add('txt-photo-box-active');
                    });
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                ShowImg.forEach((element) => {
                    element.querySelector('img').src = "#";
                    element.classList.remove('txt-photo-box-active');
                });
            }
        }
        function activateWebForm(elementPost,elementGet = "#book-form"){
            var Epost = document.querySelector(elementPost);
            var webForms = document.querySelectorAll('.web-form');
            
            webForms.forEach((element) => {
                element.classList.remove('web-form-active');
            });
            
            if (Epost) {
                Epost.classList.add('web-form-active');
            } else {
                console.error(`Element not found: ${elementPost}`);
            }
        }
    </script>
    <!-- this is content  -->
    <main class="web-main">
        <div class="web-main-body df-s">
            <!-- this is aside of website  -->
            @include('share.aside')
            <!-- this is content of website  -->
            <div class="web-content">
                <div class="con">
                    <!-- this is navegation of website -->
                    @include('share.navadmin')
                    <!-- this is books infor  -->
                    <div class="books">
                        <div class="books-body">
                            <table>
                                <tbody>
                                    <tr>
                                        <th colspan="3">
                                            <div class="th-box df-l">
                                                <div class="text"><p>ចំណងជើង</p></div>
                                                <ul class="df-l">
                                                    <li class="select df-c">
                                                        <select name="#" id="#">
                                                            <option value="#">ច្រោះទិន្នន័យ</option>
                                                            <option value="#">ជួរទី២</option>
                                                            <option value="#">ជួរទី៣</option>
                                                        </select>
                                                    </li>
                                                    <li class="search df-l">
                                                        <div class="search-box df-l">
                                                            <label for="text-search-item" class="btn df-c"><i class="fa-solid fa-magnifying-glass"></i></label>
                                                            <input type="text" id="text-search-item" required placeholder="search books">
                                                        </div>
                                                    </li>
                                                    <li class="add-book df-c">
                                                        <button class="btn" onclick="document.querySelector('#book-form').classList.toggle('web-form-active')"><i class="fa-solid fa-plus"></i><span>បញ្ចូលសៀវភៅ</span></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </th>
                                        <th>ពេលវេលា</th>
                                        <th>ចំនួន</th>
                                        <th>ជួរទូ</th>
                                        <th>លេខទូ</th>
                                        <th>ជាន់ទី</th>
                                        <th>ផ្កាយ</th>
                                        <th>កែប្រែ</th>
                                    </tr>
                                    @foreach ($books as $book)
                                    <tr class="tr-item">
                                        <td>
                                            <div class="td-box df-l book-infor">
                                                <div class="book-img">
                                                    <img src="{{ asset('storage/images/' . $book->img) }}" alt="">
                                                    <div class="icon-status icon icon-ra icon-sm">
                                                        @if($book->status == '1')
                                                            <i class="fa-solid fa-globe"></i>
                                                        @else
                                                            <i class="fa-solid fa-lock"></i>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <h2>{{$book->title }}</h2>
                                                    <p>{{$book->descript}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <form action="{{ route('bookdelete', $book->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><a class="btn btn-ra-sm btn-delete" onclick="return confirm('Are you sure you want to delete this book?')">លុបទិន្នន័យ</a></button>
                                            </form>
                                        </td>
                                        <td>
                                            <button class="btn btn-ra-sm btn-list">
                                                <a><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                <ul>
                                                    <li><a href="#" class="df-l"><i class="fa-solid fa-pen-to-square"></i><span>ធ្វើការកែប្រែ</span></a></li>
                                                    <li><a href="#" class="df-l"><i class="fa-solid fa-trash"></i><span>លុបអត្ថបទ</span></a></li>
                                                </ul>
                                            </button>
                                        </td>
                                        <td>{{ toKhmerNumber($book->created_at->format('Y-m-d')) }}</td>
                                        <td>{{$book->length}}</td>
                                        <td>{{ optional($book->range)->title }}</td>
                                        <td>{{ $book->closet->title }}</td>
                                        <td>{{ $book->floor->title }}</td>
                                        <td>{{ $book->star }}</td>
                                        <td class="btn-edit">
                                            <a href="{{ route('editbook', $book->id) }}" class="btn"><span>កែប្រែ</span><i class="fa-solid fa-pen-to-square"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tb-foot df-c d-n">
                            <div class="box df-c">
                                <button class="icon icon-ra icon-ra-sm over-h right-05"><i class="fa-solid fa-chevron-left"></i></button>
                                <ul class="df-c">
                                    <li data-id="1" class="btn icon-ra-sm active"><span>០១</span></li>
                                    <li data-id="1" class="btn icon-ra-sm"><span>០២</span></li>
                                    <li data-id="1" class="btn icon-ra-sm"><span>០៣</span></li>
                                    <li data-id="1" class="btn icon-ra-sm"><span>០៤</span></li>
                                    <li data-id="1" class="btn icon-ra-sm"><span>០៥</span></li>
                                </ul>
                                <button class="icon icon-ra icon-ra-sm over-h left-05"><i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/searchFn.js') }}"></script>
</body>
</html>