<!-- MAIN -->
<!-- CONNEXION -->

<div class="container">
    <main id="mainConnexion">

        <h1>Connexion</h1>
        <form id="connexionForm" action="?controller=login&action=login" method="post">

            <div class="choix">
                <input type="email" id="email" name="email" placeholder="Email <?= $_SESSION["error"]["lastEmail"] ?? "" ?>" />
            </div>

            <div class="choix">
                <input type="password" id="password" name="password" placeholder="Mot de passe" />
            </div>

            <div class="ButtonSubmitDiv">
                <button type="submit" id="submit" name="submit" placeholder="Connexion" class="btnSubmit">CONNEXION</button>
            </div>

        </form>

            <p>Pas encore de compte ?</p>

            <div class="ButtonSubmitDiv">
                <button type="submit" id="sign_up" name="submit" class="btnSubmit"><a id="sign_up" href="?controller=home&action=sign_up">S'inscrire ici</a></button>
            </div>

    </main>
</div>