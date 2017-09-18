
// uzduotis 1:   "h1" elementui  css: spalva - raudona, fono spalva - juoda,  font dydis- 78, margin 200px 450px
// uzduotis 2: paspaudus ant paveiksliuko -   padidinti jo ploti
// uzduotis 3: pasletpi paveiksliuka tik ta kur paspaudi
// uzduotis 4: uzvedus pele ant nuotraukos, ji turi tapti 50 % permatoma, nuvedus -  vel 100%
// document.getElementById('money').style.color = 'red';
document.getElementById('click').addEventListener('click', dothething);
function dothething() {
    document.getElementById('money').style.color = 'red';
    document.getElementById('money').style.fontSize = '74px';
    document.getElementById('money').style.margin = '200px 450px';

}

document.getElementById('img1').addEventListener('click', dotheotherthing);
function dotheotherthing() {
    if (document.getElementById('img1').style.maxHeight < '200px') {
    document.getElementById('img1').style.maxHeight = '200px';
    document.getElementById('img1').style.maxWidth = '200px';
    }   else if (document.getElementById('img1').style.maxHeight < '400px') {
    document.getElementById('img1').style.maxHeight = '400px';
    document.getElementById('img1').style.maxWidth = '400px';
    }   else {
    document.getElementById('img1').style.maxHeight = '100px';
    document.getElementById('img1').style.maxWidth = '100px';
    }
}

document.getElementById('img1').addEventListener('mousehover', dotheotherthing);
