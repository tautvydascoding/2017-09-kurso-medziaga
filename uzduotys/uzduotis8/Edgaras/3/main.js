console.log("Labas");
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

var ieskoti = "Rico"
for (var i = 0; i < names.length; i++) {
    if (names[i] === ieskoti) {
        console.log("Radau, ieskomas yra:" + i + "skiltyje");
        break;
    }
}

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"

var radau = false; // dar nieko nerado
var ieskoti = "kuku"
for (var i = 0; i < names.length; i++) {
    if (names[i] === ieskoti) {
        console.log("Radau, ieskomas yra:" + i + "skiltyje");
        radau = true;
        // break;
    }
}
// if (!radau) <== arba
if (radau == false) {
    console.log("Nepavyko rasti...Bandykite kita zodi");
}

// uzduotis:--------------------------
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (skalciuas numeri) ir si   numeri grazina

function ieskokVardoVieta(ieskoti) { // suranda pirma norima varda masyve, ir toliau nebeiesko
    var radau = false; // dar nieko nerado
    for (var i = 0; i < names.length; i++) {
        if (names[i] === ieskoti) {
            console.log("Radau, ieskomas yra:" + i + "skiltyje");
            radau = true;
            return i;
        }
    }
    // if (!radau) <== arba
    if (radau == false) {
        console.log("Nepavyko rasti...Bandykite kita zodi");
        return null;
    }
}
var ieskomoZodzioVieta = ieskokVardoVieta("Rico");
console.log("ieskomas zodis yra:" + ieskomoZodzioVieta);

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// rasti visu zmoniu vardu "Rico" pavardes
