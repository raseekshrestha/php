<?php

$conn = mysqli_connect("localhost","root","","sl") or die("error connecting with db");

if (isset($_POST['add'])){
    $roll = $_POST['roll'];
    $fname =  $_POST['fname'];
    $lname =  $_POST['lname'];
    $gender =  $_POST['gender'];
    $address =  $_POST['address'];
    $contact =  $_POST['contact'];

    $sql = "insert into students values ('$roll','$fname','$lname','$gender','$address','$contact')";

    if ($conn->query($sql)){
        echo "<h1>Data Inserted</h1>";
    }else{
        echo "<h1>Failed: ".$conn->error."</h1>";
    }

    
}
?>

<html>
    <head>
        <title>insert data</title>
    </head>
    <body>
        <h1>insert data</h1>
        <form method="POST">
            <input type="number" name="roll" placeholder="roll"><br>
            <input type="text" name="fname" placeholder="First Name">
            <input type="text" name="lname" placeholder="Last Name"><br>
            <input type="text" name="address" placeholder="address"><br>

            Select Gender: <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="text" name="contact" placeholder="9861xxx"><br>
            
            <button type="submit" name="add">Add</button>

        </form>
    </body>
</html>