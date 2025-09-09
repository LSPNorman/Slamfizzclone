<?php
    session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password) && !is_numeric($username)){
            //read from database

            $query = "select * from users where username = '$username' limit 1";

            $result = mysqli_query($con, $query);

            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password){
                        $_SESSION['user_id'] = $user_data['user_id'];
                        //header("Location: index.php");
                        die;
                    }
                }
            }
            echo "wrong username or password";
        } else{
            echo "wrong username or password";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="transparentOverlay" >
        <div class="loginDiv">
            <form method="post" id="loginFormDiv">
                <h3 id="xIcon" onclick="parent.document.getElementById('loginFrame').classList.remove('showLoginFrame')">X</h3>
                <h1>LOGIN</h1>
                <input id="usernameText" type="text" name="username">
                <input id="passwordText" type="password" name="password">
                <input id="loginButton"  type="submit" value="LOGIN">
                <button type="button" onclick="switchToSignUp()">CLICK HERE TO SIGN UP</button>
            </form>
        </div>
    </div>
    <script>
            function switchToSignUp() {
            let parentDoc = parent.document;
            parentDoc.getElementById('loginFrame').classList.remove('showLoginFrame');
            parentDoc.getElementById('signUpFrame').classList.add('showSignUpFrame');
        }
    </script>
</body>
</html>