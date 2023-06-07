<!-- MAIN -->
<!-- PROFIL -->

<div class="container">


    <main id="mainProfil">

        <div class="imgProfil"><img src="Content/images/star.png" alt=""></div>
        <h3><?= $_SESSION['prenom'] . " " . $_SESSION['name'] ?></h3>

        <?php
        $themes = ["HTML", "CSS", "JS", "PHP"];
        for ($i = 0; $i < count($themes); $i++) : ?>

            <div class="theme-card">

                <h1><?= $themes[$i]; ?></h1>

                <section>
                    <?php foreach ($lastScores as $score) : ?>
                        <?php if ($score['id_theme'] == ($i + 1)) : ?>

                            <div class="score-container">
                                <div class="btnProfil">
                                    <span class="level"><?= $score['niveau']; ?></span>
                                </div>
                                <div class="score">
                                    Score: <span class="score-value"><?= $score['score']; ?></span>
                                </div>
                            </div>

                        <?php endif; ?>
                    <?php endforeach; ?>
                </section>

            </div>

        <?php endfor; ?>
    </main>

</div>


<!-- Ce code génère une page de profil pour un utilisateur, qui affiche le prénom, le nom de famille,
 l'image de profil et les scores de l'utilisateur pour différents thèmes : HTML, CSS, JavaScript et PHP.
1 -Dans une div avec la classe "imgProfil", on affiche une image (qui est probablement l'image de profil de l'utilisateur).
2 -Ensuite, on affiche le prénom et le nom de l'utilisateur dans un h3.
3 -Après cela, nous avons un tableau appelé $themes qui contient les noms de quatre thèmes : HTML, CSS, JavaScript et PHP. 
Pour chaque thème, nous faisons les choses suivantes :
 - Nous créons une div avec la classe "theme-card", qui contient une h1 avec le nom du thème.
 - Nous avons une section qui contient les scores de l'utilisateur pour ce thème. Pour chaque score dans le tableau 
 $lastScores :
    - Nous vérifions si l'id_theme du score correspond à l'index du thème actuel (plus 1, car les indices de tableau en 
    PHP commencent à 0, tandis que les id_theme commencent probablement à 1).
    Si c'est le cas, nous créons une div avec la classe "score-container". Celle-ci contient une autre div avec la classe
 "btnProfil", qui affiche le niveau associé au score, et une div avec la classe "score", qui affiche le score lui-même. -->