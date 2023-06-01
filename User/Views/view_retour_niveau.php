    <!-- MAIN -->
    <!-- NIVEAUX -->

    <div class="container">

    <h1><?php echo $libelle_theme->libelle_theme; ?></h1> <!-- est ce qu'il faut utiliser fetchAll ou non ici ? est ce qu'on récupère une seule valeur ou plsueiurs ? -->

        <main id="mainNiveaux">


            <?php
            $imageMapping = [
                "Débutant" => "star",
                "Intermédiaire" => "square",
                "Avancé" => "polygon"
            ];
            ?>

            <?php
            foreach ($niveaux as $niveau) : ?>
                <div>
                    <a href="?controller=question&action=id_questions&id_theme=<?php echo $id_theme; ?>&niveau=<?= $niveau->niveau ?>">
                        <div class="categories"><img src="Content/images/<?= $imageMapping[$niveau->niveau] ?>.png" alt="image"></div>
                        <p><?php echo $niveau->niveau; ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </main>

    </div>