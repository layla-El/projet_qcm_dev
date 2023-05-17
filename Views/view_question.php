<!-- MAIN -->
<!-- QUESTIONS -->


<div class="container">

    <main id="mainQuestions">

        <h1>HTML</h1>
        <h3><?php echo $question['texte']; ?></h3>

        <form id="formChoix">

            <?php foreach ($reponses['choix'] as $reponse) : ?>

                <div class="choix" onclick="selectChoice(this)">
                    <?php echo $choix['texte']; ?>
                </div>

            <?php endforeach; ?>

            <input type="buttonSubmit" value="Suivant" onclick="submitForm()">
        </form>

    </main>
</div>

</body>

</html>