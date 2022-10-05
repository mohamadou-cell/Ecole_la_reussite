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
<h1 class="text-center" style="margin-top:100px;margin-bottom :40px;">INSCRIPTION EMPLOYE </h1>
<div style="display:flex; justify-content:center; margin-top :0px;">
      <form action="" style="width:50%; ">
          <div class="mb-3 row form-inline">
            <label for="exampleFormControlInput1" class="form-label col-lg-3">PRENOM:</label>
            <input type="prenom" class="form-control col-lg-6" id="exampleFormControlInput1" value="<?php echo $prenom?>">
         </div>
          <div class="mb-3 row form-inline">
            <label for="exampleFormControlInput1" class="form-label col-lg-3">NOM:</label>
            <input type="nom" class="form-control col-lg-6" id="exampleFormControlInput1"value="<?php echo $nom?>">
          </div>
          <div class="mb-3 row form-inline">
            <label for="exampleFormControlInput1" class="form-label col-lg-3">ADRESSE:</label>
            <input type="adresse" class="form-control col-lg-6" id="exampleFormControlInput1"value="<?php echo $adresse?>">
          </div>
          <div class="mb-3 row form-inline">
            <label for="exampleFormControlInput1" class="form-label col-lg-3">EMAIL:</label>
            <input type="email" class="form-control col-lg-6" id="exampleFormControlInput1" value="<?php echo $email?>">
            </div>
            <div class="mb-3 row form-inline">
            <label for="exampleFormControlInput1" class="form-label col-lg-3 ">DATE_NAISSANCE</label>
            <input type="date" class="form-control col-lg-6" id="exampleFormControlInput1" value="<?php echo $date_naissance?>">
          
          </div>
          <div class="mb-3 row form-inline">
            <label for="exampleFormControlInput1" class="form-label col-lg-3">FONCTION</label>
            <input type="fonction" class="form-control col-lg-6" id="exampleFormControlInput1" value="<?php echo $fonction?>">
          </div>
          <div class="mb-3 row form-inline">
            <label for="exampleFormControlInput1" class="form-label col-lg-3">NOM_TUTTEUR</label>
            <input type="nom_tuteur" class="form-control col-lg-6" id="exampleFormControlInput1"value="<?php echo $nom_employe?>">
          </div>

          <div class="mb-3 row form-inline">
            <label for="exampleFormControlInput1" class="form-label col-lg-3">SEXE</label>
            <input type="sexe" class="form-control col-lg-6" id="exampleFormControlInput1" value="<?php echo $sexe?>">
          </div>
          <div class="mb-3 row form-inline">
            <label for="exampleFormControlInput1" class="form-label col-lg-3">NATIONALITE</label>
            <input type="nationalite" class="form-control col-lg-6" id="exampleFormControlInput1" value="<?php echo $nationalite?>">
          </div>
          <div class="col-12" style=" dispay:flex;justify-content:center;">
              <button class="btn btn-primary" type="submit">ENVOYER</button>
          </div>

      </form>

</div>














