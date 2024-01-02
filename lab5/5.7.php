<?php
$conn = mysqli_connect("localhost","root","","sl") or die("connection error");

$sql = "delete from students where roll = (select roll from students limit 1 offset 1) ";


$result = $conn->query($sql);
echo "<h1>deleteing 2nd record from db<h1>";
if ($result){
    echo "deleted successfully";
}else{
    echo "failed deletion";
}


?>