<?php


$servername = "localhost";
$username = "root";
$password = "";
$DB_name = "user_db";
// Create connection
$db = new mysqli($servername, $username, $password,$DB_name);
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}



?>