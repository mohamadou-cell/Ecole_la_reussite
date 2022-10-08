<?php
if(isset($_POST["valider"])){
    if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["date_naissance"]) && isset($_POST["adresse"]) && isset($_POST["sexe"]) && isset($_POST["nationalite"]) && isset($_POST["niveau"]) && isset($_POST["classe"])  && isset($_POST["email"]) && isset($_POST["nom_tuteur"]) && isset($_POST["numero_tuteur"]))
    {
        if(!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["date_naissance"]) && !empty($_POST["adresse"]) && !empty($_POST["sexe"]) && !empty($_POST["nationalite"]) && !empty($_POST["niveau"]) && !empty($_POST["classe"]) && !empty($_POST["email"]) && !empty($_POST["nom_tuteur"]) && !empty($_POST["numero_tuteur"])){
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == '') {
                header("Location: Formulaire_inscription.php?err=email");
                exit();
              }
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
            $sth = $dbco->prepare(" INSERT INTO inscription(prenom,nom,date_naissance,adresse,sexe,nationalite,niveau,classe,email,nom_tuteur,numero_tuteur)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) "); 

            /* $sth->bindParam(':prenom', $prenom);
            $sth->bindParam(':nom', $nom);
            $sth->bindParam(':date_naissance', $date);
            $sth->bindParam(':adresse', $adresse);
            $sth->bindParam(':sexe', $sexe);
            $sth->bindParam(':nat', $nationalite); 
            $sth->bindParam(':mail', $email);
            $sth->bindParam(':nt', $nom_tuteur);
            $sth->bindParam(':nut', $numero_tuteur);
            $sth->execute(); */

            $sth->bindValue(1, $prenom);
            $sth->bindValue(2, $nom);
            $sth->bindValue(3, $date);
            $sth->bindValue(4, $adresse);
            $sth->bindValue(5, $sexe);
            $sth->bindValue(6, $nationalite); 
            $sth->bindValue(7, $niveau);
            $sth->bindValue(8, $classe);
            $sth->bindValue(9, $email);
            $sth->bindValue(10, $nom_tuteur);
            $sth->bindValue(11, $numero_tuteur);
            $sth->execute();
            //$sth->execute(array( /* ':prenom' =>  */$nom, /* ':nom' =>  */$prenom,/* ':date_naissance' =>  */$date, /* ':adresse' =>  */$adresse, /* ':sexe' =>  */$sexe, /* ':nat' => */ $nationalite, /* ':mail' =>  */$email, /* ':nt' =>  */$nom_tuteur, /* ':nut' =>  */$numero_tuteur)); */
            echo "Enregistrement réussi";
        }
        else{
            echo "Veuillez remplir correctement les champs";
        }
    }
}






//echo ("prenom: ".$prenom."nom: ".$nom."date: ".$date."adresse: ".$adresse."sexe: ".$sexe."nationalité: ".$nationalite."email: ".$email."nom tuteur: ".$nom_tuteur."numero: ".$numero_tuteur);

?>
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
        <h1>Liste des élèves</h1>
        <table class="table table-bordered table-hover table-stripped">
            <tr><th>ID</th><th>PRENOM</th><th>NOM</th><th>ADRESSE</th><th>ACTIONS</th></tr>
            <?php
            include("Connection_dba.php");
            $list = "SELECT * FROM inscription";
            $result = $dbco->query($list);
            $data = $result->fetchAll();
            for($i = 0; $i < count($data); $i++){
                $id = $data[$i]["id_ins"];
                $prenom = $data[$i]["prenom"];
                $nom = $data[$i]["nom"];
                $adresse = $data[$i]["adresse"];
                echo "<tr><td>$id</td><td>$prenom</td><td>$nom</td><td>$adresse</td>";
                echo "<td style='display:flex;'>";
                echo "<a href='modifier_tab_eleve.php?id=$id' class='btn btn-warning'>Modifier</a>";
                echo "<a href='afficher_tab_eleve.php?id=$id' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer\")' class='btn btn-danger'>Supprimer</a>";
                echo "</td";
                echo "</tr>";
            }
            
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    if(!empty($id) && is_numeric($id)){
                        include("Connection_dba.php");
                            $list = "DELETE FROM inscription where id_ins=$id";
                            $result = $dbco->query($list);
                            header("Location:afficher_tab_employes.php");
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
