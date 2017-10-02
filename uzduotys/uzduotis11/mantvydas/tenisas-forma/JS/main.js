(function() {
    var forma = document.querySelector("form")
    var data = {
        vardas: "Povilas",
        pavarde: "Povilaitis",
        pastas: "povke777@gmail.com"
    };

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
        if (forma.firstname.value == "" || forma.lastname.value == "" || forma.email.value == "") {
            event.preventDefault();
            // duomenu siuntimo nutraukimas jei neuzpildyta
            if (!forma.querySelector('.alert-warning')) {
                var errorZinute = document.createElement("div");
                errorZinute.innerHTML += "<p class='alert alert-warning'> Jus uzpildete ne visus laukus </p>";
                forma.appendChild(errorZinute);
            }
        } else {

        }

        console.log("first name: ", forma.firstname.value);
        // if (form.firstname.value == "") {
        //
        // }
    }

    forma.addEventListener("submit", tikrinaForma);
})();
