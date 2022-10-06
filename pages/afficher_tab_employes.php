

<?php
    
    if(isset($_POST["valider"])){
        if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["adresse"]) && isset($_POST["email"]) && isset($_POST["date_naissance"]) && isset($_POST["fonction"]) && isset($_POST["nationalite"]) && isset($_POST["sexe"]) && isset($_POST["telephone"]))
        {
            if(!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["adresse"]) && !empty($_POST["email"]) && !empty($_POST["date_naissance"]) && !empty($_POST["fonction"]) && !empty($_POST["nationalite"]) && !empty($_POST["sexe"]) && !empty($_POST["telephone"])){
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == '') {
                    header("Location: inscription_employes.php?err=email");
                    echo "Veuillez entrer un email correct";
                    exit();
                  }
                $prenom = $_POST["prenom"];
                $nom = $_POST["nom"];
                $adresse = $_POST["adresse"];
                $email = $_POST["email"];
                $date = $_POST["date_naissance"];
                $fonction = $_POST["fonction"];
                $nationalite = $_POST["nationalite"];
                $sexe = $_POST["sexe"];
                $telephone = $_POST["telephone"];
        
                include("Connection_dba.php");
                $sth = $dbco->prepare(" INSERT INTO employes(prenom,nom,adresse,email,date_naissance,fonction,nationalite,sexe,telephone)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) "); 
    
                
    
                $sth->bindValue(1, $prenom);
                $sth->bindValue(2, $nom);
                $sth->bindValue(3, $adresse);
                $sth->bindValue(4, $email);
                $sth->bindValue(5, $date);
                $sth->bindValue(6, $fonction); 
                $sth->bindValue(7, $nationalite);
                $sth->bindValue(8, $sexe);
                $sth->bindValue(9, $telephone);
                $sth->execute();
                echo "Enregistrement réussi";
            }
            
        }
    }
    ?>