<?php
$title = "Ajouter stagiaire";
ob_start();
?>
<form action="index.php?action=store" method="post">
    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="nom">
    </div>
    <div class="form-group">
        <label>Prénom</label>
        <input type="text" class="form-control" name="prenom">
    </div>
    <div class="form-group">
        <label>Ville</label>
        <input type="text" class="form-control" name="ville">
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
    </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php include_once '../views/layout.php'; ?>