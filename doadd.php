<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 24/11/2017
 * Time: 11:38
 */
require_once "connexion.php";
$sql = "INSERT INTO 
  `ingredient` 
  (`id`, `nom`, `type`)
VALUES
  (NULL, :nom, :type)
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':type', $_POST['type']);
$stmt->execute();
if ($stmt->errorCode() !== '00000') {
    var_dump($stmt->errorInfo());
    die();
}
header("Location: index.php");
