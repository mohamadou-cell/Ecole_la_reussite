

<?php
    
    if(isset($_POST["valider"]))
    {
        if(isset($_POST["nom_d'utilisateur"]) && isset($_POST["profil"]) && isset($_POST["mot_passe"]) && isset($_POST["matricule_eleves"]) && isset($_POST["matricule_employes"] ))
        {
            if(!empty($_POST["nom_d'utilisateur"]) && !empty($_POST["profil"]) && !empty($_POST["mot_passe"]) && !empty($_POST["matricule_eleves"]) && !empty($_POST["matricule_employes"]))
            {
               
                $nom_utilisateur = $_POST["nom_d'utilisateur"];
                $profil = $_POST["profil"];
                $mot_de_passe = $_POST["mot_passe"];
                $id_employes = $_POST["matricule_eleves"];
                $id_ins= $_POST["matricule_employes"];
                $message="saisie incorect";


                include("Connection_dba.php");
                $sth = $dbco->prepare(" INSERT INTO comptes(nom_utilisateur,profil,mot_de_passe,id_employes,id_ins)
                VALUES (?, ?, ?, ?, ?) "); 
    
                $sth->bindValue(1, $nom_utilisateur);
                $sth->bindValue(2, $profil);
                $sth->bindValue(3, $mot_de_passe);
                $sth->bindValue(4, $id_employes);
                $sth->bindValue(5, $id_ins);
                $sth->execute();
                echo $message;
            }
          else{
                
            }
        }
    }
    ?>