<?php
$servername = "localhost";
$username = "yohannt";
$password = "2v6Sgp5PiC";

try {
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );

    $pdo = new PDO("mysql:host=$servername;dbname=yohannt_poop_time", $username, $password, $options);

    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


?>
