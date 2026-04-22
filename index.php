<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mon coin vert</title>
  <link rel="stylesheet" href="style/compte.css">
  <link rel="stylesheet" href="style/index.css">
  <script src="indexRecherche.js"></script>
</head>
<body>

<?php include("header.php");
include("function.php");

$page = $_GET['page'] ?? 'accueil';
$connecte = isset($_COOKIE['client_id']);

switch ($page) {
    case 'accueil':
    default:
        nav();
        include("html/accueil.html");
        break;

    case 'inscription':
        include("html/inscription.html");
        break;

    case 'connexion':
        if ($connecte) {
            include("compte.php");
        } else {
            include("html/connexion.html");
        }
        break;

    case 'panier':
        include("html/panier.html");
        break;
        
}

include("html/footer.html"); ?>

</body>
</html>
