
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

  
<div class="joli" style="display:flex;"></div>
        <div class="logo container-fluid" style="background-color:#f8f9fa;position:fixed;width:100%; height: 150px;background-color:#0c82d1;display:flex;align-items:center;" >
            <div class="container-fluid"><img src="image.jpeg" data-toggle="modal" data-target="#exampleModal" style="float: left;"></div>
                <div class="menu" style="background-color:#0c82d1;">
                    <nav class="navbar navbar-expand-lg " style="background-color:#0c82d1;">
                        <div class="container-fluid" style="gap:15px;float:right;">
                          <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="connection.php">Accueil</a></button>
                          <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="connection.php">Inscription</a></button>
                          <button class="btn btn-outline-success" type="submit" style="background-color:white;width: 150px;"><a href="connection.php">Emploi du temps</a></button>
                          <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="connection.php">Deconnection</a></button>
                      </div>
                   </nav>
             </div>
        </div>  
    <div class="container-fluid" style="display: flex;justify-content:center;">
    <h1 class="text-center" style="margin-top:200px;margin-bottom :40px;font-weight:bold;">INSCRIPTION ELEVES </h1>
    </div>
    <div id="formule"  style="display:flex; justify-content:center;" class="container-fluid">
      <div id="formul" style="display:flex; justify-content:center; margin-top :50px;" class="container">
          
      <form action="afficher_tab_eleve.php" method="post" style="width:80%; display:block; justify-content:center;">
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

              <div class="mb-3 form-inline">
                  <label for="exampleFormControlInput6" class="form-label col-lg-3">NATIONALITE:</label>
                  <input type="text" class="form-control col-lg-6" id="exampleFormControlInput6" placeholder="Entrer nationalité" name="nationalite" required>
              </div> 
              <div class="mb-3 form-inline">
                <label for="exampleFormControlInput6" class="form-label col-lg-3">EMAIL:</label>
                <input type="email" class="form-control col-lg-6" id="exampleFormControlInput6" placeholder="Entrer le mail" name="email">
              </div>
              <div class="mb-3 form-inline">
                <label for="exampleFormControlInput7" class="form-label col-lg-3">NOM TUTEUR:</label>
                <input type="text" class="form-control col-lg-6" id="exampleFormControlInput7" placeholder="Entrer nom tuteur" name="nom_tuteur" required>
              </div> 
              <div class="mb-3 form-inline">
                <label for="exampleFormControlInput8" class="form-label col-lg-3">NUMERO TUTEUR:</label>
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

            </form>
        </div>
        </div>
        <footer class="container-fluid">
        <p>Copyright &copy; 2022 Groupe :SN SOLID Dev</p>
    </footer>
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
  
    

    

</html>