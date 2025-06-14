<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<style>
    body{
        color: white;
    }

    img{
        width: 10%;
    }
</style>
<body>
    <?php
    //GETS VALUES FROM CART.PHP
    $tea_id = $_POST["item_id"];
    $quantity = $_POST["quantity"];
    $ice_level = $_POST["ice_level"];
    $sugar_level = $_POST["sugar_level"];
    
    
    require_once("config.php");

    if(!$conn){
        die("Connection Fail");
     }

    //CREATES ENTRY FOR ORDER IN DATABASE
    $sql_insert_order = "insert into `order`(tea_id, quantity, ice_level, sugar_level) 
                         values ($tea_id, $quantity, $ice_level, $sugar_level);";

    if(!$conn->query($sql_insert_order)){
        die("Insert Fail");
    }

 

    $conn->close();

    //REDIRECTS TO RECEIPT.PHP
    header("Location: receipt.php");
    exit();
    ?>
        
    
    
</body>
</html>