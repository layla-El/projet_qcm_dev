<!-- MAIN -->
<!-- PROFIL -->
<main id="mainProfil">

<div class="container">
        <div class="imgProfil"><img src="Content/images/profil.png" alt=""></div>
        <h3> <?= $_SESSION['name'] ." ". $_SESSION['prenom'] ?></h3>




        <div>
        <h1>HTML</h1>
        <section>
            <?php foreach ($lastScores as $score) : ?>
                <?php if ($score['id_theme'] == 1) : ?>
                    <div class="btnProfil">
                    <?= $score['niveau']; ?> : <?= $score['score']; ?>
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
                        <?= $score['niveau']; ?> : <?= $score['score']; ?>
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
                        <?= $score['niveau']; ?> : <?= $score['score']; ?>
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
                        <?= $score['niveau']; ?> : <?= $score['score']; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </section>
        </div>
</div>
</main>