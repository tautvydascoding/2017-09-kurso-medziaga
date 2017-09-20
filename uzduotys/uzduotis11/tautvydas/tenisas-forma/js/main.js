<<<<<<< HEAD
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
=======

console.log("labas");
(function(){

    var forma = document.querySelector('form');
    var data = {
        vardas : "Povilas",
        pavarde : "Poliulikiatis",
        pastas : "a@a.lt"
    };

    // testuojant automatiskai uzpildys duomenis
    function autoFormosUzpildymas() {
        forma.firstname.value = data.vardas;
        forma.lastname.value = data.pavarde;
        forma.email.value = data.pastas;
    }
    // autoFormosUzpildymas();


    // uzduotis
    // patikrinti ar visi laukai uzpildyti
    // jeigu neuzpildyti, pranesti vartotojui

    function tikrinaForma(event) {
        // alert("veikiu");
        // console.log("first name: ", forma.firstname.value);


        if (forma.firstname.value == "" || forma.lastname.value == "" || forma.email.value == "") {
            // sustabdo formos duomenu issiuntima
            event.preventDefault();
            var test = forma.querySelector('.alert-warning');
            console.log("ar tiesa: " + test);
            if (!forma.querySelector('.alert-warning') ) {
                var errorZinute = document.createElement("div");
                errorZinute.innerHTML += "<p class='alert alert-warning'> Jus uzpildete ne visus laukus </p>";
                forma.prepend(errorZinute);
                // .prepend() - pries atsiranda
                // appendChild - atsiranda viduje Formos (gale)
            }
        }
    }

    // pradedam klaussytis FORMOS veiksmu,
    // jeigu ivyks "submit" veiksmas  - iskviesime "tikrinaForma" f-ja
    forma.addEventListener("submit", tikrinaForma );

>>>>>>> 883d39771e8b2e5313c050ce7ddd4c8453c6470d





<<<<<<< HEAD

//
// })();








//
=======
    //

})();
>>>>>>> 883d39771e8b2e5313c050ce7ddd4c8453c6470d
