<?php
//adding a book to php
$conn=new mysqli("localhost","root","","library management system");

$id=$_POST['id'];
$title=$_POST['title'];
$author=$_POST['author'];
$category=$_POST['category'];

//creating an sql query
$insert="INSERT Into books(id,title,author,category)values(?,?,?,?)";
//prepare statement
$stmt=$conn->prepare($insert);
 //binding the parameters
 $stmt->bind_param("isss",$id,$title,$author,$category);
 //executing the above statements
if($stmt->execute()){
 
 echo "<script type='text/javascript'>";
 echo "alert('your books have been added successfully')";
 echo "</script>";
}
?>