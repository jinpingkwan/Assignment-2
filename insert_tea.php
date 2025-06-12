<?php
require_once("config.php");

if(!$conn){
    die("Connection Fail");
 }

 $sql_set_auto_inc = "alter table tea auto_increment = 101;";

 if ($conn->query($sql_set_auto_inc)) {
     echo "auto_increment set to 101<br>";
 }

$sql_insert = "INSERT INTO tea(tea_name, tea_price) VALUES
                            ('GOLDEN GUAN YIN MILK TEA', 13.99),
                            ('PEACH OOLONG MILK TEA', 13.99),
                            ('ROASTED OOLONG MILK TEA', 13.99),
                            ('JASMINE GREEN MILK TEA', 13.99),
                            ('GLUTINOUS OOLONG TEA MACCHIATO', 13.99),
                            ('HIGHLAND OOLONG TEA', 13.99),
                            ('HIGHLAND OOLONG COLD BREW', 13.99),
                            ('GOLDEN GUAN YIN TEA MACCHIATO', 13.99),
                            ('FRESH GRAPEFRUIT TEA', 14.99),
                            ('JASMINE GRAPE TEA', 14.99),
                            ('FRESH MANGO POMELO TEA', 14.99),
                            ('FRESH PASSION FRUIT TEA', 14.99),
                            ('FRESH WATERMELON TEA', 15.99),
                            ('FRESH TROPICAL FRUIT TEA', 15.99),
                            ('FRESH ORANGE TEA', 15.99),
                            ('FRESH KIWI TEA', 15.99);";

if ($conn->query($sql_insert)) {
    echo "Tea data added into database<br>";
}

$conn->close();