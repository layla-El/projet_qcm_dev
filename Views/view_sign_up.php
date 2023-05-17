 <h1> Inscription</h1>
<div class="center-form" >
    <form  action="?controller=sign_up&action=insert_user" method="post" >
        
                <label for="nom"></label>
                <input type="text" id="inom" name="nom" placeholder="Nom"required />
              
                <label for="prenom"></label>
                <input type="text" id="iprenom" name="prenom" placeholder="Prénom" required />
                
                <label for="email"></label>
                <input type="email" id="imail" name="email" placeholder="Email" required />
                
                <label for="password"></label>
                <input type="password" id="ipassword" name="password" placeholder="mot de passe" required />
                
                <input type="submit" id="submit" name="submit" placeholder="S'inscrire" />
                <a href="?controller=sign_up&action=home">Retour à la connexion ? </a>
            
    </form>
</div>