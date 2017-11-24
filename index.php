<?php
require_once "connexion.php";
$sql = "SELECT 
  id, 
  nom, 
  type 
FROM
  ingredient
;";
$stmt = $conn->prepare($sql);
$stmt->execute();
// gestion d'erreur de requete
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des ingredients</title>
    <link rel="stylesheet" href="css/brian.css">
</head>
<body>
<a href="add.php">+ Ajouter</a>
<table>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>type</th>
        <th>action</th>
    </tr>
    <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <tr>
        <td><?=$row["id"]?></td>
        <td><?=$row["nom"]?></td>
        <td><?=$row["type"]?></td>
        <td></td>
    </tr>
    <?php endwhile;?>
</table>
</body>
</html>