console.log("Labas");

var galerija = document.getElementById('gallery');
var test = "<img  src=' ' width='200px' height='150px' />"
for (var i = 0; i < 2; i++) {
    for (var k = 0; k < 4; k++) {
        // document.write(test);
        galerija.innerHTML = galerija.innerHTML + test;
    }
document.write("<br>");
}
