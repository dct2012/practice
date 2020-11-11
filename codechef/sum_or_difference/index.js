process.stdin.resume();
process.stdin.setEncoding('utf-8');

let input = "";

process.stdin.on('data', chunk => {
    input += chunk;
});

process.stdin.on('end', () => {
    const data = input.split("\n");
    const n1 = parseInt(data[0]);
    const n2 = parseInt(data[1]);
    console.log(n1 > n2 ? n1 - n2 : n1 + n2);
});