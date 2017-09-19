console.log('LABAS');
// (function(){


var forma = document.querySelector("form");
var data = {
  vardas : "Povilas",
  pavarde : "Polypaitis",
  epastas : "a@b.c"
};

function autoFill() {
 forma.firstname.value = data.vardas;
 forma.lastname.value = data.pavarde;
 forma.email.value = data.epastas;
}
// autoFill();

//uzduotis. patikrinti ar laukai uzpildyti, jei ne - pranest

function tikrinaForma(event){
  // alert("veikiu");
  // event.preventDefault(); // sustabdo formos duomenu siuntima
  // if (forma.firstname.value == '')
  // console.log("first name: " + forma.firstname.value);

  if (forma.firstname.value == "" || forma.lastname.value == "" || forma.email.value == "") {
    event.preventDefault();
    if(!forma.querySelector('div')) {

    var errorMessage = document.createElement('div');
    errorMessage.innerHTML += "<p>Jus uzpildete ne visus laukus</p>";
    forma.prepend(errorMessage);
    // prepend - prieky, appendChild - gale
  } else {

  }
}


}
console.log(forma);
//pradedam tikrinti forma - ar ivesta
forma.addEventListener("submit" , tikrinaForma);






//
// })();








//
