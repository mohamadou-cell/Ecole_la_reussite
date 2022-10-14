
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
        <h1 style="display:flex;justify-content:center;margin-top:50px;font-weight:bold;">LISTES DES EMPLOYES</h1>
        <table class="table table-bordered table-hover table-stripped">
            <tr><th>PRENOM</th><th>NOM</th><th>ADRESSE</th><th>FONCTION</th><th>NATIONALITE</th><th>ACTIONS</th></tr>
            <?php
            include("Connection_dba.php");
            $list = "SELECT * FROM employes";
            $result = $dbco->query($list);
            while($data = $result->fetch()){
                $id = $data["id_employe"];
                $prenom = $data["prenom"];
                $nom = $data["nom"];
                $adresse = $data["adresse"];
                $fonction = $data["fonction"];
                $nationalite = $data["nationalite"];
                $archive = $data["archive"];
                if($archive==0){
                echo "<tr><td>$prenom</td><td>$nom</td><td>$adresse</td><td>$fonction</td><td>$nationalite</td>";
                echo "<td style='display:flex; gap: 10px; justify-content:center;'>";
                echo "<a href='modifier_tab_employes.php?id=$id' class='btn btn-warning'>Modifier</a>";
                echo "<a href='afficher_tab_employes.php?id=$id' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer\")' class='btn btn-danger'>Supprimer</a>";
                echo "</td";
                echo "</tr>";
                }
            }
            
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    if(!empty($id) && is_numeric($id)){
                        include("Connection_dba.php");
                            $list = "UPDATE employes SET archive = '1' where id_employe=$id";
                            $result = $dbco->query($list);
                            header("Location:afficher_tab_employes.php");
                    }
                }
?>
        </table>


    </div>
</body>
</html>