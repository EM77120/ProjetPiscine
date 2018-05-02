<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "MPN";
$mail = isset($_POST['mail'])?
$_POST['mail']:""; 
$pseudo = isset($_POST['pseudo'])?
$_POST['pseudo']:""; 
$mdp = isset($_POST['mdp'])?
$_POST['mdp']:"";
$error = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Membres WHERE mail = $mail AND pseudo = $pseudo AND mdp = $mdp";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
         "id: " . $row["nom"]. " - Name: " . $row["prenom"]. " " . $row["pseudo"]. "<br>";
       header('Location: monprofil.html');
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>