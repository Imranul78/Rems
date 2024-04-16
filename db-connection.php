<?php 

    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName ="Rems-2.O";
    $con="";
    try{
        $con = mysqli_connect($hostName,$userName,$password,$dbName);
    }  
    catch(Exception $e){
        echo "An exception occurred: ".$e->getMessage();
        die ("Connection Error");
    }
    
?>