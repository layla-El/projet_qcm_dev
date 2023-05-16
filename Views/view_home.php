<!-- MAIN -->

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

<!-- <div class="container">
    
    <main id="mainIndex">
        <h1>Welcome</h1>

         comment mettre ça en hover 
        <div> <a href="pageHtml.html">
                <div class="categories"><img src="../Content/star.png" alt=""></div>
                <p>HTML</p>
            </a>
        </div>

        <div><a href="pageHtml.html">
                <div class="categories"><img src="../Content/square.png" alt=""></div>
                <p>CSS</p>
            </a>
        </div>
        <div><a href="pageHtml.html">
                <div class="categories"><img src="../Content/polygon.png" alt=""></div>
                <p>JS</p>
            </a>
        </div>
        <div><a href="pageHtml.html">
                <div class="categories"><img src="../Content/circle.png" alt=""></div>
                <p>PHP</p>
            </a>
        </div>

        DIV TRICHE 
        <div></div>
        <div></div>

    </main> -->

</div>