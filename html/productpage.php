<?php
    include("connection.php");

    $sql = "SELECT page_id from page where id = 1";
    $result = $con->query($sql);

    $page_id = null;
    $row = $result->fetch_assoc();
    $page_id = $row['page_id'];

    $stmt = $con->prepare("SELECT name, price, bigImage1, bigImage2, smallImage1, smallImage2, smallImage3 FROM products WHERE product_id = ?");
    $stmt->bind_param("i", $page_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../css/productpage.css">
    <title>Product Page</title>
</head>
<body>
    <!--navbar comeco-->
    <div class="stickyNavbar">
        <nav id="navbar"> 
            <menu class="leftMenu">
                <button class="aboutButton"><a href="../html/about.php">ABOUT</a></button>
                <button class="recipesButton"><a href="">RECIPES</a></button>
            </menu>
            <div class="title"><a href="../html/index.php">SLAM</a></div>
            <menu class="rightMenu">
                <i class="fa-regular fa-user" id="userIcon" onclick="toggleLogin()"></i>
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-bag-shopping" onclick="toggleCart()"></i>
                <button class="shopButton"><a href="../html/menu.php">SHOP</a></button>
            </menu>
        </nav>
    </div>
    <!--navbar fim-->
    <!--Product Section Comeco-->
    <section class="productSection">
        <div class="leftDiv">
                        <img src="../img/<?php echo htmlspecialchars($product['bigImage1']); ?>" class="bigImg">
                        <div class="smallImgs">
                            <img id="smallImg1" src="../img/<?php echo htmlspecialchars($product['smallImage1']); ?>" onclick="goBig(1)">
                            <img id="smallImg2" src="../img/<?php echo htmlspecialchars($product['smallImage2']); ?>" onclick="goBig(2)">
                            <img id="smallImg3" src="../img/<?php echo htmlspecialchars($product['smallImage3']); ?>" onclick="goBig(3)">
                        </div>
                    </div>
                    <div class="rightDiv">
                        <div class="text">
                            <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                            <p class="price"><?php echo htmlspecialchars($product['price']); ?></p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quis neque natus adipisci voluptatum, veniam dolor accusantium ducimus necessitatibus assumenda nulla nihil eveniet amet blanditiis aspernatur excepturi laudantium voluptas quisquam ab qui. Accusamus placeat iure, soluta odio ipsam assumenda odit. Iure rerum dolore beatae aut, dolores sit facere deleniti non!</p>
                        </div>
                        <div class="buttons">
                            <div class="packButtons">
                                <button class="singleButton" onclick="addQuantity(1)">SINGLE</button>
                                <button class="4packButton" onclick="addQuantity(4)">4 PACK</button>
                                <button class="24packButton" onclick="addQuantity(24)">24 PACK</button>
                            </div>
                            <button class="addToCartButton" onclick="sendToCart()">ADD TO CART</button>
                            <button class="buyButton">BUY IT NOW</button>
                        </div>
                        <div class="icons">
                            <div class="icon"><i class="fa-solid fa-wine-bottle"></i>Alcohol Free</div>
                            <div class="icon"><i class="fa-solid fa-leaf"></i>Organic</div>
                            <div class="icon"><i class="fa-solid fa-cube"></i>Low sugar</div>
                            <div class="icon"><i class="fa-solid fa-cubes"></i>Probiotic</div>
                            <div class="icon"><i class="fa-solid fa-bread-slice"></i>Low carb</div>
                        </div>
                    </div>
    </section>
    <!--Product Section Fim-->
    <!--Slogan comeco-->
    <section class="sloganSection">
        <div class="centerText">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate minima recusandae sequi nihil amet mollitia quis, libero laboriosam sed et!</h1>
        </div>
    </section>
    <!--Slogan fim-->
    <!--Whats in the can comeco-->
    <section class="productInfo">
        <div class="leftSlogan">
            <div class="slogan"><h2>CRAFTED WITH NATURAL INGREDIENTS</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum rerum nihil laudantium quod alias error voluptates tenetur excepturi minus sint?</p></div>
            <div class="slogan"><h2>LOW IN CALORIES, HIGH IN ENJOYMENT</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, neque eaque! Adipisci repellendus incidunt exercitationem error dicta fuga pariatur suscipit!</p></div>
            <div class="slogan"><h2>RICH IN ANTIOXIDANTS</h2><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, ipsum. Dicta quasi aliquam asperiores voluptatibus quo nesciunt sit fuga ad.</p></div>
        </div>
        <div class="middleImage"><img src="../img/<?php echo htmlspecialchars($product['bigImage2'])?>"></div>
        <div class="rigthSlogan">
            <div class="slogan"><h2>ZERO ALCOHOL, FULL FLAVOR</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum rerum nihil laudantium quod alias error voluptates tenetur excepturi minus sint?</p></div>
            <div class="slogan"><h2>NO ARTIFICIAL ADDITIVES OR PRESERVATIVES</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, neque eaque! Adipisci repellendus incidunt exercitationem error dicta fuga pariatur suscipit!</p></div>
            <div class="slogan"><h2>PERFECT FOR ANY OCCASION</h2><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, ipsum. Dicta quasi aliquam asperiores voluptatibus quo nesciunt sit fuga ad.</p></div>
        </div>
    </section>
    <!--Whats in the can fim-->
    
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

        window.onload = function() {
            if (!window.location.search.includes("refreshed=true")) {
                window.location.href = window.location.href + 
                (window.location.search ? "&" : "?") + "refreshed=true";
            }
        };

        //Mostra os frames login e signUp
        function toggleLogin(){
            document.getElementById("loginFrame").classList.toggle("showLoginFrame");
        };

        //mostra o carrinho
        function toggleCart(){
            document.getElementById("cartFrame").classList.toggle("showCartFrame");
        };

        //Pagina de Produtos
        function goBig(smallImgId){
            let bigImg = document.querySelector('.bigImg');

            let smallImg = document.getElementById(`smallImg${smallImgId}`);

            bigImg.src = smallImg.src;
        }

        //Adicionar Quantidade
        function addQuantity(qt){
            let price = 8.00*qt;
            let addtoCart = document.querySelector(".addToCartButton");
            addtoCart.innerText = `ADD TO CART - ${qt} - $${price}`;
        }

        //Adicionar ao Carrinho
        function sendToCart() {

            // Get the quantity, product name, and pageId
            let addToCartButton = document.querySelector(".addToCartButton");
            let quantity = addToCartButton.innerText.match(/\d+/)[0];
            let productName = document.querySelector(".text h1").innerText;
            let pageId = <?php echo json_encode($page_id); ?>;

            
            fetch('../html/functions.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `quantity=${quantity}&pageId=${pageId}`
                })
                .then(response => response.text())
                .then(data => {
                console.log(data); // Should print "Quantity: ... Page ID: ... Price: ..."
            });

            toggleCart();
        }

    </script>
</body>
</html>