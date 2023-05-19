
<!-- MAIN -->
<!-- QUESTIONS -->

 <!-- Affichage de la question actuelle -->

 <!-- Formulaire pour passer à la question suivante -->
<div class="container">
<div id="chargingBar"><div id="chargingMove"></div>
    <main id="mainQuestions">
        <?php foreach ($libelle_theme as $l) : ?>
        <h1><?=$l?></h1>
        <?php endforeach; ?>
        <h3><?= $currentQuestion->libelle_question ?></h3>

        <form action="?controller=question&action=question&id_theme=<?= $id_theme?>&niveau=<?= $niveau ?>&question=<?= $questionIndex + 1 ?>"  id="formChoix">

            <div class="choix">
                <p>"em" est relative à la taille de police de caractères de l'élément racine, tandis que "rem" est absolue et ne change pas avec la taille de police de caractères de l'élément racine.</p>
            </div>

            <div class="ButtonSubmitDiv">
                <button type="submit" class="btnSubmit">VALIDER</button>
            </div>

        </form>

    </main>
</div>