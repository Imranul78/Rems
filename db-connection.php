<?php 

    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName ="Rems-2.O";

    try{
        $con = mysqli_connect($hostName,$userName,$password,$dbName,3309);
    }  
    catch(Exception $e){
        echo "An exception occurred: ".$e->getMessage();
        die ("Connection Error");
    }
    
?>