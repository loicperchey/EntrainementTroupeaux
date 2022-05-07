<form action="/<?=$table?>controller" method="post">
    <table>
    <?php 
    //here, foreach has a $key, the foreach assign fieldsFullName (from the Model, like SheepfoldModel) to the $fullName and $fieldName (the $key)
    foreach($fieldsFullName as $fieldName => $fullName){
        $value = "";
        if(isset($itemData[$fieldName])){
            $value = $itemData[$fieldName];
        }
        ?>
            <tr>
                <td>
                    <label for="<?=$fieldName?>"><?=$fullName?></label>
                </td>
                <td>
                    <?php
                    $txtInput = "";
                    if($fieldName == $primaryKey){
                        $txtInput = "disabled";
                        echo "<input type='hidden' name='".$fieldName."' value='".$value."'>";
                    } 
                    ?>
                    <?php

                    //Personaliser en fonction du type de la données renseignée dans le model
                    if($fieldsTypes[$fieldName] == "radio"){
                        echo "Vrai <input type='".$fieldsTypes[$fieldName]."' name='".$fieldName."' ".$txtInput." id='".$fieldName."' value='".$value."' />";
                        echo "Faux <input type='".$fieldsTypes[$fieldName]."' name='".$fieldName."' ".$txtInput." id='".$fieldName."' value='".$value."' /><br />";
                    } else if ($fieldsTypes[$fieldName] == "text") {
                        echo "<input type='".$fieldsTypes[$fieldName]."' name='".$fieldName."' ".$txtInput." id='".$fieldName."' value='".$value."' /><br />";
                    }

                    ?>
                </td>
            </tr>
        <?php
    }   ?>
    <tr>
        <td colspan=2 style='text-align:center'>
        <?php 
            $txt = "Créer";
            if($id > 0){
                $txt = "Mettre à jour";
            }?>
            <button type="submit"> <?= $txt ?> la boutique</button>
        </td>
    </tr>
</table>
</form>