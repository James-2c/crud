<?php

include_once('connection/connection.php');
$con = connection();

if(!isset($_SESSION)){
    session_start();
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM account WHERE email = '$username' AND password = '$password'";
    $result = $con->query($sql) or die ($con->error);
    $users = $result->fetch_assoc();
    $total = $result->num_rows;

    if($total > 0){
        $_SESSION['Level'] = $users[' clearanceLevel'];
        echo header("Location: home.php");
    }else{
        echo "No account";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="login-form">
        <form action="" method="post" >
            <h2>Login</h2>
            <div class="content">
                <div class="input-field">
                    <input type="text" placeholder="Username" name="username" id="username" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" name="password" id="password" autocomplete="new-password">
                </div>
            </div>                       
            <div class="two-button">
                <input type="submit" class="btn2" name="login" value="Sign in">
                <a href="register.php" class="sign-up">Sign up</a>
            </div>
        </form>
    </div>

</body>
</html>