<?php
require_once "functions.php";
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
errorHandler($stmt);
head("Liste des ingredients", false);
?>

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
        <td><a href="delete.php?id=<?=$row["id"]?>">Delete</a></td>
    </tr>
    <?php endwhile;?>
</table>
<?php foot();?>