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
            $list = "SELECT * FROM inscription where id_ins=$id";
            $result = $dbco->query($list);
            $data = $result->fetch();
                $id = $data["id_ins"]; 
                $prenom = $data["prenom"];
                $nom = $data["nom"];
                $date = $data["date_naissance"];
                $adresse = $data["adresse"];
                $sexe = $data["sexe"];
                $nationalite = $data["nationalite"];
                $niveau = $data["niveau"];
                $classe = $data["classe"];
                $email = $data["email"];
                $nom_tuteur = $data["nom_tuteur"];
                $numero_tuteur = $data["numero_tuteur"];
                
                echo "<input value='$id'><input value='$prenom'><input value='$nom'><input value='$date'><input value='$adresse'><input value='$sexe'><input value='$nationalite'>
                <input value='$niveau'><input value='$classe'><input value='$email'><input value='$nom_tuteur'><input value='$numero_tuteur'>";
                echo "<input onclick='return confirm(\"Êtes-vous sûr de vouloir modifier\")' class='btn btn-warning' value='Modifier' type='submit'>";
                
                

                if(!empty($prenom) && !empty($nom) && !empty($date) && !empty($adresse) && !empty($sexe) && !empty($nationalite) && !empty($niveau) && !empty($classe) && !empty($email)
                && !empty($nom_tuteur) && !empty($numero_tuteur)){
                    include("Connection_dba.php");
                    $list = "UPDATE inscription SET prenom = '$prenom', nom = '$nom', date_naissance = '$date', adresse = '$adresse', sexe = '$sexe', nationalite = '$nationalite', niveau = '$niveau', classe = '$classe', email = '$email', nom_tuteur = '$nom_tuteur', numero_tuteur = '$numero_tuteur' WHERE id_ins = $id";
                    $dbco->exec($list);
                    
                    
                    
                    
                    
                    
                    
                    
        
            }
                /* header("Location:afficher_tab_employes.php");  */
        
    
} 
}      

?>
</body>
</html>
