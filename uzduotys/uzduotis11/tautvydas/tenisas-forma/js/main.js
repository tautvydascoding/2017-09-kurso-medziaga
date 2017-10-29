

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

 

 

})(); 
