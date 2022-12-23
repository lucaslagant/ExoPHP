<?php
session_start();


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];    
}
$db = new PDO('mysql:host=localhost;charset=utf8;dbname=auth', 'admin', 'Parker.2280700');

try {
   $sql = $db->prepare("SELECT user_email, user_password FROM user WHERE user_email = '$email';");
   $sql->execute();
}
catch (Exeption $e) {
    echo "Erreur : " . $sql->errorInfo()[2] . "<br>";
}

if ($sql->rowCount() > 0) {
    $data = $sql->fetch();
    if (password_verify($password, $data["user_password"]))
    {
        echo "Connexion Effectué";
        $_SESSION['user_email'] = $email;
    }
}
else {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = $db->prepare("INSERT INTO user (user_email, user_password) VALUES ('$email', '$password')");
    $sql->execute();
    echo "Enregistrement effectué";
}


?>