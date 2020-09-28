<?php

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
		echo $this->couleur." "."de"." ".$this->valeur."<br>\n";

	} 
}


$c1 = new Carte( "As", "pique");

$c1->show();
// As de Pique







?>