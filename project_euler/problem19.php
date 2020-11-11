<?php
$months = [
	0  => fn() => 30,
	1  => fn( $year ) => ( $year == 1904 ) ? 29 : 28,
	2  => fn() => 31,
	3  => fn() => 30,
	4  => fn() => 31,
	5  => fn() => 30,
	6  => fn() => 31,
	7  => fn() => 31,
	8  => fn() => 30,
	9  => fn() => 31,
	10 => fn() => 30,
	11 => fn() => 31,
];

$monthNames = [
	0  => 'January',
	1  => 'February',
	2  => 'March',
	3  => 'April',
	4  => 'May',
	5  => 'June',
	6  => 'July',
	7  => 'August',
	8  => 'September',
	9  => 'October',
	10 => 'November',
	11 => 'December',
];

$weekDays = [
	0 => 'Sunday',
	1 => 'Monday',
	2 => 'Tuesday',
	3 => 'Wednesday',
	4 => 'Thursday',
	5 => 'Friday',
	6 => 'Saturday',
];

$day     = 1;
$weekDay = 1;
$month   = 0;
$year    = 1900;

$numOfMonths   = count( $months );
$numOfWeekDays = count( $weekDays );

for( $year = 1900; $year < 2001; $year++ ) {
	for( ; $month < $numOfMonths; $month++ ) {
		for( ; $day <= $months[ $month ]( $year ); $day++ ) {
			for( ; $weekDay < $numOfWeekDays; $weekDay++ ) {
				echo $weekDays[ $weekDay ].' '.( $month + 1 ).'/'.$day.'/'.$year.PHP_EOL;
			}

			if( $weekDay == $numOfWeekDays ) {
				$weekDay = 0;
			}
		}

		if( $day == $months[ $month ]( $year ) ) {
			$day = 1;
		}

	}

	if( $month == $numOfMonths ) {
		$month = 0;
	}
}