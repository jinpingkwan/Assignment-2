<!-- Call only once -->
 <!-- Inserts values for each tea into table teA -->
<?php
require_once("config.php");

if(!$conn){
    die("Connection Fail");
 }

 //SETS INITIAL TEA ID AS 101
 $sql_set_auto_inc = "alter table tea auto_increment = 101;";

 if ($conn->query($sql_set_auto_inc)) {
     echo "auto_increment set to 101<br>";
 }

$sql_insert = "INSERT INTO tea(tea_name, tea_price, tea_image) VALUES
                            ('GOLDEN GUAN YIN MILK TEA', 13.99, 'images/Chatea/1.png'),
                            ('PEACH OOLONG MILK TEA', 13.99, 'images/Chatea/2.png'),
                            ('ROASTED OOLONG MILK TEA', 13.99, 'images/Chatea/3.png'),
                            ('JASMINE GREEN MILK TEA', 13.99, 'images/Chatea/4.png'),
                            ('GLUTINOUS OOLONG TEA MACCHIATO', 13.99, 'images/Chatea/13.png'),
                            ('HIGHLAND OOLONG TEA', 13.99, 'images/Chatea/10.png'),
                            ('HIGHLAND OOLONG COLD BREW', 13.99, 'images/Chatea/11.png'),
                            ('GOLDEN GUAN YIN TEA MACCHIATO', 13.99, 'images/Chatea/12.png'),
                            ('FRESH GRAPEFRUIT TEA', 14.99, 'images/Chatea/25.png'),
                            ('JASMINE GRAPE TEA', 14.99, 'images/Chatea/26.png'),
                            ('FRESH MANGO POMELO TEA', 14.99, 'images/Chatea/27.png'),
                            ('FRESH PASSION FRUIT TEA', 14.99, 'images/Chatea/28.png'),
                            ('FRESH WATERMELON TEA', 15.99, 'images/Chatea/21.png'),
                            ('FRESH TROPICAL FRUIT TEA', 15.99, 'images/Chatea/22.png'),
                            ('FRESH ORANGE TEA', 15.99, 'images/Chatea/23.png'),
                            ('FRESH KIWI TEA', 15.99, 'images/Chatea/24.png');";

if ($conn->query($sql_insert)) {
    echo "Tea data added into database<br>";
}

$conn->close();