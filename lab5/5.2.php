<?php

$conn = mysqli_connect("localhost","root","","sl") or die("connection error");


$cmd = "create table if not exists students (
    roll int primary key not null,
    first_name varchar(50),
    last_name varchar(50),
    gender varchar(10),
    address varchar(50),
    contact varchar(10)

)";

if ($conn->query($cmd)){
    echo "Table Created";
}else{
    echo "failed to create table: ".$conn->error;
}


?>