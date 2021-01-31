process.stdin.resume();
process.stdin.setEncoding('utf-8');

let complexity = "";

process.stdin.on('data', chunk => {
    complexity += chunk;
});

process.stdin.on('end', () => {
    complexity = complexity.split("\n").map(s => parseInt(s));

    const tasks = parseInt(complexity.shift());
    const days = complexity.pop();

    console.log(findMinComplexity(complexity, days));

});

function findMinComplexity(complexity, days) {
    const count = complexity.length;

    let options = [];
    let day = 0;

    for (let i = 0; i < count; i++) {
        if (i+1 > days) {

        }
        let current = complexity[i++];
        let next = complexity[i];
        if (current > next) {
            options.push(next);
        }

        console.log(options);
    }

    return 4;
}