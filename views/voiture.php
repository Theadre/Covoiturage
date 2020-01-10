<p>Ajout d'une Voiture</p>
<form method="post" action="VoiturePage.php">
    <label for="name">marque : </label>
    <input type="text" name="marque">
    <br />
    <br />
    <label for="name">model : </label>
    <input type="text" name="model">
    <br />
    <br />
    <label for="name">couleur : </label>
    <input type="text" name="couleur">
    <br />
    <br />
    <label for="name">nombre de places : </label>
    <input type="text" name="nPlace">
    <br />
    <br />
    <input type="submit" value="Créer">
    <input type="reset" value="Effacer">
</form>
<br />

<table border="1">
    <tr>
        <td>id</td>
        <td>marque</td>
        <td>model</td>
        <td>couleur</td>
        <td>nombre de places</td>
    </tr>
    <?php foreach ($list as $e) { ?>
        <tr>
            <td><?php echo $e->id; ?></td>
            <td><?php echo $e->marque; ?></td>
            <td><?php echo $e->model; ?></td>
            <td><?php echo $e->couleur; ?></td>
            <td><?php echo $e->nPlace; ?></td>
        </tr>
    <?php } ?>
</table>