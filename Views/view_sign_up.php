<!-- MAIN -->
<!-- INSCRIPTION -->

<div class="container">
    <main>


        <h1> Inscription</h1>

        <form id="connexionForm" action="?controller=sign_up&action=insert_user" method="post">

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

            <div class="ButtonSubmitDiv">
                <button type="submit" id="sign_up" name="submit" class="btnSubmit"><a href="?controller=sign_up&action=home">Retour à la connexion ? </a></button>
            </div>

        </form>

    </main>
</div>