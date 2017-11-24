<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 24/11/2017
 * Time: 12:19
 */

/**
 * header html
 * @param string $title
 */
function head($title = "lol", $retourliste = true)
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/brian.css">
</head>
<body>
<?php
    if ($retourliste){
?>
    <a href="index.php"> &lt; Retour liste</a>
<?php
    }
?>
<?php
}

/**
 * footer html
 */
function foot(){
?>
</body>
</html>
<?php
}
