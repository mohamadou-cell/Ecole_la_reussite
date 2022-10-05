<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="login">
        <h1 class="text-center">CONNECTION</h1>
        <form action="">
            <div class="form-group">
                <label class="form-label" for="name">Nom d'utilisateur</label>
                <input class="form-control" type="text" id="name">
            </div>
            <div class="form-group">
                <label class="form-label" for="profil">profil</label>
                <select class="form-control" name="fonction" id="fonction">
                    <option value="administrateur">administrateur</option>
                    <option value="secretaire">secretaire</option>
                    <option value="professeur">professeur</option>
                    <option value="comptable">comptable</option>
                    <option value="eleve">eleve</option>
                    <option value="surveillant">surveillant</option>
                    
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">mot de passe</label>
                <input class="form-control" type="pasword" id="passwords">
            </div>
            <div class="form-group1">
            <input class="btn btn-success w-100" type="submit" value="se connecter">
        </div>
        </form>
    
</body>
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing:border-box;

    }
    body{
        height: 110vh;
        display: flex;
        align-items: center;
        justify-content:center;
        background:#0d6efd;
    }
    .login{
        width: 360px;
        height:max-content;
        padding:20px;
        border-radius:12px;
        background:#ffffff;
    }
    .login h1 {
        font: size 36px;
        margin: bottom 25px;

    }
    .login form{
        font: size 20px;
    }
    .login form .form-group{
        margin: bottom 12px;
    
    }
    .login form input[type="submit"]{
        font-size: 20px;
        margin: top 15px;
    }
    .form-group1{
        margin-top: 20px;
        
    }

</style>


   
</html>