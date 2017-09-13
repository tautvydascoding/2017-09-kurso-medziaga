console.log("Labas");

// var data = prompt("Ivesk savo gimimo data");
// console.log("ivestas skaicius" + data);

// document.write("<h2>pakeistas</h2>");
// window.alert("labas, as krabas");

// for (i=0; i<50; i++) {
//   console.log("azuolas");
//   // document.write("azuolas <br>");
// }


// // 1A
// // function spausdinti(x) {
// //   console.log("x =  ", x);
// // }
// // spausdinti ("karolis");
// // for (i = 0; i < 150; i++) {
// //   spausdinti ("karolis" +i);
// }
// 2 uzdavinys. isvesti 150 skaiciu vienoje eiluteje
// text = "pradzia";
// for (i=0; i<=150; i++) {
//   text = text + " " + i;
// }
// console.log(text);


// 3 uzdavinys nupiesti lentele
// function piestiEilute(ilgis, simbol = "-") { // = yra default reiksme
//   eilute = " ";
//   for (i = 0; i < ilgis; i++) {
//     eilute = eilute + simbol;
//   }
//   console.log(eilute);
//   document.write(eilute);
// }
// piestiEilute(50);
//
// function piestiStulpeli(aukstis) {
//   stulpelis = " ";
//   for (i = 0; i < aukstis; i++) {
//   }
//   console.log("|");
//   document.write("<br>|");
// }
// console.log("|      nr     |      Name      |      lName       |");
// piestiStulpeli(1);
// piestiEilute(50);

// 3 uzdavinys atspausdinti paveiksliukus

img = "<img src='#' width='100px' height='100px'>";
for (i = 0; i <2; i++) { // spausdina eilutes
  document.write( "<br>");
  for (var t = 0; t < 3; t++){ // t-skaitliukas paveiksliukam
  document.write( img )
}
}

// document.write(img);
// document.write(img);
// document.write(img);
// document.write("<br>");
// document.write(img);
// document.write(img);
// document.write(img);
