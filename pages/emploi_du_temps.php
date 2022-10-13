
<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
$message=""; 
$message1=""; 
@$jours = $_POST["jours"];
@$horaire = $_POST["horaire"];
@$salles = $_POST["salles"];
@$matieres = $_POST["matieres"];
@$niveau = $_POST["niveau"];
@$classe = $_POST["classe"];
@$nom_prof = $_POST["nom_prof"];

    if(isset($_POST["valider"])){
        if(isset($_POST["jours"]) && isset($_POST["horaire"]) && isset($_POST["salles"]) && isset($_POST["matieres"]) && isset($_POST["niveau"]) && isset($_POST["classe"]) && isset($_POST["nom_prof"])) 
        {
          if(empty($jours )) $message.= "<label>saisir un jour!</label>";
         if(empty($horaire)) $message.="<label>saisir un horaire !</label>";
         if(empty($salles  )) $message.= "<label>saisir une salle !</label>";
         if(empty($matieres)) $message.= "<label>saisir une matiere!</label>";
         if(empty($niveau)) $message.= "<label>choisir niveau !</label>";
         if(empty($classe)) $message.= "<label>saisir une classe!</label>";
         if(empty($nom_prof)) $message.= "<label>entre le nom du prof!</label>";

         
          if(empty($message)){
            
                include("Connection_dba.php");
              
                $sth = $dbco->prepare(" INSERT INTO emploi_du_temps(jour,horaire,salle,matiere,niveau,classe,nom_prof)
                VALUES (?, ?, ?, ?, ?, ?, ?) "); 
    
                $sth->bindValue(1, $jours);
                $sth->bindValue(2, $horaire);
                $sth->bindValue(3, $salles);
                $sth->bindValue(4, $matieres);
                $sth->bindValue(5, $niveau);
                $sth->bindValue(6, $classe);
                $sth->bindValue(7, $nom_prof);

                $sth->execute();

                $message1.="<label>Enregistrement valide !</label>";
              }
              else{
                $message1.="<label>Enregistrement invalide !</label>";
               

              }
                
            }
            
        }
      
    ?><!DOCTYPE html>
<html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          <title>Document</title>
      </head>
  <body>  
            <div class="logo container-fluid" style="background-color:#f8f9fa;position:fixed;width:100%; height: 150px;background-color:#0c82d1;display:flex;align-items:center;" >
                <div class="container-fluid"><img src="images.jpeg" data-toggle="modal" data-target="#exampleModal" style="float: left;"></div>
                    <div class="menu" style="background-color:#0c82d1;">
                        <nav class="navbar navbar-expand-lg " style="background-color:#0c82d1;">
                            <div class="container-fluid" style="gap:15px;float:right;">

                                <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="page_accueil.php">Accueil</a></button>

                                <!-- <button class="btn btn-outline-success" type="submit"><a href="connection.php"> Connection</a></button> -->

                                <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="connection.php">Deconnection</a></button> 
                          </div>
                      </nav>
                </div>
            </div>  
        <div class="container-fluid" style="display: flex;justify-content:center;">
        <h1 class="text-center" style="margin-top:200px;margin-bottom :40px;font-weight:bold;">EMPLOI DU TEMPS </h1>
        </div >

        <div style="display:flex;justify-content:center;">
           <?php if(!empty($message1)); {?>
            <div style="display:flex;justify-content:center; color:blue;flex-direction:column;font-weight:bold;font-size:large;"> <?php echo $message1;  ?> </div> 
            <?php }?>
       </div> 

        <div id="formule"  style="display:flex; justify-content:center;" >
          <div id="formul" style="display:flex; justify-content:center; margin-top :50px;" class="container col-md-5">
              <form action="" method="post" style="width:80%; ">
                    <div class="mb-3 row form-inline" >
                        <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">JOURS:</label>
                        <select type="text"  name="jours" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="les jours">
                            <option value=""></option>
                            <option >Lundi</option>
                            <option >Mardi</option>
                            <option >Mercredi</option>
                            <option >jeudi</option>
                            <option >Vendredi</option>
                        </select>
                 </div>
                 <div class="mb-3 row form-inline">
                        <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">HORAIRE:</label>
                        <input type="text"  name="horaire"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="les horaires">
                    </div>
                    <div class="mb-3 row form-inline" >
                        <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">SALLES:</label>
                        <input type="text"  name="salles"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre salle de classe">
                  </div>  
                    <div class="mb-3 row form-inline">
                        <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">MATIERES:</label>
                        <input type="text"  name="matieres"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre adresse">
                    </div>
                    <div class="mb-3 row form-inline">
                        <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">NIVEAU:</label>
                        <select type="text"  name="niveau" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="les jours">
                            <option value=""></option>
                            <option >Secondaire</option>
                            <option >Primaire</option>
                            </select>
                   </div>
                    <div class="mb-3 row form-inline">
                        <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">CLASSE:</label>
                        <input type="text" name="classe"  class="form-control col-lg-6" id="exampleFormControlInput1"  placeholder="nom classe">
                   </div>
                   <div class="mb-3 row form-inline">
                        <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">NOM DU PROFESSEUR:</label>
                        <input type="text" name="nom_prof"  class="form-control col-lg-6" id="exampleFormControlInput1"  placeholder="le nom du prof">
                   </div>  
                    <div class="col-12 text-center" style=" display:flex;justify-content:center;">
                        <button class="btn btn-primary" type="submit" name="valider">ENVOYER</button>
                    </div> 
                    <?php if(!empty($message)); {?>

                     <div style="display:flex; color:red;flex-direction:column;"> <?php echo $message;  ?> </div> 

                    <?php }?>  
              </form>
           </div>
      </div>
            <style>
              
            #formul{
                border: 2px solid black;
                border-radius:1rem;

                background-color: ghostwhite;
              padding: 30px;
              }

              
              .form-control{
                border: 1px solid black;
                border-radius:5px;
                
              }

              .form-label{
                font-weight:bolder
              }
              footer {
                background-color: black;
                text-align: center;
                padding: 50px;
                color: #fff;
                margin-top:140px;
                height:50px;
                
              }
              h1{
                font-weight:bolder;
              }

              
            </style>
  </body>
      <footer class="container-fluid fixed-bottom">
            <p>Copyright &copy; 2022 Groupe :SN SOLID Dev</p>
        </footer>

    
    
</html>

   
