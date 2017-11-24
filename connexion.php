<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 24/11/2017
 * Time: 11:40
 */
try {
    $conn = new PDO('mysql:dbname=kebab;host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
/**
 * gestion des erreurs de retour d'execution de PDO
 * @param PDOStatement $stmt
 * @return void
 */
function errorHandler(PDOStatement $stmt) : void
{
    if ($stmt->errorCode() !== '00000') {
        var_dump($stmt->errorInfo());
        die();
    }
}
