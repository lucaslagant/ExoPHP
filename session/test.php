<?php
// Obligatoire pour tout envoie de requete HTTP 
session_start();

$_SESSION["login"] = "webmaster";

echo $_SESSION["login"];


// La fonction session_id() permet d'afficher cet identifiant :
session_start();

$_SESSION["login"] = "webmaster";
$_SESSION["role"] = "admin";

echo"- session ID : ".session_id();
// session_id() retourne une chaine vide si il y a pas de session en cours

// Tester la session 
session_start();
if ($_SESSION["login"]) 
{
    echo"Vous êtes autorisé à voir cette page.";  
} 
else 
{
    echo"Cette page nécessite une identification.";  
}

// OU
session_start();

if ( ! isset($_SESSION["login"]) ) 
{
    header("Location:index.php");
    exit;
}

// Reste du code (PHP/HTML)
echo"Bonjour ".$_SESSION["login"]."<br>";

// Détruire une session
unset($_SESSION["login"]);
unset($_SESSION["role"]);

if (ini_get("session.use_cookies")) 
{
    setcookie(session_name(), '', time()-42000);
}

session_destroy();
// Explication
// Lignes 1-2 : destruction des variables de session.
// Lignes 4-7 : la fonction setcookie(), nous permets de forcer la date d'expiration
// On détruit le reste de la session, via la fonction session_destroy().



?>