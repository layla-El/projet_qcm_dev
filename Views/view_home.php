<h4>Connexion</h4>
<div  class="center-form">
    <form   action="?controller=login&action=login" method="post" >
        
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="<?= $_SESSION["error"]["lastEmail"] ?? "" ?>"/>
            
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" />
            
                <label for="submit"></label>
                <input type="submit" id="submit" name="submit" placeholder="Connexion" />
                
                <a id="sign_up" href="?controller=home&action=sign_up">Inscrivez-vous</a>
            
    </form>
</div>