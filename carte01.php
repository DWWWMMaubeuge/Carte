<?php

$cards_valeur = array( 'as', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix', 'valet', 'cavalier', 'dame', 'roi' );
$cards_couleur = array( 'carreau' , 'pique', 'coeur', 'trefle' );


class Carte
{
	public $couleur;
	public $valeur;

	public function __construct(  $col, $val )
	{
		$this->couleur=$col;
		$this->valeur=$val;
	} 

	public function show( )
	{
		echo "<br>\n";		
		echo $this->couleur." "."de"." ".$this->valeur."<br>\n";	
	} 
}


$c1 = new Carte( "As", "Pique");

$c1->show();
// As de Pique


class Jeu
{
	public $cartes = array();


	public function __construct()
	{
		GLOBAL $cards_couleur, $cards_valeur;
		
		foreach( $cards_couleur as $couleur ) 
			foreach ($cards_valeur as $valeur) 
			{
				array_push($this->cartes,new Carte( $couleur, $valeur ));
			}
	}



}


?>