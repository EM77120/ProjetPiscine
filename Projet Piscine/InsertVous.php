<?php
$anniv = isset($_POST['anniv'])?
$_POST['anniv']:""; 
$statut = isset($_POST['statut'])?
$_POST['statut']:""; 
$etude= isset($_POST['etude'])?
$_POST['etude']:"";

$sql = "INSERT INTO profil (mail, dateN, statut, etude)
VALUES (".$_SESSION['mail']."', '$anniv', '$statut', '$etude')";

//if ($conn->query($sql) === TRUE) {


  session_start();
$_SESSION['date'] = $anniv;
$_SESSION['statut'] = $statut;
$_SESSION['etude'] = $etude;
header('Location: VousTest.php');
  

  $conn->close();
  
//} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
//}
?>