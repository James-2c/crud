<?php
require __DIR__ . '/users/users.php';

if(isset($_POST['login'])){

    $users = getUsers();

    $username = $_POST['username']; // get user input
    $password = $_POST['password'];

    foreach ($users as $user) {
        if ($user['email'] == $username && $user['password'] == $password) {
            $_SESSION['id'] = $user['id'];
            include "/index.php";
            exit;
        }else{
            include "partials/not_found.php";
            exit;
        }
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
        <form action="" method="post">
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