<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 24/11/2017
 * Time: 11:51
 */
require_once "connexion.php";
require_once "functions.php";
$sql = "SELECT 
  `id`, 
  `nom`, 
  `type` 
FROM
  `ingredient`
WHERE 
  `id` = :id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    header("Location: index.php?error=nodatatodelete");
    exit;
}
head("Supprimer ".$row['nom']);
?>
<div>
    T'es s&ucirc;r de vouloir supprimer <strong><?=$row['nom']?></strong>?
    <form action="dodelete.php" method="post">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <input type="submit" value="Oui, je le suis">
    </form>
</div>

<?php foot();?>