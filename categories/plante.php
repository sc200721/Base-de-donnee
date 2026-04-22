<?php
require_once '../function.php';

try {
    $pdo = new PDO("mysql:host=localhost;dbname=moncoinvert;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur de connexion à la base de données.");
}

// On récupère les produits liés à cette catégorie
$stmt = $pdo->prepare("SELECT * FROM produits WHERE categorie = :cat");
$stmt->execute(['cat' => "Plante d'intérieur"]);
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plante d'intérieur</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="categorie.css">
    <script src="../indexRecherche.js"></script>
</head>
<body>
    <!-- On inclut l'en-tête existant -->
    <?php include '../header.html'; ?>

    <!-- On génère le menu de navigation -->
    <?php nav($categories); ?>

    <section>
        <h2>Plantes d'intérieur</h2>
        <p>Découvrez notre sélection pour verdir votre intérieur.</p>
        
        <div class="grille-produits">
            <?php if (empty($produits)): ?>
                <p>Aucun produit disponible dans cette catégorie pour le moment.</p>
            <?php else: ?>
                <?php foreach ($produits as $produit): ?>
                    <div class="produit">
                        <div class="img-placeholder">Image <?= htmlspecialchars($produit['nom'] ?? 'Produit') ?></div>
                        <h3><?= htmlspecialchars($produit['nom']) ?></h3>
                        <p class="prix"><?= htmlspecialchars($produit['prix'] ?? '0.00') ?> €</p>
                        <button class="btn-decouvrir">Ajouter au panier</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

    <footer>
        <div class="footer-bas">
           &copy; 2026 MonCoinVert. Tous droits réservés. (Projet Universitaire)
        </div>
    </footer>
</body>
</html>
