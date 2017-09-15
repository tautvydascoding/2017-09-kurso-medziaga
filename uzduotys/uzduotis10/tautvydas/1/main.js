console.log("Labas");



var gyvunas = "Tigras"; // globalus kintamasis
console.log("global", gyvunas);

// if-e scope nesiskaito
// if ( gyvunas === "Tigras" ) {
//     gyvunas = "Lape";
//     console.log("global", gyvunas);
//     var gyvunas = "Suo";
//     console.log("privatus", gyvunas);
//     document.write(gyvunas);
// }

function testuojam () {
    gyvunas = "Lape";
    console.log("global Lape", gyvunas);
    var gyvunas = "Suo";
    console.log("privatus Suo", gyvunas);

    this.gyvunas = "Dramblys"; // keiciam teti
    console.log(this.gyvunas);
}
testuojam();
console.log("global ", gyvunas);

// !!! kintamuju pavadinimai negali sutapti su f-ju
// errror
// function gyvunas() {
//     console.log("Viso");
// }
// gyvunas();
//------------------------------------
var manoFunkcija = function () {
    var gyvunas = "Krokodilas";
    console.log("gyvunas krokodilas:", gyvunas);
    var sukurtiGyvuna = function() {
        gyvunas = "Kengura";
        console.log("gyvunas kengura:", gyvunas);
    };
    sukurtiGyvuna();
    console.log("gyvunas kengura:", gyvunas);
}
manoFunkcija();

console.log("gyvunas globalus:", gyvunas);





//
