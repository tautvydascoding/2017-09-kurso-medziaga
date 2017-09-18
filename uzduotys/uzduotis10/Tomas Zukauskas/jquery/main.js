$('#click').click(function(){
    // $('h1').delay(1500).queue(function(n) {
    //     $(this).html("arse");
    //     n();})
    setTimeout(function () {
    $("#money").html('Verta palaukti');
}, 1500);
    $('#img1').fadeIn(1000);
    $('#img1').css('max-height','300px').css('max-width','300px');
});

$('#img1').on({
    mouseenter: function() {$(this).css('opacity','0.2');
    },
    mouseleave: function() {$(this).css('opacity','1');
    }
});
$('#img1').fadeOut(2000);
