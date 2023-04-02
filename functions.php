<?php
$sub=$_POST['submit'];
//echo "you will be using me soon";
switch($sub){
	case "ADD BOOK":
	header("Location:http://localhost/myprojects/addbk.html");
	break;
	case "DELETE BOOK":
	header("Location:http://localhost/myprojects/deletebk.html");
	break;
	case "UPDATE BOOK":
	header("Location:http://localhost/myprojects/updatebk.html");
	break;
	case "ISSUE BOOK":
	header("Location:http://localhost/myprojects/issue.html");
	break;
	case "VIEW BOOKS":
	header("Location:http://localhost/myprojects/view.html");
}

?>