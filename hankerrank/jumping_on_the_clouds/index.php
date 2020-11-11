<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds( $c ) {
	$count = count( $c );
	$jumps = 0;
	for( $i = 0; $i < $count; ) {
		if( isset( $c[ $i + 2 ] ) && $c[ $i + 2 ] == 0 ) {
			$jumps++;
			$i += 2;
		} elseif( isset( $c[ $i + 1 ] ) && $c[ $i + 1 ] == 0 ) {
			$jumps++;
			$i += 1;
		} else {
			++$i;
		}
	}

	return $jumps;
}

$stdin = fopen( "php://stdin", "r" );

fscanf( $stdin, "%d\n", $n );

fscanf( $stdin, "%[^\n]", $c_temp );

$c = array_map( 'intval', preg_split( '/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY ) );

$result = jumpingOnClouds( $c );

echo $result."\n";

fclose( $stdin );
