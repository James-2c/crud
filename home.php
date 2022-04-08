<?php

include_once('connection/connection.php');

$con = connection();

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['Username'])){
    echo header("Location: login.php");
}

$sql = "SELECT * FROM account";
$result = $con->query($sql) or die ($con->error);
$row = $result->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js" defer></script>    
    <title>main</title>
</head>
<body>
    <div class="navbar">
        <div class="brand-title">
            <h2>Management System</h2>
        </div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
    <a href="logout.php" class="btn-logout">Log-out</a>
    <br>
    <a href="add.php" class="btn">Add</a>   

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Clearance Level</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php do{ ?>
            <tr>        
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["firstname"] ?></td>
                <td><?php echo $row["lastname"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["clearanceLevel"] ?></td>
                <td ><a class="view" href="profile.php?id=<?php echo $row["id"]; ?>">View</a></td>
                <td ><a class="delete" href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>        
            </tr>
            <?php }while($row = $result->fetch_assoc()); ?>
        </tbody>
    </table>
   
</body>
</html>