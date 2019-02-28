<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30-1-2019
 * Time: 11:32
 */
//gar-connect.php

$servername = "localhost";
$dbname = "garage";
$username = "root";
$password = "";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
                    $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       // echo "Connectie gelukt";
}
catch(PDOException $e)
{
    echo "Connectie mislukt: " . $e->getMessage();
}
?>