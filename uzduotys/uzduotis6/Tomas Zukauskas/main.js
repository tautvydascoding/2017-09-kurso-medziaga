vienas = document.getElementById('vienas');
var skaicius = 1;
 function func() {
     vienas.innerHTML = skaicius++;
 }
kazkas = document.getElementById('kazkas');
 function spausk() {
    kazkas.innerHTML += prompt('Enter text:');
 }

function inc() {
    if (document.getElementById('prog').value >= 100) {
        document.getElementById('prog').value = 0;
    }
    else {
        document.getElementById('prog').value += 10;
    }
}
