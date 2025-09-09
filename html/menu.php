<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../css/menu.css">
    <title>Menu</title>
</head>
<body>
    <!--navbar comeco-->
    <div class="stickyNavbar">
        <nav id="navbar"> 
            <menu class="leftMenu">
                <button class="aboutButton"><a href="../html/about.php">ABOUT</a></button>
                <button class="recipesButton"><a href="">RECIPES</a></button>
            </menu>
            <div class="title"><a href="index.php">SLAM</a></div>
            <menu class="rightMenu">
                <i class="fa-regular fa-user" id="userIcon" onclick="toggleLogin()"></i>
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-bag-shopping" onclick="toggleCart()"></i>
            </menu>
        </nav>
    </div>
    <!--navbar fim-->
    <!--welcome section comeco-->
    <section class="welcomeSection">
        <div class="welcomeImage"></div>
        <div class="welcomeShape"></div>
    </section>
    <!--welcome section fim-->
    <!--Main Menu Section comeco-->
    <menu class="mainMenu">
        <div class="menuItem" onclick="sendPageId(1)"><img src="../img/BloodOrange.png" alt=""><p>BLOOD ORANGE</p><p>$8.00</p></div>
        <div class="menuItem" onclick="sendPageId(2)"><img src="../img/Cucumber.png" alt=""><p>CUCUMBER</p><p>$8.00</div>
        <div class="menuItem" onclick="sendPageId(3)"><img src="../img/Grape.png" alt=""><p>GRAPE</p><p>$8.00</div>
        <div class="menuItem" onclick="sendPageId(4)"><img src="../img/Lemon.png" alt=""><p>LEMON</p><p>$8.00</div>
        <div class="menuItem" onclick="sendPageId(5)"><img src="../img/Passionfruit.png" alt=""><p>PASSIONFRUIT</p><p>$8.00</div>
        <div class="menuItem" onclick="sendPageId(6)"><img src="../img/Peach.png" alt=""><p>PEACH</p><p>$8.00</div>
        <div class="menuItem" onclick="sendPageId(7)"><img src="../img/Raspberry.png" alt=""><p>RASPBERRY</p><p>$8.00</div>
        <div class="menuItem" onclick="sendPageId(8)"><img src="../img/Watermelon.png" alt=""><p>WATERMELON</p><p>$8.00</div>
        <div class="menuItem"><img src="../img/Hoodie.png" alt=""><p>SLAM HOODIE</p><p>$50.00</div>
        <div class="menuItem"><img src="../img/Tee.png" alt=""><p>SLAM T-SHIRT</p><p>$30.00</div>
        <div class="menuItem"><img src="../img/Tote1.png" alt=""><p>SLAM TOTEBAG</p><p>$25.00</div>
    </menu>
    <!--Main Menu Section fim-->
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
    <script>
        function toggleLogin(){
            document.getElementById("loginFrame").classList.toggle("showLoginFrame");
        };

        function toggleCart(){
            document.getElementById("cartFrame").classList.toggle("showCartFrame");
        };

        function sendPageId(pageId) {
            fetch('../html/functions.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `sendPageId=${pageId}`
            })
            window.location.href = "../html/productpage.php";
        }
    </script>
</body>
</html>