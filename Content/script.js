// Afficher les règles du jeu au clic du bouton About dans le Header

const about = document.querySelector('.buttonHeader');
const rules = document.querySelector('.rules');

about.addEventListener("click", function() {
    rules.classList.toggle('visible');
  });
  
  document.addEventListener("click", function(event) {
    if (!rules.contains(event.target) && event.target !== about) {
      rules.classList.remove('visible');
    }
  });

