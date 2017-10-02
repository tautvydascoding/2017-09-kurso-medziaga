// $(document).ready(function(){
//     $(".duk").click(function(){
//         $(this).toggle(250);
//     });
// });
$('.carousel').carousel({
  interval: 3000
})

$(document).ready(function(){
$("a").on('click', function(event) {
if (this.hash !== "") {
  event.preventDefault();
  var hash = this.hash;
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 800, function(){
    window.location.hash = hash;
  });
}
});
});
