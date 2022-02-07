<?php
$login = mysqli_connect("localhost", "root", "", "moduleconnexion");
$request = "SELECT * FROM `utilisateurs`WHERE login = '" . $_SESSION["isconnected"] . "'";
$query = mysqli_query($login, $request);
$result = mysqli_fetch_all($query);
foreach ($result as $row)

    if (isset($_POST["submit"])) {
        if ($_POST["password"] == $_POST["passwordconfirm"]) {
            $editrequest = "UPDATE utilisateurs SET nom = '" . $_POST["nom"] . "', prenom = '" . $_POST["prenom"] . "', login = '" . $_POST["login"] . "', password = '" . password_hash($_POST["password"], PASSWORD_DEFAULT) . "' WHERE login = '" . $row[1] . "'";
            mysqli_query($login, $editrequest);
            mysqli_close($login);
            header("location:connexion.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Profil</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
<div id="container">

<form action="profil.php" method="POST">
                    <h1>Modification</h1>
                    <label><b>Login</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required>

                    <label><b>Nom</b></label>
                    <input type="text" placeholder="Entrer le Nom" name="nom" required>

                    <label><b>Prénom</b></label>
                    <input type="text" placeholder="Entrer le Prénom" name="prenom" required>
                        
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                    <input type="submit" id='submit' name='submit' value='Modifier'>
                   
    </form>
    </div>
    </body>

</html>
