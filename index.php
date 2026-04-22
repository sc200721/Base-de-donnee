<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mon coin vert</title>
  <link rel="stylesheet" href="compte.css">
  <link rel="stylesheet" href="index.css">
  <script src="indexRecherche.js"></script>
</head>
<body>

<?php include("header.html");
include("function.php");

$page = $_GET['page'] ?? 'accueil';
$connecte = isset($_COOKIE['client_id']);




switch ($page) {
    case 'accueil':
    default:
        nav($categories);
        include("accueil.html");
        break;

    case 'inscription':
        include("inscription.html");
        break;

    case 'connexion':
        if ($connecte) {
            include("compte.html");
        } else {
            include("connexion.html");
        }
        break;

    case 'panier':
        include("panier.html");
        break;
}

include("footer.html"); ?>

</body>
</html>
