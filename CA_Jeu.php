<?php

$__TEST = true;

include_once( "CA_fonctions_generales.php");
include_once( "CA_Carte.php");


class Jeu
{
	// array carte contient le jeu de carte
	public $cartes;

	public function __construct( )
	{
		$this->cartes = array();
	}

	public function initTarot(  )
	{
		GLOBAL $cards_couleur, $cards_valeur;

		foreach( $cards_couleur as $couleur ) 
		{
			$code = 65;
			foreach ($cards_valeur as $valeur)
			{ 
				array_push( $this->cartes, new Carte( $couleur, $valeur, chr($code) ));
				$code++; 
			}
		}
	}

	public function init32(  )
	{
		GLOBAL $cards_couleur, $cards_valeur;

		foreach( $cards_couleur as $couleur ) 
		{
			$code = 65;
			foreach ($cards_valeur as $valeur)
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



	public function distribuer( $nbrCarteADistribuer )
	{
		$newJeu = new Jeu();

		while( $nbrCarteADistribuer )
		{
			$carte = $this->donnerUneCarte();
			$newJeu->prendreUneCarte(   $carte   );	
		}
		// on retourne un jeu qui contient $nbrCarteADistribuer
		return $newJeu;
	}
}






if ( $__TEST )
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