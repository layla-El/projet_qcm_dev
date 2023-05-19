<h1>Connexion</h1>
<div class="container">
    <form id="connexionForm" action="?controller=login&action=login" method="post">

        <div class="choix">
             <input type="email" id="email" name="email" placeholder="<?= $_SESSION["error"]["lastEmail"] ?? "" ?>" />
        </div>

        <div class="choix">
            <input type="password" id="password" name="password" placeholder="Mot de passe" />
        </div>

        <div class="ButtonSubmitDiv">
            <button type="submit" id="submit" name="submit" placeholder="Connexion" class="btnSubmit">CONNEXION</button>
        </div>

        <a id="sign_up" href="?controller=home&action=sign_up">Inscrivez-vous</a>

    </form>
</div>