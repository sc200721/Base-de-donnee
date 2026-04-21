<?php
$pdo = new PDO(
    "mysql:host=sql208.infinityfree.com;dbname=if0_41693683_moncoinvert;charset=utf8",
    "if0_41693683",
    "mi6fyKP9VKkR0"
);

if ($_POST) {

    $stmt = $pdo->prepare("SELECT * FROM client WHERE AdresseMail = ?");
    $stmt->execute([$_POST['email']]);

    $client = $stmt->fetch();

    if ($client && password_verify($_POST['password'], $client['MotDePasse'])) {

        setcookie("client_id", $client['idClient'], time() + 3600, "/");

        // 🔥 stocker prénom + nom temporairement en cookie (option simple)
        setcookie("prenom", $client['Prenom'], time() + 3600, "/");
        setcookie("nom", $client['Nom'], time() + 3600, "/");

        // 🔥 redirection vers accueil
        header("Location: index.php?page=accueil");
        exit;

    } else {
        echo "Email ou mot de passe incorrect ❌";
    }
}
?>