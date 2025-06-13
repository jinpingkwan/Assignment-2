<?php
    require_once("config.php");
    if(!$conn){
        die("Connection Fail");
    }
    $sql_delete_all_order = "DELETE FROM `order`;";

    $delete = $conn->query($sql_delete_all_order);

    $sql_reset_increment = "ALTER TABLE `order` AUTO_INCREMENT = 101;";

    $reset = $conn->query($sql_reset_increment);
    
    if ($delete && $reset) {
        header("Location: receipt.php");
        exit(); // Always use exit after header redirect
    } else {
    echo "Error ";
    }


?>