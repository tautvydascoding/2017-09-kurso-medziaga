console.log("Labas");


var galerija = document.getElementById('gallery');

var text = "<img    src='' width='200px' height='150px'  />  "

for (var i = 0; i < 2; i++) {
    for (var k = 0; k < 4; k++) {
            // document.write( text);
            // or
            // galerija.innerHTML +=  text;
            galerija.innerHTML  = galerija.innerHTML + text;
    }
    // document.write( "<br>");
    galerija.innerHTML += "<br>";
}


 galerija.style.color = "red";
galerija.style.backgroundColor = "blue";












//
