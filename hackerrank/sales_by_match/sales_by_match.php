<?php

// Complete the sockMerchant function below.
function sockMerchant( $n, $ar ) {
	$socks = [];
	foreach( $ar as $sock ) {
		if( isset( $socks[ $sock ] ) ) {
			$socks[ $sock ]++;
		} else {
			$socks[ $sock ] = 1;
		}
	}

	return array_sum( array_map( function( $sock ) {
		return floor( $sock / 2 );
	}, $socks ) );
}

$stdin = fopen( "php://stdin", "r" );

fscanf( $stdin, "%d\n", $n );

fscanf( $stdin, "%[^\n]", $ar_temp );

$ar = array_map( 'intval', preg_split( '/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY ) );

$result = sockMerchant( $n, $ar );

echo $result."\n";

fclose( $stdin );
