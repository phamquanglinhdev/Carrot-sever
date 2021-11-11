<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Dtox</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset("plugins/bootstrap/bootstrap.min.css")}}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{asset("plugins/themify-icons/themify-icons.css")}}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset("plugins/slick/slick.css")}}">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{asset("plugins/Venobox/venobox.css")}}">
    <!-- aos -->
    <link rel="stylesheet" href="{{asset("plugins/aos/aos.css")}}">

    <!-- Main Stylesheet -->
    <link href="{{asset("css/style.css")}}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset("images/favicon.ico")}}" type="image/x-icon">
    <link rel="icon" href="{{asset("images/favicon.ico")}}" type="image/x-icon">

</head>
<body>
<!-- navigation -->
<section class="fixed-top navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navbar -->
            <div class="collapse navbar-collapse text-center" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("index")}}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{route("index")}}#feature">Tính năng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("about")}}">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("service")}}">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{route("index")}}#team">Đội ngũ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{route("index")}}#pricing">Các gói</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("contact")}}">Liên hệ</a>
                    </li>
                </ul>
                <a href="#" class="btn btn-primary ml-lg-3 primary-shadow">Học ngay</a>
            </div>
        </nav>
    </div>
</section>
<!-- /navigation -->
@yield("content")
<!-- footer -->
<footer class="footer-section footer" style="background-image: url({{asset("images/backgrounds/footer-bg.png")}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
                <!-- logo -->
                <a href="index.html">
                    <img class="img-fluid" src="{{asset("images/logo.png")}}" alt="logo">
                </a>
            </div>
            <!-- footer menu -->
            <nav class="col-lg-8 align-self-center mb-5">
                <ul class="list-inline text-lg-right text-center footer-menu">
                    <li class="list-inline-item active"><a href="index.html">Trang chủ</a></li>
                    <li class="list-inline-item"><a class="page-scroll" href="#feature">Tính năng</a></li>
                    <li class="list-inline-item"><a href="about.html">Về chúng tôi</a></li>
                    <li class="list-inline-item"><a class="page-scroll" href="#team">Đội ngũ</a></li>
                    <li class="list-inline-item"><a class="page-scroll" href="#pricing">Các gói</a></li>
                    <li class="list-inline-item"><a href="contact.html">Liên hệ</a></li>
                </ul>
            </nav>
            <!-- footer social icon -->
            <nav class="col-12">
                <ul class="list-inline text-lg-right text-center social-icon">
                    <li class="list-inline-item">
                        <a class="facebook" href="#"><i class="ti-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="linkedin" href="#"><i class="ti-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="black" href="#"><i class="ti-github"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset("plugins/jQuery/jquery.min.js")}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset("plugins/bootstrap/bootstrap.min.js")}}"></script>
<!-- slick slider -->
<script src="{{asset("plugins/slick/slick.min.js")}}"></script>
<!-- venobox -->
<script src="{{asset("plugins/Venobox/venobox.min.js")}}"></script>
<!-- aos -->
<script src="{{asset("plugins/aos/aos.js")}}"></script>
<!-- Main Script -->
<script src="{{asset("js/script.js")}}"></script>
</body>
</html>
