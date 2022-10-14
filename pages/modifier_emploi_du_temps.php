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
    

<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        if(!empty($id) && is_numeric($id)){
            include("Connection_dba.php");
            $list = "SELECT * FROM emploi_du_temps where id_edt =$id";
            $result = $dbco->query($list);
            $data = $result->fetch();
                $jour = $data["jour"];
                $horaire = $data["horaire"];
                $salle = $data["salle"];
                $matiere= $data["matiere"];
                $niveau= $data["niveau"];
                $classe= $data["classe"];
                $nom_prof = $data["nom_prof"];
                
                echo "<form action='Modifier_emploi_du_temps1.php' method='post'><input value='$id' name='id'><input value='$horaire' name='horaire'><input value='$salles' name='salles'><input value=' $matieres' name='matieres'><input value=' $niveau' name='niveau'><input value=' $classe' name='classe'><input value=' $nom_prof' name='nom_prof'>
                <input onclick='return confirm(\"Êtes-vous sûr de vouloir modifier\")' class='btn btn-warning' value='Modifier' type='submit' name='valide'></form>";
            }
              

} 
     

?>
</body>
</html>