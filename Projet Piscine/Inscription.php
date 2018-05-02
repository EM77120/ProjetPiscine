<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "MPN";
$mail = isset($_POST['mail'])?
$_POST['mail']:""; 
$nom = isset($_POST['nom'])?
$_POST['nom']:""; 
$prenom= isset($_POST['prenom'])?
$_POST['prenom']:"";
$pseudo= isset($_POST['pseudo'])?
$_POST['pseudo']:"";
$mdp = isset($_POST['mdp'])?
$_POST['mdp']:""; 
$confirm = isset($_POST['confirm'])?
$_POST['confirm']:""; 
$error = ""; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($mail == ""){
	$error = "Vous n'avez pas entré votre adresse mail <br/>"; 
}
if($nom == ""){
	$error = "Vous n'avez pas entré notre nom<br/>"; 
}

if($prenom == ""){
	$error = "Vous n'avez pas entré votre prenom <br/>"; 
}

if($mdp == ""){
	$error = "Vous n'avez pas entré de mot de passe <br/>"; 
}
if($confirm == ""){
	$error = "Vous n'avez pas confirmé votre mot de passe <br/>"; 
}
if ($mdp != $confirm){
	$error = "Vous devez entrer le même mot de passe <br/>";
	}

if($error == ""){

		$sql = "INSERT INTO Membres (mail, nom, prenom, pseudo, mdp)
VALUES ( '$mail', '$nom', '$prenom', '$pseudo', '$mdp')";

if ($conn->query($sql) === TRUE) {
    header('Location: ConfirmI.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

} else { echo "Erreur : $error";}

?>