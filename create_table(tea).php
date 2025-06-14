<!-- CALL ONLY ONCE TOO -->
 <!-- Creates table tea -->
 <?php
 require_once("config.php");

 if(!$conn){
    die("Connection Fail");
 }

 $sql = "CREATE TABLE TEA(
            tea_id int primary key auto_increment,
            tea_name varchar(50),
            tea_price decimal(10,2),
            tea_image varchar(255)
        );";

 if ($conn->query($sql)) {
     echo "table created";
 }

 $conn->close();