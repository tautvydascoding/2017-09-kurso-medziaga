console.log("Labas");


var gyvunas = "tigras"; // globalus kintamasis
console.log("global", gyvunas);


if ( gyvunas === "tigras" ) {
  gyvunas = "lape";
  console.log("global", gyvunas);
  var gyvunas = "suo";
  console.log("privatus", gyvunas);
  this.gyvunas = "dramblys"; //keiciam teti
}
console.log("this", gyvunas);


// var vardas = "jonas"
//
// function testuojamThat () {
//   var vardas = "tim";
//   console.log("this.vardas " + this.vardas); // islipa is laustiniu skliaustu ir paima reiksme > jonas siuo atveju
//   console.log("vardas " + vardas);
//
//
//   var daro = function () {
//     var that = this;
//     console.log("function daro - this.vardas " + this.vardas); // islipa is laustiniu skliaustu ir paima reiksme > jonas siuo atveju
//
//     console.log("function daro - vardas " + vardas); // undefined nes mantas sukurtas zemiau; jeigu var vardas = mantas nebutu sukurtas siame 'bute' rodytu tim
//
//     var vardas = "mantas";
//     console.log("function daro - vardas " + vardas); // mantas
//
//     var dirba = function () {
//       var vardas = "valius";
//       console.log("function dirba - this.vardas " + this.vardas); // islipa is laustiniu skliaustu ir paima reiksme > jonas siuo atveju
//
//       console.log("function dirba - vardas " + vardas); // undefined nes mantas sukurtas zemiau; jeigu var vardas = mantas nebutu sukurtas siame 'bute' rodytu tim
//       console.log("function dirba - that.vardas " + that.vardas); // islipa is laustiniu skliaustu ir paima reiksme > jonas siuo atveju
//
//       console.log("that " + that); // undefined nes mantas sukurtas zemiau; jeigu var vardas = mantas nebutu sukurtas siame 'bute' rodytu tim
//
//     };
//     dirba();
//
//   };
//   daro();
// }
// testuojamThat();




var pavarde = "Karolauskas"
var objTest = {
  pavarde: "jonauskas",
  daryti: function () {
    var pavarde = "timauskas";
    console.log(pavarde);
    console.log(this.pavarde);

    var that = this;
    var obj =  {
      pavarde: "nemunauskas",
      spausdina: function () {
        console.log("spausdina ", pavarde);
        console.log("spausdina this ", this.pavarde);
        console.log("spausdina that ", that.pavarde);

      }
    }
    obj.spausdina ();
  }
};

objTest.daryti();

///////////

(function () { // tik viena karta issikviecia pati save
  var lname = "petraukonis";
  console.log(lname);
})();
