<?php

   $host = 'localhost';
   $user = 'root';
   $password = '';
   $database = 'test';

    $con = mysqli_connect($host, $user, $password, $database);

    if($con->connect_error){
        echo $con->connect_error;
    }else{
        echo "Have Connection";
        echo "<br>";
    }

    
    $sql = "SELECT * FROM user";
    $result = $con->query($sql) or die ($con->error);
    $row = $result->fetch_assoc();
  

    do{
        echo $row["user_id"].$row["username"].$row["password"];
    }while($row = $result->fetch_assoc());
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
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