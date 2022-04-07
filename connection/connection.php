<?php

function connection(){

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "test";

    $con = new mysqli($host, $user, $password, $database);

    if($con->connect->error){

        echo $con->connect->error;
    }else{
        return $con;
    }

}

?>