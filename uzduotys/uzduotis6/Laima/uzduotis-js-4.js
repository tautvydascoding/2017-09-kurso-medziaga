// var vardas = "Antanas";
//  pavarde = "Kukaitis";
//
//  klase = "4e";

// IDEA: uzduotis 4 - papildomos uzduotys   ------------
// A) sukurti f-ja, kuri isveda i konsole teksta: "Labas vakasras Kaune!"


// 4a
    function spausdinti(txt) {
     console.log(txt);
}
spausdinti("Labas vakaras, Kaune!");

// B) sukurti f-ja SpausdinuVarda(vardas), kuri isveda i konsole teksta:  paduota kintamaji

// 4b
function SpausdinuVarda(vardas) {
     console.log(vardas);
}
SpausdinuVarda('Ona');

// C) sukurti f-ja kelimasKvadratu(x), kuri isveda i konsole paduoto kintamo reiksme pakelta kvadratu ( pvz x*x)
//4c

function kelimasKvadratu(x) {
       console.log(x*x);
}
kelimasKvadratu(5);


// D) sukurti f-ja skaiciavimai(x,y,z), kuri isveda i konsole x + 2, y + 4, z *2
//4d
function skaiciavimai(x,y,z) {
    console.log(x+2, y+4, z*2);
}
skaiciavimai(2, 4, 3);

//// ----------------IDEA: uzduotis 4 -------------------
//// sukurti f-ja kuri atspausdina paduotas reiksmes
//// pvz: spausdinti(4.5, 0, "geras lankomumas");
//
 function spausdinti(a, b, c) {
     console.log(a, b, c);
 }
 spausdinti('4.5', 0, "geras lankomumas");
