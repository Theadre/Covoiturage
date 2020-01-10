<p>Creation d'une annonce</p>
<form method="post" action="AnnoncePage.php">
    
    <label for="name">ville A : </label>
    <input type="text" name="villeA" value="ville 2">
    <br />
    <br />
    <label for="name">date A : </label>
    <input type="date" name="dateA" value="<?php echo date('Y-m-d'); ?>">
    <br />
    <br />
    <label for="name">ville D : </label>
    <input type="text" name="villeD" value="ville 1">
    <br />
    <br />
    <label for="name">date D : </label>
    <input type="date" name="dateD" value="<?php echo date('Y-m-d'); ?>">
    <br />
    <br />
    <label for="name">nombre de places : </label>
    <input type="number" name="nPlace" value="4">
    <br />
    <br />
    <label for="name">prix : </label>
    <input type="number" name="prix" value="1000">
    <br />
    <br />
    <label for="name">Voiture : </label>
    <select name="voiture" id="">
        <?php foreach ($voitures as $e) { ?>
            <option value="<?php echo $e->id ?>"><?php echo $e->marque ?></option>
        <?php } ?>
    </select>
    <br />
    <br />
    <label for="name">Conducteur : </label>
    <select name="idConducteur" id="">
        <?php foreach ($users as $e) { ?>
            <option value="<?php echo $e->id ?>"><?php echo $e->nom ?></option>
        <?php } ?>
    </select>
    <br />
    <br />
    <label for="name">auteur : </label>
    <select name="auteur" id="">
        <?php foreach ($users as $e) { ?>
            <option value="<?php echo $e->id ?>"><?php echo $e->nom ?></option>
        <?php } ?>
    </select>
    <br />
    <br />
    <input type="submit" value="Créer">
    <input type="reset" value="Effacer">
</form>
<br />

<table border="1">
    <tr>
        <td>id</td>
        <td>ville A</td>
        <td>date A</td>
        <td>ville D</td>
        <td>date D</td>
        <td>nombre de places</td>
        <td>prix</td>
        <td>voiture</td>
        <td>idConducteur</td>
        <td>auteur</td>

    </tr>
    <?php foreach ($list as $e) { ?>
        <tr>
            <td><?php echo $e->id; ?></td>
            <td><?php echo $e->villeA; ?></td>
            <td><?php echo $e->dateA; ?></td>
            <td><?php echo $e->villeD; ?></td>
            <td><?php echo $e->dateD; ?></td>
            <td><?php echo $e->nPlace; ?></td>
            <td><?php echo $e->prix; ?></td>
            <td><?php echo $e->voiture; ?></td>
            <td><?php echo $e->idConducteur; ?></td>
            <td><?php echo $e->auteur; ?></td>
        </tr>
    <?php } ?>
</table>