<br />
<tbody>
    <table class='table table-bordered table-responsive-md bg_table'>
        <thead>
            <tr>
                <th>Libellé de thème</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data["themes"] as $theme) : ?>
                <tr>
                    <td> <?= $theme->libelle_theme ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>