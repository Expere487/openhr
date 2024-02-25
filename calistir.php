<?php
$linkStr = isset($_GET["islem"]) ? $_GET["islem"] : "";
if (substr($linkStr, -1) === "/") {
	$linkStr = substr($linkStr, 0, -1);
}

$linkDizi = explode("/", $linkStr);

if($linkDizi[0]=="sign-up"){
	include "pages/register.php";
}elseif($linkDizi[0]=="sign-in"){
	include "pages/login.php";
}elseif($linkDizi[0]=="home" || $linkDizi[0]=="" || $linkDizi[0]==null){
	include "pages/index.php";
}
elseif($linkDizi[0]=="clients"){
	include "pages/clients.php";
}
?>