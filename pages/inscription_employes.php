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
    <h1 class="text-center" style="margin-top:200px;margin-bottom :40px;font-weight:bold;">INSCRIPTION EMPLOYES </h1>
    <div id="formule"  >
      <div id="formul" style="display:flex; justify-content:center; margin-top :50px;" >
          
            <form action="afficher_tab_employes.php" method="post" style="width:80%; ">
                <div class="mb-3 row form-inline" >
                  <label for="exampleFormControlInput1" class="form-label col-lg-3">PRENOM:</label>
                  <input type="text" name="prenom" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre prenom" required>
               </div>
                <div class="mb-3 row form-inline">
                  <label for="exampleFormControlInput1" class="form-label col-lg-3">NOM:</label>
                  <input type="text"  name="nom"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre nom">
                </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">ADRESSE:</label>
                <input type="text"  name="adresse"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre adresse">
              </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">EMAIL:</label>
                <input type="text" name="email"  class="form-control col-lg-6" id="exampleFormControlInput1"  placeholder="votre email">
                </div>
                <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3 ">DATE_NAISSANCE:</label>
                <input type="date" name="date_naissance"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre date de naissance">
              
              </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">FONCTION:</label>
                <select type="text" name="fonction" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre sexe">
                  <option value=""></option>
                  <option>ADMINISTRATEUR</option>
                  <option>SECRETAIRE</option>
                  <option>PROFESSEUR</option>
                  <option>COMPTABLE</option>
              </select>
              </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3" >NATIONALITE:</label>
                <input type="text"  name="nationalite" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre nationalite">
              </div>
            
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">SEXE:</label>
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
     margin-top:120px;
     height:50px;
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
     img{
      margin-left:150px;
      
     /*  width:300px;
    margin-top:100px;
      padding:30px;
      object-fit:cover; */
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
 </body>
  <footer>
        <p>Copyright &copy; 2022 Groupe :SN SOLID Dev</p>
    </footer>
    <?php
    if($_GET["err"] == "email"){
      echo "Email invalide";
  }
    ?>
    
</html> 