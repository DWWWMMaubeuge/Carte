<?php


function setHeader()
{ 
echo "<!DOCTYPE html>";
echo "<html lang=\"fr\">";
echo "<head>";
echo "<meta charset=\"UTF-8\">";
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<link rel=\"stylesheet\" href=\"carte.css\">";
echo "<title>carte</title>";
echo "</head>";
echo "<body>";
echo "<div class=\"container_cartes\">\n";
echo "<div>\n";
echo "<div class=\"container_cartes\">\n";
echo "</div>\n";
    
echo "</body>";

echo "</html>";
}
$cards_valeur = array( 'as', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix', 'valet', 'cavalier', 'dame', 'roi' );
$cards_couleur = array( 'carreau' , 'pique', 'coeur', 'trefle' );


function Card2Num( $couleur, $valeur )
{
	//echo "Card2Num( $couleur, $valeur )<br>";
	$cards_valeur = array( 'as'=>0, 'deux'=>1, 'trois'=>2, 'quatre'=>3, 'cinq'=>4, 'six'=>5, 'sept'=>6, 'huit'=>7, 'neuf'=>8, 'dix'=>9, 'valet'=>10, 'cavalier'=>11, 'dame'=>12, 'roi'=>13 );
	$cards_couleur = array( 'carreau'=>0 , 'pique'=>1, 'coeur'=>2, 'trefle'=>3 );


	$ic = $cards_couleur[ $couleur ];
	$iv = $cards_valeur[ $valeur ];
	//echo " $ic, $iv<br>";
	return 22 + ($ic*14) + $iv; 
}

function Card2Img( $couleur, $valeur )
{
	$num = Card2Num( $couleur, $valeur );
	return "images/$num.jpg"; 
}



?>