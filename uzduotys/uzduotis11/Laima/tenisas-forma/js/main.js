console.log("Labas");

// function () {
//
// }


var forma = document.querySelector("form");
var data = {
    vardas : "Antanas",
    pavarde : "Koderis",
    pastas : "a@gmail.com"
};


//testuojan automatiskai uzpildys duomenis
// function autoFormosUzpildymas() {
//     forma.firstname.value = data.vardas;
//     forma.lastname.value = data.pavarde;
//     forma.email.value = data.pastas;
// }
//
// autoFormosUzpildymas();

//uzduotis
// patikrinti ar visis laukai uzpildyti
// jeigu neuzpildyti, pranesti vartotojui

// f-ka reikia koda rasyt pries kreipini i ja

function tikrinaForma(event) {
    // console.log("first name:", forma.firstname.value);

     if (forma.firstname.value == "" || forma.lastname.value == "" || forma.email.value == "") {
             event.preventDefault();
            if (!forma.querySelector(".alert-warning") ) {
                var errorZinute = document.createElement("div");
                errorZinute.innerHTML += "<p class='alert alert-warning'> Jus uzpildete ne visus laukus </p>";
                forma.prepend(errorZinute);
                // .prepend() prie atsiranda
                //appendChild - atsiranda viduje Formos (gale)
            }
        }
}

forma.addEventListener("submit", tikrinaForma);
