<?php

$servername = "localhost";
$username = "root";
$password = "";

$connection = new mysqli($servername,$username, $password);

if ($connection->connect_error) {
    die("Connection failed:" .$connection->connect_error);
    }
echo "Connection succesfully";
