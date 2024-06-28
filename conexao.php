<?php

header("Access-Control-Allow-Origin: http://localhost:8080");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE, EDIT");
header("Access-Control-Allow-Headers: Content-Type");



$servername = "localhost"; 
$username = "root"; 
$password = "root";
$dbname = "restaurante";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
echo "";

?>
