* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  font-family: Georgia, "Times New Roman", Times, serif;
}

body {
  min-height: 100vh; /* les gars a l'aide je trouve pas le truc pour adapter completement a la page*/
  width: 100%;
  display: grid;
  grid-template-columns: 20% 1fr;
  grid-template-rows: auto 1fr auto;
  gap: 15px;
  padding: 15px;
}

/* la tout ce qu'il y'a par rapport au header*/
header {
  width: 100%;
  grid-column: 1/3;
  background-color: #c8d6a2;
  border-radius: 5px;
  padding: 15px 20px;
}

#grandconteneur {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 15px;
  width: 100%;
}

.utilisateur {
  display: flex;
  gap: 15px;
  align-items: center;
}

.utilisateur a {
  text-decoration: none;
  color: #4b5943;
  font-weight: bold;
}

.utilisateur a:hover {
  color: #394433;
}

#logocompte {
  max-height: 50px;
  width: auto;
}

#logopanier {
  max-height: 50px;
  width: auto;
}

.form_de_recherche {
  display: flex;
  border-radius: 25px;
  overflow: hidden;
  border: 2px solid white;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.014);
}

.form_de_recherche input {
  padding: 5px 15px;
  border: none;
  outline: none;
  width: 200px;
  font-family: inherit;
  transition: width 0.3s;
}

.form_de_recherche input:focus {
  transition: width 0.3s;
  width: 290px;
}

.resultat {
  padding: 5px 10px;
  background-color: #507724;
  color: white;
  border: none;
  border-radius: 0 3px 3px 0;
  border: 1px solid #507724;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
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
  color: black;
  padding: 10px 5px;
  text-decoration: none;
  transition: background-color 0.2s;
}

nav li a:hover {
  /*effet quand on passe le pointeur de souris sur un lien dans le nav*/
  background-color: #c8d6a2;
  transition: background-color 0.2s;
  border-left: 4px solid;
  color: #4b5a43;
  cursor: pointer;
}

.courante {
  /*indique à l'utilisateur sur quel page il est dans le nav*/
  background-color: #4b5943;
  border-left: 4px solid #394433;
  border-radius: 5px;
  color: white;
}

.courante:hover {
  border-left: none;
}

.menu-deroulant > a {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.menu-deroulant > a::after {
  content: ">";
  font-size: 1.4em;
  font-weight: bold;
  animation: rotationFlecheRetour 0.3s linear forwards;
}

@keyframes rotationFlecheAller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(90deg);
  }
}

@keyframes rotationFlecheRetour {
  0% {
    transform: rotate(90deg);
  }
  100% {
    transform: rotate(0deg);
  }
}

.menu-deroulant:hover > a::after {
  animation: rotationFlecheAller 0.3s linear forwards;
}

.sous-menu {
  width: 100%;
  text-align: left;
  background-color: white;
  border-radius: 0 0 5px 5px;
  overflow: hidden;
  animation: disparitionSousMenu 0.4s forwards;
}

@keyframes apparitionSousMenu {
  0% {
    max-height: 0px;
    opacity: 0;
    padding-bottom: 0;
    box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0);
  }
  30% {
    box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.3);
  }
  100% {
    max-height: 50em;
    opacity: 1;
    box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.3);
  }
}

@keyframes disparitionSousMenu {
  0% {
    max-height: 50em;
    opacity: 1;
    padding-bottom: 5px;
  }
  100% {
    max-height: 0;
    opacity: 0;
    padding-bottom: 0;
  }
}

.menu-deroulant:hover > .sous-menu {
  animation: apparitionSousMenu 0.4s forwards;
}

.sous-menu > li > a {
  align-items: center;
  display: flex;
  width: 100%;
}

/* corps */
section {
  grid-column: 2/3;
  grid-row: 2/3;
  background-color: #dcdfda;
  padding: 20px;
  border-radius: 5px;
}
/* le bas de page */
footer {
  grid-column: 1/3;
  background-color: #c8d6a2;
  padding: 15px;
  border-radius: 5px;
  text-align: center;
}

#suggestions {
  position: absolute;
  background: white;
  border: 1px solid #ccc;
  width: 290px;
  max-height: 200px;
  overflow-y: auto;
  z-index: 1000;
}

.suggestion-item {
  padding: 10px;
  cursor: pointer;
}

.suggestion-item:hover {
  background-color: #c8d6a2;
}
