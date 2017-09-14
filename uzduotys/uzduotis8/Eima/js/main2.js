console.log("Labas")

names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
console.log(names.join());
console.log("masyvo ilgis " + names.length );



// 1. i masyvo gala ideti elmenta “butelis vandens”
// 1 budas:
names.push( "butelis vandens" );
console.log(names.join(" ") );

// 2 budas
ilgis = names.length;
names[ilgis] = "butelis vandens 2";







// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”



// 3. istrinti 3 elmenta

names.splice(2, 0);
console.log(names.join() );

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");


var masyvas = [];
for (var i = 0; i < 50; i++) {
  masyvas[i] = 0;
}
console.log(masyvas.join(" ") );


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;


var t = 0;
while (t < 100) {
  masyvas[t] = 1;
  t++;
}
console.log(masyvas.join(" "));

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"

// 1 budas
var g = 1; // nes kas antram reiktu pradeti nuo 1
while (g < 100) {
    masyvas [g] = 3; // norim 3 irasyti
    g = g + 2; // kas antra;
}
console.log(masyvas.join(" ") );


/// uyzduotis 6 sukurti funkcija kur igrazina prekes pvm
function getPVM (x) {
  var ats = x * 0.21;
  return ats;

}

var prekesKaina = 100;
var prekesKainaSuPVM = prekesKaina + getPVM(prekesKaina);
console.log("kaina su PVM: " , prekesKainaSuPVM);




// uzduotis 7
// isvesti skirtingas reklamas pagal amziu:
// klientai < 8 metai "Kinder kiausiniai -50%"
// klientai 8-15 mtv kanalas
// klientai 16-18 naujausi telefonai
//klientai >65 pensiju atsiemimas per 1 men
// pensininkams > 65 ir vaikams < 8 "Laimes rato laida"


age = 90;
console.log("amzius: " + age);
if( age <= 8 || age > 65 ) {
  if ( age <= 8 ) {
    console.log("Kinder kiausiniai -50%");
  } else {
      console.log("pensiju atsiemimas per 1men");
    }
  console.log("Laimes rato laida");
    } else if( age > 8 && age <= 15 ){
      console.log( "MTV Kanalas" );
      } else if( age <= 18) {
        console.log( "Naujausi telefonai" );
        }





var vardai = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)


var radau = false; //// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"
var ieskoti = "Rico";
for (var i = 0; i < vardai.length; i++) {
  if (vardai[i] === ieskoti) {
    console.log("radau, ieskomas zodis yra: " + i + " skiltyje");
    radau = true; //1B
    // break; // nutraukia ieskojima
  }
}
//1B atsakymas
if (radau == false) {
    console.log("Nepavyko rasti...Bandykite kita zodi");
}

// 2) parasyti funkcija, kuriai davus pirmaji iekoma zodi , ji suranda jo vieta masyve (skalciuas numeri) ir si   numeri grazina



function ieskokVardoVieta(ieskoti) {
  var radau = false;
  for (var i = 0; i < vardai.length; i++) {
    if (vardai[i] === ieskoti) {
      console.log("radau, ieskomas zodis yra: " + i + " skiltyje");
      radau = true;
      return i;
    }
  }
  if (radau == false) {
      console.log("Nepavyko rasti...Bandykite kita zodi");
      return null;
  }
}
var ieskomoZodzioVieta = ieskokVardoVieta("Freida");
console.log("ieskomas zodzio skiltis yra: " + ieskomoZodzioVieta);

// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// rasti visu zmoniu vardu "Rico" pavardes
function ieskokVardoVieta(ieskoti) {
  var radau = false;
  for (var i = 0; i < vardai.length; i++) {
    if (vardai[i] === ieskoti) {
      console.log("radau, ieskomas zodis yra: " + i + " skiltyje");
      radau = true;
      return i;
    }
  }
  if (radau == false) {
      console.log("Nepavyko rasti...Bandykite kita zodi");
      return null;
  }
}
var ieskomoZodzioVieta = ieskokVardoVieta("Freida");
console.log("ieskomas zodzio skiltis yra: " + ieskomoZodzioVieta);

freidosNrSarase = ieskotiVardoVieta("Freida")
FreidosPavarde = lastNames[freidosNrSarase];
console.log("Fredeidos pavarde: ", FreidosPavarde);
