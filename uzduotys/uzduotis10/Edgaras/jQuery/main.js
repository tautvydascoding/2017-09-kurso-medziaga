console.log("Labas");



// js paimti H1 elemneta
// var text = document.getElementsByTagName('h1');


// tikrinam ar veikia isvesti h1 taga
// var text = $("h1").html();
// console.log(text);


// ARBA
$(function () {
    //Cia parasytas kodas veiks tik kai uzkraus visa svetaine
    console.log("Labas - puslapis pilnai uzkrautas");
});




$(".mygtukas").mousedown(function (veiksmai) {
    $("img").toggle(1000);
    $(this).toggle(1000); // uzdeda efekta atn auksicau esancio elemento
});
// ARBA
$(".mygtukas").click(veiksmai());
function veiksmai(){

}


// UZDUOTYS
// uzduotis 1:   "h1" elementui  css: spalva - raudona, fono spalva - juoda,  font dydis- 78, margin 200px 450px

$("h1").css({"background-color": "black", "color": "red", "font-size": "78", "margin": "200px 450px"});

// ARBA
var stilius = {
    color: "red",
    "background-color": "black",
    "font-size": "78",
    margin: "200px 450px"
};
$("h1").css(stilius);


// uzduotis 2: paspaudus ant paveiksliuko -   padidinti jo ploti
$(".aaa").click(function() {
    var animacijosTikslai = {
        width: "20%",
        height: "20%"
    };
        $(this).animate(animacijosTikslai);
});


// uzduotis 3: pasletpi paveiksliuka tik ta kur paspaudi
$("img").click(function() {
    var animacijosTikslai = {

    };
        $(this).toggle(animacijosTikslai);
});

// uzduotis 4: uzvedus pele ant nuotraukos, ji turi tapti 50 % permatoma, nuvedus -  vel 100%
$("img").on("mouseenter",function(){
    var animacijosTikslai = {
        opacity: "0.2"
    };
    var animacijosTikslai2 = {
        opacity: "1"
    };
    $("img").on({"mouseenter": function(){
            $(this).animate(animacijosTikslai);
        },
        "mouseleave": function(){
            $(this).animate(animacijosTikslai2);
    }
});
