console.log("Labas");

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

var ieskoti = "kaka";
for (var i = 0; i < names.length; i++) {
    if (names[i] === ieskoti) {
        console.log("radau, ieskomas yra: " + i + " skiltyje");
        // break;  // nutraukia ieskojima
    }
}

// 1B
var radau = false; // dar nieko nerado
var ieskoti = "Rico";
for (var i = 0; i < names.length; i++) {
    if (names[i] === ieskoti) {
        console.log("radau, ieskomas yra: " + i + " skiltyje");
        radau = true;
        // break;  // nutraukia ieskojima
    }
}
// if (!radau) {
if (radau == false) {
    console.log("Nepavyko rasti...Bandykite kita zodi");
}

// 2 spendimas
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
/* grazina pirmo sutikto ieskomo zodzio vieta */
function ieskotiVardoVieta(ieskoti) {
    var radau = false; // dar nieko nerado
    for (var i = 0; i < names.length; i++) {
        if (names[i] === ieskoti) {
            console.log("radau," + ieskoti + " yra: " + i + " skiltyje" );
            radau = true;
            return i;
        }
    }
    // if (!radau) {
    if (radau == false) {
        console.log("Nepavyko rasti...Bandykite kita zodi");
        return null;
    }
}
var ieskomoZodzioVieta = ieskotiVardoVieta("Rico");
console.log("ieskomas zodis yra: " + ieskomoZodzioVieta);


// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// 3.1 rasti visu zmoniu vardu "Rico" pavardes

freidosNrSarase  = ieskotiVardoVieta("Freida");
freidosPavarde = lastNames[freidosNrSarase];
console.log("Freidos pavarde: ", freidosPavarde);
// arba
console.log("Freidos pavarde: ",  lastNames[  ieskotiVardoVieta("Freida") ] );




//
