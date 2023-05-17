     <!-- MAIN -->
     <!-- NIVEAUX -->

     <div class="container">
     <?php foreach ($libelle_theme as $l) : ?>
                 <h1><?= $l ?></h1>
         <main id="mainNiveaux">

             <?php endforeach; ?>
             <?php
                $imageMapping = [
                    "Débutant" => "star",
                    "Intermédiaire" => "square",
                    "Avancé" => "polygon"
                ];
                ?>
             <?php
                foreach ($niveaux as $n) : ?>
                 <div>
                     <a href="?controller=question&action=question&id_theme=<?= $id_theme ?>&niveau=<?= $n->niveau ?>">
                         <div class="categories"><img src="Content/images/<?= $imageMapping[$n->niveau] ?>.png" alt="image"></div>
                         <p><?= $n->niveau ?></p>
                     </a>
                 </div>
             <?php endforeach; ?>
         </main>
         
     </div>