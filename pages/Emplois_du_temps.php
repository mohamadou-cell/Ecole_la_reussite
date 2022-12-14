<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Document</title>
</head>
  <body>
   <div class="logo container-fluid" style="background-color:#f8f9fa;position:fixed;width:100%; height: 150px;background-color:#0c82d1;display:flex;align-items:center;" >
      <div class="container-fluid"><img src="images/images.jpeg" data-toggle="modal" data-target="#exampleModal" style="float: left;"></div>
          <div class="menu" style="background-color:#0c82d1;">
                <nav class="navbar navbar-expand " style="background-color:#0c82d1;">
                    <div class="container" style="gap:15px;float:right;">
                  
                      <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="page_accueil.php">Accueil</a></button>
                      <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="connection.php">Deconnection</a></button>  
                   </div>
                  </nav>
             </div>
        </div> 
        <div style="display: flex;justify-content:center;">
            <h1 class="text-center" style="margin-top:200px;margin-bottom :40px;"> EMPLOI DU TEMPS  ANNEE 2022-2023</h1>
         </div>        
        <div class="container">
        <div style="display: flex; justify-content:center;">
                <h3>SECONDAIRE</h3>
            </div>
        <table class="table table-bordered table-hover table-stripped">
            <tr><th>HORAIRE</th><th>JOURS</th><th>SALLES</th><th>MATIERES</th><th>CLASSE</th><th>NOM DU PROFESSEUR</th></tr>
            <?php
            include("Connection_dba.php");
            $list = "SELECT * FROM emploi_du_temps WHERE niveau = 'Secondaire'";
            $result = $dbco->query($list);
            while($data = $result->fetch()){
              
                $jours = $data["jour"];
                $horaire = $data["horaire"];
                $salles = $data["salle"];
                $matieres = $data["matiere"];
                $classe = $data["classe"];
                $nom_prof = $data["nom_prof"];
                
                echo "<tr><td>$jours</td><td>$horaire</td><td>$salles</td><td> $matieres</td><td> $classe</td><td>$nom_prof</td>";
                
                echo "</tr>";
                }
            
            
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    if(!empty($id) && is_numeric($id)){
                        include("Connection_dba.php");
                            $list = "UPDATE emploi_du_temps SET archive = '1' where id_edt=$id";
                            $result = $dbco->query($list);
                            header("Location:Emplois_du_temps.php");
                    }
                }
?>
        </table>
        </div>
        <div class="container">
            <div style="display: flex; justify-content:center;">
                <h3>PRIMAIRE</h3>
            </div>
        <table class="table table-bordered table-hover table-stripped">
            <tr><th>HORAIRE</th><th>JOURS</th><th>SALLES</th><th>MATIERES</th><th>CLASSE</th><th>NOM DU PROFESSEUR</th></tr>
            <?php
            include("Connection_dba.php");
            $list = "SELECT * FROM emploi_du_temps WHERE niveau = 'Primaire'";
            $result = $dbco->query($list);
            while($data = $result->fetch()){
              
                $jours = $data["jour"];
                $horaire = $data["horaire"];
                $salles = $data["salle"];
                $matieres = $data["matiere"];
                $classe = $data["classe"];
                $nom_prof = $data["nom_prof"];
                
                echo "<tr><td>$jours</td><td>$horaire</td><td>$salles</td><td> $matieres</td><td> $classe</td><td>$nom_prof</td>";
                
                echo "</tr>";
                }
            
            
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    if(!empty($id) && is_numeric($id)){
                        include("Connection_dba.php");
                            $list = "UPDATE emploi_du_temps SET archive = '1' where id_edt=$id";
                            $result = $dbco->query($list);
                            header("Location:Emplois_du_temps.php");
                    }
                }
?>
        </table>
        </div>
        <?php
if(isset($_POST["valide"])){
    if(isset($_POST["id"]) && isset($_POST["jours"]) && isset($_POST["horaire"]) && isset($_POST["salles"]) && isset($_POST["matieres"]) && isset($_POST["nom_prof"]) )
    {   
        if(!empty($_POST["jours"]) && !empty($_POST["horaire"]) && !empty($_POST["salles"]) && !empty($_POST["matieres"]) && !empty($_POST["nom_prof"])){
          
            $id = $_POST["id"];
            $jours= $_POST["jours"];
            $horaire = $_POST["horaire"];
            $salles = $_POST["salles"];
            $matieres= $_POST["matieres"];
            $nom_prof = $_POST["nom_prof"];
      
                    include("Connection_dba.php");
                    $list = "UPDATE emploi_du_temps SET 	id_edt = '$id', jours = '$jours', horaire = '$horaire', salles = '$salles',matieres = '$matieres', nom_prof = '$nom_prof WHERE 	id_edt= $id";
                    $dbco->exec($list);
                    echo "Modification r??ussie";
                    
        }
    }
}       
?>

    </div>
      
<footer class="container-fluid fixed-bottom" style="float: bottom;">
          <p>Copyright &copy; 2022 Groupe :SN SOLID Dev</p>
      </footer>
       
<style>
    .logo{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .menu{
        margin-left: 250px;
    }
    footer {
            background-color: black;
            text-align: center;
            padding: 50px;
            color: #fff;
            margin-top: 168px;  
            height:50px;
            float: bottom;
          }
          h1{
            font-weight:bolder;
          }
          
</style> 
</body>
</html>