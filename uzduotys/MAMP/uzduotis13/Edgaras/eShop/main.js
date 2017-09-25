console.log("labrgrtrgras");

$stilius = {
    position: absolute
    width: 14%
}


$(document).ready(function(){
    $(".w3-grayscale img").click(function(){
        $(this).css("position","absolute", "width"."14%");
        $(this).animate({
            top: '0px',
            right: '0px',
            opacity: '0.5',
            height: '150px',
            width: '14%'
        },3000);
    });
});
