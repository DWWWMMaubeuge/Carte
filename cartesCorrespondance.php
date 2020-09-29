<?php

$cards_array =
[
'fool',
'magician',
'HP',
'empress',
'emperor',
'hierophant',
'lovers',
'chariot',
'justice',
'hermit',
'wheel',
'strength',
'hanged',
'death',
'temperance',
'devil',
'tower',
'star',
'moon',
'sun',
'judgement',
'wordl',
'1W',    //22
'2W',
'3W',
'4W',
'5W',
'6W',
'7W',
'8W',
'9W',
'0W',
'PW',
'CW',
'QW',
'1C', //36
'2C',
'3C',
'4C',
'5C',
'6C',
'7C',
'8C',
'9C',
'0C',
'PC',
'CC',
'QC',
'KC',
'1S',
'2S',
'4S',
'5S',
'6S',
'8S',
'9S',
'0S',
'PS',
'CS',
'QS',
'KS',
'1P', //64
'2P',
'3P',
'4P',
'5P',
'6P',
'7P',
'8P',
'9P',
'0P',
'PP',
'CP',
'QP',
'KP' //77
];

<<<<<<< HEAD
$cards_valeur = array( 'as', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix', 'valet', 'cavalier', 'dame', 'roi' );
$cards_couleur = array( 'carreau' , 'pique', 'coeur', 'trefle' );



function Code2Num( $code )
{
	GLOBAL $cards_array;
	return array_search( $code, $cards_array );
}

=======
$cards_valeur = array( 'as'=>0, 'deux'=>1, 'trois'=>2, 'quatre'=>3, 'cinq'=>4, 'six'=>5, 'sept'=>6, 'huit'=>7, 'neuf'=>8, 'dix'=>9, 'valet'=>10, 'cavalier'=>11, 'dame'=>12, 'roi'=>13 );
$cards_couleur = array( 'carreau'=>0 , 'pique'=>1, 'coeur'=>2, 'trefle'=>3 );



>>>>>>> master
function Card2Num( $couleur, $valeur )
{
	echo "Card2Num( $couleur, $valeur )<br>";
	GLOBAL $cards_couleur, $cards_valeur;
<<<<<<< HEAD
	if ( $valeur == 0 )
		$valeur = 'as';

	$ic = array_search( $couleur, $cards_couleur );
	$iv = array_search( $valeur , $cards_valeur );
=======

	$ic = $cards_couleur[ $couleur ];
	$iv = $cards_valeur[ $valeur ];
>>>>>>> master
	echo " $ic, $iv<br>";
	return 22 + ($ic*14) + $iv; 
}

function Card2Img( $couleur, $valeur )
{
	$num = Card2Num( $couleur, $valeur );
	return $num.".jpg"; 
}


echo Card2Img( 'carreau', 'as' )."<br>"; 
echo Card2Img( 'trefle', 'roi' )."<br>"; 
<<<<<<< HEAD
echo Card2Img( 'trefle', 'deux' )."<br>"; 
=======
echo Card2Img( 'trefle', 'as' )."<br>"; 
>>>>>>> master
echo Card2Img( 'trefle', 'dix' )."<br>"; 
echo Card2Img( 'trefle', 'dame' )."<br>"; 

?>