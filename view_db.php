<?php
echo "<table width='500px' height='200px' border='2' align='center'style='font-weight:100;background-color:green;'><tr><th>id</th><th>title</th><th>author</th><th>categories</th></tr>";
$conn=mysqli_connect("localhost","root","","library management system");
$select="select * from books";

$result=mysqli_query($conn,$select);
while($row=mysqli_fetch_assoc($result)){
echo "<tr><td>".$row["id"]."</td><td>".$row["title"]."</td><td>".$row["author"]."</td><td>".$row["category"]."</td><td><br>";
}
echo "</table>";
?>