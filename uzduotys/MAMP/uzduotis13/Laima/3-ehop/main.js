console.log("labas");

//destytojo pvz

// $paveiksliukas = $('.w3-row.w3-grayscale img');

// $paveiksliukas.on("click", function(){

$('.w3-row.w3-grayscale img').on("click",function(){

$imgKopija = this.cloneNode(true);
$imgTevas = this.parentNode;

$imgTevas.insertBefore($imgKopija, this);

    $stilius = {
        position: 'absolute',
        width : "15%"
    }
$($imgKopija).css($stilius);
$($imgKopija).animate({
            opacity: 0,
            top: "20px",
            right: "20px",
            width: 0
}, 3000 );
})

//Mano pvz

// $(document).ready(function(){
//     $(".w3-grayscale img").click(function(){
//         $(this).css("position","absolute");
//         $(this).animate({
//                 top: '10px',
//                 right: '10px',
//                 opacity: '0.2',
//                 height: '15%',
//                 width: '15%'
//             });
//         });
//  });

