<?php
require_once '../function.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos conseils & Aide</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="categorie.css">
    <script src="../indexRecherche.js"></script>
</head>
<body>
    <?php include '../header.php'; ?>
    <?php nav($categories, $pageCategories); ?>

    <section>
        <h2>Nos conseils & Aide</h2>
        <p>Retrouvez toutes nos astuces et guides pour entretenir vos plantes et votre jardin.</p>
        
        <div class="grille-conseils">
            <?php 
            $sousCategories = $categories["Nos conseils & Aide"] ?? [];
            foreach ($sousCategories as $conseil): 
            ?>
                <div class="carte-conseil">
                    <h3><?= htmlspecialchars($conseil) ?></h3>
                    <p>Découvrez nos meilleurs conseils et articles concernant : <?= htmlspecialchars(strtolower($conseil)) ?>.</p>
                    <br>
                    <button class="btn-decouvrir" style="padding: 5px 15px; font-size: 0.9rem;">Lire la suite</button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer>
        <div class="footer-bas">
           &copy; 2026 MonCoinVert. Tous droits réservés. (Projet Universitaire)
        </div>
    </footer>
</body>
</html>