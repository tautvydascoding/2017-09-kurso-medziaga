console.log("Labas");

var name = "Petriukas";
var lname = "Petruciukaitukas";
var currentClass = 9;
var pazymiai = [6, 5, 9, 10, 8];

var suma = 0;
for (i=0; i<pazymiai.length; i++) {
  suma += pazymiai[i];
  var vidurkis = suma/pazymiai.length;
}
var vidurkis = suma/pazymiai.length;
console.log("pazymiu vidurkis: ", vidurkis);
