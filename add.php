<?php
require_once "functions.php";
head("Ajouter truc");
?>
<form action="doadd.php" method="post">
    <label for="">Nom</label> <input type="text" name="nom">
    <label for="">Type</label> <input type="text" name="type">
    <input type="submit" value="Ajouter">
</form>
<?php foot();?>