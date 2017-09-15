console.log("Labas");


//// IDEA: uzduotis 1
//// A) sukurti 3 kintamuosius: vardas, pavarde, klase
//// B) priskiti jiems reiksmes
//// C) isvesti juos i konsole
// udzuotis 1
// A sukuriame kintamuosius atmintyje kompiuterio
var name;
var lastName;
var klase;


// B
name = "eima";
lastName = "vaidotas";
klase = "5";

console.log("Vardas:",name,"Pavarde:",lastName,"Klase:",klase);
console.log("Vardas: " + name + " Pavarde: " + lastName + " Klase: " + klase);

// C - veikia

// uzduotis 2

function spausdinti () {
  vardas = "Eima";
  pavarde = "Vaidotas";
  amzius = 21;

  console.log(vardas,pavarde,amzius);
}


//// IDEA: uzduotis 2
//// sukurti f-ja "spausdinti()", ir joje sukurti 3 kintamuoius ir juos isvesti i konsole

// uzduotis 3


spausdinti();


//// IDEA: uzduotis 3
// isvesti kintamuosius vienoje eilute


// IDEA: uzduotis 4 - papildomos uzduotys   ------------
// A) sukurti f-ja, kuri isveda i konsole teksta: "Labas vakasras Kaune!"
// B) sukurti f-ja SpausdinuVarda(vardas), kuri isveda i konsole teksta:  paduota kintamaji
// C) sukurti f-ja kelimasKvadratu(x), kuri isveda i konsole paduoto kintamo reiksme pakelta kvadratu ( pvz x*x)
// D) sukurti f-ja skaiciavimai(x,y,z), kuri isveda i konsole x + 2, y + 4, z *2
//B padarytas >
function SpausdinuVarda(vardas) {
  vardas = "paduota kintamaji";
  console.log(vardas);
}
SpausdinuVarda();

//C
function kelimasKvadratu (x) {
  atsakymas = x * x;
  console.log(atsakymas);
}
kelimasKvadratu(3);

//D
function skaiciavimai (x,y,z) {
  ats1 = x + 2;
  ats2 = y + 4;
  ats3 = z * 2;
  console.log(ats1, ats2, ats3);
}
skaiciavimai(1,2,3);

//// ----------------IDEA: uzduotis 4 -------------------
//// sukurti f-ja kuri atspausdina paduotas reiksmes
//// pvz: spausdinti(4.5, 0, "geras lankomumas");

function atspausdina (p1,p2,zin) {
  p1 = 4.5;
  p2 = 0;
  zin = "geras lankomumas";
  console.log(p1,p2,zin);
}
atspausdina();
