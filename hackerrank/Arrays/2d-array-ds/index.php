<?php

// Complete the hourglassSum function below.
function hourglassSum( $arr ) {
	$maxSum = null;
	$width  = count( $arr ) - 3;
	$length = count( $arr[ 0 ] ) - 3;

	for( $i = 0; $i <= $width; $i++ ) {
		for( $j = 0; $j <= $length; $j++ ) {
			$sum = $arr[ $j ][ $i ] + $arr[ $j ][ $i + 1 ] + $arr[ $j ][ $i + 2 ] +
				$arr[ $j + 1 ][ $i + 1 ] +
				$arr[ $j + 2 ][ $i ] + $arr[ $j + 2 ][ $i + 1 ] + $arr[ $j + 2 ][ $i + 2 ];

			if( $sum > $maxSum ) {
				$maxSum = $sum;
			}
		}
	}

	return $maxSum;
}

$stdin = fopen( "php://stdin", "r" );

$arr = [];

for( $i = 0; $i < 6; $i++ ) {
	fscanf( $stdin, "%[^\n]", $arr_temp );
	$arr[] = array_map( 'intval', preg_split( '/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY ) );
}

$result = hourglassSum( $arr );

echo $result."\n";

fclose( $stdin );
