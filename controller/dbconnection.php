<?php
$dbUser = 'root';
$dbHost = 'localhost';
$dbPassword = '';
$dbName = 'webdev3A';

try{
    $connect = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
    echo "Database Connected to: $dbName";
}catch (\Trowable $th){
    echo $th;
}

?>