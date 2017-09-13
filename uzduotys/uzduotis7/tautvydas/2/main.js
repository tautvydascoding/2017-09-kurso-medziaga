console.log("Labas");


// var data = prompt("Ivesk savo gimimo data");
// console.log("ivestas skaicius: " + data);


document.write("<h1> Pakeistas</h1> ");
// window.alert("Labas, eik is cia");







// uzduotis 0
// uzduotis 50 kartu atspausdinti zodi: "Azuolas"

for ( i = 0; i < 50; i++) {
    console.log("Azuolas" + i);
    document.write("Azuolas <br>");
}

// uzduotis 1)
// A) susikurit f-ja (x) kuri  atspausdina paduota reiksme
// B) 150 kartu paleisti sia ^ f-ja, (paduodant "i" reiksme)

// 1A
function spaudinti (x) {
    console.log("x = ", x);
}
spaudinti('Karolis');
// 1B
for (i = 0; i < 150; i++) {
    spaudinti('Karolis ' + i);
}





// --------------------------- += , ++ --------------
// i = i + 1;   // tai yra tas kas i += 1;
// i++;  // i + 1 (i padidieja vienetu)  arba mazinant  k--;



//  -----------texta sulipdo i viena eilute
// i = 0;
// text = "";
// while (i < 10) {
//     text += "The number is " + i;  // text = text + "The number is " + i
//     i++;
// }
// console.log(text);

// uzdavinnys 2
// isvesti 150 skaiciu vienoje eiluteje

text = "Pradzia";
for (i = 0; i <= 150; i++) {
    text = text + " " + i;    // text += " " + i;
}
console.log(text);


 //// ------------------------------------------------------------
//// |    nr     |     Name     |     lName    |
//// ------------------------------------------------------------
//// |
//// |
//// |
//// |
//// |
//// ------------------------------------------------------------------
//
////  3) piestiEilute(x)    f-ja kurioje while ciklas nupiesia eilete (x - skaicius kokio ilgio nupiesti)
//// A) susikurti f-ja
//// B) i f-ja ^ ideti while cikla
//// C) uz while atspausdintin suskaiciuota eilute
//
////  4) piestiStulpeli(x)    f-ja kioje while ciklas nupiesia stulpeli
//// 5) nupiestiLentelesStulpeliuPavadinimus(firstColName, secondColName, lastColName) Nereik while!

function piestiEilute(ilgis, simbol = "-") {  // default reikme simbol = "-"
    eilute = "";
    for (i = 0; i < ilgis; i++) {
        eilute = eilute +  simbol;
    }
    console.log(eilute);
    document.write(eilute);
}

function piestiStulpeli(auktis) {
    for (i = 0; i < auktis; i++) {
        console.log( i + "|");
        document.write("|     <br>");
    }
}

piestiEilute(50);
console.log("   NR   |       Vardas     |       Pavarde     |");

piestiEilute(50, "=");
piestiStulpeli(5);
piestiEilute(50);

// uzduotis 6
// panaudojant for loop atspausdinti 2 eilutes po 3 paveiksliukus

img = "<img src='' width='100px' height='100px'/>   ";

document.write( "<br>" );
 document.write( img );
 document.write( img );
 document.write( img );
document.write( "<br>" );
document.write( img );
document.write( img );
document.write( img );


//  arba
document.write( "<br>" );
for (i = 0; i < 3; i++) {
    document.write(img)
}
document.write( "<br>" );
for (i = 0; i < 3; i++) {
    document.write(img)
}

// arba

for (i = 0; i < 5; i++) {  // spausdina eilutes
    document.write( "<br>" );  // isveda i dokumenta
    //
    for (var t = 0; t < 10; t++) { //  t - skaitliukas
        document.write(img)
    }
}

//
