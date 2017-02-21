<?php
 // making connection to MySQL

$serverName = "localhost";
$userName = "root";
$password = "1234";

// dbname is maindb
try{
    $dbConnect = new PDO("mysql:host=$serverName;dbname=maindb", $userName, $password);
    $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    
    // comment out close connection
    //$dbConnect = null; 
} catch (Exception $ex) {
    echo 'Connection error'. $ex->getMessage();
}
?>