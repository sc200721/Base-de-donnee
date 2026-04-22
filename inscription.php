<?php
$pdo = new PDO("mysql:host=localhost;dbname=moncoinvert;charset=utf8", "root", "");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST['Nom'] ?? '');
    $prenom = trim($_POST['Prenom'] ?? '');
    $dateNaissance = $_POST['DateNaissance'] ?? '';
    $adresse = trim($_POST['Adresse'] ?? '');
    $codePostal = trim($_POST['CodePostal'] ?? '');
    $ville = trim($_POST['Ville'] ?? '');
    $email = strtolower(trim($_POST['AdresseMail'] ?? ''));
    $password = $_POST['MotDePasse'] ?? '';
    $telephone = trim($_POST['Telephone'] ?? '');

    $errors = [];

    if (!preg_match("/^[A-Za-zÀ-ÿ\- ]{2,50}$/", $nom)) {
        $errors[] = "Nom invalide";
    }

    if (!preg_match("/^[A-Za-zÀ-ÿ\- ]{2,50}$/", $prenom)) {
        $errors[] = "Prénom invalide";
    }

    if (!preg_match("/^[A-Za-z0-9À-ÿ\s,'\-]{5,100}$/", $adresse)) {
        $errors[] = "Adresse invalide";
    }

    if (!preg_match("/^[0-9]{5}$/", $codePostal)) {
        $errors[] = "Code postal invalide";
    }

    if (!preg_match("/^[A-Za-zÀ-ÿ\- ]{2,50}$/", $ville)) {
        $errors[] = "Ville invalide";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email invalide";
    }

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)) {
        $errors[] = "Mot de passe trop faible";
    }

    if (!empty($telephone) && !preg_match("/^(\+33|0)[1-9](\d{2}){4}$/", $telephone)) {
        $errors[] = "Téléphone invalide";
    }

    if (empty($dateNaissance)) {
        $errors[] = "Date de naissance obligatoire";
    }

    $check = $pdo->prepare("SELECT idClient FROM client WHERE AdresseMail = ?");
    $check->execute([$email]);

    if ($check->fetch()) {
        $errors[] = "Un compte existe déjà avec cet email";
    }

    if (!empty($errors)) {
        foreach ($errors as $e) {
            echo htmlspecialchars($e) . "<br>";
        }
        exit;
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO client 
    (Nom, Prenom, DateNaissance, Adresse, CodePostal, Ville, AdresseMail, MotDePasse, Telephone)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $nom,
        $prenom,
        $dateNaissance,
        $adresse,
        $codePostal,
        $ville,
        $email,
        $passwordHash,
        $telephone
    ]);

    $id = $pdo->lastInsertId();

    setcookie("client_id", $id, time() + 3600, "/");
}
?>