<?php

//$__TEST = true;

include_once( "CA_fonctions_generales.php");


class Carte
{
	public $couleur;
	public $lettre_fantome;
	public $valeur;

	public function __construct(  $col, $val, $lettre="A" )
	{
		//echo "__construct(  $col, $val, $lettre )<br>\n";
		$this->couleur = $col;
		$this->valeur = $val;
		$this->lettre_fantome = $lettre;
	}

	public function show( )
	{
		$img = Card2Img( $this->couleur, $this->valeur );
		//echo "$img <br>";
		return "<div class=\"carte_vignette\"><img src=\"$img\" width=\"75\" height=\"125\"><br>".$this->valeur."</div>\n"; 
	}
}



//if ( $__TEST )
{

echo "section des tests de CA_Carte.php <br>";


$c1 = new Carte( "pique", "roi" );
echo $c1->show();
// afficher le roi d'épée (Piquue)
}

?>