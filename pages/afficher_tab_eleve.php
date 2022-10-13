
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
<div class="container">
        <h1>LISTE DES ELEVES</h1>
        <div style="display: flex; justify-content:center;height:100px; align-items:center;" class="container-fluid">
            <form action="" method="post" style="display: flex;gap:15px;">
                <input type="text" name="classe" placeholder="Entrer prenom eleve ou nom classe" class="form-control col-lg-9">
                <input type="submit" name="verif" value="RECHERCHER" class="btn btn-info">
            </form>
        </div>
        <table class="table table-bordered table-hover table-stripped">
            <tr><th>PRENOM</th><th>NOM</th><th>ADRESSE</th><th>SEXE</th><th>CLASSE</th><th>NATIONALITE</th><th>ACTIONS</th></tr>
            <?php
            if(isset($_POST["verif"])){
                if(isset($_POST["classe"])){
                    $classe = $_POST["classe"];
                    if(!empty($classe)){                   
            include("Connection_dba.php");
            $list = "SELECT * FROM inscription WHERE classe LIKE '%$classe%' OR prenom LIKE '%$classe%'";
            $result = $dbco->query($list);
            while($data = $result->fetch()){
                $id = $data["id_ins"];
                $prenom = $data["prenom"];
                $nom = $data["nom"];
                $adresse = $data["adresse"];
                $sexe = $data["sexe"];
                $cla = $data["classe"];
                $nationalite = $data["nationalite"];
                $archive = $data["archive"];
                if($archive==0){
                echo "<tr><td>$prenom</td><td>$nom</td><td>$adresse</td><td>$sexe</td><td>$cla</td><td>$nationalite</td>";
                echo "<td style='display:flex;gap:10px; justify-content:center;'>";
                echo "<a href='modifier_tab_eleve.php?id=$id' class='btn btn-warning'>Modifier</a>";
                echo "<a href='afficher_tab_eleve.php?id=$id' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer\")' class='btn btn-danger'>Supprimer</a>";
                echo "</td";
                echo "</tr>";
                }
            }
        }
    }
}
            
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    if(!empty($id) && is_numeric($id)){
                        include("Connection_dba.php");
                            $list = "UPDATE inscription SET archive = '1' where id_ins=$id";
                            $result = $dbco->query($list);
                            header("Location:afficher_tab_eleve.php");
                            echo "Archivage réussi";
                    }
                }
?>
        </table>
<?php
if(isset($_POST["valide"])){
    if(isset($_POST["id"]) && isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["date_naissance"]) && isset($_POST["adresse"]) && isset($_POST["sexe"]) && isset($_POST["nationalite"]) && isset($_POST["niveau"]) && isset($_POST["classe"])  && isset($_POST["email"]) && isset($_POST["nom_tuteur"]) && isset($_POST["numero_tuteur"]))
    {
        if(!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["date_naissance"]) && !empty($_POST["adresse"]) && !empty($_POST["sexe"]) && !empty($_POST["nationalite"]) && !empty($_POST["niveau"]) && !empty($_POST["classe"]) && !empty($_POST["email"]) && !empty($_POST["nom_tuteur"]) && !empty($_POST["numero_tuteur"])){
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == '') {
                header("Location: Formulaire_inscription.php?err=email");
                exit();
              }
            $id = $_POST["id"];
            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $date = $_POST["date_naissance"];
            $adresse = $_POST["adresse"];
            $sexe = $_POST["sexe"];
            $nationalite = $_POST["nationalite"];
            $niveau = $_POST["niveau"];
            $classe = $_POST["classe"];
            $email = $_POST["email"];
            $nom_tuteur = $_POST["nom_tuteur"];
            $numero_tuteur = $_POST["numero_tuteur"];
            
                    include("Connection_dba.php");
                    $list = "UPDATE inscription SET id_ins = '$id', prenom = '$prenom', nom = '$nom', date_naissance = '$date', adresse = '$adresse', sexe = '$sexe', nationalite = '$nationalite', niveau = '$niveau', classe = '$classe', email = '$email', nom_tuteur = '$nom_tuteur', numero_tuteur = '$numero_tuteur' WHERE id_ins = $id";
                    $dbco->exec($list);
                    echo "Modification réussie";
                    
        }
    }
}       
?>

    </div>
</body>
</html>
