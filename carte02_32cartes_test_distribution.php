<?php

$__TEST = false;

include_once( "CA_fonctions_generales.php");
include_once( "CA_Carte.php");
include_once( "CA_Jeu.php");


setHeaderNoCache();

$jeu1 = new Jeu();
$jeu1->init32();

//echo "=== show en 4 lignes de 8  ===<br>";
echo "=== show de 32  ===<br>";
$jeu1->show();
//$jeu1->show();

echo "=== distrib 40  ===<br>";
$nouveauJeu1 = $jeu1->distribuer( 32 );

echo "============ Le nouveau jeu  ===================<br>";

$nouveauJeu1->showNL(4);

echo "========= Rest de carte dans le jeux =========<br>";
$jeu1->show();


?>