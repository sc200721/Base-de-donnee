<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=ta_base;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur de connexion");
}

if (isset($_GET['recherche'])) {
    $q = $_GET['recherche'];

    $stmt = $pdo->prepare("SELECT Nom FROM produits WHERE Nom LIKE :search LIMIT 10");
    $stmt->execute([
        'search' => "%$q%"
    ]);

    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $data = [];

    foreach ($resultats as $row) {
        $data[] = $row['nom'];
    }
    //on converti notre tableau data en json plus simple pour le javascript
    echo json_encode($data);
}
?>
