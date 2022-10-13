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



<style>
            *{
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
            }
            form
            {
                float:none;
            }
            header{
                margin-top: 0px ;
                
            }
            .corps
            {
                display: block;
                
            }
            #nave{
                
             position: fixed;
             display: flex;
        justify-content: center;
        align-items: center;
            }
    
    .menu{
       width: 100%;
    }
    h1{
        display: flex;
        justify-content: center;
    width:100%;
    }
   
    footer {
      background-color: #0c82d1;
     text-align: center;
     padding: 50px;
     color: #fff;
     margin-top:120px;
    height:5px;
    }
 
    h2{
        display: flex;
        justify-content: center;
    }
    .mass{
        gap: 10%;
    }
    .for{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10%;
        background-color: black;
        
    }
   
    
    .info{
        width: 200%;
        color: #f8f9fa;
    }
    .body.imag{
margin-top: 20%;
    }
    .forma{
       
        border: 2px;
    }

    </style>
    
</head>
<body>
<header>
<div class="logo container-fluid" style="background-color:#f8f9fa;position:fixed;width:100%; 
height: 150px;background-color:#0c82d1;display:flex;align-items:center; " >
            <div class="container-fluid"><img src="images/images.jpeg" data-toggle="modal" data-target="#exampleModal" style="float: left;"></div>
                <div class="menu" style="background-color:#0c82d1; color:#fff;display:flex;justify-content:center;align-items:center;width: 700%;">
                <h1>GESTION CONTABLE</h1>
                    <nav class="navbar navbar-expand-lg " style="background-color:#0c82d1;">
                        <div class="container" style="gap:15px;float:right;">
                          
                    <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="page_accueil.php">Accueil</a></button>
                    <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="dépenses.php">Dépense</a></button>
                  </div>
                   </nav>
             </div>
        </div> 
                
    
    
</header>
      





<!-- mian -->

<div id="container" style="display: flex;justify-content:center;border-radius:1rem;padding:30px;">

<div class="forma" style=" border:1px solid black ;margin-top:10%;border-radius: 20px;width:50%" >

   <div id="formule"  style="display:flex; justify-content:center; " class="container-fluid">
   
   <div id="formul" style="display:flex; justify-content:center; margin-top :60px;width:90%;" class="container">
         
         <form>
            <div class="row">
              <div class="col-md-6">
                <label for="nom" class="form-label">Nom</label>
                <input id="nom" class="form-control" type="text" name="" placeholder="Entrer votre nom">
              </div>
              <div class="col-md-6">
                <label for="prenom" class="form-label">Prénom</label>
                <input id="prenom" class="form-control" type="text" name="" placeholder="Entrer votre prénom">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="classe" class="form-label">classe</label>
                <input id="classe" class="form-control" type="text" name="" placeholder="Entrer votre niveau">
              </div>
              <div class="col-md-6">
                <label for="numéro" class="form-label">Nunéro identification</label>
                <input id="numéro" class="form-control" type="text" name="" placeholder="Entrer votre numéro">
              </div>
              </div>
            <div class="row">
              <div class="col-md-6">
                <label for="frais" class="form-label">Frais d'inscription</label>
                <input id="frais" class="form-control" type="text" name="" placeholder="Entrer le montent">
              </div>
              <div class="col-md-6">
              <label for="start">date de payeent</label><br>

<input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">
              </div>
          
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="frais" class="form-label">mensualité</label>
                <input id="frais" class="form-control" type="number" name="" placeholder="Entrer la somme">
              </div>
           <div class="col-md-6">
           <label for="start">date de payement</label><br>

<input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">
</div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
              <div class="col-12">
                <label for="adresse" class="form-label">Message</label>
                <input id="adresse" class="form-control" type="text" name="" placeholder="Entrer votre adresse">
              </div>
            </div>
          
          <button class="btn btn-primary" style="margin-bottom: 20px;">Enrégistrer</button>
        </form>
        </div>
        </div>
 </div>
 </div>
     <!--    <form action="">
            <input type="text"><br>
            <input type="text"><br>
            <input type="text"><br>
            <input type="text"><br>
            <input type="text"><br>
            <input type="text"><br>
        </form> -->
<!-- main -->

<!-- footer -->

<footer class="container-fluid fixed-bottom" style="float: bottom;">
          <p>Copyright &copy; 2022 Groupe :SN SOLID Dev</p>
      </footer>
<!-- footer -->
      
</body>
</html>