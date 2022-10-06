<?php



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
  <body >
    <h1 class="text-center" style="margin-top:120px;margin-bottom :40px;font-wei">INSCRIPTION EMPLOYE </h1>
    <div id="formule"  >
      <div id="formul" style="display:flex; justify-content:center; margin-top :50px;" >
          
            <form action="afficher_tab_employes.php" method="post" style="width:80%; ">
                <div class="mb-3 row form-inline" >
                  <label for="exampleFormControlInput1" class="form-label col-lg-3">PRENOM:</label>
                  <input type="text" name="prenom" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre prenom" >
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
                <input type="date"  name="date_naissance"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre date de naissance">
              
              </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">FONCTION:</label>
                <select name="fonction"  name="fonction" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre sexe">
                  <option value="0"></option>
                  <option value="1">ADMINISTRATEUR</option>
                  <option value="2">SECRETAIRE</option>
                  <option value="1">PROFFESSEUR</option>
                  <option value="2">COMPTABLE</option>
              </select>
              </div>
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3" >NATIONALITE:</label>
                <input type="text"  name="nationalite" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre nationalite">
              </div>
            
              <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">SEXE:</label>
                <select name="sexe"  name="sexe" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre sexe">
                  <option value="0"></option>
                  <option value="1">FEMININ</option>
                  <option value="2">MASCULININ</option>
              </select>
                
              </div>
            <!--   <div class="mb-3 row form-inline">
                <label for="exampleFormControlInput1" class="form-label col-lg-3">NATIONALITE:</label>
                <input type="texte" class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="votre nationalite">
              </div> -->
              <div class="col-12 text-center" style=" dispay:flex;justify-content:center;">
                  <button class="btn btn-primary" type="submit">ENVOYER</button>
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

          #formule{
            
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
</html> 













