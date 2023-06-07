<!-- MAIN -->
<!-- INSCRIPTION -->

<div class="container">
    <main id="mainConnexion">


        <h1> Inscription</h1>

        <form id="connexionForm" action="?controller=inscription&action=traitement_inscription" method="post">

            <div class="choix">
                <input type="text" id="inom" name="nom" placeholder="Nom" required />
            </div>

            <div class="choix">
                <input type="text" id="iprenom" name="prenom" placeholder="Prénom" required />
            </div>

            <div class="choix">
                <input type="email" id="imail" name="email" placeholder="Email" required />
            </div>

            <div class="choix">
                <input type="password" id="ipassword" name="password" placeholder="mot de passe" required />
            </div>

            <div class="ButtonSubmitDiv">
                <button type="submit" id="submit" name="submit" class="btnSubmit">INSCRIPTION</button>
            </div>
        </form>
        <div class="ButtonSubmitDiv">
            <button type="" id="sign_up" class="btnSubmit"><a href="?controller=connexion&action=afficher_connexion">Retour à la connexion ? </a></button>
        </div>
    </main>
</div>