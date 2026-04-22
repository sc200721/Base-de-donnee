/* les trucs de base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  font-family: Georgia, "Times New Roman", Times, serif;
}

body {
  min-height: 100vh;
  max-width: 100vw;
  display: grid;
  grid-template-columns: 250px 1fr;
  grid-template-rows: auto 1fr auto;
  gap: 25px;
  padding: 20px 30px;
  background-color: #f7f9f6;
}

/* la tout ce qu'il y'a par rapport au header*/
header {
  width: 100%;
  grid-column: 1/3;
  background-color: white;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
  border-radius: 10px;
  padding: 15px 30px;
  border: 1px solid #f0f0f0;
}

#grandconteneur {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 15px;
  width: 100%;
}

.logo {
  max-height: 60px;
  width: auto;
  transition: transform 0.3s ease;
}

.logo:hover {
  transform: scale(1.02);
}

.utilisateur {
  display: flex;
  gap: 25px;
  align-items: center;
}

.utilisateur a {
  text-decoration: none;
  color: #4b5943;
  font-weight: bold;
  transition: all 0.2 ease;
  display: flex;
  align-items: center;
}

.utilisateur a:hover {
  color: #507724;
  transform: translateY(-2px);
}

#logocompte {
  max-height: 38px;
  width: auto;
}

#logopanier {
  max-height: 38px;
  width: auto;
}

.form_de_recherche {
  display: flex;
  border-radius: 25px;
  overflow: hidden;
  border: 2px solid #eef2ed;
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.02);
  background-color: #f7f9f6;
  transition: all 0.3s ease;
}

.form_de_recherche:focus-within {
  border-color: #c8d6a2;
  box-shadow: 0 0 10px rgba(200, 214, 162, 0.3);
}

.form_de_recherche input {
  padding: 10px 20px;
  border: none;
  outline: none;
  width: 220px;
  font-family: inherit;
  background: transparent;
  transition: width 0.3s;
  font-size: 0.95rem;
}

.form_de_recherche input:focus {
  transition: width 0.3s;
  width: 320px;
}

.resultat {
  padding: 0 20px;
  background-color: #507724;
  color: white;
  border: none;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background-color 0.3s ease;
}

.resultat img {
  width: 15px;
  height: 15px;
}

.resultat:hover {
  background-color: #394433;
}
/* menu */
nav {
  grid-column: 1/2;
  align-self: start;
  position: sticky;
  overflow-y: auto;
  top: 25px;
  background-color: #dcdfda;
  border-radius: 5px;
  padding: 20px 15px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.014);
}

nav ul li {
  list-style-type: none;
}

nav > ul > li > a {
  border-radius: 5px 5px 0 0;
}

nav ul li a {
  /*liens dans le nav*/
  text-align: left;
  display: block;
  color: #394433;
  padding: 12px 15px;
  text-decoration: none;
  border-radius: 10px;
  transition: all 0.3s ease;
}

nav li > a:hover {
  padding-left: 20px;
  background-color: white;
  color: #507724;
  border-left: 0 4px 10px rgba(0, 0, 0, 0.03);
}

.courante {
  /*indique à l'utilisateur sur quel page il est dans le nav*/
  background-color: #4b5943;
  border-left: 4px solid #394433;
  border-radius: 0 5px 5px 0;
  color: white;
}

.courante:hover {
  border-left: none;
  color: white;
  padding-left: 10px;
}

.menu-deroulant > a {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.menu-deroulant > a::after {
  content: "▼";
  font-size: 0.8em;
  transition: transform 0.3s;
}

.menu-deroulant:hover > a::after {
  transform: rotate(-180deg);
}

.sous-menu {
  max-height: 0;
  width: 100%;
  text-align: left;
  background-color: white;
  border-radius: 10px;
  overflow: hidden;
  transition: max-height 0.3s ease-in-out, padding 0.3s ease-in-out;
}

.menu-deroulant:hover > .sous-menu {
  max-height: 500px;
  margin-top: 8px;
  padding: 10px 0;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
  border: 1px solid #f0f0f0;
}

.sous-menu > li > a {
  font-size: 0.95rem;
  padding: 8px 15px;
  font-family: sans-serif;
}

.sous-menu > li > a:hover {
  background-color: #eef2ed;
  border-left: 3px solid #507724;
  padding-left: 20px;
}

/* corps */
.section-accueil {
  grid-column: 2/3;
  grid-row: 2/3;
  background-color: #dcdfda;
  padding: 20px;
  border-radius: 5px;
}

/* le bas de page */
footer {
  grid-column: 1/3;
  background-color: transparent; 
  padding: 10px 20px 30px 20px;
  border-radius: 10px;
}

.containerhead {
  position: relative;
}

#suggestions {
  position: absolute;
  top: 100%;
  left: 0%;
  right: 0%;
  background: white;
  border: 1px solid #eef2ed;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-height: 200px;
  overflow-y: auto;
  z-index: 1000;
}

.suggestion-item {
  padding: 12px 20px;
  cursor: pointer;
  border-bottom: 1px solid #f7f9f6;
  color: #4b5943;
  transition: all 0.2s ease;
}

.suggestion-item:hover {
  background-color: #f7f9f6;
  color: #507724;
  padding-left: 25px;
}

/*  Ajouts pour la page d'accueil (Section)  */

.hero {
  background: linear-gradient(135deg, #eef2ed 0%, #dcdfda 100%);
  padding: 50px 30px;
  text-align: center;
  border-radius: 15px;
  margin-bottom: 40px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
  border: 1px solid white;
}

.hero h1 {
  color: #394433;
  margin-bottom: 10px;
}

.hero p {
  color: #4b5943;
  margin-bottom: 20px;
  font-size: 1.1rem;
}

.btn-decouvrir {
  background-color: #507724;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 25px;
  cursor: pointer;
  font-size: 1rem;
  font-weight: bold;
  transition: all 0.3s ease;
}

.btn-decouvrir:hover {
  background-color: #394433;
  transform: translateY(-2px);
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
}

.categorie-produits {
  margin-bottom: 40px;
  margin-top: 40px;
}

section h2 {
  color: #394433;
  margin-bottom: 15px;
  font-size: 1.5rem;
}

.produits-phares {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;

  justify-content: flex-start;
  align-items: flex-start;
}

.produit {
  background-color: white;
  padding: 15px;
  border-radius: 10px;
  text-align: center;
  flex: 1;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border: 1px solid #f0f0f0;
}

.produit:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
}

.img-placeholder {
  width: 100%;
  height: 180px;
  background: linear-gradient(180deg, #f7f9f6 0%, #eef2ed 100%);
  border-radius: 8px;
  margin-bottom: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #4b5943;
  font-size: 0.9rem;
}

.produit h3 {
  font-size: 1.1rem;
  color: #4b5943;
  margin-bottom: 5px;
}

.produit .prix {
  font-weight: bold;
  color: #507724;
  font-size: 1.2rem;
}

/*  Ajouts pour le Footer  */
.footer-colonnes {
  display: flex;
  justify-content: space-around;
  text-align: left;
  margin-bottom: 20px;
}

.footer-col h4 {
  color: #394433;
  margin-bottom: 10px;
}

.footer-col ul {
  list-style-type: none;
}

.footer-col ul li {
  margin-bottom: 5px;
}

.footer-col ul li a {
  text-decoration: none;
  color: #4b5943;
}

.footer-col ul li a:hover {
  text-decoration: underline;
}

.footer-bas {
  border-top: 1px solid #a3b182;
  padding-top: 15px;
  font-weight: bold;
}

.filtres {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-bottom: 20px;
}

.filtre {
  padding: 6px 14px;
  border: 1px solid #b7ce66;
  background: white;
  border-radius: 20px;
  text-decoration: none;
  color: #4b5943;
  cursor: pointer;
  transition: 0.2s;
}

.filtre:hover {
  filter: brightness(1.05) saturate(1.2);
}

.filtre.actif {
  background: #507724;
  color: white;
}

.categorie-description {
  margin-top: 8px;
  margin-bottom: 20px;
  color: #4b5943;
  font-size: 0.95rem;
  max-width: 700px;
  line-height: 1.4;
  opacity: 0.9;
}