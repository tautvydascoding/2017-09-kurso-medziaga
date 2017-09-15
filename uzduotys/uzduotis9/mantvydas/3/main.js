console.log("Labas");

// 1
// var masyvas = [];
// i = 0;
// for (var i = 0; i < 50; i++) {
//     var randomTvarka = Math.floor(Math.random() * (101 - 10)) + 10;
//     masyvas [i] = randomTvarka
// }
//
// console.log(masyvas);

// 2
// var masyvas = [];
// i = 0;
// for (var i = 0; i < 50; i++) {
//     var randomTvarka = Math.floor(Math.random() * (101 - 10)) + 10;
//     masyvas[i] = randomTvarka
//
//     if (randomTvarka % 2 == 0) {
//         masyvas[i] = 'lyginis';
//     } else {
//         masyvas[i] = randomTvarka;
//     }
// }
// console.log(masyvas);

// 3

// var t = 0;
// var gaminiuSk = [];
//
// while (t < 50) {
//     // Math.floor(Math.random() * (max - min)) + min;
//     var randomTvarka = Math.floor(Math.random() * (201 - 50)) + 50;
//     if (Math.random() < 0.1) {
//         gaminiuSk[t] = randomTvarka * (-1);
//     } else {
//         gaminiuSk[t] = randomTvarka;
//     }
//     t++;
// }
// console.log(gaminiuSk.join(" "));

// 4 modulis


// a = Math.abs(-1);
// console.log(a);

var t = 0;
var gaminiuSk = [];

while (t < 50) {
    // Math.floor(Math.random() * (max - min)) + min;
    var randomTvarka = Math.floor(Math.random() * (201 - 50)) + 50;
    if (Math.random() < 0.1) {
        gaminiuSk[t] = randomTvarka * (-1);
        if (gaminiuSk[t] < 0) {
            a = Math.abs(gaminiuSk[t]);
            console.log(a);
        }
    } else {
        gaminiuSk[t] = randomTvarka;
    }
    t++;
}
console.log(gaminiuSk.join(" "));

// 4 rasti geriausia ir prasciausia
var didziausias = 0;
var geriausiasDarbuotojas = 0;
for (var i = 0; i < gaminiuSk.length; i++) {
    if (didziausias < gaminiuSk[i]) {
        didziausias = gaminiuSk[i];
        geriausiasDarbuotojas = i;
    }
}
console.log("rez" + geriausiasDarbuotojas);








//
