<!-- MAIN -->
<!-- CONNEXION -->

<div class="container">
    <main>

        <h1>Connexion</h1>
        <form id="connexionForm" action="?controller=connexion&action=traitement_connexion" method="post">

            <div class="choix">
                <input type="email" id="email" name="email" placeholder="Email <?= $_SESSION["error"]["lastEmail"] ?? "" ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
            </div>

            <div class="choix">
                <input type="password" id="password" name="password" placeholder="Mot de passe" pattern=".{8,}" title="Le mot de passe doit contenir au moins 8 caractères." required />
            </div>

            <!-- L'attribut pattern utilise une expression régulière pour définir le modèle. Dans l'exemple ci-dessus, [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$ 
            est une expression régulière pour un e-mail valide et .{8,} est une expression régulière qui vérifie si le mot de passe a au moins 8 caractères.
            L'attribut title est utilisé pour fournir une bulle d'aide qui décrit le modèle requis. Lorsque l'utilisateur soumet le formulaire avec une entrée 
            qui ne correspond pas au modèle, la bulle d'aide apparaîtra. -->



            <div class="ButtonSubmitDiv">
                <button type="submit" id="submit" name="submit" placeholder="Connexion" class="btnSubmit">CONNEXION</button>
            </div>

            <p>Pas encore de compte ?</p>

            <div class="ButtonSubmitDiv">
                <a id="sign_up" href="?controller=inscription&action=afficher_inscription" class="btnSubmit">S'inscrire ici</a>
            </div>


        </form>
    </main>
</div>