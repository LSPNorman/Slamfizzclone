<?php
    session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password) && !is_numeric($username)){
            //save to database
            $user_id = random_num(2);
            $query = "insert into users (user_id, username, password) values ('$user_id','$username','$password')";

            mysqli_query($con,$query);          
            //header("Location: login.php");
            die;
        } else{
            echo "Please enter some valid information!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <title>SignUP</title>
</head>
<body>
    <div class="transparentOverlay">
        <div class="signUpDiv">
            <form method="post" id="signUpFormDiv">
                <h3 id="xIcon" onclick="parent.document.getElementById('signUpFrame').classList.remove('showSignUpFrame')">X</h3>
                <h1>SIGN UP</h1>
                <input id="usernameText" type="text" name="username">
                <input id="passwordText" type="password" name="password">
                <input id="signUpButton"  type="submit" value="SIGN UP">
                <button type="button" onclick="switchToLogin()">CLICK HERE TO LOGIN</button>
            </form>
        </div>
    </div>
    <script>
            function switchToLogin() {
            let parentDoc = parent.document;
            parentDoc.getElementById('loginFrame').classList.add('showLoginFrame');
            parentDoc.getElementById('signUpFrame').classList.remove('showSignUpFrame');
        }
    </script>
</body>
</html>