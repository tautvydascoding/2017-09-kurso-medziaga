console.log("Labas");

var gyvunas = "Tigras"; //globalus kintamasis
console.log("global", gyvunas);

if ( gyvunas === "aaa") {
    gyvunas = "Lape";
    console.log("global", gyvunas);
    var gyvunas = "Suo";
    console.log("privatus, gyvunas");
}


function testuojam() {
    gyvunas = "Lape"; // keiciam teva
    console.log("global Lape", gyvunas);
    var gyvunas = "Suo"; // sukurs nauja ir nesugadins seno globalaus kintamojo
    console.log("privatus suo, gyvunas");

    this.gyvunas = "Dramblys"; // keiciam teti - vienu aukstu islipusi is jfcijos
    console.log(this.gyvunas);

}


testuojam();
    console.log("global", gyvunas);

//-------------PVYZDZIAIl

/// kintamusu pavadinimai nega;i sutapti su funkcija
/// error
// function gyvunas() {
//     console.log("Viso");
// }
// gyvunas();
//

var manoFunkcija = function() {
    var gyvunas = "Krokodilas";
    console.log("gyvunas Krokodilas: ", gyvunas);
    var sukurtiGyvuna = function() {
        var gyvunas = "Kengura";
        console.log("gyvunas kengura: ", gyvunas);
    };
    console.log("gyvunas kengura: ", gyvunas);
};

manoFunkcija();
console.log("gyvunas globalus: ", gyvunas);
