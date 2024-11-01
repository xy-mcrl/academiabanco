<?php
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servename, $username, $password, $dbname);

if ($conn->connect_error){
    die("Conexâo falhou:".$conn->connect_error);
}
?>