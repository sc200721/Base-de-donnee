<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mon coin vert</title>
  <link rel="stylesheet" href="compte.css">
  <link rel="stylesheet" href="index.css">
</head>
<body>

<?php include("header.php");
include("function.php");

$page = $_GET['page'] ?? 'accueil';
$connecte = isset($_COOKIE['client_id']);

nav($categories, $pageCategories);
?>

<section>
<h1>Outils de jardinage</h1>
<div class="categorie-produits">
<h2>Voici nos outils de jardinage</h2>
<div class="produits-phares">
<?php
    $produits=produits("Outils de jardinage");
        foreach ($produits as $produit){
        ?>
        <div class="produit">
            <h3><?php echo $produit['Nom']; ?></h3>
            <p class="prix"> <?php echo $produit['Prix']; ?>€</p>
            <button class="btn-decouvrir">Ajouter au panier</button>
          </div>
        <?php
        }
    ?>
</div>
</div>
</section>

<?php
include("footer.html"); 
?>
</body>
</html>