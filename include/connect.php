<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=eksamen;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //setting some cookie values
    $cookie_name = "login";
    $userLevel = "userLevel";
    $cookie_value = "loggged in";

}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>