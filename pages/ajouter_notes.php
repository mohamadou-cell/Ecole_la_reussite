<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form action="ajout_de_note.php" method="post">
        <label for="">Matière</label>
        <input type="text" name="matiere">
        <label for="">Controle</label>
        <input type="text" name="controle">
        <label for="">Note</label>
        <input type="double" name="note">
        <input type="submit" value="AJOUTER" name="valide" class="btn btn-warning">
    </form>
    

<?php
if(isset($_GET["id_ab"])){
    $id = $_GET["id_ab"];
if(isset($_POST["valide"])){
  
    if(isset($_POST["matiere"]) && isset($_POST["control"]) && isset($_POST["note"])){
    $matiere = $_POST["matiere"];
    $controle = $_POST["control"];
    $note = $_POST["note"];
    if(!empty($id) && !empty($matiere) && !empty($controle) && !empty($note)){
        
        include("Connection_dba.php");
        $sth = $dbco->prepare("INSERT INTO notes (matiere,evaluation,note,id_ins) VALUES (?, ?, ?, ?)");
        $sth->bindValue(1, $matiere);
        $sth->bindValue(2, $controle);
        $sth->bindValue(3, $note);
        $sth->bindValue(4, $id);
        $sth->execute();
        echo "Enregistrement réussi";
            /* header("Location:list_presence_eleve.php"); */
        }
        }
    }
}
     

?>
</body>
</html>
