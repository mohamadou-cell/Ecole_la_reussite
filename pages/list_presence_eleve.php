
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
        <h1 style="margin-bottom:50px">LISTE DE PRESENCE DES ELEVES</h1>
        <!-- <div style="display: flex; justify-content:center;height:100px; align-items:center;" class="container-fluid">
            <form action="" method="post" style="display: flex;gap:15px;">
                <input type="text" name="classe" placeholder="Entrer le nom de la classe" class="form-control col-lg-9">
                <input type="submit" name="verif" value="RECHERCHER" class="btn btn-info">
            </form>
        </div> -->
        <table class="table table-bordered table-hover table-stripped">
        <tr><th>PRENOM</th><th>NOM</th><th>ADRESSE</th><th>SEXE</th><th>CLASSE</th><th>NATIONALITE</th><th>ACTIONS</th></tr>
            <?php
            /* if(isset($_POST["verif"])){
                if(isset($_POST["classe"])){
                    $classe = $_POST["classe"];
                    if(!empty($classe)){

                   */  
            include("Connection_dba.php");
            $list = "SELECT * FROM inscription";
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
                echo "<a href='list_presence_eleve.php?id_ab=$id' onclick='return confirm(\"Êtes-vous sûr d'ajouter une absence\")' class='btn btn-warning'>Absence</a>";
                echo "<a href='list_presence_eleve.php?id=$id' onclick='return confirm(\"Êtes-vous sûr d'ajouter un retard\")' class='btn btn-danger'>Retard</a>";
                echo "</td";
                echo "</tr>";
                }
            }
      /*   }
    }
} */
            
                
?>
        </table>


    </div>
    <div style="display: flex; justify-content:center;">
        <?php
            if(isset($_GET["id_ab"])){
                $id = $_GET["id_ab"];
                if(!empty($id) && is_numeric($id)){
                    include("Connection_dba.php");
                        $list = "INSERT INTO presence_eleve(absence,retard,id_ins) VALUES (1, 0, $id)";
                        $result = $dbco->query($list);
                        echo "Ajout absence réussi";
                        /* header("Location:list_presence_eleve.php"); */
                }
            }

            if(isset($_GET["id"])){
                $id = $_GET["id"];
                if(!empty($id) && is_numeric($id)){
                    include("Connection_dba.php");
                        $list = "INSERT INTO presence_eleve(absence,retard,id_ins) VALUES (0, 1, $id)";
                        $result = $dbco->query($list);
                        echo "Ajout retard réussi";
                        /* header("Location:list_presence_eleve.php"); */
                }
            }
        ?>
    </div>
</body>
</html>
