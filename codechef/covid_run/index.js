process.stdin.resume();
process.stdin.setEncoding('utf-8');

let input = "";

process.stdin.on('data', chunk => {
    input += chunk;
});

process.stdin.on('end', () => {
    input = input.split("\n");

    const numberOfTestCases = parseInt(input.shift());

    for (let i = 0; i < numberOfTestCases; i++) {
        const data = input.shift().split(" ");

        console.log(
            (parseInt(data[0]) - Math.abs(parseInt(data[2]) - parseInt(data[3]))) % parseInt(data[1]) === 0
                ? "YES"
                : "NO"
        );
    }
});