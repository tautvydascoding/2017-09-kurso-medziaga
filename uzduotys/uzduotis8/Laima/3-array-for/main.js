// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"
// uzduotis:--------------------------
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (skalciuas numeri) ir si   numeri
// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// rasti visu zmoniu vardu "Rico" pavardes


// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkesne - surasti visus Rico)
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

var radau = false; // dar neradau
var find = "Rico";

for (var i = 0; i < names.length; i++) {
    if (names[i] === find) {
        console.log("Ieskomas zodis yra: " + i + " skiltyje");
        radau = true;
    //    break;
    }
}

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"
// uzduotis:-

 if (radau == false) {
     console.log("Nepavyko rasti... Bandykite kita zodi ");
}

//
// 2) parasyti funkcija, kuriai davus ieskoma zodi, ji suranda jo vieta masyve (stalciaus numeri) ir si numeri atspausdinti.
// Sprendimas




function ieskotiVardoVieta(find) {
    var radau = false; // dar neradau
    for (var i = 0; i < names.length; i++) {
        if (names[i] === find) {
            console.log("Ieskomas zodis: " + find + " yra " + i + " skiltyje");
            radau = true;
            return i;
        }
    }
    // if !radau
 if (radau == false) {
     console.log("Nepavyko rasti... Bandykite kita zodi ");
     return null;
    }
}
var vieta = ieskotiVardoVieta("Sybil");
