<!-- MAIN -->
<!-- HOME -->

<div class="container">

  
    <h2>Welcome</h2>
    <main id="mainIndex">
        <?php

        foreach ($themes as $theme) : ?>


            <div>
                <a href="?controller=themes&action=afficher_niveaux_par_theme&id_theme=<?= $theme->id_theme ?>">
                    <div class="categories"><img src="Content/images/<?= $theme->image_theme ?>" alt="white geometrical item"></div>
                    <p><?= $theme->libelle_theme ?></p>
                </a>
            </div>

        <?php endforeach; ?>


    </main>
</div>