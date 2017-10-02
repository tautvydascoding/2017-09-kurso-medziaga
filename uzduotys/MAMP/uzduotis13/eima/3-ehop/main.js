console.log("labas");

$(document).ready(function(){
    $(".w3-grayscale img").click(function(){

      $imgKopija = this.cloneNode(true);
      $imgTevas = this.parentNode;

      $imgTevas.insertBefore($imgKopija, this);

      $($imgKopija).css({"position":"fixed",
"width":"14%"});
      $($imgKopija).animate({
            right: '0px',
            top: '0px',
            opacity: '0.5',
            width: '3%',
        },2000);
    });
});
