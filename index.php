<?php
/*categorie : contient en clé une catégorie, et en valeur un tableau qui contient les sous catégories*/
$categorie=[
    "Plante d'intérieur" => [
      "Cactus & Succulentes",
      "Plantes retombantes",
      "Plantes XXL",
      'Plantes "Animaux compatible"',
      "Pour débutants"
    ],
    "Balcon, Terrasse et Jardin" => [],
    "Coin Potager" => [],
    "Matériel & Entretien" => [],
    "Nos conseils & Aide" => [] 
];
 

/*génère le nav en fonction de la page sur laquel on est pour mettre en évidence le bouton*/
function nav($categorie){
    echo "<ul>";
    foreach ($categorie as $row => $sousCategories){
        echo "<li class='menu-deroulant'>";
        $tmp=htmlspecialchars($row);
        echo "<a href='#'>$tmp</a>";
        if (!empty($sousCategories)) {
            echo "<ul class='sous-menu'>";
            foreach ($sousCategories as $sousCat) {
                $tmp=htmlspecialchars($sousCat);
                echo "<li><a href='#'>$tmp</a></li>";
              }
              echo "</ul>";
        }
        echo "</li>";
    }
    echo "</ul>";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HTML + CSS</title>
    <script src="indexRecherche.js"></script>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <header>
      <div id="grandconteneur">
        <a href="index.html">
          <img
            class="logo"
            src="logo_a_mettre...."
            alt="Logo de l'Entreprise"
          />
        </a>
        <div class="containerhead">
          <form class="form_de_recherche" onsubmit="return false;">
            <input
              type="text"
              id="recherche"
              name="recherche"
              placeholder="Recherche"
            />
            <button class="resultat">
              <img src="loupe.png" alt="Loupe" />
            </button>
            <!-- faudra faire un melange de php + base de donnée pour la barre de
            recher en autocompletation ou sinon faire un script en js à voir -->
          </form>
          <!-- la div suggestions vient rechopper tout les resultat du script pour l'autocompletation-->
          <div id="suggestions"></div>
        </div>
        <div class="utilisateur">
          <a href="compte.html" class="compte">
            <img src="logocompte.png" alt="Mon compte" id="logocompte" />
          </a>
          <a href="panier.html" class="panier">
            <img src="logopanier.png" alt="Mon panier" id="logopanier" />
          </a>
        </div>
      </div>
    </header>

    <nav>
        <?php nav($categorie); ?>
    </nav>

    <section>Page d'accueil</section>

    <footer>
      Footer<br />
      tout ce qui est "faux crédit" a rajouter machin machin
    </footer>
  </body>
</html>
