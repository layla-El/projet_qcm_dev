<div class="container">
    <main>
        <h1>Welcome</h1>
        <?php


        foreach ($data["themes"] as $theme) : ?>
            <div>
                <a href="?controller=question&action=niveau_question&id_theme=<?= $theme->id_theme ?>">
                    <div class="categories"><img src="Content/images/<?= $theme->image_theme ?>" alt=""></div>
                    <p><?= $theme->libelle_theme ?></p>
                </a>
            </div>

        <?php endforeach; ?>


    </main>
</div>