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
            src="logo a faire etc..."
            alt="Logo de l'Entreprise"
          />
        </a>

        <div class="containerhead">
          <form class="form_de_recherche">
            <input type="text" name="recherche" placeholder="Recherche" />
            <button class="resultat">
              <img src="loupe.png" alt="Loupe" />
            </button>
            <!-- faudra faire un melange de php + base de donnée pour la barre de
            recher en autocompletation ou sinon faire un script en js à voir -->
          </form>
        </div>
        <div class="utilisateur">
          <a href="compte.html" class="compte">
            <img src="" alt="image pour compte" />
          </a>
          <a href="panier.html" class="panier">Panier</a>
        </div>
      </div>
    </header>

    <nav>
      <ul>
        <li class="menu-deroulant courante">
          <a href="./plante.html">Plante d'intérieur </a>
          <ul class="sous-menu">
            <li><a href="#">Cactus & Succulentes</a></li>
            <li><a href="#">Plantes retombantes</a></li>
            <li><a href="#">Plantes XXL</a></li>
            <li><a href="#">Plantes "Animaux compatible"</a></li>
            <li><a href="#">Pour débutants</a></li>
          </ul>
        </li>
        <li><a href="./balcon.html">Balcon, Terrasse et Jardin</a></li>
        <li><a>Coin Potager</a></li>
        <li><a href="./materiel.html">Matériel & Entretien</a></li>
        <li><a>Nos conseils & Aide</a></li>
      </ul>
    </nav>

    <section>Coin potager</section>
    <footer>
      Footer<br />
      tout ce qui est "faux crédit" a rajouter machin machin
    </footer>
  </body>
</html>
