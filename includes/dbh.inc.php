<?php

$host ='localhost:3300';
$dbname = 'mywebsite';
$dbusername = 'root';
$dbpassword = '';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername,$dbpassword);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


}catch (Exception $e){
    die("Connection failed:" . $e->getMessage());
}