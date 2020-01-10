<p>Creation d'un utilisateur</p>
<form method="post" action="UserPage.php">
    <label for="name">nom : </label>
    <input type="text" name="nom">
    <br />
    <br />
    <label for="name">prenom : </label>
    <input type="text" name="prenom">
    <br />
    <br />
    <label for="name">mail : </label>
    <input type="text" name="mail">
    <br />
    <br />
    <label for="name">date : </label>
    <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>">
    <br />
    <br />
    <label for="name">note : </label>
    <input type="text" name="note">
    <br />
    <br />
    <input type="submit" value="Créer">
    <input type="reset" value="Effacer">
</form>
<br />

<table border="1">
    <tr>
        <td>nom</td>
        <td>prenom</td>
        <td>mail</td>
        <td>date</td>
        <td>note</td>
    </tr>
    <?php foreach ($list as $e) { ?>
        <tr>
            <td><?php echo $e->nom; ?></td>
            <td><?php echo $e->prenom; ?></td>
            <td><?php echo $e->mail; ?></td>
            <td><?php echo $e->date; ?></td>
            <td><?php echo $e->note; ?></td>
        </tr>
    <?php } ?>
</table>