<?php

$cards_valeur = array( 'as', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix', 'valet', 'cavalier', 'dame', 'roi' );
$cards_couleur = array( 'carreau' , 'pique', 'coeur', 'trefle' );

class Carte
{
	public $couleur;
	public $valeur;

	public function __construct(  $col, $val )
	{
		$this->couleur = $col;
		$this->valeur = $val;

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
        $this->col = $col;
        $this->val = $val;
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