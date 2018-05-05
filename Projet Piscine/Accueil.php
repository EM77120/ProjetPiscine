<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vous</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Accueil</a></li>
        <li><a href="#">Mon réseau</a></li>
        <li ><a href="VousData.php">Vous</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="#">Ma messagerie</a></li>
        <li><a href="#">Emplois</a></li>
      </ul>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="Deconnexion.php"> Se deconnecter</a></li>
  </div>
</nav>
<div class="container-fluid text-center">  
  <h1>Accueil</h1><br>
<p>
  Bonjour <?php echo $_SESSION['prenom']?> ! <br><br>
    </p>
</div>

</body>