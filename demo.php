<?php
$serverName="localhost";
$userName="root";
$password="Alexander07";
$datbasename="form";
//create a connection to the database
$con=mysqli_connect($serverName,$userName,$password,$datbasename);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
    }
echo "connection successiful";



?>