<?php

$__TEST = false;

include_once( "CA_fonctions_generales.php");
include_once( "CA_Carte.php");
include_once( "CA_Jeu.php");


setHeaderNoCache();

$jeu1 = new Jeu();
$jeu1->init32();

//echo "=== show en 4 lignes de 8  ===<br>";
echo "=== show en 8 lignes de 4  ===<br>";
$jeu1->showNL(8);
//$jeu1->show();
$jeu1->trier();
echo "=== show en 4 lignes de 8  ===<br>";
$jeu1->show();

$jeu1->melanger();
echo "=== show en 4 lignes de 8  ===<br>";
$jeu1->show();

$nouveauJeu1 = $jeu1->distribuer( 10 );
$nouveauJeu2 = $jeu1->distribuer( 10 );
$nouveauJeu3 = $jeu1->distribuer( 10 );


echo "============ 3 jeux de  10 ===================<br>";

$nouveauJeu1->show();
$nouveauJeu2->show();
$nouveauJeu3->show();

echo "===============================<br>";
$jeu1->show();

$joueurEnfant1 = $nouveauJeu4->distribuer(5);
$joueurEnfant2 = $nouveauJeu4->distribuer(5);

$joueurEnfant1->show();
$joueurEnfant2->show();

echo "===============================<br>";
$nouveauJeu4->show();


?>