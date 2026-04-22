<?php
function nav() {

    $pdo = new PDO(
        "mysql:host=localhost;dbname=moncoinvert;charset=utf8",
        "root",
        "",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $sql = "SELECT TypeProduit, Nom FROM type 
            INNER JOIN categorie ON type.idType = categorie.idType";

    $stmt = $pdo->query($sql);

    $categories = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $type = $row['TypeProduit'];
        $categorie = $row['Nom'];

        $categories[$type][] = $categorie;
    }

    echo "<nav><ul>";

    foreach ($categories as $cat => $sousCategories) {
        echo "<li class='menu-deroulant'>";

        /* 🔹 LIEN GRANDE CATEGORIE */
        echo "<a href='categorie.php?type=" . urlencode($cat) . "'>$cat</a>";

        if (!empty($sousCategories)) {
            echo "<ul class='sous-menu'>";

            foreach ($sousCategories as $sousCat) {

                /* 🔹 LIEN SOUS-CATEGORIE */
                echo "<li>
                        <a href='categorie.php?type=" . urlencode($cat) . "&categorie=" . urlencode($sousCat) . "'>
                            $sousCat
                        </a>
                      </li>";
            }

            echo "</ul>";
        }

        echo "</li>";
    }

    echo "</ul></nav>";
}
?>