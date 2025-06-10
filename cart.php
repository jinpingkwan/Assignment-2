<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body{
            display: inline;
            color: white;
        }

        #image_section{
            width: 50%;
        }

        #image_section img{
            width: 75%;
            height: auto;
        }

        /* #customize_section{
            disp
        } */
    </style>
    <title>Document</title>
</head>
<body>
    
    <?php
    $id = $_POST["item_id"];
    $name = $_POST["item_name"];
    $image_src = $_POST["item_image"];

    $image = "<img src='$image_src' alt = '$name'>";

    echo "<div id = 'image_section'> $image </div>";
    echo "<div id = 'customize_section'>";
    echo "<h1>$name</h1>";
    echo "<form action = 'order.php' method = 'POST'>";
        echo "<div id = 'sweetness_section>";
            echo "<h2>Sugar Level</h2>";
            echo "<input type='radio' id='sugar_100' name='sugar_level' value='100'>";
            echo "<label for='sugar_100'>100%</label>";

            echo "<input type='radio' id='sugar_75' name='sugar_level' value='75'>";
            echo "<label for='sugar_75'>75%</label>";

            echo "<input type='radio' id='sugar_50' name='sugar_level' value='50'>";
            echo "<label for='sugar_50'>50%</label>";

            echo "<input type='radio' id='sugar_25' name='sugar_level' value='25'>";
            echo "<label for='sugar_25'>25%</label>";

            echo "<input type='radio' id='sugar_0' name='sugar_level' value='0'>";
            echo "<label for='sugar_0'>0%</label>";

        echo "</div>";

        echo "<div id = 'ice_section'>";
            echo "<h2>Ice Level</h2>";
            echo "<input type='radio' id='ice_100' name='ice_level' value='100'>";
            echo "<label for='ice_100'>100%</label>";

            echo "<input type='radio' id='ice_75' name='ice_level' value='75'>";
            echo "<label for='ice_75'>75%</label>";

            echo "<input type='radio' id='ice_50' name='ice_level' value='50'>";
            echo "<label for='ice_50'>50%</label>";

            echo "<input type='radio' id='ice_25' name='ice_level' value='25'>";
            echo "<label for='ice_25'>25%</label>";

            echo "<input type='radio' id='ice_0' name='ice_level' value='0'>";
            echo "<label for='ice_0'>0%</label>";
        echo "</div>";

        echo "<div id = 'quantity_section'>";
            echo "<h2>Quantity</h2>";
            echo "<input type = 'number' name = 'quantity'>";
        echo "</div>";

        echo "<button type='submit'>Add To Cart</button>";
    echo "</form></div>";
    ?>
</body>
</html>