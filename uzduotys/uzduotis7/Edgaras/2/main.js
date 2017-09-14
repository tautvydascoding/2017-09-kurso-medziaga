console.log("Labas");


// var data=prompt("Įvesk savo gimimo datą");
// console.log("Įvestas skaičius:", data);

// paraso eilute html'e
document.write("<h2>Ko žiūri?");

// ismeta lentele
// window.alert("Iskrito lentele");


// IDEA: 0 uzduotis
// 50kartu isveda "azuolas"
for(i=0; i<50; i++) {
    console.log("Ąžuolas");
    document.write("Azuolas <br>");
}

// IDEA: 1 uzduotis
// A
function spausdinti(x) {
    console.log("x=", x);
}
spausdinti("Tomas");
// B
for(i=0; i<150; i++) {
    spausdinti("Tomas" + i);
}

// isveda 150 skaiciu vienoje eiluteje
text = "Pradzia"
for(i=0; i<=150; i++) {
    text = text + " " + i;
}
console.log(text);

// piesiam lentele
function piestieilute(ilgis, simbol = "-") {
    eilute="";
    for(i=0; i<ilgis; i++){
        eilute = eilute + simbol;
    }
    console.log(eilute);
    document.write(eilute);
}

// stulpelis
function stulpelis (aukstis, simbol) {
    for (i=0; i<aukstis; i++) {
    console.log(i+"|");
    document.write ("| <br>");
    }
}
piestieilute(50, "-");
console.log("|   NR      | Vardas        | Pavarde");
document.write("<br> NR     Vardas       Pavarde")
stulpelis(1);
piestieilute(50, "-");
stulpelis(6);
piestieilute(50, "-");

// lentele





function piestieilute(ilgis, simbol = "-") {
    eilute="";
    for(i=0; i<ilgis; i++){
        eilute = eilute + simbol;
    }
    console.log(eilute);
    document.write(eilute);
}
piestieilute(30, "-");
