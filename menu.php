<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="header.css">
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
    
<body>
    
    <!-- Header section containing logo, brand name, and navigation -->
    <header>
        <a href="brands.html" id = "home_link">
             <img src="images/image (12).png" alt="logo" width = 50px height = 50px>

             <h1>Chatea</h1>
         </a> 
     
         <a href="menu.php">menu</a>
     
         <a href="brands.html#about_us">about us</a>

         <a href="receipt.php">cart</a>
    </header>

    
    <!-- Menu section  -->
    <div class ="menu_container">
        <div class = "menu_header">
            <h1 id = "menu">Menu</h1>
        </div>
       
    <!-- Menu category -->
        <div class = "menu_list" >
            <!-- 4 button to choose category -->
             <div class ="menu_selection">
                <button onclick="showCategory('milk_tea')">Milk Tea</button>
                <button onclick="showCategory('pure_tea')">Pure Tea</button>
                <button onclick="showCategory('fruit_tea')">Fruit Tea</button>
                <button onclick="showCategory('new_launch')">New Launch</button>
            </div>
           <!-- add to cart by clicking the image -->
            <div id = "milk_tea" >
                <form id = "form_101" action="cart.php" method = "post" onclick="document.getElementById('form_101').submit();">
                    <div class ="menu_item1">
                        <img src="images/Chatea/1.png" alt="GOLDEN GUAN YIN MILK TEA"  >
                        <h3>GOLDEN GUAN YIN MILK TEA</h3><br>
                        <h3>RM 13.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value = "101">
                    <input type="hidden" name="item_name" value = "GOLDEN GUAN YIN MILK TEA">
                    <input type="hidden" name="item_image" value = "images/Chatea/1.png">
                    
                </form>
                
                <form id="form_102" action="cart.php" method="post" onclick="document.getElementById('form_102').submit();">
                    <div class="menu_item2">
                        <img src="images/Chatea/2.png" alt="milketea2">
                        <h3>PEACH OOLONG MILK TEA</h3><br>
                        <h3>RM 13.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="102">
                    <input type="hidden" name="item_name" value="PEACH OOLONG MILK TEA">
                    <input type="hidden" name="item_image" value="images/Chatea/2.png">
                </form>

                <form id="form_103" action="cart.php" method="post" onclick="document.getElementById('form_103').submit();">
                    <div class="menu_item3">
                        <img src="images/Chatea/3.png" alt="milketea3">
                        <h3>ROASTED OOLONG MILK TEA</h3><br>
                        <h3>RM 13.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="103">
                    <input type="hidden" name="item_name" value="ROASTED OOLONG MILK TEA">
                    <input type="hidden" name="item_image" value="images/Chatea/3.png">
                </form>

                <form id="form_104" action="cart.php" method="post" onclick="document.getElementById('form_104').submit();">
                    <div class="menu_item4">
                        <img src="images/Chatea/4.png" alt="milketea4">
                        <h3>JASMINE GREEN MILK TEA</h3><br>
                        <h3>RM 13.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="104">
                    <input type="hidden" name="item_name" value="JASMINE GREEN MILK TEA">
                    <input type="hidden" name="item_image" value="images/Chatea/4.png">
                </form>
            </div>

            
            <div id = "pure_tea">
                <form id="form_105" action="cart.php" method="post" onclick="document.getElementById('form_105').submit();">
                    <div class="menu_item5">
                        <img src="images/Chatea/13.png" alt="fruittea1">
                        <h3>GLUTINOUS OOLONG TEA MACCHIATO</h3><br>
                        <h3>RM 13.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="105">
                    <input type="hidden" name="item_name" value="GLUTINOUS OOLONG TEA MACCHIATO">
                    <input type="hidden" name="item_image" value="images/Chatea/13.png">
                </form>

                <form id="form_106" action="cart.php" method="post" onclick="document.getElementById('form_106').submit();">
                    <div class="menu_item6">
                        <img src="images/Chatea/10.png" alt="fruitetea2">
                        <h3>HIGHLAND OOLONG TEA</h3><br>
                        <h3>RM 13.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="106">
                    <input type="hidden" name="item_name" value="HIGHLAND OOLONG TEA">
                    <input type="hidden" name="item_image" value="images/Chatea/10.png">
                </form>

                <form id="form_107" action="cart.php" method="post" onclick="document.getElementById('form_107').submit();">
                    <div class="menu_item7">
                        <img src="images/Chatea/11.png" alt="fruitetea3">
                        <h3>HIGHLAND OOLONG COLD BREW</h3><br>
                        <h3>RM 13.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="107">
                    <input type="hidden" name="item_name" value="HIGHLAND OOLONG COLD BREW">
                    <input type="hidden" name="item_image" value="images/Chatea/11.png">
                </form>

                <form id="form_108" action="cart.php" method="post" onclick="document.getElementById('form_108').submit();">
                    <div class="menu_item8">
                        <img src="images/Chatea/12.png" alt="fruittea4">
                        <h3>GOLDEN GUAN YIN TEA MACCHIATO</h3><br>
                        <h3>RM 13.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="108">
                    <input type="hidden" name="item_name" value="GOLDEN GUAN YIN TEA MACCHIATO">
                    <input type="hidden" name="item_image" value="images/Chatea/12.png">
                </form> 
            </div>
            

           
            <div id = "fruit_tea">
                <form id="form_109" action="cart.php" method="post" onclick="document.getElementById('form_109').submit();">
                    <div class="menu_item9">
                        <img src="images/Chatea/25.png" alt="puretea1">
                        <h3>FRESH GRAPEFRUIT TEA</h3><br>
                        <h3>RM 14.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="109">
                    <input type="hidden" name="item_name" value="FRESH GRAPEFRUIT TEA">
                    <input type="hidden" name="item_image" value="images/Chatea/25.png">
                </form>

                <form id="form_110" action="cart.php" method="post" onclick="document.getElementById('form_110').submit();">
                    <div class="menu_item10">
                        <img src="images/Chatea/26.png" alt="puretea2">
                        <h3>JASMINE GRAPE TEA</h3><br>
                        <h3>RM 14.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="110">
                    <input type="hidden" name="item_name" value="JASMINE GRAPE TEA">
                    <input type="hidden" name="item_image" value="images/Chatea/26.png">
                </form>

                <form id="form_111" action="cart.php" method="post" onclick="document.getElementById('form_111').submit();">
                    <div class="menu_item11">
                        <img src="images/Chatea/27.png" alt="puretea3">
                        <h3>FRESH MANGO POMELO TEA</h3><br>
                        <h3>RM 14.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="111">
                    <input type="hidden" name="item_name" value="FRESH MANGO POMELO TEA">
                    <input type="hidden" name="item_image" value="images/Chatea/27.png">
                </form>

                <form id="form_112" action="cart.php" method="post" onclick="document.getElementById('form_112').submit();">
                    <div class="menu_item12">
                        <img src="images/Chatea/28.png" alt="puretea4">
                        <h3>FRESH PASSION FRUIT TEA</h3><br>
                        <h3>RM 14.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="112">
                    <input type="hidden" name="item_name" value="FRESH PASSION FRUIT TEA">
                    <input type="hidden" name="item_image" value="images/Chatea/28.png">
                </form> 
            </div>

            <div id = "new_launch">
                <form id="form_113" action="cart.php" method="post" onclick="document.getElementById('form_113').submit();">
                    <div class="menu_item13">
                        <img src="images/Chatea/21.png" alt="newlaunch1">
                        <h3>FRESH WATERMELON TEA</h3><br>
                        <h3>RM 15.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="113">
                    <input type="hidden" name="item_name" value="FRESH WATERMELON TEA">
                    <input type="hidden" name="item_image" value="images/Chatea/21.png">
                </form>

                <form id="form_114" action="cart.php" method="post" onclick="document.getElementById('form_114').submit();">
                    <div class="menu_item14">
                        <img src="images/Chatea/22.png" alt="newlaunch2">
                        <h3>FRESH TROPICAL FRUIT TEA</h3><br>
                        <h3>RM 15.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="114">
                    <input type="hidden" name="item_name" value="FRESH TROPICAL FRUIT TEA">
                    <input type="hidden" name="item_image" value="images/Chatea/22.png">
                </form>

                <form id="form_115" action="cart.php" method="post" onclick="document.getElementById('form_115').submit();">
                    <div class="menu_item15">
                        <img src="images/Chatea/23.png" alt="newlaunch3">
                        <h3>FRESH ORANGE TEA</h3><br>
                        <h3>RM 15.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="115">
                    <input type="hidden" name="item_name" value="FRESH ORANGE TEA">
                    <input type="hidden" name="item_image" value="images/Chatea/23.png">
                </form>

                <form id="form_116" action="cart.php" method="post" onclick="document.getElementById('form_116').submit();">
                    <div class="menu_item16">
                        <img src="images/Chatea/24.png" alt="newlaunch4">
                        <h3>FRESH KIWI TEA</h3><br>
                        <h3>RM 15.99</h3>
                    </div>
                    <input type="hidden" name="item_id" value="116">
                    <input type="hidden" name="item_name" value="FRESH KIWI TEA">
                    <input type="hidden" name="item_image" value="images/Chatea/24.png">
                </form>
            </div>
        </div>       
    </div>
    <script>
        // function show button category
        function showCategory(categoryId) {
            const categories = ['milk_tea', 'pure_tea', 'fruit_tea', 'new_launch'];
            categories.forEach(id => {
            document.getElementById(id).style.display = 'none';
            });
             document.getElementById(categoryId).style.display = 'flex';
             window.onload = function () {showCategory('milk_tea')}
            
             const images = activeCategory.querySelectorAll('img');
    images.forEach(img => {
        img.style.width = '10px';   // Set your desired width
        img.style.height = 'auto';   // Maintain aspect ratio
    });
             
    }
     
    
    </script>


    
</body>
</html>