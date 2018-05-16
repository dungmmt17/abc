<?php

$server = "nienluanmmtbbb.tk";  // Dia Chi server bigbluebutton
$namemeeting = $_POST["name"];
$idmeeting = $_POST["id"];
$passadmin = $_POST["passadmin"];
$passuser = $_POST["passuser"];

// Method: Create meeting

$string = "createname=".$namemeeting."&meetingID=".$idmeeting."&attendeePW=".$passuser."&moderatorPW=".$passadmin; //thong tin cuoc hop

$salt = "584218e7e4004a264eda4a1b19dab723";  // Khoa bi mat chia se

$sha = sha1($string.$salt); // Ma hoa sha

$link = "name=".$namemeeting."&meetingID=".$idmeeting."&attendeePW=".$passuser."&moderatorPW=".$passadmin."&checksum=".$sha; //thong tin va checksum

$url ="http://".$server."/bigbluebutton/api/create?".$link;
$con = mysqli_connect('localhost','root','root','nienluan');
$result = mysqli_query($con, "INSERT INTO meeting (ID, name, passadmin, passuser, url) VALUES ('$idmeeting', '$namemeeting', '$passadmin', '$passuser', '$url');");
?>
<script> alert ('Tạo phòng thành công!'); </script>
<body onLoad="javascript:location.href='http://nienluanbbb.tk/nienluan/admin.php'">
