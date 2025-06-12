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
    
    $tea_id = $_POST["item_id"];
    $quantity = $_POST["quantity"];
    $ice_level = $_POST["ice_level"];
    $sugar_level = $_POST["sugar_level"];
    $total = 0.0;
    
    require_once("config.php");

    if(!$conn){
        die("Connection Fail");
     }

    $sql_insert_order = "insert into `order`(tea_id, quantity, ice_level, sugar_level) 
                         values ($tea_id, $quantity, $ice_level, $sugar_level);";

    if(!$conn->query($sql_insert_order)){
        die("Insert Fail");
    }

    $sql_get_all_orders = "SELECT 
                             order_id,
                             tea.tea_id,
                             tea.tea_name, 
                             `order`.quantity, 
                             `order`.ice_level, 
                             `order`.sugar_level, 
                             tea.tea_price,
                             tea.tea_image
                          FROM `order`
                          JOIN tea ON tea.tea_id = `order`.tea_id;
                         ";

    $orders = $conn->query($sql_get_all_orders);
    if(!$orders){
        die("Query Fail");
    }

    if ($orders->num_rows > 0) {
        echo "<table border = '1'>";
        echo "<colgroup>
                <col style='width: 60px;'>
                <col style='width: 150px;'>
                <col style='width: 100px;'>
                <col style='width: 100px;'>
                <col style='width: 80px;'>
                <col style='width: 100px;'>
             </colgroup>";
        echo "<tr>";
        echo "<th>Image</th>";
        echo "<th>Tea Name</th>";
        echo "<th>Ice Level</th>";
        echo "<th>Sugar Level</th>";
        echo "<th>Quantity</th>";
        echo "<th>Price</th>";
        echo "</tr>";

        while($row = $orders->fetch_assoc()){
            
            echo "<tr>"; 
            echo "<td><img src = '{$row['tea_image']}' style = 'width : 50px' alt = '{$row['tea_name']}'></td>";
            echo "<td>{$row['tea_name']}</td>";
            echo "<td>{$row['ice_level']}</td>";
            echo "<td>{$row['sugar_level']}</td>";
            echo "<td>{$row['quantity']}</td>";
            echo "<td>{$row['tea_price']}</td>";
            echo "</tr>";

            $total += $row['tea_price'] * $row['quantity'];
        }

        echo "</table>";

        echo "Total: RM ". number_format( $total,2) ."<br>";
        
    }else{
        echo "No Orders Found<br>";
    }

    $conn->close();
    ?>
        
    
    
</body>
</html>