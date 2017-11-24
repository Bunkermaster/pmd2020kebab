<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 24/11/2017
 * Time: 12:08
 */
if (!isset($_POST['id'])) {
    header("Location: index.php?error=noidtodelete");
    exit;
}
require_once "connexion.php";
$sql = "DELETE FROM 
  `ingredient` 
WHERE 
  `id` = :id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
errorHandler($stmt);
header("Location: index.php");
