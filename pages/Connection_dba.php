<?php
try {
    $pdo=new PDO("mysql:host=localhost;dbname=oumy","root","");
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>