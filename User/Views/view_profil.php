<!-- MAIN -->
<!-- PROFIL -->

<div class="container">

    <div class="imgProfil"><img src="Content/images/profil.png" alt=""></div>
    <h3> <?= $_SESSION['name'] ." ". $_SESSION['prenom'] ?></h3>
    <h3> <?= $_SESSION['id_utilisateur'] ?></h3>
    <p>Dernier score:<?= $score1->score?></p>


    <main id="mainProfil">

        <div>
            <h1>HTML</h1>
            <section>
                <div class="btnProfil">Débutant</div>
                <div class="btnProfil">Intermédiaire</div>
                <div class="btnProfil">Avancé</div>
            </section>
        </div>



        <div>
            <h1>CSS</h1>
            <section>
                <div class="btnProfil">Débutant</div>
                <div class="btnProfil">Intermédiaire</div>
                <div class="btnProfil">Avancé</div>
            </section>
        </div>



        <div>
            <h1>JS</h1>
            <section>
                <div class="btnProfil">Débutant</div>
                <div class="btnProfil">Intermédiaire</div>
                <div class="btnProfil">Avancé</div>
            </section>
        </div>



        <div>
            <h1>PHP</h1>
            <section>
                <div class="btnProfil">Débutant</div>
                <div class="btnProfil">Intermédiaire</div>
                <div class="btnProfil">Avancé</div>
            </section>
        </div>




    </main>

</div>