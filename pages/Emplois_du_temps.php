<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
<div class="logo container-fluid" style="background-color:#f8f9fa;position:fixed;width:100%; height: 150px;background-color:#0c82d1;display:flex;align-items:center;" >
            <div class="container-fluid"><img src="images/images.jpeg" data-toggle="modal" data-target="#exampleModal" style="float: left;"></div>
                <div class="menu" style="background-color:#0c82d1;">
                    <nav class="navbar navbar-expand-lg " style="background-color:#0c82d1;">
                        <div class="container" style="gap:15px;float:right;">
                          
                    <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="page_accueil.php">Accueil</a></button>
                    <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="Emplois_du_temps.php">Primaire</a></button>
                    <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="secondaire.php">Secondaire</a></button>   
                </div>
                   </nav>
             </div>
        </div> 
        <div class="container" style="display: flex;justify-content:center;">
    <h1 class="text-center" style="margin-top:200px;margin-bottom :40px;font-weight:bold;"> EMPLOI DU TEMPS ÉLÉVES ANNÉE 2022-2023</h1>
     <p style="margin-top:220px;margin-bottom :40px;font-weight:bold;"> Niveau primaire</p> 
    </div>
<!-- <div class="joli" style="display:flex;"></div>
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
                   <ul><div> </div></ul>
         <button class="btn btn-outline-success" type="submit"><a href="Admissiblite.php">Admissiblité</a> </button>
            <ul><div></div></ul>
            </ul>
        <form class="d-flex" role="search">
          <button class="btn btn-outline-success" type="submit"><a href="">Emplois.du.temps</a> </button>
        </form>
      
       </div>
     </div>
    <div class="conect" style="margin-left: 10%;display: flex;gap:10px;">
      <button class="btn btn-outline-success" type="submit"><a href="inscription_employes.php">Incription</a></button>
      <button class="btn btn-outline-success" type="submit"><a href="connection.php"> Connection</a></button>
      </div>
</nav>
        </div></div>  
</div> --> 
<!-- <div class="container" style="margin-top: 10%;" >
 <div style="display:flex;justify-content:center"> 
 <h2>EMPLOI DU TEMPS ÉLÉVES 2022-2023</h2></div> 
  <p style="display:flex;justify-content:center">Niveau primaire</p>  -->          
  <div class="contenair" style="display: flex;justify-content:center;">
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color: #f8f9fa;">
        <th>Heur</th>
        <th>Lundi</th>
        <th>Mardi</th>
        <th>Mercredi</th>
        <th>Jeudi</th>
        <th>Vendredi</th>
        <th>Samedi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>08h-09h</td>
        <td>Mathématique</td>
        <td>HG</td>
        <td>Informatique</td>
        <td>Edication physique</td>
        <td>leçon</td>
        <td>Probméme</td>
      </tr>
      <tr>
        <td>09h-10h</td>
        <td>Mathématique</td>
        <td>HG</td>
        <td>Informatique</td>
        <td>Edication physique</td>
        <td>Leçon</td>
        <td>Probméme</td>
      </tr>
      <tr>
        <td>10h-11h</td>
        <td>Anglais</td>
        <td>HG</td>
        <td>Informatique</td>
        <td>Français</td>
        <td>Leçon</td>
        <td>Probméme</td>
    
        </tr>
        <tr style="background-color:#0c82d1;">
        <td>11h-12h</td>
        <td>PAUSE</td>
        <td>PAUSE</td>
        <td>PAUSE</td>
        <td>PAUSE</td>
        <td>PAUSE</td>
        <td>PAUSE</td>
        </tr>
        <tr>
        <td>12h-13h</td>
        <td>Franchais</td>
        <td>Lectue</td>
        <td>Edication civique</td>
        <td>Français</td>
        <td>Probméme</td>
        <td>Déssin</td>
        </tr>
        <tr>
        <td>13h-14h</td>
        <td>Franchais</td>
        <td>Lecture</td>
        <td>-</td>
        <td>Français</td>
        <td>Probméme</td>
        <td>Déssin</td>
        </tr>
        <tr>
        <td>14h-15h</td>
        <td>Franchais</td>
        <td>Lecture</td>
        <td>-</td>
        <td>leçon</td>
        <td>Probméme</td>
        <td>-</td>
        </tr>
        <tr>
        <td>15h-16h</td>
        <td>Franchais</td>
        <td>Dictée</td>
        <td>-</td>
        <td>Leçon</td>
        <td>Probméme</td>
        <td>-</td>
      </tr>
    </tbody>
  </table>
</div>
</div>


<footer class="container-fluid fixed-bottom" style="float: bottom;">
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
            margin-top: 168px;  
            height:50px;
            float: bottom;
          }
          h1{
            font-weight:bolder;
          }
          #contenair{

          }
</style> 
</body>
</html>