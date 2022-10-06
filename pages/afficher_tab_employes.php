<?php
// if(isset($_POST["envoyer"])){


    /* if(isset($_POST["prenom"],$_POST["nom"], $_POST["date_naissance"] ,$_POST["adresse"],$_POST["email"],
    $_POST["date_naissance"],$_POST["fonction"],$_POST["nationalite"],$_POST["telephone_tuteur"],$_POST["sexe"] ))
    {
        if(!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST[" adresse"]) 
                && !empty($_POST["email"]) && !empty($_POST["date_naissance"]) && !empty($_POST[""]) 
                && !empty($_POST["nationalite"]) && !empty($_POST["telephone_tuteur"]) && !empty($_POST["sexe"])  ){

                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == '') {
                    header("Location: afficher_tab_employes.php?err=email");
                    exit();
                }
                $prenom = $_POST["prenom"];
                $nom = $_POST["nom"];
                $adresse = $_POST["adresse"];
                 $email = $_POST["email"];
                $date = $_POST["date_naissance"];
               
                $sexe = $_POST["sexe"];
                

                $nationalite = $_POST["nationalite"];
                
                $nom_tuteur = $_POST["telephone_employe"];
                $numero_tuteur = $_POST["numero_tuteur"];
        
                include("Connection_dba.php");
                $sth = $dbco->prepare(" INSERT INTO inscription(prenom,nom,date_naissance,adresse,sexe,nationalite,email,nom_tuteur,numero_tuteur)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ");
                 $sth->bindParam(':prenom', $prenom);
                 $sth->bindParam(':nom', $nom);
                 $sth->bindParam(':date_naissance', $date);
                 $sth->bindParam(':adresse', $adresse);
                 $sth->bindParam(':sexe', $sexe);
                 $sth->bindParam(':nat', $nationalite); 
                 $sth->bindParam(':mail', $email);
                 $sth->bindParam(':nt', $nom_tuteur);
                 $sth->bindParam(':nut', $numero_tuteur);
                 $sth->execute();






            }

    }
     */
    include("Connection_dba.php");
   /* LIAISON AVEC LE FORMULAIRE A LA BASE DE DONNEE*/
   
   /* LIAISON AVEC LE FORMULAIRE A LA BASE DE DONNEE*/
    /*ENVOYER LES DONNEES DANS LA BASE DE DONNEEE*/
      $recup = $connection->exec("INSERT INTO INSCRIPTION(prenom, nom, adresse, email, date_naissance,fonction, nationalite, sexe) 
    VALUES('$_POST[prenom]','$_POST[nom]','$_POST[adresse]','$_POST[email]','$_POST[date_naissance]','$_POST[fonction]','$_POST[nationalite]','$_POST[sexe])"); 
         echo "inscription reussit";

   ?>


