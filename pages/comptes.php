<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
    $message=""; 
    @$nom_utilisateur=$_POST["nom_d'utilisateur"];
    @$profil = $_POST["profil"];
    @$mot_de_passe = $_POST["mot_passe"];
    @$id_employes = $_POST["matricule_eleves"];
    @$id_ins= $_POST["matricule_employes"];


 if(isset($_POST["valider"]))
 {
     if(isset($_POST["nom_d'utilisateur"]) && isset($_POST["profil"]) && isset($_POST["mot_passe"]) && isset($_POST["matricule_eleves"]) && isset($_POST["matricule_employes"] ))
     {
         if(empty($nom_utilisateur )) $message.= "<li>nom_d'utilisateur incorrecte !</li>";
         if(empty($profil)) $message.="<li>profil incorrecte!</li>";
         if(empty($mot_de_passe )) $message.= "<li>mot_de_passe incorrecte !</li>";
       if((!empty($id_employes)) and (!empty($id_ins))) $message.= "<li>un des champs doit etre vide !</li>";
       if((empty($id_employes)) and (empty($id_ins))) $message.= "<li>un des champ doit etre rempli !</li>";
        
          if(empty($message)){
            
           
             include("Connection_dba.php");
             $sth = $dbco->prepare(" INSERT INTO comptes(nom_utilisateur,profil,mot_de_passe,id_employes,id_ins)
             VALUES (?, ?, ?, ?, ?) "); 
 
             $sth->bindValue(1, $nom_utilisateur);
             $sth->bindValue(2, $profil);
             $sth->bindValue(3, $mot_de_passe);
             $sth->bindValue(4, $id_employes);
             $sth->bindValue(5, $id_ins);
             $sth->execute(); 
          
            }
       else{
       /*  header("location:comptes.php");  */
      /*   echo $message;  */
      }
         }
        }
      
 ?>
  <?php
     /*  $stmt= $dbco-> query('SELECT* FROM comptes');
     if ($stmt-> rowcount()>0 ){ */
      /*  while ($row = $stmt->  Fetch(PDO:: FETCH_OBJ)) {
        
       } */
     ?>

   <!-- <p> <strong>comptes</strong> </p> -->


  

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
  <body >
 
  <div class="joli" style="display:flex;"></div>
        <div class="logo" style="background-color:#f8f9fa;position:fixed;width:100%; height: 150px;" >
            <div ><img src="images.jpeg" data-toggle="modal" data-target="#exampleModal"></div>
                <div class="menu">
                    <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-fluid" style="margin-left:1000px;">

                      <button class="btn btn-outline-success" type="submit"><a href="connection.php">Deconnection</a></button>
                      </div>
                   </nav>
             </div>
        </div>  
  </div>
    <h1 class="text-center" style="margin-top:200px;margin-bottom :40px;font-weight:bold;">CREATION COMPTE</h1>
    <div id="formule"  >
      <div id="formul" style="display:flex; justify-content:center; margin-top :50px;" >
          
            <form action="" method="post" style="width:80%; ">
                <div class="mb-3 row form-inline" >
                  <label for="exampleFormControlInput1" class="form-label col-lg-3">NOM D'ULISATEUR:</label>
                  <input type="text" name="nom_d'utilisateur" style="display:flex;justify-content:left;" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre nom d'utilisateur" required>
               </div>
                <div class="mb-3 row form-inline">
                  <label for="exampleFormControlInput1" class="form-label col-lg-3">PROFIL:</label>
                  <input type="text"  name="profil" style="display:flex;justify-content:left;"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre profil" required>
                </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">MOT DE PASSE:</label>
                <input type="text"  name="mot_passe" style="display:flex;justify-content:left;"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre mot de passe" required>
              </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">MATRICULE ELEVES:</label>
                <input type="number" name="matricule_eleves"  class="form-control col-lg-6" id="exampleFormControlInput1"  placeholder="matricule de l'eleve">
                </div>
                <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3 ">MATRICULE EMPLOYES:</label>
                <input type="number" name="matricule_employes"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="matricule de l'employe">

              <div class="col-12 text-center" style=" display:flex;justify-content:center; margin-top:20px;">
                  <button class="btn btn-primary" type="submit" name="valider">ENVOYER</button>
              </div> 
              <?php if(!empty($message)); {?>
            <div style="display:flex; color:red"> <?php echo $message;  ?> </div> 
            <?php }?> 
          </form>
   
  

        </div>
        </div>
        <style>
          #formul{
            border: 2px solid black;
            border-radius:1rem;
            margin-left:500px;
            margin-right:500px;
            background-color: ghostwhite;
           padding: 30px;
          }

          
          .form-control{
            border: 1px solid black;
            border-radius:5px;
            
          }

          .form-label{
            font-weight:bolder;
            display:flex;
            justify-content:left;
          }
      footer {
      background-color: #0c82d1;
     text-align: center;
     padding: 50px;
     color: #fff;
     margin-top:210px;
     height:50px;
     }
     h1{
      font-weight:bolder;

     }
     img{
      margin-left:150px;
     }
     .logo{
        display: flex;
        justify-content: left;
        align-items: center;
    }
    .menu{
        margin-left: 250px;
    }
        </style>

        <!-- <script>
          var b_nomUtilisateur = false; var b_profil= false; var b_motPasse= false; var b_matriculEmploye = false; var b_matriculEleves = false;
      
    if (b_prenom =true && b_nomUtilisateur=true &&  b_profil=true &&  b_motPasse=true && b_matriculEmploye =true ) {
        document.getElementById("mesage").innerText=" envoie serveur";
        document.getElementById("forme").submit();
     }
     else{
      document.getElementById("mesage").innerText= "le fromulaire n'est pas complet"
     }
            

        </script> -->
 </body>
  <footer>
        <p>Copyright &copy; 2022 Groupe :SN SOLID Dev</p>
    </footer>