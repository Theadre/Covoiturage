<p>Réservation d'une annonce</p>
<form method="post" action="ReservationPage.php">
    <label for="name">date : </label>
    <input type="text" name="date">
    <br />
    <br />
    <label for="name">idUtilisateur : </label>
    <input type="text" name="idUtilisateur">
    <br />
    <br />
    <label for="name">idAnnonce : </label>
    <input type="text" name="idAnnonce">
    <br />
    <br />
    <label for="name">status : </label>
    <input type="text" name="status">
    <br />
    <br />
    <input type="submit" value="Créer">
    <input type="reset" value="Effacer">
</form>
<br />

<table border="1">
    <tr>
        <td>id</td>
        <td>date</td>
        <td>idUtilisateur</td>
        <td>idAnnonce</td>
        <td>status</td>
    </tr>
    <?php foreach ($list as $e) { ?>
        <tr>
            <td><?php echo $e->id; ?></td>
            <td><?php echo $e->date; ?></td>
            <td><?php echo $e->idUtilisateur; ?></td>
            <td><?php echo $e->idAnnonce; ?></td>
            <td><?php echo $e->status; ?></td>
        </tr>
    <?php } ?>
</table>