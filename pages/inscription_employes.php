<<<<<<< HEAD


<?php
ini_set("display_error","1");
error_reporting(E_ALL);
$prenom=$_POST["prenom"];
$nom=$_POST["nom"];
$adresse=$_POST["adresse"];
$email=$_POST["email"];
$foction=$_POST["fonction"];
$date_naissance=$_POST["date_naissance"];
$nationalite=$_POST["nationalite"];
$sexe=$_POST["sexe"];
$telephone_employe=$_POST["telephone_employe"];
$envoyer=$_POST["envoyer"];

if(isset($envoyer)){
    if(empty($prenom)) ;
    if(empty($nom));
    if(empty($adresse));
    if(empty($email));
    if(empty($date_naissance));
    if(empty($fonction));
    if(empty($nationalite));
    if(empty($sexe));
    if(empty($telephone_employe));
   
    include("Connection_dba.php");
    $sth=$pdo->prepare("INSERT INTO  INSCRIPTION(prenom,nom,adresse,email,date_naissance,fonction,nationalite,sexe,telephone_employe) values(?,?,?,?,?,?,?,?,?)");
    $sth->execute(array($prenom, $nom, $adresse, $email,$date_naissance, $fonction,$nationalite,$sexe, $telephone_employe));

}

ini_set("display_errors","1");
error_reporting(E_ALL);
@$prenom=$_POST["prenom"];
@$nom=$_POST["nom"];
@$email=$_POST["email"];
@$adresse=$_POST["adresse"];
@$telephone=$_POST["telephone"];
@$envoyer=$_POST["envoyer"];
if(isset($envoyer)){
    if(empty($prenom));
    if(empty($nom));
    if(empty($email));
    if(empty($adresse));
    if(empty($telephone));
    include("connection.php");
    $ins=$pdo->prepare("insert into Houss(prenom,nom,email,adresse,telephone) values(?,?,?,?,?)");
    $ins->execute(array($prenom,$nom,$email,$adresse,$telephone));

}

?>





=======
>>>>>>> 240add672a12dd6172c1068b14aa3bb052c366e1
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
    <h1 class="text-center" style="margin-top:120px;margin-bottom :40px;font-weight:bold;">INSCRIPTION EMPLOYE </h1>
    <div id="formule"  >
      <div id="formul" style="display:flex; justify-content:center; margin-top :50px;" >
          
            <form action="afficher_tab_employes.php" method="post" style="width:80%; ">
                <div class="mb-3 row form-inline" >
                  <label for="exampleFormControlInput1" class="form-label col-lg-3">PRENOM:</label>
                  <input type="text" name="prenom" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre prenom" value="<?php echo $prenom?>">
               </div>
                <div class="mb-3 row form-inline">
                  <label for="exampleFormControlInput1" class="form-label col-lg-3">NOM:</label>
                  <input type="text"  name="nom"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre nom" value="<?php echo $nom?>">
                </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">ADRESSE:</label>
                <input type="text"  name="adresse"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre adresse" value="<?php echo $adresse?>">
              </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">EMAIL:</label>
                <input type="text" name="email"  class="form-control col-lg-6" id="exampleFormControlInput1"  placeholder="votre email" value="<?php echo $email?>">
                </div>
                <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3 ">DATE_NAISSANCE:</label>
<<<<<<< HEAD
                <input type="date"  name="date_naissance"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre date de naissance" value="<?php echo $date_naissance?>">
=======
                <input type="date" name="date_naissance"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre date de naissance">
>>>>>>> 240add672a12dd6172c1068b14aa3bb052c366e1
              
              </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">FONCTION:</label>
<<<<<<< HEAD
                <select name="fonction"  name="fonction" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre sexe" value="<?php echo $fonction?>">
                  <option value="0"></option>
                  <option value="1">ADMINISTRATEUR</option>
                  <option value="2">SECRETAIRE</option>
                  <option value="1">PROFFESSEUR</option>
                  <option value="2">COMPTABLE</option>
=======
                <select type="text" name="fonction" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre sexe">
                  <option value=""></option>
                  <option>ADMINISTRATEUR</option>
                  <option>SECRETAIRE</option>
                  <option>PROFESSEUR</option>
                  <option>COMPTABLE</option>
>>>>>>> 240add672a12dd6172c1068b14aa3bb052c366e1
              </select>
              </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3" >NATIONALITE:</label>
                <input type="text"  name="nationalite" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre nationalite" value="<?php echo $nationalite?>">
              </div>
            
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">SEXE:</label>
<<<<<<< HEAD
                <select name="sexe"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre sexe" value="<?php echo $sexe?>">
                  <option value="0"></option>
                  <option value="1">FEMININ</option>
                  <option value="2">MASCULININ</option>
              </select>
                
              </div>
               <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">TELEPHONE:</label>
                <input type="texte" name="telephone_employe"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre nationalite" value="<?php echo $telephone_employe?>">
              </div> 
              <div class="col-12 text-center" style=" dispay:flex;justify-content:center;">
                  <button class="btn btn-primary" type="submit">ENVOYER</button>
=======
                <select type="text"  name="sexe" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre sexe">
                  <option value=""></option>
                  <option>MASCULIN</option>
                  <option>FEMININ</option>
              </select>
                
              </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">TELEPHONE:</label>
                <input type="tel" name="telephone" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre numéro phone">
              </div>
              <div class="col-12 text-center" style=" display:flex;justify-content:center;">
                  <button class="btn btn-primary" type="submit" name="valider">ENVOYER</button>
>>>>>>> 240add672a12dd6172c1068b14aa3bb052c366e1
              </div>  
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
            font-weight:bolder
          }
      footer {
      background-color: #0c82d1;
     text-align: center;
     padding: 50px;
     color: #fff;
     margin-top:120px
     }
     h1{
      font-weight:bolder;
     /*  display: block;
      border: 1px solid black;
      width: 50%;
      margin-left:40px;
      display: flex;
      justify-content:center; */
      
      

    
     }
        </style>
  </body>
  <footer>
        <p>Copyright &copy; 2022 Groupe :</p>
    </footer>
    <?php
    if($_GET["err"] == "email"){
      echo "Email invalide";
  }
    ?>
    
</html> 













