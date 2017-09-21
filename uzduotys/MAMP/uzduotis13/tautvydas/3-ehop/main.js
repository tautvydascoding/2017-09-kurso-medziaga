console.log("labas");

// $paveiksliukas = $('.w3-row.w3-grayscale  img');
// console.log($paveiksliukas[1]);
// $paveiksliukas.on("click", function(){
 $('.w3-row.w3-grayscale  img').on("click", function(){

    $imgKopija = this.cloneNode(true);
    $imgTevas = this.parentNode;

    $imgTevas.insertBefore($imgKopija, this);

    // console.log("123");
    $stilius = {
        position: 'absolute',
        width : "14%"
    }
    $($imgKopija).css($stilius);
    $($imgKopija).animate({
            opacity: 0,
            top: "20px",
            right: "20px",
            width: 0
    }, 3000);
    // $(this).animate({
    //         top: "20px"
    // }, 3000);
});
