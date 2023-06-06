<!-- MAIN -->
<!-- INSCRIPTION -->

<div class="container">
    <main id="mainConnexion">


        <h1> Inscription</h1>

        <form id="connexionForm" action="?controller=inscription&action=traitement_inscription" method="post">

            <div class="choix">
                <input type="text" id="inom" name="nom" placeholder="Nom" pattern="[a-zA-Z\s-]{2,30}" title="Le nom doit contenir entre 2 et 30 caractères (lettres, espaces et tirets uniquement)." required />
            </div>

            <div class="choix">
                <input type="text" id="iprenom" name="prenom" placeholder="Prénom" pattern="[a-zA-Z\s-]{2,30}" title="Le prénom doit contenir entre 2 et 30 caractères (lettres, espaces et tirets uniquement)." required />
            </div>

            <div class="choix">
                <input type="email" id="imail" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Entrez un email valide. Par exemple: monemail@domaine.com" required />
            </div>

            <div class="choix">
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