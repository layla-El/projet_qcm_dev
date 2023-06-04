<!-- MAIN -->
<!-- PROFIL -->

<div class="container">

    <main id="mainProfil">

        <div class="imgProfil"><img src="Content/images/profil.png" alt=""></div>
        <h3> <?= $_SESSION['prenom'] . $_SESSION['nom'] ?></h3>

        <!-- Afficher le dernier score fait par un utilisateur
        <h1>Dernier score : <?php // echo $lastScore->score; 
                            ?></h1> -->
        <!-- <?php var_dump($lastScores) ?> -->
        <h1>HTML</h1>
        <section>
            <?php foreach ($lastScores as $score) : ?>
                <div class="btnProfil">
                    <?= $score['niveau']; ?> : <?= $score['score']; ?>
                </div>
            <?php endforeach; ?>
        </section>


        <h1>CSS</h1>

        <section>
            <div class="btnProfil">Débutant</div>
            <div class="btnProfil">Intérmédiaire</div>
            <div class="btnProfil">Avancé</div>
        </section>


        <h1>JS</h1>

        <section>
            <div class="btnProfil">Débutant</div>
            <div class="btnProfil">Intérmédiaire</div>
            <div class="btnProfil">Avancé</div>
        </section>


        <h1>PHP</h1>

        <section>
            <div class="btnProfil">Débutant</div>
            <div class="btnProfil">Intérmédiaire</div>
            <div class="btnProfil">Avancé</div>
        </section>




    </main>

</div>