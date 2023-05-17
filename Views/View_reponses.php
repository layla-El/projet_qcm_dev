<?php 
foreach ($data["reponses"] as $key => $r) : ?>
                <tr>
                    <td> <?= htmlentities($r->libelle_reponse)?></td>
                </tr>
            <?php endforeach; ?>

            