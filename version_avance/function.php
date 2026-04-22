<?php
include("header.php");
include("function.php");
nav();

$pdo = new PDO(
    "mysql:host=localhost;dbname=moncoinvert;charset=utf8",
    "root",
    "",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$type = $_GET['type'] ?? null;
$categorie = $_GET['categorie'] ?? null;

if (!$type) {
    die("Aucune catégorie sélectionnée");
}

$sqlType = "SELECT TypeProduit, Description 
            FROM type 
            WHERE TypeProduit = ?";
$stmtType = $pdo->prepare($sqlType);
$stmtType->execute([$type]);
$typeData = $stmtType->fetch(PDO::FETCH_ASSOC);

$sqlSousCat = "SELECT Nom 
               FROM categorie c
               INNER JOIN type t ON c.idType = t.idType
               WHERE t.TypeProduit = ?";
$stmtSousCat = $pdo->prepare($sqlSousCat);
$stmtSousCat->execute([$type]);
$sousCategories = $stmtSousCat->fetchAll(PDO::FETCH_COLUMN);

if ($categorie) {
    $sql = "SELECT p.Nom, p.PrixVenteUnitaire, p.image
            FROM produit p
            INNER JOIN categorie c ON p.idCategorie = c.idCategorie
            WHERE c.Nom = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$categorie]);
} else {
    $sql = "SELECT p.Nom, p.PrixVenteUnitaire, p.image
            FROM produit p
            INNER JOIN categorie c ON p.idCategorie = c.idCategorie
            INNER JOIN type t ON c.idType = t.idType
            WHERE t.TypeProduit = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$type]);
}

$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mon coin vert</title>
  <link rel="stylesheet" href="style/index.css">
  <script src="indexRecherche.js"></script>
</head>

<body>

<section class="section-accueil">

    <h1><?= htmlspecialchars($typeData['TypeProduit'] ?? $type); ?></h1>

    <?php if (!empty($typeData['Description'])): ?>
        <p class="categorie-description">
            <?= htmlspecialchars($typeData['Description']); ?>
        </p>
    <?php endif; ?>

    <div class="filtres">

        <?php if (!$categorie): ?>
            <span class="filtre actif">Tous</span>
        <?php else: ?>
            <a class="filtre"
               href="categorie.php?type=<?= urlencode($type); ?>">
               Tous
            </a>
        <?php endif; ?>

        <?php foreach ($sousCategories as $sousCat): ?>

            <?php if ($categorie === $sousCat): ?>
                <span class="filtre actif">
                    <?= htmlspecialchars($sousCat); ?>
                </span>
            <?php else: ?>
                <a class="filtre"
                   href="categorie.php?type=<?= urlencode($type); ?>&categorie=<?= urlencode($sousCat); ?>">
                   <?= htmlspecialchars($sousCat); ?>
                </a>
            <?php endif; ?>

        <?php endforeach; ?>

    </div>

    <hr>

    <div class="categorie-produits">

        <?php if (empty($produits)): ?>
            <p>Aucun produit trouvé.</p>
        <?php else: ?>
        <div class="produits-phares">
            <?php foreach ($produits as $p): ?>
                <div class="produit">
                    <?php
                        $image = !empty($p['image']) ? $p['image'] : 'default.png';
                    ?>

                    <img class="img-placeholder" src="cdn/<?= htmlspecialchars($image); ?>"
                        alt="<?= "image de " . $p['Nom']?>">
                    <h3><?= htmlspecialchars($p['Nom']); ?></h3>
                    <p class="prix"><?= htmlspecialchars($p['PrixVenteUnitaire']); ?> €</p>
                    <button class="btn-decouvrir" class="btn-panier">Ajouter au panier</button>
                </div>
            <?php endforeach; ?>
            <div>

        <?php endif; ?>

    </div>

</section>

<?php include("html/footer.html"); ?>

</body>
</html>