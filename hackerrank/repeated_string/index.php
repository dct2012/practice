<?php

// Complete the repeatedString function below.
function repeatedString( $s, $n ) {
	$count      = 0;
	$extraCount = 0;

	$strLen = strlen( $s );
	$extra  = $n % $strLen;


	for( $i = 0; $i < $strLen; $i++ ) {
		if( $s[ $i ] == 'a' ) {
			$count++;

			if( $i < $extra ) {
				$extraCount++;
			}
		}
	}

	return floor( $n / $strLen ) * $count + $extraCount;
}

$stdin = fopen( "php://stdin", "r" );

$s = '';
fscanf( $stdin, "%[^\n]", $s );

fscanf( $stdin, "%ld\n", $n );

$result = repeatedString( $s, $n );

echo $result."\n";

fclose( $stdin );