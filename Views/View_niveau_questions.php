<main id="mainNiveaux">
<?php
        foreach ($data["themes"] as $theme) : ?>
    <h1><?=$theme->id_theme?></h1>
    <?php endforeach; ?>
    <?php
    $imageMapping = [
        "Débutant" => "star",
        "Intermédiaire" => "square",
        "Avancé" => "polygon"
    ];

    ?>

    <?php foreach ($data["niveaux"] as $n) : ?>
        <div>
        <a href="?controller=question&action=niveau_question&id_theme=<?= $theme->id_theme ?>">
                <div class="categories"><img src="Content/<?= $imageMapping[$n->niveau] ?>.png" alt="image"></div>
                <p><?php echo $n->niveau; ?></p>
            </a>
        </div>
    <?php endforeach; ?>
</main>
</div>