<?php

$dbUsername="IQYpgowVKN";
$dbPassword="zSNTxSJg1p";
$hostName="remotemysql.com";
$dbName="IQYpgowVKN";
$dbPort=3306;
$con=mysqli_connect($hostName,$dbUsername,$dbPassword,$dbName);

if(!$con){
    die("Connection Error");
    $string = "Nu se poate conecta";
    echo ("<script>console.log('".$string."');</script>");
}
else{
    $string = "Reusit !";
    echo ("<script>console.log('".$string."');</script>");
}



?>

