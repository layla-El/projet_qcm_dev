<!-- MAIN -->
<!-- CONNEXION -->

<div class="container">
    <main>

        <h1>Connexion</h1>
        <form id="connexionForm" action="?controller=connexion&action=traitement_connexion" method="post">

            <div class="choix">
                <input type="email" id="email" name="email" placeholder="Email <?= $_SESSION["error"]["lastEmail"] ?? "" ?>" />
            </div>

            <div class="choix">
                <input type="password" id="password" name="password" placeholder="Mot de passe" />
            </div>

            <div class="ButtonSubmitDiv">
                <button type="submit" id="submit" name="submit" placeholder="Connexion" class="btnSubmit">CONNEXION</button>
            </div>
            <p>Pas encore de compte ?</p>

            <div class="ButtonSubmitDiv">
                <button type="submit" id="sign_up" name="submit" class="btnSubmit"><a id="sign_up" href="?controller=inscription&action=afficher_inscription">S'inscrire ici</a></button>
            </div>

        </form>
    </main>
</div> 