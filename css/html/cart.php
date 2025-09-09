
<?php
    include("connection.php");
    include("functions.php");

    
    $stmt = $con->prepare("
        SELECT c.quantity, c.price, c.product_id, p.name AS product_name, p.bigimage1 AS product_image
        FROM cart c
        JOIN products p ON c.product_id = p.product_id");
    $stmt->execute();
    $result = $stmt->get_result();

    $cartItems = [];
    while ($row = $result->fetch_assoc()) {
        $cartItems[] = $row;
    }
    $stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../css/cart.css">
    <title>Cart</title>
</head>
<body>
    <div class="transparentOverlay">
        <div class="cartDiv">
            <div class="cartTitle">
                <h1>YOUR CART</h1>
                <h3 onclick="parent.document.getElementById('cartFrame').classList.remove('showCartFrame')">X</h3>
            </div>
            <div class="line"></div>
            <div class="cart-items-container">
                <?php foreach ($cartItems as $item): ?>
                <div class="item">
                    <img src="../img/<?php echo htmlspecialchars($item['product_image']); ?>">
                        <div class="itemInfo">
                            <p class="itemName"><?php echo htmlspecialchars($item['product_name']); ?></p>
                            <div class="itemQuantity">
                                <p class="minus" onclick="reduceQt(this)">-</p>
                                <p class="quantity"><?php echo htmlspecialchars($item['quantity']); ?></p>
                                <p class="plus" onclick="increaseQt(this)">+</p>
                            </div>
                            <button class="removeButton" onclick="removeItem(this)">REMOVE</button>
                        </div>
                        <p class="itemPrice">$<?php echo htmlspecialchars($item['price']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="checkoutDiv">
                <div class="totalDiv">
                    <p class="subtotal">SUBTOTAL</p>
                    <P class="totalPrice">
                        $<?php echo array_sum(array_column($cartItems, 'price')); ?>
                    </P>
                </div>
                <button id="checkoutButton">CHECKOUT</button>
            </div>
        </div>
    </div>
</body>
<script>

    window.onload = function() {
            if (!window.location.search.includes("refreshed=true")) {
                window.location.href = window.location.href + 
                (window.location.search ? "&" : "?") + "refreshed=true";
            }
    };

    function reduceQt(element) {
        let quantityElem = element.nextElementSibling; 
        let quantity = parseInt(quantityElem.innerText, 10); 
        if (quantity > 1) {
            quantity -= 1;
            quantityElem.innerText = quantity;
        }

        updateItemPrice(element, quantity);
        updateTotalPrice();
    }

    function increaseQt(element) {
        let quantityElem = element.previousElementSibling; 
        let quantity = parseInt(quantityElem.innerText, 10);
        quantity += 1;
        quantityElem.innerText = quantity;

        updateItemPrice(element, quantity);
        updateTotalPrice();
    }

    function updateItemPrice(element, quantity) {
        let itemPriceElem = element.closest(".item").querySelector(".itemPrice");
        let basePrice = 8;
        let newPrice = (basePrice * quantity).toFixed(2);
        itemPriceElem.innerText = `$${newPrice}`;
    }

    function updateTotalPrice() {
        let totalPrice = 0;
        document.querySelectorAll(".itemPrice").forEach(itemPriceElem => {
            totalPrice += parseFloat(itemPriceElem.innerText.replace("$", ""));
        });
        document.querySelector(".totalPrice").innerText = `$${totalPrice.toFixed(2)}`;
    }

    function removeItem(element) {
    const itemElem = element.closest(".item");
    itemElem.remove();
    updateTotalPrice();
}
</script>
</html>