<div class="container">
    <main>
        <h1>Welcome</h1>
        <?php
        $themes = $data["themes"]; //

        foreach ($themes as $theme) : ?>


            <div>
                <a href="">
                    <div class="categories"><img src="Content/images/<?= $theme->image_theme ?>" alt=""></div>
                    <p><?= $theme->libelle_theme ?></p>

                </a>
            </div>

        <?php endforeach; ?>


    </main>
</div>