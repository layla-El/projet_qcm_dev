<!-- MAIN -->
<!-- INSCRIPTION -->

<div class="container">
    <main id="mainConnexion">

        <h1> Inscription</h1>

        <form id="connexionForm" action="?controller=inscription&action=traitement_inscription" method="post">

            <div class="choix">
                <label for="inom" class="visuallyhidden">Nom</label>
                <input type="text" id="inom" name="nom" placeholder="Nom" pattern="[a-zA-Z\s-]{2,30}" title="Le nom doit contenir entre 2 et 30 caractères (lettres, espaces et tirets uniquement)." required />
            </div>

            <div class="choix">
                <label for="iprenom" class="visuallyhidden">Prénom</label>
                <input type="text" id="iprenom" name="prenom" placeholder="Prénom" pattern="[a-zA-Z\s-]{2,30}" title="Le prénom doit contenir entre 2 et 30 caractères (lettres, espaces et tirets uniquement)." required />
            </div>

            <div class="choix">
                <label for="imail" class="visuallyhidden">Email</label>
                <input type="email" id="imail" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Entrez un email valide. Par exemple: monemail@domaine.com" required />
            </div>

            <div class="choix">
                <label for="ipassword" class="visuallyhidden">Mot de passe</label>
                <input type="password" id="ipassword" name="password" placeholder="Mot de passe" pattern=".{8,}" title="Le mot de passe doit contenir au moins 8 caractères." required />
            </div>

            <div class="ButtonSubmitDiv">
                <button type="submit" id="submit" name="submit" class="btnSubmit">INSCRIPTION</button>
            </div>

        </form>

        <!-- Dans cet exemple, [a-zA-Z\s-]{2,30} est une expression régulière qui vérifie si l'entrée contient uniquement 
        des lettres, des espaces et des tirets, avec une longueur minimale de 2 et une longueur maximale de 30 -->

        <div class="Button">
            <a id="sign_up" href="?controller=connexion&action=afficher_connexion" class="btnSubmit">Retour à la connexion ?</a>
        </div>

    </main>

</div>

    <!-- L'utilisation de l'élément <label> en conjonction avec <input> n'est pas obligatoire du point de vue du code, 
    mais elle est considérée comme une bonne pratique pour plusieurs raisons :

     1 - Accessibilité : Les lecteurs d'écran utilisent les éléments <label> pour informer les utilisateurs non voyants
         de ce que fait l'input. Si vous n'utilisez pas un label, les personnes qui utilisent un lecteur d'écran ne sauront
         pas à quoi sert l'input.

     2 - Ergonomie : En associant un label à un input, vous rendez la zone cliquable pour l'input plus grande. Un utilisateur
         peut cliquer sur le label pour sélectionner l'input, ce qui est particulièrement utile pour de petits éléments comme
         les cases à cocher et les boutons radio.

     3 - Compréhension : Les labels fournissent une indication textuelle pour les utilisateurs de ce que l'input est censé 
         contenir, améliorant ainsi l'expérience utilisateur. 
        
        
        
         Il est possible de rendre un label invisible à l'aide de CSS, tout en le gardant accessible aux technologies
         d'assistance comme les lecteurs d'écran. C'est souvent une technique utilisée lorsque le design de l'interface
         utilisateur ne prévoit pas de labels visibles, mais que vous voulez toujours maintenir l'accessibilité.-->