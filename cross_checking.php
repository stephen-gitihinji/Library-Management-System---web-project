<?php
require 'objects.php';
?>
<?php

$a1=new admin();
$a1->name="john";
$a1->password="123456789";
$a1->id="1";

$name=$_POST['name'];
$password=$_POST['password'];

if($name==$a1->name&&$password==$a1->password){
	header("Location:http://localhost/myprojects/functions.html");
}
else{
	header("Location:http://localhost/myprojects/adm_login.html");
	
}
?>