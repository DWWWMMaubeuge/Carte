<?php

$card_val = array( 'As', 'Deux', 'Trois', 'Quatre', 'Cinq', 'Six', 'Sept', 'Huit', 'Neuf', 'Dix', 'Valet', 'Valet', 'Reine', 'Roi' );
$card_col = array( 'Carreau' , 'Pique', 'Qoeur', 'Trefle' );

class Carte
{
	public $couleur;
	public $valeur;

	public function __construct(  $col, $val )
	{
        $card_col = array(
            'H' => 'Coeur',
            'S' => 'Pique',
            'D' => 'Carreau',
            'C' => 'Trefle'
        );
        $card_val = array(
            'A' => 'As',
            '2' => 'Deux',
            '3' => 'Trois',
            '4' => 'Quatre',
            '5' => 'Cinq',
            '6' => 'Six',
            '7' => 'Sept',
            '8' => 'Huit',
            '9' => 'Neuf',
            '10' => 'Dix',
            'V' => 'Valet',
            'Q' => 'Reine',
            'K' => 'Roi'
        );
		$this->couleur = $col;
		$this->valeur = $val;
        $this->col_text = $card_col[$col];
        $this->val_text = $card_val[$val];
    }

	public function show( )
	{
		echo "<p>".$this->couleur."</p>\n";
		echo "<p>".$this->valeur."</p>\n";
	} __
}


$c1 = new Carte( "Pique", "As");

$c1.show();
// As de Pique

class Jeu
{
	public $cartes = array();


	public function __construct(  )
	{
		GLOBAL $cards_couleur, $cards_valeur;
		
		foreach( $cards_couleur as $couleur ) 
			foreach ($cards_valeur as $valeur) 
			{
				Carte( $couleur, $valeur );
			}
	}



}




?>