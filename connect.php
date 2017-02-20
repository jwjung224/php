<?php
 // making connection to MySQL

$serverName = "localhost";
$userName = "joon";
$password = "pw123";

// dbname is mainDB
try{
    $dbConnect = new PDO("mysql:host=$serverName;dbname=myDB", $userName, $password);
    $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    
    $dbConnect = null; 
} catch (Exception $ex) {
    $ex->getMessage();
}
