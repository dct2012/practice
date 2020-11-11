process.stdin.resume();
process.stdin.setEncoding('utf-8');

let songs = "";

process.stdin.on('data', chunk => {
    songs += chunk;
});

process.stdin.on('end', () => {
    songs = songs.split("\n").map(s => parseInt(s));

    const songsCount = parseInt(songs.shift());
    console.log(getSongPairCount(songs));

});


/*
 * Complete the 'getSongPairCount' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts INTEGER_ARRAY songs as parameter.
 */

function getSongPairCount(songs) {
    let pairs = 0;
    let count = songs.length;

    for (let i = 0; i < count; i++) {
        const single = songs[i];

        for (let j = i + 1; j < count; j++) {
            const caller = songs[j];
            console.log(single + caller);
            if ((single + caller) % 60 === 0) {
                ++pairs;
            }
        }
    }

    return pairs;
}
