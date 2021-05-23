<?php

$server = 'localhost:3307'; //Modificar
$username = 'root';
$password = '';
$database = 'php_login_database'; // poner name de mi bd

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>