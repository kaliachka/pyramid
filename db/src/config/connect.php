<?php

$dbHost = "localhost";
$dbUser = "homestead";
$dbPassword = "kseniya";
$dBName = "exercise";

try {
    $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dBName;
    $pdo = new PDO($dsn, $dbUser, $dbPassword);
    echo "Connection successful";
}
catch(PDOException $e) {
    echo "DB Connection Failed: " . $e->getMessage();
}

?>
