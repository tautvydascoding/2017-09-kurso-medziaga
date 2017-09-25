console.log("Labas");


//js paimti H1 elementa
var text = document.getElementsByTagName('h1').html;



// uzduotis 1:   "h1" elementui  css: spalva - raudona, fono spalva - juoda,  font dydis- 78, margin 200px 450px
// uzduotis 2: paspaudus ant paveiksliuko -   padidinti jo ploti
// uzduotis 3: pasletpi paveiksliuka tik ta kur paspaudi
// uzduotis 4: uzvedus pele ant nuotraukos, ji turi tapti 50 % permatoma, nuvedus -  vel 100%


// uzduotis 1:   "h1" elementui  css: spalva - raudona, fono spalva - juoda,  font dydis- 78, margin 200px 450px

var stilius = {
    color : "red",
    "background-color" : "#000",
    "font-size" : "78px",
    margin: "200px 450px",
    "text-align" : "center"
};

$('h1').css(stilius);


// uzduotis 2: paspaudus ant paveiksliuko -   padidinti jo ploti
$('img').on("click", function() {
    var animacijosTikslai = {
        width : "200px",
        height : "50px"
    };
    $('this').animate(animacijosTikslai);
});


$('this').click(veiksmaiPaspaudus());
