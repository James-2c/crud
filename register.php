<?php

include_once("connection/connection.php");
$con = connection();

if(isset($_POST['register'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $clearanceLevel = $_POST['clearanceLevel'];
   
    $role = "user";
    
    $sql = "INSERT INTO account (firstname, lastname, email, password, clearanceLevel) VALUES('$firstname', '$lastname', '$email', '$password', '$clearanceLevel')";
    $con->query($sql) or die ($con->error);
    
    echo header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="login-form">
        <form action="" method="post">
            <h2>Register</h2>
            <div class="content">
                <div class="input-field">
                    <input type="text" placeholder="Firstname" name="firstname" id="firstname" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Lastname" name="lastname" id="lastname" autocomplete="new-password">
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Email" name="email" id="email" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" name="password" id="password" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Clearance level" name="clearanceLevel" id="clearanceLevel" autocomplete="nope">
                </div>
            </div>                       
           
                <input type="submit" class="btn2" name="register" value="Register">
              
            
        </form>
</body>
</html>