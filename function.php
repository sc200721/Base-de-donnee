<?php
/*categorie : contient en clé une catégorie, et en valeur un tableau qui contient les sous catégories*/
$categories=[
    "Plante d'intérieur" => [
      "Cactus & Succulentes",
      "Plantes retombantes",
      "Plantes XXL",
      'Plantes "Animaux compatible"',
      "Pour débutants"
    ],
    "Balcon, Terrasse et Jardin" => [
        "Arbustes & Haies",
        "Plantes grimpantes",
        "Fleurs d'extérieur",
        "Arbres fruitiers",
        "Plantes vivaces"
    ],
    "Coin Potager" => [
        "Graines & Semis",
        "Plantes aromatiques",
        "Légumes du soleil",
        "Petits fruits",
        "Carrés potagers"
    ],
    "Matériel & Entretien" => [
        "Pots & Cache-pots",
        "Terreaux & Engrais",
        "Outils de jardinage",
        "Arrosoirs & Pulvérisateurs"
    ],
    "Nos conseils & Aide" => [
        "Guide d'entretien",
        "Maladies des plantes",
        "Tutos rempotage",
        "Foire Aux Questions (FAQ)",
        "Nous contacter"
    ]
];

$pageCategories = [
    "./categories/plante.php",
    "./categories/balcon.php",
    "./categories/potager.php",
    "./categories/materiel.php",
    "./categories/conseils.php"
];

/*génère le nav en fonction de la page sur laquel on est pour mettre en évidence le bouton*/
function nav($categories,$pageCategories){
    echo "<nav><ul>";
    $i=0;
    
    foreach ($categories as $cat => $sousCategories){
        echo "<li class='menu-deroulant'>";
        echo "<a href='$pageCategories[$i]'>$cat</a>";
        
        if (!empty($sousCategories)) {
            echo "<ul class='sous-menu'>";
            
            foreach ($sousCategories as $sousCat) {
                echo "<li><a href='#'>$sousCat</a></li>";
              }
        
              echo "</ul>";
        }
        echo "</li>";
        $i++;
    }
    echo "</ul></nav>";
}

?>
