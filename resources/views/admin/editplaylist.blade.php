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
        <form action="{{ route('updateplaylist', $playlist->id) }}" method="post" class="db-c" enctype="multipart/form-data">
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
                    <a><span>ទម្រង់បង្កើតផ្លេយលិស</span></a>
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
                                        <input type="text" name="title" value="{{$playlist->title}}" placeholder="បញ្ចូលចំណងជើងនៃសៀវភៅ">
                                    </div>
                                </div>
                                <!-- this is content photo  -->
                                <input type="file" name="img" id="txt-photo_play" hidden="" onchange="previewImage(event,'.soeng_play')">
                                <div class="txt-photo df-c" onclick="document.querySelector('#txt-photo_play').click()">
                                    <div class="txt-photo-box soeng_play txt-photo-box-active" id="#">
                                        <ul>
                                            <li class="icon-ra-sm"><i class="fa-solid fa-photo-film"></i></li>
                                            <li><h2>បញ្ចូលរូបភាពផ្លេយលិស</h2></li>
                                            <li><p>រូបភាព១៤៤០​*៧៥០px</p></li>
                                        </ul>
                                        <img src="{{asset('storage/images/'.$playlist->img)}}" alt="soeng">
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
                        <button class="btn icon-ra">បង្ហោះបញ្ជី</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="form-b"></div>
    </div>
    <script type="text/javascript">
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
    </script>
</body>
</html>