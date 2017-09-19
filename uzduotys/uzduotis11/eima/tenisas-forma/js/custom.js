console.log("labas");

(function(){


})();


var forma = document.querySelector('form');

var data = {  //objektas saugo duomenys apie vartotoja
  vardas : "povilas",
  pavarde : "povilaitis",
  pastas : "a@a.com"
};

// testuojam automatiskai uzpildys duomenis
function autoFormosUzpildymas () {
  forma.firstname.value = data.vardas;
  forma.lastname.value = data.pavarde;
  forma.email.value = data.pastas;
}

// autoFormosUzpildymas ();


//uzduotis
// patikrinti ar visi laukai uzpildyti
// jeigu neuzpildyti pranesti vartotojui

function tikrinaForma (event) {
  // alert("veikiu");
  // sustabdo formos duomenu issiuntima
  console.log("first name: ", forma.firstname.value);
  if (forma.firstname.value == "" || forma.lastname.value == "" || forma.email.value == "") {
    event.preventDefault();

    if (!forma.querySelector(".alert-warning")) {
      var errorZinute = document.createElement("div");
      errorZinute.innerHTML += "<p class='alert-warning'>Jus uzpildete ne visus laukus </p>";
      forma.prepend(errorZinute); // atsiranda pries elementa
    }
  }
}
// pradedam klausyti veiksmu pvz button paspaudimas
// jeigu ivyks submit veiksmas iskviesimae tikrina forma fcija
forma.addEventListener("submit", tikrinaForma );
