console.log("Labas");

// var data = prompt ("Ivesk savo gimimo data");
// console.log("ivestas skaicius: " + data);

// document.write("<h1> Pakeistas </h1> ");
//
// alert("<h1>gagaga!</h1>");

for (x = 0; x < 50; x++) {
    console.log("Azuolas");
}

function ivestaReiksme(x) {

    console.log("ivesta reiksme: " + x);

}
ivestaReiksme("karolis");

for (x = 0; x < 150; x++) {
    ivestaReiksme("karolis");
}

text = "-"
for (i = 0; i <= 30; i++) {
    text = text + i; // text += " " + i;
}
console.log("-" + text);
// -------------------------------------------
function piestiEilute(ilgis, simbol = "-") {
    eilute = ""
    for (i = 0; i < ilgis; i++) {
        eilute = eilute + simbol;
    }
    console.log(eilute);
    document.write(eilute);
}
// piestiEilute(50);
// ---------------------
function piestiStulpeli(aukstis) {
    for (i = 0; i < aukstis; i++) {}
    console.log("|");
    document.write("| <br>");
}
piestiEilute(50);
console.log(" NR    |    Vardas    |     Pavarde    |");
document.write(" NR    |    Vardas    |     Pavarde    |");
piestiEilute(50, "=");
piestiStulpeli(50);
// piestiStulpeli(5);
// piestiStulpeli(5);
// piestiStulpeli(5);
// piestiStulpeli(5);
// piestiEilute(50);

img = "<img href= '' width='100px' height='100px'/>"

// document.write(img);
// document.write(img);
// document.write(img);
// document.write("<br>");
// document.write(img);
// document.write(img);
// document.write(img);
// document.write("<br>");
// for (i = 0; i < 3; i++) {
//     document.write(img);
// }
// document.write("<br>");
// for (i = 0; i < 3; i++) {
//     document.write(img);
// }
// document.write("<br>");
// for (i = 0; i < 3; i++) {
//     document.write(img);
// }
// document.write("<br>");
// ARBA

for (i = 0; i < 5; i++) { // spauzdina eilutes
    document.write("<br>");
    for (t = 0; t < 10; t++) { // t skaitliukas
    document.write(img);
    }
}
