<h2><?= esc($sheepfoldtitle) ?></h2>

<?php
echo session()->getFlashdata('error');
echo session()->getFlashdata('success');
echo service('validation')->listErrors();?>

<form action="/Sheepfoldcontroller" method="post">
    <?= csrf_field() ?>

    <label for="name">Nom du berger</label>
    <input type="input" name="name" id="name"/><br />

    <label for="adress">Adresse postale bergerie</label>
    <textarea name="adress" id="adress"></textarea><br />

    <label for="postCode">Code Postal</label>
    <input type="input" name="shopPostCode" id="shopPostCode"/><br />

    <label for="town">Ville</label>
    <input type="input" name="town" id="town"/><br />

    <label for="phoneNumber">Numéro de téléphone</label>
    <input type="input" name="phoneNumber" id="phoneNumber"/><br />

    <label for="siret">Siret</label>
    <input type="siret" name="siret" id="siret"/><br />

    <label for="rcs">RCS</label>
    <input type="rcs" name="rcs" id="rcs"/><br />

    <label for="numTVA">Numéro TVA</label>
    <input type="numTVA" name="numTVA" id="numTVA"/><br />

    <label for="capital">Capital</label>
    <input type="capital" name="capital" id="capital"/><br />

    <fieldset>
        <input type="radio" name="isActive" value="1" id="radioactive"><label for="radioActive">Active</label>
        <input type="radio" name="isActive" value="0" id="isNotActive"><label for="isActive">Non active</label>
    </fieldset>

    <input type="submit" name="submit" value="Create sheepfold" />
</form>