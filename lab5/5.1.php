<?php

$conn = mysqli_connect("localhost","root","") or die("error connecting with db");

$sql = "CREATE DATABASE SL";
if ($conn->query($sql)){
    echo "Database Created";
}else{
    echo "Database failed to create";
}

?>