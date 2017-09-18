console.log("Labas");



// uzduotis 1:   "h1" elementui  css: spalva - raudona, fono spalva - juoda,  font dydis- 78, margin 200px 450px
// uzduotis 2: paspaudus ant paveiksliuko -   padidinti jo ploti
// uzduotis 3: pasletpi paveiksliuka tik ta kur paspaudi
// uzduotis 4: uzvedus pele ant nuotraukos, ji turi tapti 50 % permatoma, nuvedus -  vel 100%

//1
//css({"propertyname":"value","propertyname":"value",...});
var stilius = {
    color: "red",
    "background-color": "#000",
    "font-size": "78px",
    margin: "200px 450px",
    "text-align": "center"
};
$('h1').css(stilius);

// uzduotis 2: paspaudus ant paveiksliuko -   padidinti jo ploti

$('img').on("click", function() {
    var animacijosTikslai = {
        width: "200px", // kablelis
        height: "50px"
    };  // kabletaskis

    $(this).animate(animacijosTikslai);
});
// 4
$('img').on("mouseenter", function() {
    var animacijosTikslai = {
        opacity: "0.2"
    };  // kabletaskis
    $(this).animate(animacijosTikslai);
});



var animacijosTikslai = {
    opacity: "0.2"
};
var animacijosPradienbusena = {
    opacity: 1
};
$('img').on({
    "mouseenter": function() {
                $(this).animate(animacijosTikslai);
            },
    "mouseleave": function() {
                $(this).animate(animacijosPradienbusena);
            }
});




//
