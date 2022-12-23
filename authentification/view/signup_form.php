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
    <h1>Inscription</h1>
    <form action="" method="post">
        <div class="label">
            <label for="nom" >Nom :</label>
            <input type="text" name="nom" placeholder="nom">
        </div>
        <div class="label">
            <label for="prénom" >Prénom :</label>
            <input type="text" name="prénom" placeholder="prénom">
        </div>
        <div class="label">
            <label for="email" >Email :</label>
            <input type="email" name="email" placeholder="email">
        </div>    
        <div class="label">
            <label for="password">Password :</label>
            <input type="password" name="password" placeholder="password">
        </div>
        <div class="label">           
            <input type="button" value="S'inscrire">
            <input type="reset" value="Annuler">
        </div>
    </form>    
</body>
</html>