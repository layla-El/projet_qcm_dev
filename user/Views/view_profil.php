<!-- MAIN -->
<!-- PROFIL -->

<div class="container">

    <main id="mainProfil">


        <div class="imgProfil"><img src="Content/images/star.png" alt=""></div>
        <h3> <?= $_SESSION['prenom'] . " " . $_SESSION['name'] ?></h3>


        <div>
            <h1>HTML</h1>
            <section>
                <?php foreach ($lastScores as $score) : ?>
                    <?php if ($score['id_theme'] == 1) : ?>
                        <div class="btnProfil">
                            <?= $score['niveau']; ?>
                        </div>
                        <div>
                            score : <?= $score['score']; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </section>
        </div>

        <div>
            <h1>CSS</h1>
            <section>
                <?php foreach ($lastScores as $score) : ?>
                    <?php if ($score['id_theme'] == 2) : ?>
                        <div class="btnProfil">
                            <?= $score['niveau']; ?>
                        </div>
                        <div>
                            score : <?= $score['score']; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </section>
        </div>

        <div>
            <h1>JS</h1>
            <section>
                <?php foreach ($lastScores as $score) : ?>
                    <?php if ($score['id_theme'] == 4) : ?>
                        <div class="btnProfil">
                            <?= $score['niveau']; ?>
                        </div>
                        <div>
                            score : <?= $score['score']; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </section>
        </div>


        <div>
            <h1>PHP</h1>
            <section>
                <?php foreach ($lastScores as $score) : ?>
                    <?php if ($score['id_theme'] == 3) : ?>
                        <div class="btnProfil">
                            <?= $score['niveau']; ?>
                        </div>
                        <div>
                            score : <?= $score['score']; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </section>
        </div>


    </main>

</div>


<!-- <div class="imgProfil"><img src="Content/images/profil.png" alt=""></div>
    <h3> <?= $_SESSION['prenom'] . $_SESSION['name'] ?></h3>
    <h3> <?= $_SESSION['id_utilisateur'] ?></h3> -->


<!-- <main id="mainProfil">

        <div>

            <h1>HTML</h1>

            <section>
                <div>
                    <div class="btnProfil">Débutant</div>
                    <p>Score:<?= $score->score ?></p>
                </div>
                <div>
                    <div class="btnProfil">Intérmédiaire</div>
                </div>
                <div>
                    <div class="btnProfil">Avancé</div>
                </div>
            </section>

        </div>



        <div>
            <h1>CSS</h1>
            <section>
                <div class="btnProfil">Débutant</div>
                <div class="btnProfil">Intérmédiaire</div>
                <div class="btnProfil">Avancé</div>
            </section>
        </div>



        <div>
            <h1>JS</h1>
            <section>
                <div class="btnProfil">Débutant</div>
                <div class="btnProfil">Intérmédiaire</div>
                <div class="btnProfil">Avancé</div>
            </section>
        </div>



        <div>
            <h1>PHP</h1>
            <section>
                <div class="btnProfil">Débutant</div>
                <div class="btnProfil">Intérmédiaire</div>
                <div class="btnProfil">Avancé</div>
            </section>
        </div>




    </main> -->