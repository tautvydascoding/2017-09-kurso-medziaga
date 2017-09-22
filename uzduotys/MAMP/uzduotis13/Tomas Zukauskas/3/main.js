$(".w3-grayscale img").click(function(){
        var arse = $(this).clone().prependTo($(this).parent());
        $(arse)
        .css({
            'position' : 'absolute',
            'width' : '205px',
            'height' : '256px'
        })
        .animate({
            right: '0px',
            top: '0px',
            width: '20px',
            height: '20px',
            opacity: '0'
        }, 2000);
});
