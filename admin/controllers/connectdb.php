<?php
$dsn = 'mysql:host=localhost;dbname=webbanhang';
$us='root';
$ps='';
try{
    $conn = new PDO($dsn,$us,$ps);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo $message="Connecting";
}
catch(PDOException $e){
    echo $e -> $message="Connection Fails";
}
?>