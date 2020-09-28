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
		echo "<h1>".$this->couleur."</h1>\n";	
		echo "<h1>".$this->valeur."</h1>\n";
		echo "<img src='" .$this->image."'  width='150' height='150' >" ;
}
}

$c1 = new Carte( "Pique", "As","<imgsrc>");

$c1->show();
// As de Pique







?>