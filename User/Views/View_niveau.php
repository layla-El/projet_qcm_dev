<!-- MAIN -->
     <!-- NIVEAUX -->

     <div class="container">

         <?php foreach ($libelle_theme as $l) : ?>
             <h2><?= $l ?></h2>
         <?php endforeach; ?>
         
         <main id="mainNiveaux">


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
                     <a href="?controller=question&action=id_questions&id_theme=<?= $id_theme ?>&niveau=<?= $n->niveau ?>">
                         <div class="categories"><img src="Content/images/<?= $imageMapping[$n->niveau] ?>.png" alt="image"></div>
                         <p><?= $n->niveau ?></p>
                     </a>
                 </div>
             <?php endforeach; ?>
         </main>

     </div>