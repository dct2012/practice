<?php

/*
 * Complete the 'countingValleys' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER steps
 *  2. STRING path
 */

function countingValleys( $steps, $path ) {
	$level   = 0;
	$valleys = 0;
	for( $i = 0; $i < $steps; $i++ ) {
		$previousLevel = $level;
		if( $path[ $i ] == 'U' ) {
			++$level;
		} else {
			--$level;
		}

		if( $previousLevel == 0 && $level == -1 ) {
			++$valleys;
		}
	}

	return $valleys;
}

$fptr = fopen( getenv( "OUTPUT_PATH" ), "w" );

$steps = intval( trim( fgets( STDIN ) ) );

$path = rtrim( fgets( STDIN ), "\r\n" );

$result = countingValleys( $steps, $path );

fwrite( $fptr, $result."\n" );

fclose( $fptr );
