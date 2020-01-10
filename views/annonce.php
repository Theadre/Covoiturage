<p>Creation d'une annonce</p>
<form method="post" action="AnnoncePage.php">
    <label for="name">idConducteur : </label>
    <input type="text" name="idConducteur">
    <br />
    <br />
    <label for="name">ville A : </label>
    <input type="text" name="villeA">
    <br />
    <br />
    <label for="name">date A : </label>
    <input type="text" name="dateA">
    <br />
    <br />
    <label for="name">ville D : </label>
    <input type="text" name="villeD">
    <br />
    <br />
    <label for="name">date D : </label>
    <input type="text" name="dateD">
    <br />
    <br />
    <label for="name">nombre de places : </label>
    <input type="text" name="nPlace">
    <br />
    <br />
    <label for="name">prix : </label>
    <input type="text" name="prix">
    <br />
    <br />
    <label for="name">voiture : </label>
    <input type="text" name="voiture">
    <br />
    <br />
    <label for="name">commentaires : </label>
    <input type="text" name="commentaires">
    <br />
    <br />
    <label for="name">auteur : </label>
    <input type="text" name="auteur">
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
        <td>commentaires</td>
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
            <td><?php echo $e->commentaires; ?></td>
        </tr>
    <?php } ?>
</table>