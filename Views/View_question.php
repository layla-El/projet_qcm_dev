
<?php foreach ($questions as $question) : ?>
    <h2><?= htmlentities($question->libelle_question) ?></h2>
    <?php foreach ($reponses as $reponse) : ?>
        <h2><?= htmlentities($reponse->libelle_reponse) ?></h2>
    <?php endforeach; ?>
<?php endforeach; ?>
