<?php

include ( 'C_FonctionsGenerales.php');
include ( 'carte01.php');
include ( 'jeu01.php');

setHeaderNoCache();

$j1 = new Jeu();
$j1->initTarot();

$j1->show();
$j1->trier();
echo "===============================<br>";
$j1->show();

$j1->melanger();
echo "===============================<br>";
$j1->show();

$nj1 = $j1->distribuer( 10 );
$nj2 = $j1->distribuer( 10 );
$nj3 = $j1->distribuer( 10 );
$nj4 = $j1->distribuer( 10 );


echo "===============================<br>";

$nj1->show();
$nj2->show();
$nj3->show();
$nj4->show();

echo "===============================<br>";
$j1->show();


?>