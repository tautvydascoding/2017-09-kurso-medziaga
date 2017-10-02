console.log("Labas");



// js paimti H1 elemneta

var stilius = {
    "color": "red",
    "background-color": "#000",
    "font-size": "78px",
    margin: "200px 450px",
    "text-align": "center"
}
$('h1').css(stilius);

// uzduotis 2: paspaudus ant paveiksliuko -   padidinti jo ploti

$('img').on("click", function(){
    var animacijosTikslai = {
        width: "200px",
        height: "200px"
    };
    $('img').animate(animacijosTikslai)
});
