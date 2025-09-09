<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../css/about.css">
    <title>About</title>
</head>
<body>
    <!--navbar comeco-->
    <div class="stickyNavbar">
        <nav id="navbar"> 
            <menu class="leftMenu">
                <button class="spritzButton">SPRITZ  <i class="fa-solid fa-arrow-down" id="arrowIcon"></i></button>
                <button class="recipesButton"><a href="">RECIPES</a></button>
            </menu>
            <div class="title"><a href="index.php">SLAM</a></div>
            <menu class="rightMenu">
                <i class="fa-regular fa-user" id="userIcon" onclick="toggleLogin()"></i>
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-bag-shopping" onclick="toggleCart()"></i>
                <button class="shopButton"><a href="../html/menu.php">SHOP</a></button>
            </menu>
        </nav>
        <menu id="hiddenMenu" class="hideHiddenMenu">
            <div class="itemsMenu">
                <div class="itemsSelect" id="item1Select"><img><p>GRAPE</p></div>
                <div class="itemsSelect" id="item2Select"><img><p>RASPBERRY</p></div>
                <div class="itemsSelect" id="item3Select"><img><p>PEACH</p></div>
                <div class="itemsSelect" id="item4Select"><img><p>LEMON</p></div>
                <div class="itemsSelect" id="item5Select"><img><p>CUCUMBER</p></div>
                <div class="itemsSelect" id="item6Select"><img><p>BLOOD ORANGE</p></div>
            </div> 
            <button class="viewAllButton">
                <a href="../html/menu.php">VIEW ALL</a>        
            </button>
        </menu>
    </div>
    <!--navbar fim-->
    <section class="section1"><h1>THE ART OF SPRITZ, REINVENTED</h1></section>
    <section class="section2">
        <div class="slogan"><h2>SLAM IT TO THE MAX</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum rerum nihil laudantium quod alias error voluptates tenetur excepturi minus sint?</p></div>
        <div class="slogan"><h2>FLAVOR FIRST, ALWAYS</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, neque eaque! Adipisci repellendus incidunt exercitationem error dicta fuga pariatur suscipit!</p></div>
        <div class="slogan"><h2>GOOD TIME, ANYTIME.</h2><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, ipsum. Dicta quasi aliquam asperiores voluptatibus quo nesciunt sit fuga ad.</p></div>
    </section>
    <section class="section3"></section>
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