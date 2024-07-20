<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite book</title>
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
        <form action="{{ route('bookupdate', $book->id) }}" method="post" class="db-c" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="web-form-body">
            <!-- this is header  -->
            <div class="head df-s">
                    <a class="df-l">
                        <span class="icon icon-ra icon-ra-sm">
                            <img class="img-co" src="{{asset('images/favicon.webp')}}" alt="">
                        </span>
                    </a>
                    <a><span>ទម្រង់បញ្ចូលសៀវភៅ</span></a>
                    <div class="icon-ra icon-sm df-c" onclick="history.back()">
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
                                        <input type="text" name="title" value="{{$book->title}}" placeholder="បញ្ចូលចំណងជើងនៃសៀវភៅ">
                                    </div>
                                </div>
                                <!-- this is discription  -->
                                <div class="text-caption">
                                    <label for="#">ពិពណ៌នា</label>
                                    <div class="txt-caption-box" data-replicated-value="null">
                                        <textarea name="descript" id="data-text" oninput="this.parentNode.dataset.replicatedValue = this.value" onblur="this.parentNode.dataset.replicatedValue = null" onclick="this.parentNode.dataset.replicatedValue = this.value" cols="30" rows="5" placeholder="សរសេរការពិពណ៌នារបស់អ្នក?">{{$book->descript}}</textarea>
                                    </div>
                                </div>
                                <!-- this is content photo  -->
                                <input type="file" id="txt-photo" hidden="" name="img" onchange="previewImage(event)">
                                <div class="txt-photo df-c" onclick="document.querySelector('#txt-photo').click()">
                                    <div class="txt-photo-box txt-photo-box-active" id="soeng_book">
                                        <ul>
                                            <li class="icon-ra-sm"><i class="fa-solid fa-photo-film"></i></li>
                                            <li><h2>បញ្ចូលរូបភាពសៀវភៅ</h2></li>
                                            <li><p>រូបភាព(២៨៦​X៤២៤px)</p></li>
                                        </ul>
                                        <img src="{{ asset('storage/images/' . $book->img) }}" class="img-c" alt="soeng">
                                    </div>
                                </div>
                                <!-- thi is number of book  -->
                                <div class="txt-title">
                                    <label for="#">ចំនួន</label>
                                    <div class="txt-title-box">
                                        <input type="text" name="length" value="{{$book->length}}" placeholder="បញ្ចូលចំនួនសៀវភៅ">
                                    </div>
                                </div>
                                <!-- thi is rang of book  -->
                                <div class="txt-title">
                                    <label for="#">ផ្កាយ</label>
                                    <div class="txt-title-box">
                                        <input type="text" name="star" value="{{$book->star}}" placeholder="បញ្ចូលចំនួនផ្កាយសៀវភៅ">
                                    </div>
                                </div>
                                <!-- this is seclect  -->
                                <div class="txt-select">
                                    <ul>
                                        <li>
                                            <label for="#">ជួរទូ</label>
                                            <div class="txt-select-list-con df-c">
                                                <select name="range_id" id="#">
                                                    <option value="{{$book->range_id}}">{{ $book->range->title }}</option>
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
                                                    <option value="{{$book->closet_id}}">{{ $book->closet->title }}</option>
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
                                                    <option value="{{$book->floor_id}}">{{ $book->floor->title }}</option>
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
                                        <input type="checkbox" name="popular" value="1" {{ $book->popular == 1 ? 'checked' : '' }}>
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
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បញ្ជីចាក់'" onclick="document.querySelector('#book-form').innerHTML = document.querySelector('#playlist-form').innerHTML"><i class="fa-solid fa-list"></i></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជួរទូ'" onclick="document.querySelector('#book-form').innerHTML = document.querySelector('#rang-form').innerHTML"><span>R</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'លេខទូ'" onclick="document.querySelector('#book-form').innerHTML = document.querySelector('#closet-form').innerHTML"><span>C</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'ជាន់ទូ'" onclick="document.querySelector('#book-form').innerHTML = document.querySelector('#floor-form').innerHTML"><span>F</span></li>
                                    <li class="icon icon-ra-sm text-be" style="--text-: 'បន្ថែម'" onclick="document.querySelector('#book-form').innerHTML = document.querySelector('#book-form').innerHTML"><i class="fa-solid fa-ellipsis"></i></li>
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
        <div class="form-b"></div>
    </div>
    <script type="text/javascript">
        // ============================this is for add image and show image==============>
        function previewImage(event,boxImg = "#soeng_book") {
            console.log("It's work");
            var ShowImg = document.querySelector(boxImg);
            var Img = ShowImg.querySelector('img');
            var input = event.target;
           
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    Img.src = e.target.result;
                    ShowImg.classList.add('txt-photo-box-active');
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                Img.src = '#';
                ShowImg.classList.remove('txt-photo-box-active');
            }
        }
    </script>
</body>
</html>