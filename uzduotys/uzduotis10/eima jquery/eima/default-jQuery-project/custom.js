console.log("Labas");

$(document).ready(function(){ //tik uzsikrovus svetainei prades veikti
});
$(function(){
   ///daro ta pati
   // jQuery methods go here...

});
// var text = document.getElement("h1");

// $ == document.getElement

var text1 = $("h1").html(); // select pirma h1
console.log(text1);



$(document).ready(function(){ //tik uzsikrovus dokumentams prades veikti

$('.mygtukas').click(function(event) {
  $('img:first-of-type').toggle(300);
});


// $('img').click(function(event) {
//   $(this).toggle(300);
// });
//arba
// $('.mygtukas').click(veiksmaiPaspaudus())
// function veiksmaiPaspaudus() {
//
// }

//







});



// uzduotis 1:   "h1" elementui  css: spalva - raudona, fono spalva - juoda,  font dydis- 78, margin 200px 450px

$("h1").css({"background-color": "black", "font-size": "78px", "color": "red", "margin": "200px 450px"});

// uzduotis 2: paspaudus ant paveiksliuko -   padidinti jo ploti
$('img').click(function(event) {
  var animWidth = {
    width:"80%",
    height:"80%"
  };
  $(this).animate(animWidth);
});
// uzduotis 3: pasletpi paveiksliuka tik ta kur paspaudi

// $('img').click(function(event) {
//   $(this).toggle(300);
// });

// uzduotis 4: uzvedus pele ant nuotraukos, ji turi tapti 50 % permatoma, nuvedus -  vel 100%



// function atsirandaVel(){
//       $("img").animate({
//           opacity: '1',
//       }, 300);
// }



$("img").mouseover(function(){
    $(this).animate({
        opacity: '0.5',
    }, 300);

});
$("img").mouseleave(function(){
    $(this).animate({
        opacity: '1',
    }, 300);

});



var clicks = 0;

$('.kazkokia').click(function() {
    if (clicks == 0){
        $(this).animate({width:"100%"});
    } else{
      $(this).animate({width:"unset"});
        // second click
    }
    ++clicks;
});
