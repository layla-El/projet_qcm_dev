<div class="container">
    <main id= "mainIndex">
        <h1>Welcome</h1>
        <?php


        foreach ($themes as $theme) : ?>
            <div>
                <a href="?controller=question&action=niveau_question&id_theme=<?=$theme->id_theme ?>">
                    <div class="categories"><img src="Content/images/<?= $theme->image_theme ?>" alt=""></div>
                    <p><?= $theme->libelle_theme ?></p>
                </a>
            </div>

        <?php endforeach; ?>
        
        <!-- DIV TRICHE -->
<div></div>
<div></div>

    </main>
</div>