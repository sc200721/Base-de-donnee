<?php
if (!isset($_COOKIE['client_id'])) {
    echo "Vous n'êtes pas connecté.";
    exit;
}

$pdo = new PDO(
    "mysql:host=sql208.infinityfree.com;dbname=if0_41693683_moncoinvert;charset=utf8",
    "if0_41693683",
    "mi6fyKP9VKkR0"
);

$stmt = $pdo->prepare("SELECT * FROM client WHERE idClient = ?");
$stmt->execute([$_COOKIE['client_id']]);

$client = $stmt->fetch();

if (!$client) {
    echo "Utilisateur introuvable.";
    exit;
}
?>

<section class="section-compte">
  <h1>Mon compte</h1>

  <p><strong>Nom :</strong> <?= htmlspecialchars($client['Nom']) ?></p>
  <p><strong>Prénom :</strong> <?= htmlspecialchars($client['Prenom']) ?></p>
  <p><strong>Email :</strong> <?= htmlspecialchars($client['AdresseMail']) ?></p>
  <p><strong>Adresse :</strong> <?= htmlspecialchars($client['Adresse']) ?></p>
  <p><strong>Ville :</strong> <?= htmlspecialchars($client['Ville']) ?></p>
  <p><strong>Code postal :</strong> <?= htmlspecialchars($client['CodePostal']) ?></p>
  <p><strong>Téléphone :</strong> <?= htmlspecialchars($client['Telephone']) ?></p>
  <a href="deconnexion.php" class="deconnexion">Se déconnecter</a>
</section>
