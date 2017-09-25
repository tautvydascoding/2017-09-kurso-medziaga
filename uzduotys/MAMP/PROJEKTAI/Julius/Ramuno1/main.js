//====================================KARUSELESCROLL
$('.carousel').carousel({
  interval: 6000,
  pause: "false"
});
//on scroll
$('#carouselExampleIndicators').bind('mousewheel DOMMouseScroll', function(e){

        if(e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
            $(this).carousel('prev');
			
			
        }
        else{
            $(this).carousel('next');
			
        }
    });
//===========================================MYGTUKAS
//function hoverOnmygtukas() {
//    for (i=0; i<3; i++) {
//    var mygtukas= document.getElementsByClassName('button')[i];
//    
//    
//$(mygtukas).css({borderColor:'black'});}
//};
//function hoverOffmygtukas() {
//    for (i=0; i<3; i++) {
//    var mygtukas= document.getElementsByClassName('button')[i];
//    
//    
//$(mygtukas).css({borderColor:'white'});}
//};
//=============================================================

    document.getElementById('frmSearch').onsubmit = function() {
        window.location = 'http://www.google.com/search?q= ' + document.getElementById('txtSearch').value;
        return false;
    }
    var linkai = new Array("#aboutus",
"#kaip","#kodel","#ka");
var imgarray= new Array("url(img/technology.jpg)","url(img/lempos4.jpg)","url(img/motor.jpg)","url(img/medis.jpg)");
$(document).ready(function(){

////--------------------------click-
$("#aboutus").click(
    function(){
        $("#aboutus, #kaip, #kodel, #ka").removeClass("active1 active2 active3");
        $(this).addClass("active0");
        $("#bgfotoaboutus1").css({backgroundImage:imgarray[0]});
        $(".tekstasaboutus h5").text('Kas mes?');
        $(".tekstasaboutus p").text('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet repellat exercitationem sunt nihil vero, quae perferendis error quam consectetur quia maiores at magnam assumenda, mollitia, nesciunt voluptas molestiae sapiente laudantium doloribus esse eaque. Iste libero quos, velit nam vitae quaerat, cumque ab delectus quae voluptas optio! Dolorum, voluptatum. Quos laboriosam quis assumenda maxime sunt qui incidunt vitae obcaecati eum eius aut, repellendus, totam pariatur quia, nam neque ea. Quasi, ipsa, aperiam. Fugit quam enim dolore, quo esse voluptates blanditiis est! Blanditiis hic facilis quas vel repudiandae debitis deleniti dolores, exercitationem, voluptas numquam, et a eveniet id magni ex corrupti inventore.Kas mes?');
    }
);
    //
    
    $("#kaip").click(
    function(){
        $("#aboutus, #kaip, #kodel, #ka").removeClass("active0 active2 active3");
        $(this).addClass("active1");
        $("#bgfotoaboutus1").css({backgroundImage:imgarray[1]});
        $(".tekstasaboutus h5").text('Kaip pradejom?');
        $(".tekstasaboutus p").text('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet repellat exercitationem sunt nihil vero, quae perferendis error quam consectetur quia maiores at magnam assumenda, mollitia, nesciunt voluptas molestiae sapiente laudantium doloribus esse eaque. Iste libero quos, velit nam vitae quaerat, cumque ab delectus quae voluptas optio! Dolorum, voluptatum kaip pradejom?');
    }
);
    
    //
    
    $("#kodel").click(
    function(){
        $("#aboutus, #kaip, #kodel, #ka").removeClass("active0 active1 active3");
        $(this).addClass("active2");
        $("#bgfotoaboutus1").css({backgroundImage:imgarray[2]});
        $(".tekstasaboutus h5").text('Kodel mes?');
        $(".tekstasaboutus p").text('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet repellat exercitationem sunt nihil vero, quae perferendis error quam consectetur quia maiores at magnam assumenda, mollitia, nesciunt voluptas molestiae sapiente laudantium doloribus esse eaque. Iste libero quos, velit nam vitae quaerat, cumque ab delectus quae voluptas optio! Dolorum, voluptatum kodel mes?');
    }
);
    
    //
    
    $("#ka").click(
    function(){
        $("#aboutus, #kaip, #kodel, #ka").removeClass("active0 active1 active2");
        $(this).addClass("active3");
        $("#bgfotoaboutus1").css({backgroundImage:imgarray[3]});
        $(".tekstasaboutus h5").text('Paslaugos trumpai');
        $(".tekstasaboutus p").text('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet repellat exercitationem sunt nihil vero, quae perferendis error quam consectetur quia maiores at magnam assumenda, mollitia, nesciunt voluptas molestiae sapiente laudantium doloribus esse eaque. Iste libero quos, velit nam vitae quaerat, cumque ab delectus quae voluptas optio! Dolorum, voluptatum paslaugos trumpai');
    }
);
    
  
    ///
    
  
    
    ///
   
    ///
    
  
    
    /////END SU LINKAIS ir IMG CHANGE/////
    });
    ////////////////////////////////////////////////

var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 54.898521, lng: 23.903597},
          zoom: 8
        });
      }




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
