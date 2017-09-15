// ===========================================
// uzduotis: isvesti dvi eilutes po 4 paveiksliukus i HTML
console.log("labas");

var galerija = document.getElementById("gallery");
var text = "<img src='01.jpg' width = '200px' heigth= '150px' />";

for (var i = 0; i < 2; i++) {
    for (var k = 0; k < 4; k++) {
        document.write (text);
        galerija.innerHTML = galerija.innerHTML + text;
    }
    document.write ( "<br>");
    galerija.innerHTML += "<br>";
}

galerija.style.color = "red";
