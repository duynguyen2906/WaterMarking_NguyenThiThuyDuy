<?php
$act = $_GET['act'];

if ($act=="")
	include ('music.php');
else if ($act=="dn")
	include ('dangnhap.php');
else if ($act=="dk")
	include ('dangky.php');
else if ($act=="dx")
	include ('dangxuat.php');
else if ($act=="mymusic")
	include ('mymusic.php');
else if ($act=="getsign")
	include ('getsign.php');
else if ($act=="up")
	include_once ('upload.php');
else if ($act=="contact")
	include ('contact.php');
else if ($act=="buy")
	include ('getsong.php');
?>
