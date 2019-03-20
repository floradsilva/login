<?php
$host = "localhost";
$dbname = "DB_PHP";
$user = "root";
$pass = "wisdmlabs";

try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
} catch(PDOException $e) {
    echo $e->getMessage();
}

// try {
//     $STH = $DBH->query('SELECT username from User');
//     $STH->setFetchMode(PDO::FETCH_ASSOC);

//     while($row = $STH->fetch()) {
//         echo $row['username'] . "\n";
//     } 
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }