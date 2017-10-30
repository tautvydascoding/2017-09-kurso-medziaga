var $thumbNails = $('.img-thumbnail');
var $lightboxImg = $('.lightboximg');
var $lightBox = $('.lightbox');
var $buttonClose = $('.btn-close');


$('.img-thumbnail').on("click", function () {
  var galleryImg = $(this).attr('src');
  $lightboxImg.attr('src', galleryImg);
  $lightBox.attr('data-state', "visible");
});

$buttonClose.on('click', function (){
  $lightBox.attr('data-state', "hidden");
});
