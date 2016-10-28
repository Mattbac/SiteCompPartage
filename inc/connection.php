
<?php
//on peut creer un tableau grace aux []
$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
];
// je me connecte a la base PDO
define ("HOST", "localhost");
define ("DB", "sitecomp");
define ("LOGIN", "root");
define ("PASSWORD", "");

$connexion = new PDO(
 "mysql:host=".HOST.";dbname=".DB, LOGIN, PASSWORD, $options);
?>
