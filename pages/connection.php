<?php
 ini_set("display_errors", "1");
 error_reporting(E_ALL);
     $message=""; 
     @$user=$_POST["nom_utilisateur"];
     @$profil = $_POST["profil"];
     @$pass = $_POST["password"];
 
 
  if(isset($_POST["verif"]))
  {
      if(isset($_POST["nom_utilisateur"]) && isset($_POST["profil"]) && isset($_POST["password"]))
      {
          if(empty($_POST["nom_utilisateur"])) $message.= "<li> Entrer un nom_d'utilisateur !</li>";
          if(empty($_POST["profil"])) $message.="<li>Choisisser un profil !</li>";
          if(empty($_POST["password"])) $message.= "<li>Entrer mot_de_passe !</li>";
         
           if(empty($message)){
            $user = trim($_POST['nom_utilisateur']);
            $profil = trim($_POST['profil']);
            $pass = trim($_POST['password']);
             
            
            include('Connection_dba.php');
            
            try{
            $sth = $dbco->prepare(" SELECT * FROM comptes WHERE nom_utilisateur = '".$user."' AND profil = '".$profil."' AND mot_de_passe = '".$pass."' "); 
            $sth->execute();
            $res = $sth->fetchAll(PDO::FETCH_ASSOC); 
            if(count($res) == 0){        
                echo "Vous n'êtes pas dans la base de données, inscrivez-vous";
                }
            else
            {
                if($profil == 'Administrateur'){
                    header("Location:accueil_admin.php");
                }
                else if($profil == 'Secretaire'){
                    header("Location:accueil_secretaire.php");
                }
                else if($profil == 'Professeur'){
                    header("Location:accueil_professeur.php");
                }
                else if($profil == 'Comptable'){
                    header("Location:accueil_comptable.php");
                }
                else if($profil == 'Eleve'){
                    header("Location:accueil_eleve.php");
                }
                
            }
            }
            catch(PDOException $e){ echo ("Erreur:".$e->getMessage());}
           
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
    
    <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
<title>Document</title>
</head>
<body>
    

    <div class="login">
       
        <h1 class="text-center">Connection</h1>
        <form action="" method="post">
            <div class="form-group">
                <label class="form-label" for="name">Nom d'utilisateur</label>
                <input class="form-control" type="text" id="name" name="nom_utilisateur">
            </div>
            <div class="form-group">
                <label class="form-label" for="profil">Profil</label>
                <input class="form-control" type="text" id="profil" name="profil">   
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Mot de passe</label>
                <input class="form-control" type="password" id="passwords" name="password">
            </div>
            <div class="form-group1">
            <input class="btn btn-success w-100" type="submit" value="SE CONNECTER" name="verif">
            </div>
            <div>
            <?php if(!empty($message)); {?>
            <div style="display:flex; color:red;flex-direction:column"> <?php echo $message;  ?> </div> 
            <?php }?> 
            </div>    
        </form>

        
    
</body>

<style>
    *{
    margin:0;
    padding: 0;
    box-sizing:border-box;

}
body{
    height: 110vh;
    display: flex;
    align-items: center;
    justify-content:center;
    background-color:skyblue;
}
.login{
    width: 550px;
    height:max-content;
    padding:20px;
    border-radius:12px;
    background:#ffffff;
}
.login h1 {
    font: size 36px;
    margin: bottom 25px;

}
.login form{
    font: size 20px;
}
.login form .form-group{
    margin: bottom 12px;

}
.login form input[type="submit"]{
    font-size: 20px;
    margin: top 15px;
}
.form-group1{
    margin-top: 20px;
    
}

</style>



</html>