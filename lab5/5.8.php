<?php

$conn = mysqli_connect("localhost","root","","sl") or die("error connecting with db");

$cmd = "select * from students order by first_name";
$result = $conn->query($cmd);

?>

<html>
    <head>
        <title>ascentind order</title>
    </head>
    <body>
        <h1>order by name</h1>
        
            <table border="1" style="border-collapse:collapse">
                <thead>
                    <th>roll</th>
                    <th>name</th>
                    <th>gender</th>
                    <th>address</th>
                    <th>contact</th>
                </thead>
               <?php
                if ($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['roll'] ?></td>    
                            <td><?php echo $row['first_name']." ".$row['last_name'] ?></td>    
                            <td><?php echo $row['gender'] ?></td>    
                            <td><?php echo $row['address'] ?></td>    
                            <td><?php echo $row['contact'] ?></td>    
                        </tr>
                        <?php
                    }
                }

                ?>
</table>
        
    </body>
</html>