<?php

$dsn="mysql:host=localhost;dbname=college";
$username="root";
$password="";

try{
    $con=new PDo($dsn,$username,$password);
}catch(PDOException $e)
{
    echo "Unsucessfull!";
}
?>

