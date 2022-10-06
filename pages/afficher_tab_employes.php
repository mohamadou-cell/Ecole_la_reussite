<?php
include("");
$prenom=$_POST["prenom"];
$nom=$_POST["nom"];
$adresse=$_POST["adresse"];
$foction=$_POST["email"];
$email=$_POST["date_naissance"];
$telephone=$_POST["fonction"];
$sexe=$_POST["sexe"];
$nationalite=$_POST["nationalite"];
$matiere=$_POST["dateN"];
$envoyer=$_POST["envoyer"];

if(isset($envoyer)){
    if(empty($prenom)) echo "veuillez entrer un prenom";
    if(empty($nom));
    if(empty($adresse));
    if(empty($email));
    if(empty($date_naissance));
    if(empty($fonction));
    if(empty($sexe));
    if(empty($sexe));
    if(empty($nationalite));
    include("connection.php");
    $sth=$pdo->prepare("insert into EMPLOYER(prenom,nom,adresse,fonction,email,telephone_employe,sexe,nationalite) values(?,?,?,?,?,?,?,?)");
    $sth->execute(array($prenom,$nom,$adresse,$fonction,$email,$telephone,$sexe,$nationalite,$civilite,$matiere,$dateN, $dateIns));

}


?>