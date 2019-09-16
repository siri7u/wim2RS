<?php
require 'vendor/autoload.php';
use Michelf\Markdown;


$str = "Test d'une librairie de **markdown**";
$str = Markdown::defaultTransform($str);

echo $str;

use MesClasses\Classe1; //nom complet pour pouvoir utiliser le nom simple
use MesClasses\Classe2 as C2; //renommage de Classe2 en C2
echo Classe1::info();
echo C2::info();

?>