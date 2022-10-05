<?php
      if($_POST["prenom"] = "" && $_POST["nom"] = "" && $_POST["date_naissance"] = "" && $_POST["adresse"] = "" && $_POST["sexe"] = "" && $_POST["nationalite"] != "" && $_POST["email"] != "" && $_POST["nom_tuteur"] != "" && $_POST["numero_tuteur"] != ""){ // si les saisies ne sont pas vides
        echo "Veuillez remplir les champs vides";
       }
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
  <div class="container-fluid" id="global">
  <div class="container-fluid row form-inline" id="logo">
    <img src="icone.webp" alt="" style="width: 150px;height: 150px;">
    <h1>GESTION DES INSCRIPTIONS</h1>
  </div>
  <!-- <div class="container row form-inline" id="connect">
      <label for="">SECRETAIRE</label>
      <a href="" class="btn btn-danger">DECONNECTER</a>
    </div> -->
    <div id="ins" class="container">
        <form action="Recuperation_Inscription.php" method="post">
              <div class="mb-3 form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">Prenom:</label>
                <input type="text" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="Entrer prenom" name="prenom" required>
              </div>
              <div class="mb-3 form-inline">
                <label for="exampleFormControlInput2" class="form-label col-lg-3">Nom:</label>
                <input type="text" class="form-control col-lg-6" id="exampleFormControlInput2" placeholder="Entrer nom" name="nom" required> 
              </div>
              
              <div class="mb-3 form-inline">
                <label for="exampleFormControlInput3" class="form-label col-lg-3">Date de naissance:</label>
                <input type="date" class="form-control col-lg-6" id="exampleFormControlInput3" placeholder="Entrer date de naissance" name="date_naissance" required>
              </div>
              <div class="mb-3 form-inline">
                <label for="exampleFormControlInput4" class="form-label col-lg-3">Adresse:</label>
                <input type="text" class="form-control col-lg-6" id="exampleFormControlInput4" placeholder="Entrer l'adresse" name="adresse" required>
              </div> 
              <div class="mb-3 form-inline">
                <label for="exampleFormControlInput5" class="form-label col-lg-3">Sexe:</label>
                <select class="form-control col-lg-6" aria-label="Default select example" name="sexe">
                    <option >Masculin</option>
                    <option >Feminin</option>
                  </select>
              </div>
              <div class="mb-3 form-inline">
                  <label for="exampleFormControlInput6" class="form-label col-lg-3">Nationalité:</label>
                  <input type="text" class="form-control col-lg-6" id="exampleFormControlInput6" placeholder="Entrer nationalité" name="nationalite" required>
              </div> 
              <div class="mb-3 form-inline">
                <label for="exampleFormControlInput6" class="form-label col-lg-3">Email:</label>
                <input type="email" class="form-control col-lg-6" id="exampleFormControlInput6" placeholder="Entrer le mail" name="email">
              </div>
              <div class="mb-3 form-inline">
                <label for="exampleFormControlInput7" class="form-label col-lg-3">Nom tuteur:</label>
                <input type="text" class="form-control col-lg-6" id="exampleFormControlInput7" placeholder="Entrer nom tuteur" name="nom_tuteur" required>
              </div> 
              <div class="mb-3 form-inline">
                <label for="exampleFormControlInput8" class="form-label col-lg-3">Numero tuteur:</label>
                <input type="number" class="form-control col-lg-6" id="exampleFormControlInput8" placeholder="Entrer numero tuteur" name="numero_tuteur" required>
              </div>
              <div class="mb-3 container-fluid" style="display: flex; justify-content: left;">
                <button type="submit" class="btn btn-primary mb-3 col-lg-3" name="valider" id="connect">ENVOYER</button>
              </div>

            </form>
    </div>

    </div>
    <style>
        body{
            display: flex;
            justify-content: center;
        }
        label{
          height: 40px;
          background-color: burlywood;
          border-radius: 10px;
        }
        .mb-3{
          gap: 10px;
        }
        #ins{
            width: 100%;
        }
        .btn{
          width: 20%;
          display: flex;
          justify-content: center;
        }
        #global{
          display: block;
          justify-content: center;
        }
        #logo{
          display: flex;
          justify-content: left;
          gap: 50px;
          margin-left: 350px;
        }
        #connect{
          display: flex;
          justify-content: center;
          align-items: center;
          gap: 10px;
          margin-bottom: 25px;
          height: 50px;
        }
    </style>
    
</body>
</html>