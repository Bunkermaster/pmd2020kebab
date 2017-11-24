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
