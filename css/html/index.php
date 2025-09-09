<?php
    session_start();
    include("connection.php");
    include("functions.php");
    
    //$user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>SLAM</title>
</head>
<body>
    <!--navbar comeco-->
    <div class="stickyNavbar">
        <nav id="navbar"> 
            <menu class="leftMenu">
                <button class="spritzButton">SPRITZ  <i class="fa-solid fa-arrow-down" id="arrowIcon"></i></button>
                <button class="aboutButton"><a href="../html/about.php">ABOUT</a></button>
                <button class="recipesButton"><a href="">RECIPES</a></button>
            </menu>
            <div class="title">SLAM</div>
            <menu class="rightMenu">
                <i class="fa-regular fa-user" id="userIcon" onclick="toggleLogin()"></i>
                <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
                <i class="fa-solid fa-bag-shopping" id="cartIcon" onclick="toggleCart()"></i>
                <button class="shopButton"><a href="../html/menu.php">SHOP</a></button>
            </menu>
        </nav>
        <menu id="hiddenMenu" class="hideHiddenMenu">
            <div class="itemsMenu">
                <button class="itemsSelect" id="item1Select" onclick="sendPageId(3)"><img><p>GRAPE</p></button>
                <button class="itemsSelect" id="item2Select" onclick="sendPageId(7)"><img><p>RASPBERRY</p></button>
                <button class="itemsSelect" id="item3Select" onclick="sendPageId(6)"><img><p>PEACH</p></button>
                <button class="itemsSelect" id="item4Select" onclick="sendPageId(4)"><img><p>LEMON</p></button>
                <button class="itemsSelect" id="item5Select" onclick="sendPageId(2)"><img><p>CUCUMBER</p></button>
                <button class="itemsSelect" id="item6Select" onclick="sendPageId(1)"><img><p>BLOOD ORANGE</p></button>
            </div> 
            <button class="viewAllButton">
                <a href="../html/menu.php">VIEW ALL</a>        
            </button>
        </menu>
    </div>
    <!--navbar fim-->
    <!--welcome section comeco-->
    <section class="welcomeSection">
        <h3 class="welcomeLogo">SLAM SODA</h3>
        <div class="welcomeBall"><p>Like a party in your mouth</p></div>
        <div class="welcomeImage"></div>
        <div class="welcomeRectangle"><p>It's only Natural</p></div>
        <div class="welcomeShape"></div>
    </section>
    <!--welcome section fim-->
    <!--benefits Section comeco-->
    <section class="benefitsSection">
            <img src="../img/shutterstock_794568322.png" class="bloodOrangeImg">
            <img src="../img/shutterstock_1712740582.png" class="lemonImg">
            <h2>GREAT NIGHTS, BETTER MORNINGS.</h2>
            <p>Full flavour drinks without any of the downsides</p>
            <button class="shopFritzButton">SHOP FRITZ</button>
            <div class="benefitsIcons">
                <div class="icon"><i class="fa-solid fa-wine-bottle"></i>Alcohol Free</div>
                <div class="icon"><i class="fa-solid fa-vial"></i></i>No additives</div>
                <div class="icon"><i class="fa-solid fa-eye-dropper"></i>No artificial flavoring</div>
                <div class="icon"><i class="fa-solid fa-leaf"></i>Organic</div>
                <div class="icon"><i class="fa-solid fa-wheat-awn"></i>Gluten free</div>
                <div class="icon"><i class="fa-solid fa-cube"></i>Low sugar</div>
                <div class="icon"><i class="fa-solid fa-cubes"></i>Probiotic</div>
                <div class="icon"><i class="fa-solid fa-bread-slice"></i>Low carb</div>
            </div>        
    </section>
    <!--benefits Section fim-->
    <!--recipes Section comeco-->
    <section class="recipesSection">
        <img src="../img/shutterstock_1101727646_3.png" class="watermelonImg">
        <img src="../img/shutterstock_1912754581.png" class="peachImg">
        <div>
            <h2>SIP INTO SOMETHING SPECIAL</h2>
            <p>Discover our curated collection of refreshing mocktail recipes that bring out the best in every can of SLAM. Perfect for any occasion.</p>
            <button class="viewRecipesButton">VIEW RECIPES</button>  
        </div>
    </section>
    <!--recipes Section fim-->
    <!--Merch Section comeco-->
    <section class="merchSection">
        <img src="../img/shutterstock_567223663.png" class="cucumberImg">
        <img src="../img/shutterstock_1751926022_3.png" class="raspberryImg">
        <div class="merchText">
            <h2>MERCH</h2>
            <p>Get some flavours onto your body not just in your body.</p>
        </div>
        <div class="merchItems">
            <div class="merch"><img src="../img/Tote1.png"><p>TOTE BAG</p><p>$25.00</p></div>
            <div class="merch"><img src="../img/Hoodie.png"><p>HOODIE</p><p>$50.00</p></div>
            <div class="merch"><img src="../img/Tee.png"><p>SLAM TEE</p><p>$30.00</p></div>
        </div>
    </section>
    <!--Merch Section fim-->
    <!--Footer comeco-->
    <footer>
        <h3>SLAM</h3>
    </footer>
    <!--Footer fim-->
    <!--Overlays Comeco-->
    <iframe id="loginFrame" src="login.php"></iframe>
    <iframe id="signUpFrame" src="signup.php"></iframe>
    <iframe id="cartFrame" src="cart.php"></iframe>
    <!--Overlays fim-->
    <script src="../js/script.js"></script>
</body>
</html>