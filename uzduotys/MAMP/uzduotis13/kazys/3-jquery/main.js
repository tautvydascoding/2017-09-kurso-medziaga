console.log("labas");


$paveiksliukas = $(".w3-grayscale img");
$(".w3-grayscale img").click(function(){

  $imgKopija = this.cloneNode(true);
  $imgTevas = this.parentNode;

  $imgTevas.insertBefore($imgKopija, this);

$(this).css("position", "absolute");
$(this).css("width", "15%");

 $(this).animate({
    opacity: "0",
    right: "10px",
    top: "10px",
    width: "3%"
 }, 3000);
});
