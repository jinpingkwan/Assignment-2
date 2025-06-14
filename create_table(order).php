<!-- CALL ONLY ONCE TOO -->
 <!-- Creates table `order` -->
<?php
 require_once("config.php");

 if(!$conn){
    die("Connection Fail");
 }

 $sql = "CREATE TABLE `ORDER`(
            order_id int primary key auto_increment,
            tea_id int,
            quantity int,
            ice_level int,
            sugar_level int,
            foreign key(tea_id) References tea(tea_id)
        );";

 if ($conn->query($sql)) {
     echo "table created";
 }

 $conn->close();