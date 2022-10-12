<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
    $message=""; 
    $message1="";
    $message2="";
    $message3="";
    @$prenom = $_POST["prenom"];
    @$nom = $_POST["nom"];
    @$date = $_POST["date_naissance"];
    @$adresse = $_POST["adresse"];
    @$sexe = $_POST["sexe"];
    @$nationalite = $_POST["nationalite"];
    @$niveau = $_POST["niveau"];
    @$classe = $_POST["classe"];
    @$email = $_POST["email"];
    @$nom_tuteur = $_POST["nom_tuteur"];
    @$numero_tuteur = $_POST["numero_tuteur"];
if(isset($_POST["valider"])){
    if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["date_naissance"]) && isset($_POST["adresse"]) && isset($_POST["sexe"]) && isset($_POST["nationalite"]) && isset($_POST["niveau"]) && isset($_POST["classe"])  && isset($_POST["email"]) && isset($_POST["nom_tuteur"]) && isset($_POST["numero_tuteur"]))
    {
      if(empty($prenom)) $message.= "<label> Entrer un prenom !</label>";
      if(empty($nom)) $message.="<label>Entrer un nom !</label>";
      if(empty($date)) $message.= "<label>Entrer une date !</label>";
      if(empty($adresse)) $message.= "<label> Entrer une adresse !</label>";
      if(empty($sexe)) $message.= "<label> Choisir un sexe !</label>";
      if(empty($nationalite)) $message.= "<label> Entrer une nationalité !</label>";
      if(empty($niveau)) $message.= "<label> Choisir un niveau !</label>";
      if(empty($classe)) $message.= "<label> Choisir une classe !</label>";
      if(empty($email)) $message.= "<label> Entrer un email !</label>";
      if(empty($nom_tuteur)) $message.= "<label> Entrer un nom tutuer !</label>";
      if(empty($numero_tuteur)) $message.= "<label> Entrer un numero tuteur !</label>";
      if(empty($message)){
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == '') {
              $message1.="<label>Veuillez entrer un bon mail </label>";
                exit();
              }
            
    
            include("Connection_dba.php");
            $sth = $dbco->prepare(" SELECT * FROM inscription WHERE email = '".$email."'"); 
            $sth->execute();
            $res = $sth->fetchAll(PDO::FETCH_ASSOC); 
            if(count($res) == 0){ 
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
              $message2.="<label>Enregistrement valide</label>";
              $sql = "SELECT id_ins FROM inscription WHERE email = '".$email."'";
                $id = $dbco->prepare($sql);
                $id->execute();
                $row = $id->fetch(PDO::FETCH_ASSOC);
                //on modifie le matricule
                $matricule = date('Y-', time()).$row['id_ins'].'-ELV';
                //on modifie la derniere matricule du BD
                $sql2 = "UPDATE inscription  SET  matricule = '$matricule' WHERE email = '".$email."'";
                $matricule2 = $dbco->prepare($sql2);
                $matricule2->execute();
                $message3.="<label>Votre matricule est: '".$matricule."'</label>";
        }
        else{
          $message2.="<label>Enregistrement invalide</label>";
        }
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
  
<nav>
        <div class="logo container-fluid" style="background-color:#f8f9fa;position:fixed;width:100%; height: 150px;background-color:#0c82d1;display:flex;align-items:center;" >
            <div class="container-fluid"><img src="../images/image.jpeg" data-toggle="modal" data-target="#exampleModal" style="float: left;"></div>
                <div class="menu" style="background-color:#0c82d1;">
                    <nav class="navbar navbar-expand-lg " style="background-color:#0c82d1;">
                        <div class="container-fluid" style="gap:15px;float:right;">
                          <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="page_accueil.php">Accueil</a></button>
                          <button class="btn btn-outline-success" type="submit" style="background-color:white; width:150px;"><a href="afficher_tab_eleve.php">Liste des élèves</a></button>
                          <button class="btn btn-outline-success" type="submit" style="background-color:white; width:155px;"><a href="list_presence_employe.php">Liste de presence</a></button>
                          <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="connection.php">Deconnection</a></button>
                      </div>
                   </nav>
             </div>
        </div> 
        </nav>
    <main>     
    <div class="container-fluid" style="display: flex;justify-content:center;">
    <h1 class="text-center" style="margin-top:200px;margin-bottom :40px;font-weight:bold;">INSCRIPTION ELEVES </h1>
    </div>
    <div id="formule"  style="display:block; justify-content:center;" class="container-fluid">
    <div style="display: flex; justify-content:center;">
        <?php if(!empty($message2)); {?>
        <div style="display:flex; color:blue;flex-direction:column;justify-content:center;font-size:large;"> <?php echo $message2;  ?> </div> 
        <?php }?> 
      </div>
      <div style="display: flex; justify-content:center;">
        <?php if(!empty($message3)); {?>
        <div style="display:flex; color:brown;flex-direction:column;justify-content:center;font-size:large;"> <?php echo $message3;  ?> </div> 
        <?php }?> 
      </div>
      <div id="formul" style="display:flex; justify-content:center; margin-top :50px;" class="container">
          
      <form action="" method="post" style="width:80%; display:block; justify-content:center;">
              <div class="mb-3 row form-inline" style="display: flex;justify-content:center;">
                <label for="exampleFormControlInput1" class="form-label col-lg-4" style="display: flex;justify-content:left;">PRENOM:</label>
                <input type="text" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="Entrer prenom" name="prenom">
              </div>
              <div class="mb-3 row form-inline" style="display: flex;justify-content:center;">
                <label for="exampleFormControlInput2" class="form-label col-lg-4" style="display: flex;justify-content:left;">NOM:</label>
                <input type="text" class="form-control col-lg-6" id="exampleFormControlInput2" placeholder="Entrer nom" name="nom"> 
              </div>
              
              <div class="mb-3 row form-inline" style="display: flex;justify-content:center;">
                <label for="exampleFormControlInput3" class="form-label col-lg-4" style="display: flex;justify-content:left;">DATE NAISSANCE:</label>
                <input type="date" class="form-control col-lg-6" id="exampleFormControlInput3" placeholder="Entrer date de naissance" name="date_naissance">
              </div>
              <div class="mb-3 row form-inline" style="display: flex;justify-content:center;">
                <label for="exampleFormControlInput4" class="form-label col-lg-4" style="display: flex;justify-content:left;">ADRESSE:</label>
                <input type="text" class="form-control col-lg-6" id="exampleFormControlInput4" placeholder="Entrer l'adresse" name="adresse">
              </div> 
              <div class="mb-3 row form-inline" style="display: flex;justify-content:center;">
                <label for="exampleFormControlInput5" class="form-label col-lg-4" style="display: flex;justify-content:left;">SEXE:</label>
                <select class="form-control col-lg-6" aria-label="Default select example" name="sexe">
                    <option >Masculin</option>
                    <option >Feminin</option>
                  </select>
              </div>
              <div class="mb-3 row form-inline" style="display: flex;justify-content:center;">
                  <label for="exampleFormControlInput6" class="form-label col-lg-4" style="display: flex;justify-content:left;">NATIONALITE:</label>
                  <input type="text" class="form-control col-lg-6" id="exampleFormControlInput6" placeholder="Entrer nationalité" name="nationalite">
              </div>
              <div class="mb-3 row form-inline" style="display: flex;justify-content:center;">
                <label for="exampleFormControlInput6" class="form-label col-lg-4" style="display: flex;justify-content:left;">NIVEAU:</label>
                <select class="form-control col-lg-6" aria-label="Default select example" name="niveau">
                    <option >Primaire</option>
                    <option >Secondaire</option>
                  </select>
              </div>
              <div class="mb-3 row form-inline" style="display: flex;justify-content:center;">
                <label for="exampleFormControlInput6" class="form-label col-lg-4" style="display: flex;justify-content:left;">CLASSE:</label>
                <select class="form-control col-lg-6" aria-label="Default select example" name="classe">
                    <option >CI</option>
                    <option>CP</option>
                    <option>CE1</option>
                    <option>CE2</option>
                    <option>CEM1</option>
                    <option>CEM2</option>
                    <option>6IEME</option>
                    <option>5IEME</option>
                    <option>4IEME</option>
                    <option>3IEME</option>
                  </select>
              </div> 
              <div class="mb-3 row form-inline" style="display: flex;justify-content:center;">
                <label for="exampleFormControlInput6" class="form-label col-lg-4" style="display: flex;justify-content:left;">EMAIL:</label>
                <input type="email" class="form-control col-lg-6" id="exampleFormControlInput6" placeholder="Entrer le mail" name="email">
              </div>
              <div>
                <?php if(!empty($message1)); {?>
                <div style="display:flex; color:red;flex-direction:column;"> <?php echo $message1;  ?> </div> 
                <?php }?> 
              </div>
              <div class="mb-3 row form-inline" style="display: flex;justify-content:center;">
                <label for="exampleFormControlInput7" class="form-label col-lg-4" style="display: flex;justify-content:left;">NOM TUTEUR:</label>
                <input type="text" class="form-control col-lg-6" id="exampleFormControlInput7" placeholder="Entrer nom tuteur" name="nom_tuteur">
              </div> 
              <div class="mb-3 row form-inline" style="display: flex;justify-content:center;">
                <label for="exampleFormControlInput8" class="form-label col-lg-4" style="display: flex;justify-content:left;">NUMERO TUTEUR:</label>
                <input type="number" class="form-control col-lg-6" id="exampleFormControlInput8" placeholder="Entrer numero tuteur" name="numero_tuteur">
              </div>
              <div class="col-12 text-center container" style=" display:flex;justify-content:center;">
                  <button class="btn btn-primary" style="width: 300px;" type="submit" name="valider">ENVOYER</button>
              </div> 
              <div>
                <?php if(!empty($message)); {?>
                <div style="display:flex; color:red;flex-direction:column;"> <?php echo $message;  ?> </div> 
                <?php }?> 
              </div>

            </form>
        </div>
        </div>
        <style>
          #formul{
            border: 2px solid black;
            border-radius:1rem;
            /* margin-left:500px;
            margin-right:500px; */
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
            margin-top:120px;
            height:50px;
          }
          h1{
            font-weight:bolder;
          }
          
          
        </style>
 </body>
  <footer>
        <p>Copyright &copy; 2022 Groupe :SN SOLID Dev</p>
    </footer>
    
</body>
</html>