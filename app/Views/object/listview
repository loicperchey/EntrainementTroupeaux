<h2><?= esc($pageTitle) ?></h2>

<?php 
foreach(session()->getFlashdata() as $type => $message){
    echo "<div class='$type'>".$message."</div>";
}
?>

<table>
    <thread>
    <tr></tr>
    
    </thread>

    <!-- we use here a buckle (without $key here) to explore the array od the list-->
<?php if (!empty($list) && is_array($list)) { 
    foreach ($list as $list_item) { ?>
        <tr>
            <?php foreach($fields as $field){
                if(substr($field, 0, 2) != "id"){ ?>
                    <td><?= esc($list_item[$field]) ?></td>
                <?php } 
                 } ?>
           <td>
                <a href="<?= base_url()."/".$table."controller/showForm/".$list_item[$primaryKey];?>">Modifier</a>
                <a href="<?= base_url()."/".$table."controller/deleteItem/".$list_item[$primaryKey]; ?>">Supprimer</a>
            </td>
        </tr>
        
        <?php } ?>
    </table>
        
<?php } else { ?>

    <h3>Liste vide</h3>

<?php } ?>

<div style='margin-top:10px;text-align:center;'>
    <a href="<?= base_url()."/".$table."controller/showform"?>">Créer une <?=$pageTitle?></a>
</div>