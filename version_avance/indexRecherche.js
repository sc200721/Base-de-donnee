<?php
// supprimer le cookie client_id
setcookie("client_id", "", time() - 3600, "/");

// rediriger vers accueil
header("Location: index.php?page=accueil");
exit;
?>