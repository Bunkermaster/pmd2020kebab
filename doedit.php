<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 24/11/2017
 * Time: 14:33
 */
if (!isset($_POST['type']) || !isset($_POST['nom']) || !isset($_POST['id'])) {
    header("Location: index.php?error=noeditdataposted");
}
require_once "connexion.php";
$sql = "UPDATE 
  `ingredient` 
SET 
  `nom` = :nom,
  `type` = :type 
WHERE 
  `id` = :id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':type', $_POST['type']);
$stmt->execute();
errorHandler($stmt);
header("Location: details.php?id=".$_POST['id']);
