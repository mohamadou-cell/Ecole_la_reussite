
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
        <h1>LISTE DE PRESENCE DES EMPLOYES</h1>
        <table class="table table-bordered table-hover table-stripped">
            <tr><th>ID</th><th>PRENOM</th><th>NOM</th><th>ADRESSE</th><th>ACTIONS</th></tr>
            <?php
            include("Connection_dba.php");
            $list = "SELECT * FROM employes";
            $result = $dbco->query($list);
            while($data = $result->fetch()){
                $id = $data["id_employe"];
                $prenom = $data["prenom"];
                $nom = $data["nom"];
                $adresse = $data["adresse"];
                $archive = $data["archive"];
                if($archive==0){
                echo "<tr><td>$id</td><td>$prenom</td><td>$nom</td><td>$adresse</td>";
                echo "<td style='display:flex;justify-content:center;gap: 10px;'>";
                echo "<a href='list_presence_employe.php?id_ab=$id' onclick='return confirm(\"Êtes-vous sûr d'ajouter une absence\")' class='btn btn-warning'>Absence</a>";
                echo "<a href='list_presence_employe.php?id=$id' onclick='return confirm(\"Êtes-vous sûr d'ajouter un retard\")' class='btn btn-danger'>Retard</a>";
                echo "</td";
                echo "</tr>";
                }
            }
            
                
?>
        </table>


    </div>
    <div style="display: flex; justify-content:center;">
    <?php
if(isset($_GET["id_ab"])){
    $id = $_GET["id_ab"];
    if(!empty($id) && is_numeric($id)){
        include("Connection_dba.php");
            $list = "INSERT INTO presence_employe(absence,retard,id_employe) VALUES (1, 0, $id)";
            $result = $dbco->query($list);
            echo "Ajout absence réussi";
            /* header("Location:list_presence_employe.php"); */
    }
}

if(isset($_GET["id"])){
    $id = $_GET["id"];
    if(!empty($id) && is_numeric($id)){
        include("Connection_dba.php");
            $list = "INSERT INTO presence_employe(absence,retard,id_employe) VALUES (0, 1, $id)";
            $result = $dbco->query($list);
            echo "Ajout retard réussi";
            /* header("Location:list_presence_employe.php"); */
    }
}
?>

    </div>
</body>

</html>
