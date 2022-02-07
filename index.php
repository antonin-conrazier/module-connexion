<?php 
    session_start();
?>
<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8">
<title>Acceuil</title>
<link rel="stylesheet" href="index.css" media="screen" type="text/css" />
</head>
<body>

<div id="container">
<form action="connexion.php" method="POST">
    
    <h1>||||Accueil||||</h1>   
    <p>Lien de connexion :</p>
    <div class='submit-connexion'>
    <p><a href=connexion.php>Connexion</a>
    </div>
    <div class='submit-connexion'>
    <p>Lien d'inscription :</p>
    <p><a href=inscription.php>Inscription</a>
</div>
</form>
</div>


</body>
</html>

