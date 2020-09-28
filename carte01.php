<?php

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







?>