// gérer la couleur de la réponse selectionnée


// Récupération de tous les éléments avec la classe "reponse"
let reponses = document.querySelectorAll(".choix");

// Attacher un gestionnaire d'événements à chaque élément .choix
for (let reponse of reponses) {
    reponse.addEventListener("click", toggleSelection);
}

// Fonction pour basculer la sélection de la réponse
function toggleSelection(e) {
    e.stopPropagation();
    console.log(this); // Élément .choix sur lequel le clic a été effectué
    const choix = this.querySelector(".reponse");
    console.log(choix.dataset.type, choix.dataset.id);
    this.classList.toggle("selected");
}




// SCRIPT POUR PASSER A LA QUESTION SUIVANTE 

let formContainer = document.querySelector('#mainQuestions');
// uniquement exécuté si forumulaire avec id mainquestions
if (formContainer) {
    // Ajout d'un écouteur d'événement "submit" au formulaire
    formContainer.addEventListener('submit', function (event) {

        // Empêcher le comportement par défaut du formulaire (rechargement de la page)
        event.preventDefault();

        const params = new URLSearchParams(window.location.search)
        const id_theme = params.get("id_theme")
        const niveau = params.get("niveau")
        let questionIndex = parseInt(params.get("question"))

        if(!questionIndex) questionIndex = 1

        // sélectionner toutes les réponses

        // récupérer le data type et l'id de la réponse

        // pour passer à la question suivante :

        // 1. Incrémenter l'indice de la question pour passer à la question suivante

        // 2. Redirection vers la nouvelle URL avec les paramètres mis à jour
        let redirectUrl = `?controller=question&action=question&id_theme=${id_theme}&niveau=${niveau}&question=${questionIndex + 1}`;
        window.location.href = redirectUrl;
    });
}



