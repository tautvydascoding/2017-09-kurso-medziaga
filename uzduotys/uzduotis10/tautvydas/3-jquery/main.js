console.log("Labas");



// js paimti H1 elemneta
var text = document.getElementsByTagName('h1').html;

// $ == document.getElement
//
var text1 = $('h1').html();
var text2 = $('.container').html();
var text3 = $('#wrapper').html();

console.log(text1);

$(".mygtukas").click(function(event){
$("img:last").toggle(1000);
});

//cool function. leidzia panaudot funkcija vienodiem elementam, bet tik ant to, kuri 'paspaudi'
// $("img").mouseenter(function(event){
// $(this).toggle(1000);
// });

var stilius = {
  "color": "red",
  "background-color": "#000",
  'font-size': "78px",
  "margin": "200px 450px"
};

$('h1').css(stilius);

// var width = {
//   "width": "200px"
// };
// $("img").click(function(event){
//     $(this).animate(width);
//     });

$('img').on("click", function(){
  var animacijosVeiksmai = {
    width: "200px",
    height: "200px"
  };
  $(this).animate(animacijosVeiksmai);
});



// function veiksmaiPaspaudus() {
//
// }






// variantas #1
$(document).ready(function(){
  //cia parasytas kodas veiks tik kai uzsikraus visa svetaine
});
//variantas #2
$(function() {
  //cia parasytas kodas veiks tik kai uzsikraus visa svetaine
console.log("sveikinu uzkrovus svetaine");
});
