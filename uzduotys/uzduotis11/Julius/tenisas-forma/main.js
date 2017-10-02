var forma = document.querySelector('form');
var data = {
    vardas: "Povilas",
    pavarde: "Povilaitis",
    pastas: "a@a.lt"
};

//testuojant automatiskai uzpildys duomenis 
function autoFormosUzpildymas() {
    forma.firstname.value = data.vardas;
    forma.lastname.value = data.pavarde;
    forma.email.value = data.pastas;

}
 // paleidziam kad autosupildytu

//autoFormosUzpildymas();

function tikrinaForma(event) {
    alert ("forma NEUZPILDYTA");}
//    //sustabdo formos default duomenu issiuntima
////    event.preventDefault();
//     console.log ("first name:", forma.firstname.value);
////    if (form.firstname.value == "") {
//        
//    }
//
//forma.addEventListener("submit", tikrinaForma);
if (forma.firstname.value == "") {
    var errorZinute= document.createElement("div");
    errorZinute.innerHTML+= "<p> NEVISI LAUKAI UZPILDYTI</p>";
    forma.addEventListener("submit", tikrinaForma );
    forma.addEventListener ("submit", errorZinute);
    
}

