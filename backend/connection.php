<?php

$host = "127.0.0.1:3306";
$user = "root";
$pass = "";
$db = "bd_projeto2";

try {
$mysqli = new mysqli($host, $user,$pass,$db);
} catch(Exception $a){
    echo "<script> alert('error')</script>";

}

?>