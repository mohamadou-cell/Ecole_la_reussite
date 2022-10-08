<?php 
$servername = 'localhost'; $username = 'root'; $password = ''; 
try{ 
$dbco = new PDO("mysql:host=$servername;dbname=base1", $username, $password); 
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
/* $sql = "CREATE DATABASE gestion_ecole"; 
$dbco->exec($sql);  */
 /* echo 'Connection réussie !'; */ } 
catch(PDOException $e){ echo "Erreur : " . $e->getMessage(); } 

?>