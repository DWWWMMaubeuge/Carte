<?php

$cards_valeur = array( 'as', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix', 'valet', 'cavalier', 'dame', 'roi' );
$cards_couleur = array( 'carreau' , 'pique', 'coeur', 'trefle' );


class Carte
{
	public $couleur;
	public $valeur;
	public $image;

	public function __construct(  $col, $val, $img )
	{
		$this->couleur = $col;
		$this->valeur  = $val;
		$this->image  = $img;
	} 

	public function show( )
	{	
		echo "<p>".$this->valeur." de ".$this->couleur."</p>\n";	
		//echo "<img src=>'" .$this->image."'  width='150' height='150' >" ;
}

	}

	


$c1 = new Carte( "Pique", "As","<img src= Photos-01.jpg>");



$c1->show();
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