//On attend que la page html soit bien chargé
document.addEventListener("DOMContentLoaded", function () {
  //on rechoppe nos element html par leur id donc la barre de recherche
  const input = document.getElementById("recherche");
  //et boite de resultats
  const suggestions = document.getElementById("suggestions");

  //creer une variable timer pour mettre un temps d'attente de 300 ms
  let timer = null;
  //a chaque lettre tapé ça déclenche...
  input.addEventListener("keyup", function () {
    clearTimeout(timer);

    timer = setTimeout(() => {
      //on recupere ce qu'on tape
      let query = input.value;
      //petite sécurité ça évite les requetes inutiles / trop courtes
      if (query.length < 2) {
        suggestions.innerHTML = "";
        return;
      }
      //on envoie vers le php
      // par exemple si on tape pla on aura -> search.php?q=pla
      //on rajoute encodeURIComponent pour eviter les erreurs accents/espaces etc
      fetch("indexrecherche.php?q=" + encodeURIComponent(query))
        //on transforme la réponse du php en json
        .then((response) => response.json())
        .then((data) => {
          suggestions.innerHTML = "";

          // Pour chaque résultat obtenu
          data.forEach((item) => {
            //On crée une ligne avec le nom du produit
            //on creer une variable div nommer localement div
            let div = document.createElement("div");
            //on rajoute une classe nommer suggestion-item
            div.classList.add("suggestion-item");
            div.textContent = item;

            //puius quand on clique sur une des suggestions
            //ça remplie la barre de recherche par la ligne sur laquel on a cliquer
            div.addEventListener("click", () => {
              input.value = item;
              suggestions.innerHTML = "";
            });

            //puis on ajoute dans la page
            suggestions.appendChild(div);
          });
        });
    }, 300); // attend 300ms
  });
}); 
