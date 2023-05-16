<main id="mainNiveaux">
    <?php foreach ($data["libelle_theme"] as $libelle_theme) : ?>
        <h1><?= $libelle_theme ?></h1>
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
            <a href="?controller=question&action=question&id_theme=<?= $data["id_theme"] ?>&niveau=<?= $niveau ?>">
                <div class="categories"><img src="Content/<?= $imageMapping[$n->niveau] ?>.png" alt="image"></div>
                <p><?=$n->niveau?></p>
            </a>
        </div>
    <?php endforeach; ?>
</main>
</div>
