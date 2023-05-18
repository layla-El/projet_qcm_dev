<?php
var_dump($data["reponses"]);
?>
<?php foreach ($questions as $question) : ?>

    <p><?= htmlentities($question->libelle_question) ?></p>
<?php endforeach; ?>
