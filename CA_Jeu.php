<?php

//$__TEST = true;

include_once( "CA_fonctions_generales.php");
include_once( "CA_Carte.php");


class Jeu
{
	// array carte contient le jeu de carte
	public $cartes;
	public $break;

	public function __construct( )
	{
		$this->cartes = array();
		$this->break = 1;
	}

	public function initTarot(  )
	{
		GLOBAL $cards_valeur;
		$this->init( $cards_valeur, 14 );
	}

	public function init32(  )
	{
		GLOBAL $cards_valeur32;
		$this->init( $cards_valeur32, 8 );
	}


	private function init( $array_carte, $longuer_ligne )
	{
		GLOBAL $cards_couleur;
		$this->break = $longuer_ligne;

		foreach( $cards_couleur as $couleur ) 
		{
			$code = 65;
			foreach ($array_carte as $valeur)
			{ 
				array_push( $this->cartes, new Carte( $couleur, $valeur, chr($code) ));
				$code++; 
			}
		}
	}


	public function show()
	{
			$this->_show( $this->break );
	}

	public function showNL( $nl )
	{
		$breakL = count( $this->cartes ) / $nl;
		$this->_show( $breakL );
	}

	private function _show( $breakL )
	{
		$cpt = 1;
		echo "<div class=\"container_cartes\">\n";
		foreach ($this->cartes as $carte )
		{ 
			echo $carte->show();
			if ( $cpt++ % $breakL == 0)
			{
				echo "</div>\n";
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



	public function distribuer( $nbrCarteADistribuer)
	{
		$newJeu = new Jeu();

		if ( count( $this->cartes) >= $nbrCarteADistribuer )
		{
			while( $nbrCarteADistribuer-- )
			{
				$carte = $this->donnerUneCarte();
				$newJeu->prendreUneCarte(   $carte   );	
			}
			// on retourne un jeu qui contient $nbrCarteADistribuer
		}
		else
			throw new Exception("je n'ai pas assez de carte.");

		return $newJeu;
	}
}






//if ( $__TEST )
{
	setHeaderNoCache();

	echo "section des tests de CA_Jeu.php <br>";

	$jeu1 = new Jeu();
	$jeu1->initTarot();

	$jeu1->show();
	$jeu1->trier();
	echo "===============================<br>";
	$jeu1->show();
	// affiche le jeu de tarot trié

	$jeu1->melanger();
	echo "===============================<br>";
	$jeu1->show();
	// affiche le jeu de tarot mélangé

	$nouveauJeu1 = $jeu1->distribuer( 10 );
	$nouveauJeu2 = $jeu1->distribuer( 10 );
	$nouveauJeu3 = $jeu1->distribuer( 10 );
	$nouveauJeu4 = $jeu1->distribuer( 10 );


	echo "===============================<br>";

	$nouveauJeu1->show();
	$nouveauJeu2->show();
	$nouveauJeu3->show();
	$nouveauJeu4->show();

	//echo " affiche 4 jeux de 10 cartes chacun";


	echo "===============================<br>";
	$jeu1->show();
	// affiche les 12 cartes non distribuées


	$joueurEnfant1 = $nouveauJeu4->distribuer(5);
	$joueurEnfant2 = $nouveauJeu4->distribuer(5);

	$joueurEnfant1->show();
	$joueurEnfant2->show();
	// affiche 2 jeux de 5 cartes chacun



	echo "===============================<br>";
	$nouveauJeu4->show();
	// affiche rien car le jeu est vide
}
?>