<?php
function ConnexionBase(){
    try {
        $connexion = new PDO('mysql:host=localhost;charset=utf8;dbname=auth', 'admin', 'Parker.2280700');
        $connexion = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
    }
    catch (Exeption $e) {
        echo "Erreur : ". $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
    }
}
?>