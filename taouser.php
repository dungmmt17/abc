<?php


$user = $_POST["user"];
$pass = $_POST["pass"];

$con = mysqli_connect('localhost','root','root','nienluan');
$result = mysqli_query($con, "INSERT INTO user (username, password) VALUES ('$user', '$pass');");
?>
<script> alert ('Tạo người dùng thành công!'); </script>
<body onLoad="javascript:location.href='http://nienluanbbb.tk/nienluan/admin.php'">
