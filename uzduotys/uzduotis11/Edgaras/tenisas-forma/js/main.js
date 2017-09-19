console.log("Labas");

//Automatinis pildymas
var forma = document.querySelector("form");
var duomenys = {
    vardas: "Petras",
    pavarde: "Petrauskas",
    emailas: "petras@petrauskas.lt"
};

// automatinio pildymo funkcija testavimo tikslais
function autoPildymas() {
    forma.firstname.value = duomenys.vardas;
    forma.lastname.value = duomenys.pavarde;
    forma.email.value = duomenys.emailas;
}
// autoPildymas();

//patikrinti ar forma uzpildyta. Jeigu neuzpildyta tada ismesti eilute "Neuzpildyti laukai"

function tikrinaForma(event){
    // alert("veikia");
    // console.log("firstname:" + forma.firstname.value);

    if (forma.firstname.value == "" || forma.lastname.value == "" || forma.email.value ==""){//jeigu vartotojoas nieko neiveda, forma sustabdoma
        event.preventDefault();

        if (!forma.querySelector('alert-warning') ) {
            var errorZinute = document.createElement("div");
            errorZinute.innerHTML += "<p class='alert-warning'> Jus uzpildete ne visus laukus</p>"; // iveda teksta i html kai neivesti visi duomenys (apacioje)
            forma.prepent(errorZinute); // iveda teksta i html kai neivesti visi duomenys apacioje
            //alert("Forma neuzpildyta");//jeigu truskta duomenu, ismeta ispejima
            }
        }
}
// atliksim tam tikra funkcija ti ktam tikru atveju, kai ivyksta kazkoks eventas, siuo atveju button paspausdimas
forma.addEventListener("submit", tikrinaForma);
