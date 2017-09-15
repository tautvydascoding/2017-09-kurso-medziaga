console.log("Labas")


// document.write("<h1>Antraste</h1>");
// alert("Labas, okei");

// uzduotis 0
for (i = 0; i < 50; i++) {
  document.write("azuolas ");
}


// uzduotis 1
// A
x = "Eima ";
function spausdintiA (x) {
  document.write(x)
}
spausdintiA (x);

// B
function spausdintiB (x) {
  for (i=0; i < 150; i++) {
    document.write(x);
  }
}
spausdintiB (x);


// uzdavinys 2

text = "pradzia";
for (i = 0; i<=150; i++) {
  text = text + " " + i;
}
console.log(text);
// paskutine uzduotis

document.write("<br>");



function spausdinijaL (x) {
  for (i=0; i <= 30; i++) {
    document.write(x);
  }
}
spausdinijaL ("- ");

document.write("<br>");

document.write("/&nbsp;&nbsp;&nbsp;" + "nr" + "&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;" + "Name" + "&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;" + "lName" + "&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;" + "<br>");

function spausdinijaL (x) {
  for (i=0; i <= 30; i++) {
    document.write(x);
  }
}
spausdinijaL ("- ");
function spausdinijaBreak (x) {
  for (i=0; i < 5; i++) {
    document.write(x);
  }
}
spausdinijaBreak ("<br> /");
document.write("<br>");
spausdinijaL ("- ");




function piestiStulpeli(aukstis) {
  for (i = 0; i < aukstis; i++) {
    document.write("| <br>")
  }
}
function piestiEilute(ilgis, simbol = "-") {
  eilute = "";
  for (i = 0; i < ilgis; i++) { eilute = eilute + simbol;
  }
  document.write(eilute);
}
document.write("<br>");
piestiEilute(50);
document.write("<br>");
piestiStulpeli(5);
piestiEilute(50);
document.write("<br>");
piestiEilute(50, "=");


document.write("<br>");
/// papildoma uzduotis

img = "<img src='' width='100px' height='100px' />";

for (i = 0; i < 5; i++) {
  document.write("<br>");
  for (var t = 0; t < 10; t++) {
    document.write(img)
  }
}
