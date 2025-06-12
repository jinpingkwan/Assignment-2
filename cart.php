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
        .box{
           
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            color: white;
            scroll-margin-top: 80px;
            padding: 20px;
            }

        #image_section, #customize_section, .box{
            scroll-margin-top: 80px;
        }
        #image_section{
            width: 50%;
        }


        #image_section img{
            width: 75%;
            height: auto;
        }
        #customize_section{
            position: absolute;
             top: 50;
            right: 0; 
           font-family: 'Times New Roman', Times, serif;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <!-- Header section containing logo, brand name, and navigation -->
    <div class = "header_container">
        <div class = "header_logo">
        <img id = "header" src="images/image (12).png" alt="logo" width = 50px height = 50px>
        </div>
        <div class = "header_brand_name">
            <h1 id = "header">Chatea</h1>
        </div>
        <div class = "header_menu">
            <a href="menu.php" class = "header_menu">menu</a>
        </div>
        <div class = "header_about_us">
            <a href="#about_us" class = "header_about_us">about us</a>
        </div>
    </div>
    <div class="box">
        <?php
        $id = $_POST["item_id"];
        $name = $_POST["item_name"];
        $image_src = $_POST["item_image"];

        $image = "<img src='$image_src' alt = '$name'>";

        echo "<div id = 'image_section'> $image </div>";

        //Right Side of Page
        echo "<div id = 'customize_section'>";
        echo "<h1>$name</h1>";
        echo "<form action = 'order.php' method = 'POST'>";
        //Customise Sugar Level
            echo "<div id = 'sweetness_section'>";
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

            //Customise Ice Level
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

            //Customise Quantity
            echo "<div id = 'quantity_section'>";
                echo "<h2>Quantity</h2>";
                echo "<input type = 'number' name = 'quantity'>";
            echo "</div>";

            echo "<input type='hidden' name='item_id' value = $id>";
            echo "<input type='hidden' name = 'item_image' value = $image>";

            echo "<button type='submit'>Add To Cart</button>";
        echo "</form></div>";
        ?>
    </div>
    
</body>
</html>