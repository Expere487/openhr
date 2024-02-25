<?php
include "define.php";

try {
    $db = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbName . ";charset=utf8", $dbuser, $dbpassword);
} catch (PDOException $e) {
    die($e->getMessage());
};
