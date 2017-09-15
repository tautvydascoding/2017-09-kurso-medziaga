console.log("Labas");



// js paimti H1 elemneta
var text = document.getElementsByTagName('h1').html;

// $ == document.getElement
//
var text1 = $('h1').html();
var text2 = $('.container').html();
var text3 = $('#wrapper').html();

console.log(text1);

//
$(document).ready(function(){

   // sicia parasytas kodas veiks tik kai uzkraus visa svetaine

});
// ARBA
$(function() {
    // sicia parasytas kodas veiks tik kai uzkraus visa svetaine
});


$(function() {
    // sicia parasytas kodas veiks tik kai uzkraus visa svetaine
    console.log("Labas -  puslapis pilnai uzkrautas");
});

$('.mygtukas').click( function(event) {
    /* Act on the event */
    $('img:last').toggle(2000);
    $('img.pirmas').toggle(2000);
    $('.pirmas').toggle(2000);
});
// ARBA
// $('.mygtukas').click( veiksmaiPaspaudus());
//
// function veiksmaiPaspaudus() {
//     /* Act on the event */
// }

$('img').click( function(event) {
    // $(this).toggle(2000) ; // this - veikia curent elementa
    $('img[width="101px"]').toggle(1000);
});








//
