process.stdin.resume();
process.stdin.setEncoding('utf-8');

let input = "";

process.stdin.on('data', chunk => {
    input += chunk;
});

function run(daysUntilNone, maxQueriesPerDay, queriesPerDay) {
    let queriesTodo = 0;
    let day = 0;
    for (; day < daysUntilNone; day++) {
        queriesTodo += parseInt(queriesPerDay[day]);
        if (queriesTodo < maxQueriesPerDay) {
            console.log(++day);
            return;
        }
        queriesTodo -= maxQueriesPerDay;
    }

    if (queriesTodo > 0) {
        day += Math.floor(queriesTodo / maxQueriesPerDay);
    }

    console.log(++day);
}

process.stdin.on('end', () => {
    input = input.split("\n");

    const numberOfTestCases = parseInt(input.shift());
    for (let i = 0; i < numberOfTestCases; i++) {
        const caseInfo = input.shift().split(" ");
        const daysUntilNone = parseInt(caseInfo[0]);
        const maxQueriesPerDay = parseInt(caseInfo[1]);
        const queriesPerDay = input.shift().split(" ");
        run(daysUntilNone, maxQueriesPerDay, queriesPerDay);
    }
});