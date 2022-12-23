<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Formulaire authentification</title>
</head>
<body>
    <?php
    
    if (isset($_SESSION['email'])) {
       echo "Vous êtes connecté en tant que :" .$_SESSION['email'];
    }else {
        ?>
    <h1>Connexion</h1>
    <form action="../ctrl/login_ctrl.php" method="POST">      
        <div class="label">
            <label for="email" >Email :</label>
            <input type="email" name="email" placeholder="email">
        </div>    
        <div class="label">
            <label for="password">Password :</label>
            <input type="password" name="password" placeholder="password">
        </div>
        <div class="label">           
            <input type="submit" value="Se connecter" name="submit">
            <input type="reset" value="Annuler">
        </div>
    </form>
        <?php
    }
    ?>    
</body>
</html>