// gérer la couleur de la réponse selectionnée

// Récupération de tous les éléments avec la classe "reponse"
let reponses = document.querySelectorAll(".choix");

// Ajout d'un écouteur d'événement "click" à chaque élément
for (let i = 0; i < reponses.length; i++) {
    reponses[i].addEventListener("click", toggleSelection);
}

// Fonction pour basculer la sélection de la réponse
function toggleSelection() {
    this.classList.toggle("selected");
   
  }



