<!DOCTYPE html>
<html lang="en">
<head>

  <title>ADMIN - Trình Chiếu Tương Tác Cao</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
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
      color: #F79331;
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
      
      .btn-primary {
          margin-right: 10px;
          background-color: #F79331;
          border-color: #fff;
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
       <!--  <li><a href="E:\Lab\bbb.edu.vn\trangchu.html">Trang Chủ</a></li> -->
        <li><a href="#quanly">Quản lý Phòng</a></li>
	<li><a href="#taophong">Tạo Phòng</a></li>
        <li><a href="#quanlynguoidung">Quản Lý Người Dùng</a></li>
        <li><a href="trangchu.php">Đăng Xuất</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="quanly" class="container-fluid">
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2 >Quản Lý Phòng</h2>

  </div>
  <div class="row ">
    <div class="col-sm-12 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3 class="cam">Danh Sách Phòng</h3>
        </div>
            <div class="row"> 
                
                
<div ng-app="myApp2" ng-controller="myController2" align="center">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form>
			<?php
								$conn = mysqli_connect('localhost', 'root', 'root', 'nienluan');
								$sql = 'SELECT * FROM meeting';
								$result = mysqli_query($conn, $sql);
								echo '<table class="table table-striped table-bordered">';
								echo '<thead>';
								echo '<tr>';
								echo "<td align='center'><strong>ID</strong></td>";
								echo "<td align='center'><strong>Tên</strong></td>";
								echo "<td align='center'><strong>Mật Khẩu Admin</strong></td>";
								echo "<td align='center'><strong>Mật Khẩu Tham Dự</strong></td>";
								echo "<td align='center'><strong>URL Tạo Phòng</strong></td>";
								//echo "<td align='center'><strong>Tác Vụ</strong></td>";
								echo '</thead>';
								echo '<tbody>';
								while ($row = mysqli_fetch_assoc($result)){
									echo '<tr ng-repeat="personalDetail in personalDetails">';
									echo "<td align='center'>".$row['ID']."</td>";
									echo "<td align='center'>".$row['name']."</td>";
									echo "<td align='center'>".$row['passadmin']."</td>";
									echo "<td align='center'>".$row['passuser']."</td>";
									echo "<td align='center'><a href=".$row['url'].">Tạo Phòng</td>";
								//echo "<td align='center'><button onclick=".mysqli_query($conn, "DELETE FROM meeting WHERE ID=".$row["ID"]).">Xóa Cuộc Họp</button></td>";
									echo '</tr>';
								}
								echo '</tbody>';
								echo '</table>';
								mysqli_free_result($result);
								mysqli_close($conn);
						?>
								
                    </form>
                </div>
            </div>
        </div>

</div>              
            </div>      
      </div>
   
    </div>      
</div>     
 
  </div>
</div>

<div id="taophong" class="container-fluid">
<div class="text-center">
    <h2 >Tạo Phòng</h2>

  </div>
 <form action="create.php" method="post">
  <div class="row ">
    <div class="col-sm-12 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3 class="cam">Tạo Phòng</h3>
        </div>
        <div class="row">
        <div class="col-sm-12 form-group">
          <input class="form-control" id="id" name="id" placeholder="ID Cuộc Họp" type="text" required>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="name" name="name" placeholder="Tên Cuộc Họp" type="text" required>
        </div>
		<div class="col-sm-12 form-group">
          <input class="form-control" id="passadmin" name="passadmin" placeholder="Mật khẩu dành cho admin" type="text" required>
        </div>
		<div class="col-sm-12 form-group">
          <input class="form-control" id="passuser" name="passuser" placeholder="Mật khẩu cho người tham dự" type="text" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default center-block" name="create" type="submit">Tạo Phòng</button>
        </div>
      </div>
      </div>      
    </div>     
 
  </div>
  </form>
  </div>


    
<div id="quanlynguoidung" class="container-fluid">
    <div id="pricing" class="container-fluid">
        <div class="text-center">
            <h2 >Quản Lý Người Dùng</h2>
        </div> 
     
            <form action="taouser.php" method="post">
  <div class="row ">
    <div class="col-sm-12 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3 class="cam">Tạo Người Dùng</h3>
        </div>
        <div class="row">
        <div class="col-sm-12 form-group">
          <input class="form-control" id="user" name="user" placeholder="Nhập Tên Tài Khoản" type="text" required>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="pass" name="pass" placeholder="Nhập Mật Khẩu" type="text" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default center-block" name="create" type="submit">Tạo Người Dùng</button>
        </div>
      </div>
      </div>      
    </div>     
 
  </div>
  </form>    
</div>
<div class="row ">
    <div class="col-sm-12 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3 class="cam">Danh Sách Người Dùng</h3>
        </div>
            <div class="row"> 
                
                
<div ng-app="myApp2" ng-controller="myController2" align="center">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form>
                        <?php
								$conn = mysqli_connect('localhost', 'root', 'root', 'nienluan');
								$sql = 'SELECT * FROM user';
								$result = mysqli_query($conn, $sql);
								echo '<table class="table table-striped table-bordered">';
								echo '<thead>';
								echo '<tr>';
								echo "<td align='center'><strong>Username</strong></td>";
								echo "<td align='center'><strong>Password</strong></td>";
								echo '</thead>';
								echo '<tbody>';
								while ($row = mysqli_fetch_assoc($result)){
									echo '<tr ng-repeat="personalDetail in personalDetails">';
									echo "<td align='center'>".$row["username"]."</td>";
									echo "<td align='center'>".$row["password"]."</td>";
									echo '</tr>';
								}
								echo '</tbody>';
								echo '</table>';
								mysqli_free_result($result);
								mysqli_close($conn);
						?>
								
                    </form>
                </div>
            </div>
        </div>

</div>                      
            </div>      
      </div>
   
    </div>      
</div>     
    
    
<script>
            var app = angular.module("myApp2", []);
                app.controller("myController2", function($scope) {
                    $scope.personalDetails = [
                        {
                            'fphong':'01',
                            'lgio':'8h-9h',
                            'user':'1324'
                       }];
                    $scope.addNew = function(personalDetail){
                        $scope.personalDetails.push({
                            'fphong': "",
                            'lgio': "",
                            'user': "",
                        });
                        };
                
        $scope.remove = function(){
//
            var newDataList=[];
            $scope.selectedAll = false;
            angular.forEach($scope.personalDetails,function(selected){
                if(!selected.selected){
                    newDataList.push(selected);
                }
            });
            $scope.personalDetails = newDataList;
        };
        $scope.checkAll = function () {
 
            angular.forEach($scope.personalDetails,function(personalDetail) {

                personalDetail.selected = $scope.selectedAll;
            });
        };


                });
    
    </script>
    
<script>
            var appUser = angular.module("myAppUser", []);
                appUser.controller("myControllerUser", function($scope, $http) {
                    $http.get("user.php")
                    .then(function (response) {$scope.dulieu = [
                        {
                            'cmaso':{{MaSO}},
                            'cuser':{{Ten}},
                            'cpass':{{MatKhau}}
                       }]})};
                    $scope.addNew = function(x){
                        $scope.dulieu.push({
                            'cmaso': "",
                            'cuser': "",
                            'cpass': "",
                        });
                        };
                
        $scope.remove = function(){
//
            var newDataList=[];
            $scope.selectedAll = false;
            angular.forEach($scope.dulieu,function(selected){
                if(!selected.selected){
                    newDataList.push(selected);
                }
            });
            $scope.dulieu = newDataList;
        };
        $scope.checkAll = function () {
 
            angular.forEach($scope.dulieu,function(x) {

                personalDetail.selected = $scope.selectedAll;
            });
        };


                });
    
    </script>
    



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>


<footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Quay Lại Đầu Trang</p>
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

