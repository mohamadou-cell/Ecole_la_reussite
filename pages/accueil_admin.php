<?php
     session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
  
<div class="joli" style="display:flex;"></div>
        <div class="logo container-fluid" style="background-color:#f8f9fa;position:fixed;width:100%; height: 150px;background-color:#0c82d1;display:flex;align-items:center;" >
            <div class="container-fluid"><img src="../images/image.jpeg" data-toggle="modal" data-target="#exampleModal" style="float: left;"></div>
                <div class="menu" style="background-color:#0c82d1;">
                    <nav class="navbar navbar-expand-lg" style="background-color:#0c82d1;">
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
    <h1 class="text-center" style="margin-top:200px;margin-bottom :40px;font-weight:bold;">ACCUEIL ADMIN </h1>
    </div>
    <?php
        echo "Bonjour '".$_SESSION['nom']."'";
    ?>
    <div class="container" style="display: flex; ">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3"><i class="bi bi-book"></i><h5>COMPTES</h5></button>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-secondary mb-3"><i class="bi bi-book"></i><h5>INSCRIPTION-EMPLOYE</h5></button>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-success mb-3"><i class="bi bi-book"></i><h5>INSCRIPTION-ELEVE</h5></button>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-warning mb-3"><i class="bi bi-book"></i><h5>EMPLOI DU TEMPS</h5></button>
            </div>
            <!-- <div class="col-auto">
                <button type="submit" class="btn btn-danger mb-3"><i class="bi bi-book"></i><h5>EMPLOI DU TEMPS</h5></button>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-info mb-3"><i class="bi bi-book"></i><h5>EMPLOI DU TEMPS</h5></button>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-light mb-3"><i class="bi bi-book"></i><h5>EMPLOI DU TEMPS</h5></button>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-dark mb-3"><i class="bi bi-book"></i><h5>EMPLOI DU TEMPS</h5></button>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-white mb-3"><i class="bi bi-book"></i><h5>EMPLOI DU TEMPS</h5></button>
            </div> -->
            
        </div>
        
        <footer class="container-fluid fixed-bottom">
        <p>Copyright &copy; 2022 Groupe :SN SOLID Dev</p>
        </footer>
        
        
        <style>
          

          
          
          footer {
            display: flex;
            justify-content: center;
            background-color: black;
            text-align: center;
            /* padding: 50px; */
            color: #fff;
            /* margin-top:120px; */
            height:100px;
            align-items: center;
            
            
          }
         
          
        </style>
 </body>
  
    <?php
   /*  if($_GET["err"] == "email"){
      echo "Email invalide";
  } */
    ?>
    
</body>
</html>