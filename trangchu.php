<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trình Chiếu Tương Tác Cao</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }

        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
            r
        }

        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }

        .container-fluid {
            padding: 60px 50px;
        }

        .bg-grey {
            background-color: #fff;
        }

        .logo-small {
            color: #f4511e;
            font-size: 50px;
        }

        .logo {
            color: #f4511e;
            font-size: 200px;
        }

        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }

        .carousel-control.right, .carousel-control.left {
            background-image: none;
            color: #f4511e;
        }

        .carousel-indicators li {
            border-color: #f4511e;
        }

        .carousel-indicators li.active {
            background-color: #f4511e;
        }

        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }

        .item span {
            font-style: normal;
        }

        .panel {

            border-radius: 0 !important;
            transition: box-shadow 0.5s;
        }

        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
        }

        .panel-footer .btn:hover {
            border: 1px solid #f4511e;
            background-color: #fff !important;
            color: #f4511e;
        }

        .panel-heading {
            color: #fff !important;
            background-color: #F79331 !important;
            padding: 2px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .panel-footer {
            background-color: white !important;
        }

        .panel-footer h3 {
            font-size: 20px;
        }

        .panel-footer h4 {
            color: #aaa;
            font-size: 15px;
        }

        .panel-footer .btn {
            margin: 15px 0;
            background-color: #F79331;
            color: #fff;
        }

        .navbar {
            margin-bottom: 0;
            background-color: #F79331;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }

        .navbar li a, .navbar .navbar-brand {
            color: #fff !important;
        }

        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #f4511e !important;
            background-color: #fff !important;
        }

        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }

        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #f4511e;
        }

        .cam {
            background-color: #F79331;
            color: #fff;
        }

        .slideanim {
            visibility: hidden;
        }

        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }

        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }

        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }

            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }

        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }

        .btn-default {
            color: #fff;
            background-color: #F79331;
        }
    </style>

</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand">INTERACTIVE SHOW</a>

        </div>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#gioithieu">Giới Thiệu</a></li>
                <li><a href="#portfolio">Lịch Phòng</a></li>
                <li><a href="#pricing">Liên Hệ</a></li>
                <li><a href="#contact">Tham Gia Phòng</a></li>
		<li><a href="dangnhap.php">Quản Lý</a></li>
            </ul>
        </div>

    </div>
</nav>


<!-- Container (About Section) -->
<div id="gioithieu" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>Giới Thiệu </h2><br>
            <h4>Interactive Show là hệ thống hỗ trợ trình chiếu tương tác cao, dựa trên nền tảng của BigBlueButton, giúp việc trình chiếu tiện lợi và mang lại hiệu quả cao. </h4>
            <br>
            <br>
        </div>
        <div class="col-sm-4">
            <img src="img/bbb.jpg" width="300" height="300">
        </div>
    </div>
</div>


<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>Lịch Phòng</h2><br>
    <h4>Các lịch phòng đã được đăng kí trước</h4>

    <h2>Các Lịch Trong Tuần</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <h4>Thứ Hai<br><span></span></h4>
            </div>
            <div class="item">
                <h4>Thứ Ba<br><span></span></h4>
            </div>
            <div class="item">
                <h4>Thứ Tư<br><span></span></h4>
            </div>
            <div class="item">
                <h4>Thứ Năm<br><span></span></h4>
            </div>
            <div class="item">
                <h4>Thứ Sáu<br><span></span></h4>
            </div>
            <div class="item">
                <h4>Thứ Bảy<br><span></span></h4>
            </div>
            <div class="item">
                <h4>Chủ Nhật<br><span></span></h4>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid cam">
    <div class="text-center">
        <h2 class="cam">Liên Hệ</h2>

    </div>
    <div class="row slideanim">
        <div class="col-sm-6 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3 class="cam">Hỗ Trợ</h3>
                </div>
                <div class="panel-footer">
                    <h4>Liên hệ</h4>
                    <button class="btn btn-lg">Chi Tiết</button>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3 class="cam">Thông Tin Thêm</h3>
                </div>
                <div class="panel-footer">
                    <h4>Thông tin thêm và website </h4>
                    <button class="btn btn-lg">Chi Tiết</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">Tham Gia Phòng</h2>
    <form action="join.php" method="get">
    <div class="col-sm-12 slideanim">
        <div class="row">
            <div class="col-sm-12 form-group">
                <input class="form-control" id="idmeeting" name="id" placeholder="ID Meeting" type="text" required>
            </div>
			<div class="col-sm-12 form-group">
                <input class="form-control" id="name" name="name" placeholder="Your Name" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
                <input class="form-control" id="pass" name="pass" placeholder="Password" type="password" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 form-group">
                <button class="btn btn-default pull-right" type="submit" name="dangnhap">Tham Gia</button>
            </div>
        </div>
    </div>
    </form>
</div>


<footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Quay Lại Đầu Trang</p>
</footer>

<script>
    $(document).ready(function () {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function (event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function () {
            $(".slideanim").each(function () {
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

</body>
</html>

