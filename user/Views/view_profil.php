<main id="mainProfil" class="grid-container">
    <div class="imgProfil"><img src="Content/images/star.png" alt=""></div>
    <h3><?= $_SESSION['prenom'] . " " . $_SESSION['nom'] ?></h3>

    <?php
    $themes = ["HTML", "CSS", "JS", "PHP"];
    for ($i = 0; $i < count($themes); $i++) : ?>

        <div class="theme">
            <h1><?= $themes[$i]; ?></h1>
            <section>
                <?php foreach ($lastScores as $score) : ?>
                    <?php if ($score['id_theme'] == ($i + 1)) : ?>
                        <div class="NivScore">
                            <div class="btnProfil">
                                <span class="level"><?= $score['niveau']; ?></span>
                            </div>
                            <div class="score">
                                <span class="score-value"><?= $score['score'] . "/10"; ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </section>
        </div>
    <?php endfor; ?>
</main>