console.log("labas");

$(".w3-row.w3-grayscale img").click(
  
    
    
    
    
    
function() {
    $imgKopija= this.cloneNode(true);
    $thisTevas= this.parentNode;
    $thisTevas.insertBefore($imgKopija, this);
     $(this).css({position:"absolute"});
    
     $(this).css({width:"15%"}); 
    $(this).animate({right:"0", top:"0"}, 3000);
    
//    $(this).css({right:"0"});
//    $(this).css({bottom:"0"});
    $(this).animate({width:"0%"});
    $(this).animate({opacity:"0"});
    $(this).animate({opacity:"0"},);
    
    
    
   
    
    
    
}
);