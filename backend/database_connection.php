<?php
    
// $host = getenv('DB_HOST');  // 'mysql', as defined in docker-compose
// $dbname = getenv('DB_NAME');  // your_database_name
// $username = getenv('DB_USER');  // 'root'
// $password = getenv('DB_PASS');  // 'password'

//     $conn = new mysqli($host,$username,$password,$dbname);

//     if ($conn->connect_error) {
//         die("connectin failed : " . $conn->connect_error);
//     }
?>

<?php

// require "../docker-compose.yml";
// include "./";
$host = getenv('DB_HOST');  // 'mysql', as defined in docker-compose
$dbname = getenv('DB_NAME');  // your_database_name
$username = getenv('DB_USER');  // 'root'
$password = getenv('DB_PASS');  // 'password'

try {
    $dsn = "mysql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to MySQL database";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// ?>
