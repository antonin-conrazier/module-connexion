<?php

session_start();
    if (isset($_POST["submit"])) {
    $connect = mysqli_connect("localhost", "root", "", "moduleconnexion");
    $request = "SELECT login, password FROM utilisateurs WHERE login = '" . $_POST["login"] . "'";
    $query = mysqli_query($connect, $request);
    $result = mysqli_fetch_all($query);
    if (isset($result[0]) && ($_POST["login"] === $result[0][0]) && password_verify($_POST["password"], $result[0][1])) {
        if ($result[0][0] === "admin") {
            header("location:admin.php");
        } else {
            header("refresh:3; url = connexion.php");
            echo "Vous êtes connecté";
        }
    }
}
?>

<!doctype html>
<html lang="fr">
        <head>
           <meta charset="utf-8">
            <link rel="stylesheet" href="index.css" media="screen" type="text/css" />
        </head>
        <body>
            <div id="container">
            
                
                <form action="connexion.php" method="POST">
                    <h1>Connexion</h1>
                    
                    <label><b>Login</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required>
    
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
    
                    <div class='submit-connexion'>
              <input type='submit' name='submit' id='bouton-connexion' value="Connexion">
          </div>
          

<p><a href="inscription.php">Inscription</a></p>             
                    
                </form>
            </div>
        </body>
    </html>
