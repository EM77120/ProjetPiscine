<?php 
$mail = isset($_POST['mail'])?
$_POST['mail']:""; 
$mdp= isset($_POST['mdp'])?
$_POST['mdp']:"";
include("ConnexionBDD.php");
//  Récupération de l'utilisateur et de son pass hashé
$sql = " SELECT nom,prenom,mdp FROM utilisateur WHERE mail = '$mail'";
$res = $conn->query($sql);
$row = $res->fetch_array();
// Comparaison du pass envoyé via le formulaire avec la base
if($mdp == $row['mdp']) {
        session_start();
        //$_SESSION['mail'] = $res['mail'];
        //$_SESSION['nom'] = $res['nom'];
        //$_SESSION['prenom'] = $res['prenom'];
        header('Location: Accueil.php');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
$conn->close();   
?>

