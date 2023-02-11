<?php
require("dbconnection.php");
try{
    $queryGetAllAccounts = "SELECT * FROM users";
    $result = mysqli_query($connect,$queryGetAllAccounts);
    while($row = mysqli_fetch_array($result))
    {
        print_r($row);
    }
}catch(\Throwable $th){
    echo $th;
}