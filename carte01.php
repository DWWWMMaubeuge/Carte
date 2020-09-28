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
	}

	public function show( )
	{
		
	}
}


$c1 = new Carte( "Pique", "As");

$c1->show();
$j1->show();
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
				array_push($cartes, Carte( $couleur, $valeur ));
			}
	}


	public function show()
	{
		foreach ($this->carte as $carte)
		{
			echo $carte->show()
		}

	}
}






?>