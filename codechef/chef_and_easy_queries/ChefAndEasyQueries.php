<?php

$numberOfTestCases = (int)getLine();

for($i = 0; $i < $numberOfTestCases; $i++) {
    run();
}

function getLine() {
    return fgets(STDIN);
}

function run() {
    $caseInfo = explode(' ', getline());
    $daysUntilNone = (int)$caseInfo[0];
    $maxQueriesPerDay = (int)$caseInfo[1];
    $queriesPerDay = explode(' ', getline());

    $queriesTodo = $day = 0;
    for(; $day < $daysUntilNone; $day++) {
        $queriesTodo += (int)$queriesPerDay[$day];
        if ($queriesTodo < $maxQueriesPerDay) {
            echo ++$day . PHP_EOL;
            return;
        }
        $queriesTodo -= $maxQueriesPerDay;
    }

    if ($queriesTodo > 0) {
        $day += floor($queriesTodo/ $maxQueriesPerDay);
    }

    echo ++$day . PHP_EOL;
    return;
}