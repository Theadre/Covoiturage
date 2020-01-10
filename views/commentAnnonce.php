<p>Creation d'un commentaire annonce</p>
<form method="post" action="CommentaireAnnoncePage.php">
    <label for="name">texte : </label>
    <textarea name="texte" rows="5" cols="40">exemple texte</textarea>
    <br />
    <br />
    <label for="name">utilisateurAuteur : </label>
    <select name="utilisateurAuteur" id="">
        <option value="1">user 1</option>
        <option value="2">user 2</option>
    </select>
    <br />
    <br />
    <label for="name">annonceAssocie : </label>
    <select name="annonceAssocie" id="">
        <option value="1">user 1</option>
        <option value="2">user 2</option>
    </select>
    <br />
    <br />
    <label for="name">datePublication : </label>
    <input type="date" name="datePublication" value="<?php echo date('Y-m-d'); ?>">
    <br />
    <br />
    <input type="submit" value="Créer">
    <input type="reset" value="Effacer">
</form>
<br />

<table border="1">
    <tr>
        <td>id</td>
        <td>texte</td>
        <td>utilisateurAuteur</td>
        <td>datePublication</td>
        <td>annonceAssocie</td>
    </tr>
    <?php foreach ($list as $e) { ?>
        <tr>
            <td><?php echo $e->id; ?></td>
            <td><?php echo $e->texte; ?></td>
            <td><?php echo $e->utilisateurAuteur; ?></td>
            <td><?php echo $e->datePublication; ?></td>
            <td><?php echo $e->annonceAssocie; ?></td>
        </tr>
    <?php } ?>
</table>