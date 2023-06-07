<!-- MAIN -->
<!-- HOME -->

<div class="container">

  
    <h2>Welcome</h2>
    <main id="mainIndex">
    <?php
    foreach ($themes as $theme) : 
        $borderClass = $theme->completed ? 'categories-completed' : '';
    ?>

        <div>
            <a href="?controller=themes&action=afficher_niveaux_par_theme&id_theme=<?= $theme->id_theme ?>">
                <div class="categories <?= $borderClass ?>">
                    <img src="Content/images/<?= $theme->image_theme ?>" alt="white geometrical item">
                </div>
                <p><?= $theme->libelle_theme ?></p>
            </a>
        </div>

    <?php endforeach; ?>
</main>
</div>