<style>

.container_cartes
{
  display: flex;
  flex-wrap: wrap;
}


.carte_vignette  
{
  background-color: #f1f1f1;
  width: 70px;
  margin: 3px;
  text-align: center;
  line-height: 15px;
  font-size: 10px;
}

</style>

<?php

$cards_valeur = array( 'as', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix', 'valet', 'cavalier', 'dame', 'roi' );
$cards_couleur = array( 'carreau' , 'pique', 'coeur', 'trefle' );


function Card2Num( $couleur, $valeur )
{
	//echo "Card2Num( $couleur, $valeur )<br>";
	$cards_valeur = array( 'as'=>0, 'deux'=>1, 'trois'=>2, 'quatre'=>3, 'cinq'=>4, 'six'=>5, 'sept'=>6, 'huit'=>7, 'neuf'=>8, 'dix'=>9, 'valet'=>10, 'cavalier'=>11, 'dame'=>12, 'roi'=>13 );
	$cards_couleur = array( 'carreau'=>0 , 'pique'=>1, 'coeur'=>2, 'trefle'=>3 );


	$ic = $cards_couleur[ $couleur ];
	$iv = $cards_valeur[ $valeur ];
	//echo " $ic, $iv<br>";
	return 22 + ($ic*14) + $iv; 
}

function Card2Img( $couleur, $valeur )
{
	$num = Card2Num( $couleur, $valeur );
	return "images/$num.jpg"; 
}







class Carte
{
	public $couleur;
	public $valeur;

	public function __construct(  $col, $val )
	{
		//echo "__construct(  $col, $val )<br>\n";
		$this->couleur = $col;
		$this->valeur = $val;
	}

	public function show( )
	{
		$img = Card2Img( $this->couleur, $this->valeur );
		//echo "$img <br>";
		return "<div class=\"carte_vignette\"><img src=\"$img\" width=\"75\" height=\"125\"><br>".$this->valeur."</div>\n"; 
	}
}


//$c1 = new Carte( "pique", "roi");
//echo $c1->show();
// As de Pique


class Jeu
{
	public $cartes = array();

	public function __construct(  )
	{
		GLOBAL $cards_couleur, $cards_valeur;

		foreach( $cards_couleur as $couleur ) 
			foreach ($cards_valeur as $valeur) 
				array_push( $this->cartes, new Carte( $couleur, $valeur ));
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



}

$j1 = new Jeu();
$j1->show();
$j1->trier();
echo "===============================<br>";
$j1->show();

$j1->melanger();
echo "===============================<br>";
$j1->show();




?>