<?php
//getting the id to be deleted
$id=$_POST['id'];
//creating a connection to the database
$conn=mysqli_connect("localhost","root","","library management system");
//creating the query
$delete="delete from books where id='$id'";
//prepare statement
$pp=$conn->prepare($delete);
//executing the query
$pp->execute();
//closing the connection
$conn->close();

 echo "<script type='text/javascript'>";
 echo "alert('your books have been added deleted successfully')";
 echo "</script>";
?>