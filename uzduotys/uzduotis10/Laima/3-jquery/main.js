console.log("Labas");


//js paimti H1 elementa
var text = document.getElementsByTagName('h3').html;


// $ == document.getElementByIdTadName
//
var text1 = $('h3').html();
var text2 = $('.container').html();
var text3 = $('#wrapper').html();

console.log(text1);
//
//
// $(document).ready(function() {
//     // cia parasytas kodas veiks tik uzkrovus visa svetaine
// });
//
//
// $(function() {
//     // cia parasytas kodas veiks tik uzkrovus visa svetaine
// });
// kitas pvz ----------------------------

// $('.mygtukas').click(function(event) {
//     /* Act on event */
//     $('img.pirmas').toggle(2000);
//     $('img').hide(2000);
//     $('img:last').toggle(2000);
// });
//
// $('.mygtukas').click(veiskmaiPaspaudus());
//
// function veiskmaiPaspaudus() {
//         /* Act on event */
// }

$('img').click(function(event) {
    $(this).toggle(2000); // this - veikia tik currnt elementa
    $('img[width="101px"]').toggle(1000);
});
