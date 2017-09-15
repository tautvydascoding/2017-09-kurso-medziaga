console.log("Labas");

var name = "Petriukas";
var lname = "Petruciukaitukas";
var currentClass = 9;
var pazymiai = [6, 5, 9, 10, 8];

function getAverage (paz) {
var suma = 0;
for (i=0; i<pazymiai.length; i++) {
  suma += pazymiai[i];
}
var vidurkis = suma/pazymiai.length;
return vidurkis;
}
console.log("pazymiu vidurkis: ", + getAverage(pazymiai));


// 2 uzduotis. sukurti 2 objektus

var tevas = {
  vardas: "jozas",
  pavarde: "buzas",
  palikuonys: []
};

var vaikas = {
  klase: "8-okas",
  vardas: "anabelius"
};
// tevas.vaikas = vaikas;
tevas.palikuonys[0] = vaikas;
tevas.palikuonys[1] = vaikas;
