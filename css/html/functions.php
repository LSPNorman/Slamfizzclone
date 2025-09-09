<?php
    include("connection.php");

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    function check_login($con){
        if(isset($_SESSION['user_id'])){
            $id = $_SESSION['user_id'];
            $query = "select * from users where user_id = '$id' limit 1";
            
            $result = mysqli_query($con, $query);
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        //redirect to login
        //header("Location: login.php");
        die;
    }

    //Generate random numbers
    function random_num($length){
        $text = "";
        if($length < 5){
            $length = 5;
        }

        $len = rand(4, $length);

        for ($i=0; $i < $len; $i++){
            # code...
            $text .= rand(0,9);
        }

        return $text;
    }

    //Send the pageID to database
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sendPageId'])) {
        $pageId = intval($_POST['sendPageId']);            
        $stmt = $con->prepare("INSERT INTO page (id, page_id) VALUES (1, ?) ON DUPLICATE KEY UPDATE page_id = VALUES(page_id)");

        $stmt->bind_param("i", $pageId);
        $stmt->execute();
        $stmt->close();            
        exit;
    }

    //send product quantity and price to the database
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantity']) && isset($_POST['pageId'])) {
        $quantity = intval($_POST['quantity']);
        $pageId = intval($_POST['pageId']);
        $price = $quantity*8;

        $stmt = $con->prepare("SELECT * FROM users ORDER BY user_id DESC LIMIT 1");
        $stmt->execute();
        $result = $stmt->get_result();
        $last_user = null;
        if ($result && $result->num_rows > 0) {
            $last_user = $result->fetch_assoc();
        }
        $stmt->close();

        $stmt = $con->prepare("INSERT INTO cart (cart_id, quantity, price, product_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiii", $last_user['user_id'], $quantity, $price, $pageId);
        $stmt->execute();
        $stmt->close();

        exit;
    }
?>