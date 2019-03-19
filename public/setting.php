<?php

try {
    //MySQL with PDO_MYSQL
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);

} catch (PDOException $e) {
    echo $e->getMessage();
}


// try {
//     $DBH = null;
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }