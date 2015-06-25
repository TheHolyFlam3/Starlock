<?php
$curpage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
if (
	$curpage == "index.php"||
	$curpage == "download.php"||
	$curpage == "forum.php"
	){
	include "includer/head.php";
	include "includer/menu.php";
	}

elseif (
	$curpage == "login.php"||
	$curpage == "register.php"
	){
	include "includer/head.php";
	}
?>