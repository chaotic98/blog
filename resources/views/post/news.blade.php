<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">



    <title>بلاگ</title>
    <style>
        #mn{
            position: relative;
            text-align: center;
        }
        .centered{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        a{
            margin: 0 auto;
        }
    </style>
</head>
<body>
<script src="{{asset('bootstrap/jquery-3.4.1.min.js')}}"></script>
<!-- NAVIGATION BEGAIN HERE -->

<nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container">
        <a class="navbar-brand test-weight-blod" href="{{route('post.create')}}"><b class="text-success">ثبت نام</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"></div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-uppercase">

                <li class="nav-item">
                    <a class="nav-link" href="{{url('news')}}">صفحه اصلی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">تماس با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >راهنمایی</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" id="mn">
    <!-- SHOWCASE BEGAIN HERE -->
    <img src="{{asset('image/light-bokeh-colors-blur-722680.jpeg')}}" class="img-fluid">
    <div class="centered h2 font-weight-bold text-white">خوش امدید</div>
    <!-- SHOWCASE ENDS HERE -->
    <!-- THREE CARDS BEGAIN HERE -->
    <div class="card-group mt-3">
        <div class="card">
            <img src="{{asset('image/pexels-photo-589840.jpeg')}}" alt="img"
                 class="card-img-top">
            <div class="card-body">
                <button class="btn btn-outline-success">بیشتر بدانید</button>
                <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    .</p>
            </div>
        </div>
        <div class="card mx-3">
            <img src="{{asset('image/giah.jpeg')}}" alt="img"
                 class="card-img-top">
            <div class="card-body">
                <button class="btn btn-outline-success">بیشتر بدانید</button>
                <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    .</p>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('image/gol.jpeg')}}" alt="img"
                 class="card-img-top">
            <div class="card-body">
                <button class="btn btn-outline-success">بیشتر بدانید</button>
                <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    .</p>
            </div>
        </div>
    </div>
    <!-- THREE CARDS ENDS HERE -->



    <!-- BLOG BODY BEGAIN HERE -->
    <div class="blog-body mt-5">
        <div class="row">
            <!-- LEFT SIDE  BEGAIN HERE -->
            <div class="col-md-8 pl-0">
                <!-- BLOG POST BEGAIN HERE -->
                <div class="blog-post">
                    <img src="{{asset('galaxy/1.jpg')}}" alt="img"
                         class="img-fluid">
                    <h2>این یک تست است</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. .</p>
                </div>
                <div class="blog-post">
                    <img src="{{asset('galaxy/2.jpg')}}" alt="img" class="img-fluid">
                    <h2>این یک تست است</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. .</p>
                </div>
                <div class="blog-post">
                    <img src="{{asset('galaxy/3.jpg')}}" alt="img"
                         class="img-fluid">
                    <h2>This is sample post title</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. s.</p>
                </div>
                <div class="blog-post">
                    <img src="{{asset('galaxy/4.jpg')}}" alt="img"
                         class="img-fluid">
                    <h2>این یک تست است</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                </div>
                <div class="blog-post">
                    <img src="{{asset('galaxy/index.jpg')}}" alt="img"
                         class="img-fluid">
                    <h2>این یک تست است</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. .</p>
                </div>
                <!-- BLOG POST ENDS HERE -->
            </div>
            <!-- LEFT SIDE  BEGAIN HERE -->

            <!-- RIGHT SIDE BEGAIN HERE -->
            <div class="col-md-4 pr-0">
               {{-- <!-- NEWSLETTER BEGAIN HERE -->
                <form class="form-group shadow p-2">
                    <label class="text-uppercase mb-4 font-weight-bold">Newsletter</label>
                    <input type="text" class="form-control" placeholder="Enter your mail">
                    <button class="btn btn-success btn-block mt-2">Subscribe</button>
                </form>--}}
                <!-- NEWSLETTER ENDS HERE -->

                <!-- CATEGORY SECTION BEGAIN -->
                <div class="category shadow mt-4">
                    <h2 class="text-uppercase bg-success text-white">رسته</h2>
                    <div class="list-group">
                        <div class="list-group-item bg-light">تکنولوژي</div>
                        <div class="list-group-item">بیزنس</div>
                        <div class="list-group-item bg-light">علمی</div>
                        <div class="list-group-item">ورزشی</div>
                        <div class="list-group-item bg-light">سیاسی</div>
                        <div class="list-group-item">تور</div>
                    </div>
                </div>
                <!-- CATEGORY SECTION BEGAIN -->

                <!-- POPULAR SECTION BEGAIN -->
                <div class="popular shadow mt-4">
                    <h2 class="text-uppercase bg-success text-white">بیشترین بازدید</h2>
                    <div class="list-group">
                        <div class="list-group-item bg-light">چگوننگی تمرین</div>
                        <div class="list-group-item">مسافرت دور دنیا</div>
                        <div class="list-group-item bg-light">ترفند های بدرد بخور</div>
                        <div class="list-group-item">بارسلونا</div>
                        <div class="list-group-item bg-light">کرونا ویروس</div>
                        <div class="list-group-item">تهران</div>
                    </div>
                </div>
                <!-- POPULAR SECTION ENDS -->
            </div>
            <!-- RIGHT SIDE ENDS HERE -->
        </div>
    </div>
    <!-- BLOG BODY ENDS HERE -->

    <!-- PAGINATION BEGAIN HERE -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    <!-- PAGINATION ENDS HERE -->

</div>
<!-- WRAPPING EVERYTHING ENDS HERE -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
