
<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
$message=""; 
$message1=""; 
$message2="";
$message3=""; 
@$prenom = $_POST["prenom"];
@ $nom = $_POST["nom"];
@ $adresse = $_POST["adresse"];
@ $email = $_POST["email"];
@$date = $_POST["date_naissance"];
@$fonction = $_POST["fonction"];
@ $nationalite = $_POST["nationalite"];
@ $sexe = $_POST["sexe"];
@ $telephone = $_POST["telephone"]; 


    if(isset($_POST["valider"])){
        if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["adresse"]) && isset($_POST["email"]) && isset($_POST["date_naissance"]) && isset($_POST["fonction"]) && isset($_POST["nationalite"]) && isset($_POST["sexe"]) && isset($_POST["telephone"]))
        {
          if(empty($prenom )) $message.= "<li>saisir un prenom!</li>";
         if(empty($nom)) $message.="<li>saisir un nom !</li>";
         if(empty($adresse )) $message.= "<li>saisir une adresse !</li>";
         if(empty($email)) $message.= "<li>saisir un email!</li>";
         if(!empty($date_naissance))  $message.= "<li>entre la date_naissance!</li>";
         if(empty($fonction )) $message.= "<li>saisir la fonction!</li>";
         if(empty($nationalite)) $message.="<li>saisir une nationalite !</li>";
         if(empty($sexe )) $message.= "<li>entre le sexe !</li>";
         if(empty($telephone)) $message.= "<li>saisir un numéro telephone!</li>";
        
          if(empty($message)){
            

            /* if(!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["adresse"]) && !empty($_POST["email"]) && !empty($_POST["date_naissance"]) && !empty($_POST["fonction"]) && !empty($_POST["nationalite"]) && !empty($_POST["sexe"]) && !empty($_POST["telephone"])){ */
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == '') {
                    /* header("Location: inscription_employes.php?err=email");*/
                    echo "Veuillez entrer un email correct";
                    exit();
                  }  
                
                include("Connection_dba.php");
                $sth = $dbco->prepare(" SELECT * FROM employes WHERE email = '".$email."'"); 
                $sth->execute();
                $res = $sth->fetchAll(PDO::FETCH_ASSOC); 
               if(count($res) == 0){  

                $sth = $dbco->prepare(" INSERT INTO employes(prenom,nom,adresse,email,date_naissance,fonction,nationalite,sexe,telephone)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) "); 
    
                $sth->bindValue(1, $prenom);
                $sth->bindValue(2, $nom);
                $sth->bindValue(3, $adresse);
                $sth->bindValue(4, $email);
                $sth->bindValue(5, $date);
                $sth->bindValue(6, $fonction); 
                $sth->bindValue(7, $nationalite);
                $sth->bindValue(8, $sexe);
                $sth->bindValue(9, $telephone);
                $sth->execute();

                $message2.="<label>Enregistrement valide !</label>";
              }
              else{
                $message2.="<label>Enregistrement invalide !</label>";
                $message3.="<label>Cet email existe déjà !</label>";

              }
                
            }
            
        }
    }
    ?>

<!DOCTYPE html>
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
    <div class="joli" style="display:flex;"></div>
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
        <h1 class="text-center" style="margin-top:200px;margin-bottom :40px;font-weight:bold;">INSCRIPTION EMPLOYES </h1>
        </div >

        <div style="display:flex;justify-content:center;">
           <?php if(!empty($message2)); {?>
            <div style="display:flex;justify-content:center; color:blue;flex-direction:column;font-weight:bold;font-size:large;"> <?php echo $message2;  ?> </div> 
            <?php }?>
    </div> 

        <div id="formule"  style="display:flex; justify-content:center;" class="container-fluid">
          <div id="formul" style="display:flex; justify-content:center; margin-top :50px;" class="container">
              
                <form action="" method="post" style="width:80%; ">
                <div style="display:flex;justify-content:center;">
                  <?php if(!empty($message3)); {?>
                    <div style="display:flex;justify-content:center; color:blue;flex-direction:column;font-weight:bold;font-size:large;"> <?php echo $message3;  ?> </div> 
                    <?php }?>
                </div>
                    <div class="mb-3 row form-inline" >
                      <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">PRENOM:</label>
                      <input type="text" name="prenom"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre prenom" required>

                  </div>
                    <div class="mb-3 row form-inline">
                      <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">NOM:</label>
                      <input type="text"  name="nom"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre nom">
                    </div>
                  <div class="mb-3 row form-inline">
                    <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">ADRESSE:</label>
                    <input type="text"  name="adresse"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre adresse">
                  </div>
                  <div class="mb-3 row form-inline">
                    <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">EMAIL:</label>
                    <input type="text" name="email"  class="form-control col-lg-6" id="exampleFormControlInput1"  placeholder="votre email">
                    </div>

                    <div style="display:flex;justify-content:center;">
                      <?php if(!empty($message1)); {?>
                            <div style="display:flex;justify-content:center; color:red;flex-direction:column;"> <?php echo $message1;  ?> </div> 
                            <?php }?>
                    </div> 

                    <div class="mb-3 row form-inline">
                    <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3 ">DATE_NAISSANCE:</label>
                    <input type="date" name="date_naissance"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre date de naissance">
                    </div>
                  <div class="mb-3 row form-inline">
                    <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">FONCTION:</label>
                    <select type="text" name="fonction" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre sexe">
                      <option value=""></option>
                      <option >ADMINISTRATEUR</option>
                      <option >SECRETAIRE</option>
                      <option >PROFESSEUR</option>
                      <option >COMPTABLE</option>
                  </select>
                  </div>
                  <div class="mb-3 row form-inline">
                    <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3" >NATIONALITE:</label>
                    <input type="text"  name="nationalite" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre nationalite">
                  </div>
                
                  <div class="mb-3 row form-inline">
                    <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">SEXE:</label>
                    <select type="text"  name="sexe" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre sexe">
                      <option value=""></option>
                      <option >MASCULIN</option>
                      <option >FEMININ</option>
                  </select>
                    
                  </div>
                  <div class="mb-3 row form-inline">
                    <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">TELEPHONE:</label>
                    <input type="tel" name="telephone" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre numéro phone">
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
                float: bottom;
              }
              h1{
                font-weight:bolder;
              }

              
            </style>
  </body>
      <footer>
            <p>Copyright &copy; 2022 Groupe :SN SOLID Dev</p>
        </footer>

    
    
</html>

   
