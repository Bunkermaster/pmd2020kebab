<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 24/11/2017
 * Time: 14:22
 */
if (!isset($_GET['id'])) {
    header("Location: index.php?error=noidtoedit");
    exit;
}
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
errorHandler($stmt);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    header("Location: index.php?error=nodatatoedit");
    exit;
}
head("Modifier ".$row['nom']);
?>
    <form action="doedit.php" method="post">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <label for="">Nom</label> <input type="text" name="nom" value="<?=$row['nom']?>">
        <label for="">Type</label> <input type="text" name="type" value="<?=$row['type']?>">
        <input type="submit" value="Modifier">
    </form>
<?php foot();?>

