
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
        <h1>AJOUT DES NOTES DES ELEVES</h1>
        <table class="table table-bordered table-hover table-stripped">
            <tr><th>ID</th><th>PRENOM</th><th>NOM</th><th>ADRESSE</th><th>MATIERE</th><th>EVALUATION</th><th>NOTES</th><th>ACTIONS</th></tr>
            <?php
            include("Connection_dba.php");
            $list = "SELECT * FROM inscription";
            $result = $dbco->query($list);
            while($data = $result->fetch()){
                $id = $data["id_ins"];
                $prenom = $data["prenom"];
                $nom = $data["nom"];
                $adresse = $data["adresse"];
                $archive = $data["archive"];
                if($archive==0){
                echo "<tr><td>$id</td><td>$prenom</td><td>$nom</td><td>$adresse</td><form method='get'><td><select name='matiere'><option>Math</option><option>Français</option><option>Anglais</option></select></td>";
                echo "<td><select name='control'><option>Controle1</option><option>Controle2</option><option>Composition</option></select></td>";
                echo "<td><input name='note' type='double'></td>";
                echo "<td style='display:flex; gap:5px;'>";
                echo "<button type='submit'><a href='ajout_de_note.php?id_ab=$id' class='btn btn-info'>Ajouter</a></button></form>";
                echo "<a href='modifier_note.php?id=$id' class='btn btn-warning'>Modifier</a>";
                echo "<a href='ajout_de_note.php?id=$id' onclick='return confirm(\"Êtes-vous sûr d'ajouter un retard\")' class='btn btn-danger'>Supprimer</a>";
                echo "</td";
                echo "</tr>";
                }
            }
            
                
?>
        </table>


    </div>
    
        <?php
            if(isset($_GET["id_ab"])){
                $id = $_GET["id_ab"];
                if(isset($_GET["matiere"]) && isset($_GET["control"]) && isset($_GET["note"])){
                $matiere = $_GET["matiere"];
                $controle = $_GET["control"];
                $note = $_GET["note"];
                if(!empty($id) && is_numeric($id) && !empty($matiere) && !empty($controle) && !empty($note)){
                    
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
            

           
        ?>

</body>
</html>
