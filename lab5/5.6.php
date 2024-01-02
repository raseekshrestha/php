<?php
$conn = mysqli_connect("localhost","root","","sl") or die("connection error");

$sql = "select * from students order by roll desc limit 1";

$newAddress = "KTM";
$newContact = "9898989";

$result = $conn->query($sql);
if ($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $roll = $row['roll'];
    $cmd = "UPDATE students set address='$newAddress', contact='$newContact' where roll=$roll";
    if ($conn->query($cmd)){
        echo "contact and address of last record updated";
    }else{
        echo "failed update".$conn->error;
    }
}


?>