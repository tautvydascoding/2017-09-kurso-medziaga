console.log("Labas");

names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
// names.push("butelis vandnens");
// names.splice(3, 0, "butelis vandens");
ilgis = names.length; //masyvo ilgis
names[ilgis] = "butelis vandens";
names.unshift("ziebtuvelis");
console.log(names);
names.splice(2,1);
// delete names[2]; //istrina, bet palieka tarpa masyve
console.log(names);

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");


var masyvas = [];
for (var i = 0 ; i<50 ; i++ ) {
masyvas[i] = 0;
}
console.log(masyvas.join(" "));
var t = 0;
while (t<50) {
  masyvas[t] = 1;
  t++;
}
console.log(masyvas);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
var g = 0;
while (g<50) {
  masyvas[g] = 3;
  g = g + 2;
}
console.log(masyvas);

function getPVM (x) {
  var ats= x * 0.21;
  return ats;
}
var prekesKaina = 100;
var prekesKainaSuPVM = getPVM(prekesKaina) + prekesKaina;
console.log(prekesKainaSuPVM);

// 6 uzduotis su if; isveti skirtingas reklamas pagal amziu
//  klientei < 8 mmetai "kiausiniai kinder - 50%"
// klientai 8 iki 15 "MTV kanalas"
// klientai 16 - 18 "naujausi telefonai"
// klientai >65 "laimes rato laida"
// `>65 ir <8 rodyti "kobra11"`
age = 67;
console.log("amzius: " + age);
if ( age <= 8 || age >= 65) {
  console.log("kinder kiausiniai - 50%");
} else if ( age > 8 && age <=15) {
  console.log("MTV kanalas");
} else if ( age <= 18 ) {
  console.log("naujausi telefonai");
} else if ( age >= 65) {
  console.log("laimes rato reklama");
}
// `>65 ir <8 rodyti "kobra11"
age = 7;
console.log("amzius: " + age);
if ( age <= 8 || age >= 65) {
if (age<= 8) {
  console.log("kinder kiausiniai - 50%");
} else if (age >= 65) {
  console.log("pesniju atsiemimas");
} console.log("laimes ratas");
} else if ( age > 8 && age <=15) {
  console.log("MTV kanalas");
} else if ( age <= 18 ) {
  console.log("naujausi telefonai");
}

 //ARRAY #4

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

//1A, 1B

var ieskoti = "Rico";
for (var i = 0; i < names.length; i++) {
  if (names[i] === ieskoti) {
    console.log("radau, ieskomas yra " + i + " skiltyje");
    break; // nutraukia paieska
  }
}
var radau = false; // nes nieko nerado
var ieskoti = "kaka";
for (var i = 0; i < names.length; i++) {
  if (names[i] === ieskoti) {
    console.log("radau, ieskomas yra " + i + " skiltyje");
    radau = true;
    // break; // nutraukia paieska
  }
}
if (radau == false) {
  console.log("nepavyko rasti... ivesk nauja reiksme");
}

// 2 uzduotis. parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (skalciuas numeri) ir si   numer
// grazina masyvo elemento vieta
function ieskotiVardoVieta (ieskoti) {
  var radau = false; // nes nieko nerado
  for (var i = 0; i < names.length; i++) {
    if (names[i] === ieskoti) {
      console.log("radau, ieskomas yra " + i + " skiltyje");
      radau = true;
      return i;
    }
  }
  if (radau == false) {
    console.log("nepavyko rasti... ivesk nauja reiksme");
    return null;
  }
}
var ieskomoZodzioVieta = ieskotiVardoVieta("Rico");
console.log("ieskomas zodis yra: " + ieskomoZodzioVieta);


// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
var freidaSaraseNr = ieskotiVardoVieta("Freida");
FreidosPavarde = lastNames[freidaSaraseNr];
console.log("Freidos pavarde ", freidaSaraseNr);
console.log(lastNames[freidaSaraseNr]);



// lol
