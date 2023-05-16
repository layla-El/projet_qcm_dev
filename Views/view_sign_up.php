 <h4> Inscription</h4>
<div class="center-form" >
    <form  action="?controller=sign_up&action=insert_user" method="post" >
        
                <label for="nom"></label>
                <input type="text" id="inom" name="nom" placeholder="Nom"required />
                <br>
                <label for="prenom"></label>
                <input type="text" id="iprenom" name="prenom" placeholder="Prénom" required />
                <br>
                <label for="email"></label>
                <input type="email" id="imail" name="email" placeholder="Email" required />
                <br>
                <label for="password"></label>
                <input type="password" id="ipassword" name="password" placeholder="mot de passe" required />
                <br>
                <input type="submit" id="submit" name="submit" placeholder="S'inscrire" />
                <a href="?controller=sign_up&action=home">Retour à la connexion ? </a>
            
    </form>
</div>