<h2><?= esc($sheepfoldtitle) ?></h2>

<table>
    <thread>
    <tr>
    </tr> 
    </thread>

<?php if (!empty($sheepfold) && is_array($sheepfold)) { 
    foreach ($sheepfold as $sheepfold_item) { ?>
        <tr>
            <?php foreach($fields as $field){ ?>
                <td><?= esc($sheepfold_item[$field]) ?></td>
            <?php } ?>
           <!-- <td>
                <a href="<//?= base_url('shopupdate'.$shop.['idShop']); ?>">Modifier</a>
                <a href="<//?= base_url('shopremove'.$shop.['idShop']); ?>">Supprimer</a>
            </td>
        </tr>-->
       </table>

    <?php } ?>

<?php } else { ?>

    <h3>Aucune bergerie présente</h3>

<?php } ?>