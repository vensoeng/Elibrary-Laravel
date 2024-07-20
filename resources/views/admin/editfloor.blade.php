<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite Closet | {{$floor->title}}</title>
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
    <!-- this is form for insert book data  -->
    <div class="web-form web-form-active" id="book-form">
        <div class="web-form-body">
            <!-- this is header  -->
            <div class="head df-s">
                <a class="df-l">
                    <span class="icon icon-ra icon-ra-sm">
                        <img class="img-co" src="{{asset('images/favicon.webp')}}" alt="">
                    </span>
                </a>
                <a><span>ទម្រង់កែប្រែ{{$floor->title}}</span></a>
                <div class="icon-ra icon-sm df-c" onclick="location.href='{{route('admin')}}'">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <form action="{{route('updatefloor',$floor->id)}}" method="post" class="db-c">
                @csrf
                @method('PUT')
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
                                        <input type="text" value="{{$floor->title}}" placeholder="បញ្ចូលចំណងជើងជួរ" name="txt-floor">
                                    </div>
                                </div>
                                <!-- this is all txt range  -->
                                <div class="txt-range">
                                    <div class="box">
                                        <ul>
                                        @foreach ($floorModels as $floor)
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
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បញ្ជីចាក់'" onclick="getHTML('#playlist-form')"><i class="fa-solid fa-list"></i></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជួរទូ'" onclick="getHTML('#rang-form')"><span>R</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'លេខទូ'" onclick="getHTML('#closet-form')"><span>C</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជាន់ទូ'" onclick="getHTML('#floor-form')"><span>F</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បន្ថែម'" onclick="getHTML('#book-form')"><i class="fa-solid fa-ellipsis"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- this is footer form  -->
                <div class="submit-form">
                    <div class="box df-c">
                        <button type="submit" class="btn icon-ra">កែប្រែលេខទូ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>