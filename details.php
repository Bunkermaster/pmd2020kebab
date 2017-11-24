<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 24/11/2017
 * Time: 14:14
 */
if (!isset($_GET['id'])) {
    header("Location: index.php?error=noidtodetails");
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
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    header("Location: index.php?error=nodatatodetails");
    exit;
}
head("Details de ".$row['nom']);
?>
    <h1><?=$row['nom']?></h1>
    <p><?=$row['type']?></p>
<?php foot();?>