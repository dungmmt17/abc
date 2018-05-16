<?php
$server = "nienluanmmtbbb.tk";
$pass = $_GET["pass"];
// Method: Join meeting
$name = $_GET["name"];
$idmeeting = $_GET["id"];
$string = "joinfullName=".$name."&meetingID=".$idmeeting."&password=".$pass; //Thong tin join vao meeting da tao

$salt = "584218e7e4004a264eda4a1b19dab723"; //khoa chia se

$sha = sha1($string.$salt); //ma hoa

$link = "fullName=".$name."&meetingID=".$idmeeting."&password=".$pass."&checksum=".$sha;
?>
<body onLoad="javascript:location.href='http://<?php echo $server; ?>/bigbluebutton/api/join?<?php echo $link; ?>'">

