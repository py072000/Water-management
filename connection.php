<!-- <?php
session_start();
error_reporting(0);
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "water-managment";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}


?> -->

<?php
// Check if a session is already active before starting a new one
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

error_reporting(0);
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "water-managment";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>
