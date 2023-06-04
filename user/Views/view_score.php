    <!-- MAIN -->

    <div class="container">

        <main id="mainScore">
            <div class="imagesScore">
                <img class="violetStar" src="Content/images/starViolet.png" alt="Yellow star">
                <img class="greenStar" src="Content/images/starGreen.png" alt="Yellow star">
                <img class="yellowStar" src="Content/images/starYellow.png" alt="Yellow star">
                <img class="greenStar" src="Content/images/starGreen.png" alt="Yellow star">
                <img class="violetStar" src="Content/images/starViolet.png" alt="Yellow star">
            </div>
            <h1>B r a v o !</h1>
            <p>Votre score est de : <?= $_SESSION['score'] ?></p>


            <div class="ButtonSubmitDiv">
                <button type="submit" id="sign_up" name="submit" class="btnSubmit"><a id="sign_up" href="?controller=themes&action=retour_niveaux">Retour aux niveaux</a></button>
            </div>

            <form id="ScoreForm" action="?controller=score&action=traitement_score" method="post">
                <div class="ButtonSubmitDiv">
                    <button type="submit" id="score" name="score" value="<?= $profils ?>" class="btnSubmit">Enregistrer mon score</button>
                </div>
            </form>

        </main>

    </div>