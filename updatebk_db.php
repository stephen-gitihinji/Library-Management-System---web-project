<?php
//updating the db
$id=$_POST['id'];
$property=$_POST['property'];
$new_val=$_POST['new_val'];
//connection to the db
$conn=mysqli_connect("localhost","root","","library management system");
//creating an update query
if($property=="title"){
$update="update books set title='$new_val' where id='$id'";
$ex=$conn->prepare($update);
$ex->execute();
$conn->close();
}
else if($property=="author"){
$update="update books set author='$new_val' where id='$id'";
$ex=$conn->prepare($update);
$ex->execute();

}
else if($property=="category"){
$update="update books set category='$new_val' where id='$id'";
$ex=$conn->prepare($update);
$ex->execute();
$conn->close();
}
else echo "something went wrong";

?>