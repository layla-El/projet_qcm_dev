

// Afficher les règles du jeu au clic du bouton "About" dans le Header

const about = document.querySelector('.buttonHeader');
const rules = document.querySelector('.rules');

about.addEventListener("click", function () {
  rules.classList.toggle('visible');
});

document.addEventListener("click", function (event) {
  if (!rules.contains(event.target) && event.target !== about) {
    rules.classList.remove('visible');
  }
});







// -----------------------------------------------------------------------------------------------------------------------








// SECURISATION FORMULAIRE CONNEXION  

let connexForm = document.getElementById('connexionForm');
let emailInputC = document.getElementById('email');
let passwordInputC = document.getElementById('password');

emailInputC.addEventListener('input', function () {
  if (emailInputC.validity.typeMismatch) {
    emailInputC.setCustomValidity('Veuillez entrer une adresse email valide.');
  } else {
    emailInputC.setCustomValidity('');
  }
});

passwordInputC.addEventListener('input', function () {
  if (passwordInputC.validity.patternMismatch) {
    passwordInputC.setCustomValidity('Votre mot de passe doit comporter au moins 8 caractères.');
  } else {
    passwordInputC.setCustomValidity('');
  }
});


// Ajouter un écouteur d'événements 'submit' au formulaire
connexForm.addEventListener('submit', function (e) {
  // Si les inputs ne sont pas valides, empêchez la soumission du formulaire
  if (!emailInputC.validity.valid || !passwordInputC.validity.valid) {
    e.preventDefault();
    alert("Veuillez corriger les erreurs dans le formulaire avant de soumettre.");
  }
});


//L'écouteur input sur chaque champ (comme passwordInput) offre une rétroaction instantanée à l'utilisateur dès qu'il 
//commence à saisir des informations. Si les informations saisies ne respectent pas les critères de validation, 
//l'utilisateur est immédiatement informé, ce qui peut améliorer l'expérience utilisateur en évitant les erreurs de soumission inutiles.

//L'écouteur submit sur le formulaire est une mesure de sécurité supplémentaire. Il offre une dernière vérification 
//de tous les champs du formulaire avant sa soumission, et peut empêcher la soumission si les informations ne sont pas 
//valides. C'est particulièrement utile si vous avez plusieurs champs à vérifier.







// -----------------------------------------------------------------------------------------------------------------------








// SECURISATION FORMULAIRE INSCRIPTION 

// 1 - Sécurisation des input et submit et Empecher la soumission du formulaire si les 2 mdp ne correspondent pas 


let form = document.getElementById('inscriptionForm');
let nomInput = document.getElementById('inom');
let prenomInput = document.getElementById('iprenom');
let emailInput = document.getElementById('imail');
let passwordInput = document.getElementById('ipassword');
let confirm_passwordInput = document.getElementById('iconfirm_password');

nomInput.addEventListener('input', function () {
  if (nomInput.validity.patternMismatch) {
    nomInput.setCustomValidity('Le nom doit contenir entre 2 et 30 caractères (lettres, espaces et tirets uniquement).');
  } else {
    nomInput.setCustomValidity('');
  }
});

prenomInput.addEventListener('input', function () {
  if (prenomInput.validity.patternMismatch) {
    prenomInput.setCustomValidity('Le prénom doit contenir entre 2 et 30 caractères (lettres, espaces et tirets uniquement).');
  } else {
    prenomInput.setCustomValidity('');
  }
});

emailInput.addEventListener('input', function () {
  if (emailInput.validity.typeMismatch) {
    emailInput.setCustomValidity('Veuillez entrer une adresse email valide.');
  } else {
    emailInput.setCustomValidity('');
  }
});

passwordInput.addEventListener('input', function () {
  if (passwordInput.validity.patternMismatch) {
    passwordInput.setCustomValidity('Votre mot de passe doit comporter au moins 8 caractères.');
  } else {
    passwordInput.setCustomValidity('');
  }
});

confirm_passwordInput.addEventListener('input', function () {
  if (passwordInput.value !== confirm_passwordInput.value) {
    confirm_passwordInput.setCustomValidity('Les mots de passe ne correspondent pas.');
  } else {
    confirm_passwordInput.setCustomValidity('');
  }
});

form.addEventListener('submit', function (event) {
  if (!form.checkValidity()) {
    event.preventDefault();
    alert("Veuillez corriger les erreurs dans le formulaire avant de soumettre.");
  }
});


// Ce formulaire est un exemple d'inscription pour un utilisateur. Il collecte plusieurs informations importantes telles 
// que le nom, le prénom, l'email, le mot de passe et la confirmation du mot de passe.

// Le code JavaScript associé ajoute des fonctionnalités de validation au formulaire. Voici une explication 
// détaillée des différentes parties du code :

//    1 - Définition des éléments du formulaire : Au début du script, nous obtenons des références à tous les champs de 
//    saisie et au formulaire lui-même en utilisant leurs identifiants (id).

//    2 - Validation des entrées : Pour chaque champ de saisie, un écouteur d'événement 'input' est ajouté. 
//    Cet écouteur déclenche une fonction à chaque fois que l'utilisateur modifie la valeur du champ de saisie. 
//    Chaque fonction vérifie la validité du contenu du champ correspondant :

//         - Pour le nom et le prénom, le contenu doit correspondre à un motif spécifique, qui est une expression régulière
//          définie dans l'attribut pattern du champ de saisie HTML. Si le contenu ne correspond pas à ce motif, une erreur 
//          de validation est définie pour ce champ.

//         - Pour l'email, la validation intégrée du type d'entrée email est utilisée. Si le contenu n'est pas un email valide,
//          une erreur de validation est définie pour ce champ.

//         - Pour le mot de passe, une validation similaire à celle du nom et du prénom est utilisée. De plus, il y a une
//          vérification supplémentaire pour s'assurer que le mot de passe et la confirmation du mot de passe sont identiques.

//    3 - Prévention de la soumission de formulaire invalide : Enfin, un écouteur d'événement 'submit' est ajouté au formulaire. 
//    Cet écouteur déclenche une fonction qui vérifie si tous les champs de saisie sont valides avant de permettre la soumission
//     du formulaire. Si le formulaire n'est pas valide, la soumission est empêchée et un message d'alerte est affiché pour 
//     informer l'utilisateur qu'il y a des erreurs à corriger.

// Ainsi, ce code garantit que le formulaire ne peut être soumis que si toutes les entrées sont valides, ce qui protège contre
//  la soumission de données incorrectes ou malveillantes



