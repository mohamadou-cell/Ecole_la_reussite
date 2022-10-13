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
      
  <body> 
  <?php 
$servername = 'localhost'; $username = 'root'; $password = ''; 
try{ 
$dbco = new PDO("mysql:host=$servername;dbname=gestion_ecole", $username, $password); 
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
/* $sql = "CREATE DATABASE gestion_ecole"; 
$dbco->exec($sql);  */
  /* echo 'Connection réussie !' */;} 
catch(PDOException $e){ echo "Erreur : " . $e->getMessage(); } 

?>
  <div class="joli" style="display:flex;"></div>
            <div class="logo container-fluid" style="background-color:#f8f9fa;position:fixed;width:100%; height: 150px;background-color:#0c82d1;display:flex;align-items:center;" >
                <div class="container-fluid"><img src="images.jpeg" data-toggle="modal" data-target="#exampleModal" style="float: left;"></div>
                    <div class="menu" style="background-color:#0c82d1;">
                        <nav class="navbar navbar-expand-lg " style="background-color:#0c82d1;">
                            <div class="container-fluid" style="gap:15px;float:right;">
                            <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="page_accueil.php">Accueil</a></button>
                              <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="connection.php">Deconnection</a></button> 
                          </div>
                      </nav>
                </div>
            </div>  
            <div id="button">
        <div class="container-fluid" style="display: flex;justify-content:center;">
        <h1 class="text-center" style="margin-top:170px;margin-bottom :1px;font-weight:bold;">DEPENSES </h1>
        </div >

   <div class="container-fluid" style="display: flex;justify-content:center;">
   <div id="formul" style="display:flex; justify-content:center; margin-top :30px;" class="container">
  <form action="" method="post" style="width:80%; ">
                <div style="display:flex;justify-content:center;">
                  <?php if(!empty($message3)); {?>
                    <div style="display:flex;justify-content:center; color:blue;flex-direction:column;font-weight:bold;font-size:large;"> <?php echo $message3;  ?> </div> 
                    <?php }?>
                </div>
                    <div class="mb-3 row form-inline" >
                      <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">Désignation:</label>
                      <input type="text" name="désignation"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="désignation" required>

                  </div>
                    <div class="mb-3 row form-inline">
                    <label for="exampleFormControlInput1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">Montant:</label>
                      <input type="number" id="number" name="montant"  class="form-control col-lg-6" id="exampleFormControlInput1" placeholder="Montant" required>
                    </div>
                  <div class="mb-3 row form-inline">
                  <label for="exampleFormControlTextarea1" style=" display:flex;justify-content:left;" class="form-label col-lg-3">Commentaire</label>
                  <textarea class="form-control col-lg-6"  id="exampleFormControlTextarea1" rows="9" placeholder="Veuillez ajouter un commentaire"></textarea>
                  </div>
                  <div class="col-12 text-center" style=" display:flex;justify-content:center;">
                      <button class="btn btn-primary" type="submit" name="valider">ENVOYER</button>
                  </div>
              </form>
              
              </div>
              </div>
              </div>
      
  </body>
  <footer>
             <p>Copyright &copy; 2022 Groupe :SN SOLID Dev</p>
        </footer>
        

        <style>
          *{
    margin:0;
    padding: 0;
    box-sizing:border-box;
    }
    body{
   
}
              
            #formul{
                border: 2px solid grey;
                border-radius:1rem;
                height: 47vh;
                width:45%;
                
   
                
              
              }

              
              .form-control{
                border: 1px solid black;
                border-radius:5px;
                margin-top: 5px;
                
              }

              .form-label{
                font-weight:bolder
              }
              footer {
                background-color: black;
                justify-content:center;
                text-align: center;
                padding: 50px;
                color: #fff;
                margin-top:110px;
                height: 35px;px;
                float: bottom;
              }
              h1{
                font-weight:bolder;
              }

              
            </style>        
        
   
        
    