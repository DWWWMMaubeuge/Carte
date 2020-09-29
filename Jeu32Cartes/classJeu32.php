<?php

class Jeu
{
	public $cartes;

	public function __construct( )
	{
		$this->cartes = array();
	}

	public function init32()
	{
		GLOBAL $cards_couleur, $cards_valeur32;

		foreach( $cards_couleur as $couleur ) 
		{
			$code = 65;
			foreach ($cards_valeur32 as $valeur)
			{ 
				array_push( $this->cartes, new Carte( $couleur, $valeur, chr($code) ));
				$code++; 
			}
		}
    }
    public function show()
	{
		$break = 14;
		$cpt = 1;
		echo "<div class=\"container_cartes\">\n";
		foreach ($this->cartes as $carte )
		{ 
			echo $carte->show();
			if ( $cpt++ % $break == 0)
			{
				echo "<div>\n";
				echo "<div class=\"container_cartes\">\n";
			}
		}
		echo "</div>\n";
	}

	public function trier()
	{
		asort( $this->cartes );
	}

	public function melanger()
	{
		shuffle( $this->cartes );
	}

	public function donnerUneCarte()
	{

		$carte  = array_pop($this->cartes);
		return  $carte;
	}

	public function prendreUneCarte( $carte )
	{
		array_push( $this->cartes, $carte );
	}


	public function distribuer( $nbrCarteADistribuer )
	{
		$newJeu = new Jeu();

		while( $nbrCarteADistribuer-- )
		{
			$carte = $this->donnerUneCarte();
			$newJeu->prendreUneCarte(   $carte   );	
		}
		// on retourne un jeu qui contient $nbrCarteADistribuer
		return $newJeu;
	}
}
?>