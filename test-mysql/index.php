<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php-start";

$connection = new mysqli($servername,$username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed:" .$connection->connect_error);
}
echo "Connection succesfully";
echo "<br>";


//$sql = "CREATE DATABASE test1";
//
//if ($connection->query($sql)===TRUE){
//    echo "all good";
//
//}
//else {
//    echo "Error:".$connection->error;
//}

//mysqli_close($connection);

$sql = "CREATE TABLE users(
name VARCHAR (100) NOT NULL,
login VARCHAR (100) NOT NULL,
surname VARCHAR (100) NOT NULL
)";

if ($connection->query($sql)===true) {
    echo "Table users created sucsessfully";
}
$connection->close;
