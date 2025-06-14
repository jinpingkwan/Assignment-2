<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="receipt.css">
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body{
            color: var(--regular-text);
        }
    </style>
</head>
<body>
    <!-- Header Bar with Navigational Links -->
    <header>
        <a href="brands.html" id = "home_link">
             <img src="images/image (12).png" alt="logo" width = 50px height = 50px>

             <h1>Chatea</h1>
         </a> 
     
         <a href="menu.php">menu</a>
     
         <a href="brands.html#about_us">about us</a>

         <a href="receipt.php">cart</a>
    </header>
    <?php

        $total = 0.0;

        require_once("config.php");

        if(!$conn){
            die("Connection Fail");
        }
     
        // Gets attributes from order table and tea table for all orders
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
        //prints table for output
        if ($orders->num_rows > 0) {
            echo "<table>";
            //sets column width for each column
            echo "<colgroup>
                    <col style='width: 60px;'>
                    <col style='width: 150px;'>
                    <col style='width: 100px;'>
                    <col style='width: 100px;'>
                    <col style='width: 80px;'>
                    <col style='width: 100px;'>
                  </colgroup>";
            echo "<tr>
                    <th>Image</th>
                    <th>Tea Name</th>
                    <th>Ice Level</th>
                    <th>Sugar Level</th>
                    <th>Quantity</th>
                    <th>Price</th>
                  </tr>";
        
            while($row = $orders->fetch_assoc()){
                echo "<tr>"; 
                echo "<td><img src='{$row['tea_image']}' alt='{$row['tea_name']}'></td>";
                echo "<td>{$row['tea_name']}</td>";
                echo "<td>{$row['ice_level']}%</td>";
                echo "<td>{$row['sugar_level']}%</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "<td>RM ".number_format($row['tea_price'], 2)."</td>";
                echo "</tr>";
        
                $total += $row['tea_price'] * $row['quantity'];
            }
        
            echo "</table>";
            echo "<div class='total'>Total: RM " . number_format($total, 2) . "</div>";

            
        
        } else {
            //deals when either orders are cleared or when no orders
            echo "<div class='no-orders'> ";
                echo "<table>";
                echo "<colgroup>
                    <col style='width: 60px;'>
                    <col style='width: 150px;'>
                    <col style='width: 100px;'>
                    <col style='width: 100px;'>
                    <col style='width: 80px;'>
                    <col style='width: 100px;'>
                  </colgroup>";

                echo "<tr>
                    <th>Image</th>
                    <th>Tea Name</th>
                    <th>Ice Level</th>
                    <th>Sugar Level</th>
                    <th>Quantity</th>
                    <th>Price</th>
                  </tr>";

                echo "<tr style ='height: 50px;' >
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>   
                  </tr>";
                echo "</table>";
            
            echo "</div>";
        }
     
        $conn->close();
    ?>
    
    <!-- button to clear all orders -->
    <form method="POST" action="clear.php" id="clear_button">
        <button type="submit">Clear All</button>
       
    </form>
</body>
</html>