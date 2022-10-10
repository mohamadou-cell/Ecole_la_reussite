<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
<div class="joli" style="display:flex;"></div>
        <div class="logo container-fluid" style="background-color:#f8f9fa;position:fixed;width:100%; height: 150px;background-color:#0c82d1;display:flex;align-items:center;" >
            <div class="container-fluid"><img src="../images/image.jpeg" data-toggle="modal" data-target="#exampleModal" style="float: left;"></div>
                <div class="menu" style="background-color:#0c82d1;">
                    <nav class="navbar navbar-expand-lg " style="background-color:#0c82d1;">
                        <div class="container-fluid" style="gap:15px;float:right;">
                          <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="page_accueil.php">Accueil</a></button>
                          <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="">Actualité</a></button>
                          <button class="btn btn-outline-success" type="submit" style="background-color:white;width: 150px;"><a href="Emplois_du_temps.php">Emploi du temps</a></button>
                          <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="inscription_employes.php">Inscription</a></button>
                          <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="connection.php">Connection</a></button>
                      </div>
                   </nav>
             </div>
        </div> 

<!-- <div class="joli" style="display:flex;">
    <div class="logo" style="background-color:#f8f9fa;position:fixed;width:100%;" >
        <div><img src="images/images.jpeg" data-toggle="modal" data-target="#exampleModal"></div>
        <div class="menu">
        <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <button class="btn btn-outline-success" type="submit"><a href="page_accueil.php"> Accueile</a></button>
    <button class="navbar-toggler" type="button"
     data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <ul><div>

        </div>
        </ul>
        <button class="btn btn-outline-success" type="submit"><a href="">Actualité</a> </button>
          <ul class="dropdown-menu">
           
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <ul>
            <div>
            </div>
        </ul>
        
        <button class="btn btn-outline-success" type="submit"><a href="">Admissiblité</a> </button>
        <ul><div></div></ul>
      </ul>
      <form class="d-flex" role="search">
       <button class="btn btn-outline-success" type="submit">Inscription</button>
      <ul><div></div></ul> 
        <button class="btn btn-outline-success" type="submit"><a href="Emplois_du_temps.php">Emlpoidutemps</a> </button>
      </form>
      
    </div>
  </div>
  <div class="conect" style="margin-left: 10%;display: flex;gap:10px;">
      <button class="btn btn-outline-success" type="submit"><a href="inscription_employes.php">Incription</a></button>
        
        <button class="btn btn-outline-success" type="submit"><a href="connection.php"> Connection</a></button>
        </div>
</nav>

        </div>

        </div>  -->
        
<div class="container" style="margin-top: 10%;">
     <div style="display:flex;justify-content:center;"> <h1>Les Conditions D'admission</h1></div>
      <table class="table table-dark container">
        <thead>
          <tr>
            <th>NIVEAU PRIMAIRE</th>
           
            <th>NIVEAU SECONDAIRE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Avoir au moins 5ans</td>
          
            <td>avoir au minimum une entrée en 6ième

</td>
          </tr>
          <tr>
            <td>un extrait de naissance</td>
            
            <td>fournir un extrait de naissance </td>
          </tr>
          <tr>
            <td>payer les fraits d'inscription</td>
            
            <td>payer les fraits d'inscription</td>
           
           
          </tr>
          <tr>
            <td>un bultin du seconde semaitre <br> pour les classes intermédiaire</td>
            
            <td>un livret de Bac <br> +deux photos d'identités</td>
          </tr>
        </tbody>
      </table>
    
   
   
    <div class="p-3 mb-2 bg-dark text-white container" style="margin-top:10%;
text-align: center;" >Les 
    inscriptions de l'année 2021-2022 se tiendrent du 12 septembre au 2 decombre 2022 </div>
    </div>
  
    <footer class="container-fluid fixed-bottom">
        <p>Copyright &copy; 2022 Groupe :SN SOLID Dev</p>
    </footer>
  
    
    
<style>

    .logo{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .menu{
        margin-left: 250px;
    }
     footer {
      background-color: black;
            text-align: center;
            padding: 50px;
            color: #fff;
            margin-top:120px;
            height:50px;
 
     }
   
</style>  
</body>
</html>