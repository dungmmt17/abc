<!DOCTYPE html>
<html lang="en">
<head>

  <title>Đăng Nhập - Trình Chiếu Tương Tác Cao</title>
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
      color: #F79331;
      font-weight: 600;
      margin-bottom: 30px;
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
       background-color: #fff;
      }
  
  .bg-grey {
      background-color: #F79331;
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
   
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
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
      
      .cam{
          background-color: #F79331;
          color: #fff;
      }
  .slideanim {visibility:hidden;
     
      
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
    width: inherit;
    
      
  
        
    }
      
      .row{
          
            padding: 30px;
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
        <li><a href="trangchu.php">Trang Chủ</a></li>
        <!-- <li><a href="#contact">Đăng Xuất</a></li> -->
      </ul>
    </div>
  </div>
</nav>


<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2 >Quản Lý</h2>

  </div>
  
  <?php
    if(isset($_POST['login']))
    {
        $username = $_POST['name'];
        $password = $_POST['pass'];
        $con = mysqli_connect('localhost','root','root','nienluan');
        $result = mysqli_query($con, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
        if(mysqli_num_rows($result) == 0){
		echo "<script> alert ('Sai User hoặc Password!! Vui lòng nhập lại!!'); </script>"; 
        } else
            require 'admin.php';
    }
    else
    {
?>
  
  <form action="" method="post">
  <div class="row ">
    <div class="col-sm-12 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3 class="cam">Đăng Nhập</h3>
        </div>
        <div class="row">
        <div class="col-sm-12 form-group">
          <input class="form-control" id="name" name="name" placeholder="Tên Đăng Nhập" type="text" required>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="pass" name="pass" placeholder="Mật khẩu" type="Password" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default center-block" name="login" type="submit">Đăng Nhập</button>
        </div>
      </div>
      </div>      
    </div>     
 
  </div>
  </form>
  
  <?php
    }
?>
  
</div>






<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>


<footer class="container-fluid text-center">
  
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
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
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
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

