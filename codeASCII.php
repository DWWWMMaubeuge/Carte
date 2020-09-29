<?php

$lettre = 'A';
echo ord( $lettre );

echo "<br>";

for ($code = 65;  $code < 128 ; $code++ )
	echo chr( $code );

for ($code = ord( 'A' );  $code < ord( 'Z' ) ; $code++ )
	echo chr( $code );

?>