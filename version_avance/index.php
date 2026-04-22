<?php
$pdo = new PDO("mysql:host=localhost;dbname=moncoinvert;charset=utf8", "root", "");

if ($_POST) {

    $stmt = $pdo->prepare("SELECT * FROM client WHERE AdresseMail = ?");
    $stmt->execute([$_POST['email']]);

    $client = $stmt->fetch();

    if ($client && password_verify($_POST['password'], $client['MotDePasse'])) {

        setcookie("client_id", $client['idClient'], time() + 3600, "/");

        // stocker prénom + nom temporairement en cookie (option simple)
        setcookie("prenom", $client['Prenom'], time() + 3600, "/");
        setcookie("nom", $client['Nom'], time() + 3600, "/");

        // redirection vers accueil
        header("Location: index.php?page=accueil");
        exit;

    } else {
        echo "Email ou mot de passe incorrect ❌";
    }
}
?>