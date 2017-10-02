//====================================KARUSELESCROLL
$('.carousel').carousel({
    interval: 6000,
    pause: "false"
});
//on scroll
$('#carouselExampleIndicators').bind('mousewheel DOMMouseScroll', function (e) {

    if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
        $(this).carousel('prev');


    } else {
        $(this).carousel('next');

    }
});




////////////////////////////////////


//////////loadDOC funkcija paimt duomenim is duombazes//

function loadDoc(elementId, path, vietaFaile) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(elementId).innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", path + '?q=' + vietaFaile, true);
    xhttp.send();
}



/////






///



//////////////apdaila.robotai.medis NAV noreload////////


$("#apdailaNav").click(function(){
window.location="paslaugos.php#"+"apdailaNav"
    return false;
});

$("#robotaiNav").click(function(){
window.location ="paslaugos.php#"+"robotaiNav"
    return false;
});

$("#medisNav").click(function(){
window.location ="paslaugos.php#"+"medisNav"
    return false;
});



if(window.location.hash=="#robotaiNav"){
    
       $(".tekstoVieta").removeAttr("id");
    $(".tekstoVieta").attr("id", "robotuTekstoVieta");
    loadDoc("robotuTekstoVieta", "duomPaslaugu.php", "robotuTekstas");
    $("#apdaila, #robotai, #medis").removeClass("active0 active3");
    $("#robotai").addClass("active1");
  
} else if
(window.location.hash=="#apdailaNav"){
    
       $(".tekstoVieta").removeAttr("id");
    $(".tekstoVieta").attr("id", "apdailosTekstoVieta");
    loadDoc("apdailosTekstoVieta", "duomPaslaugu.php", "apdailosTekstas");
  $("#apdaila, #robotai, #medis").removeClass("active1 active3");
    $("#apdaila").addClass("active0");
}else if
(window.location.hash=="#medisNav"){
    
       $(".tekstoVieta").removeAttr("id");
    $(".tekstoVieta").attr("id", "medzioTekstoVieta");
    loadDoc("medzioTekstoVieta", "duomPaslaugu.php", "medzioTekstas");
    $("#apdaila, #robotai, #medis").removeClass("active1 active0");
    $("#medis").addClass("active3");
  
};




//////////---------








///////------------
$("#apdaila").click(function () {
    $("#apdaila, #robotai, #medis").removeClass("active1 active3");
    $(this).addClass("active0");
    $(".tekstoVieta").removeAttr("id");
    $(".tekstoVieta").attr("id", "apdailosTekstoVieta");
    loadDoc("apdailosTekstoVieta", "duomPaslaugu.php", "apdailosTekstas")

});

$("#robotai").click(function () {
    $("#apdaila, #robotai, #medis").removeClass("active0 active3");
    $(this).addClass("active1");
    $(".tekstoVieta").removeAttr("id");
    $(".tekstoVieta").attr("id", "robotuTekstoVieta");
    loadDoc("robotuTekstoVieta", "duomPaslaugu.php", "robotuTekstas")
});

$("#medis").click(function () {
    $("#apdaila, #robotai, #medis").removeClass("active1 active0");
    $(this).addClass("active3");
    $(".tekstoVieta").removeAttr("id");
    $(".tekstoVieta").attr("id", "medzioTekstoVieta");
    loadDoc("medzioTekstoVieta", "duomPaslaugu.php", "medzioTekstas")
});



///////////////////////////////////

var linkai = new Array("#aboutus",
    "#kaip", "#kodel", "#ka");
var imgarray = new Array("url(img/kazkas1.jpg)", "url(img/kazkas2.jpg)", "url(img/kazkas3.jpg)", "url(img/kazkas4.png)");
$(document).ready(function () {


$("#apiemusNav").click(function(){
window.location="AboutUs.php#"+"apiemusNav"
    return false;
});
    if(window.location.hash=="#apiemusNav"){
    $(".tekstoVietaAboutus").removeAttr("id");
    $(".tekstoVietaAboutus").attr("id", "tekstoVietaKasMes");
            $(".tekstasaboutus h5").text('Kas mes?');
            loadDoc("tekstoVietaKasMes", "duomPaslaugu.php", "kasMes")
    }

    $("#aboutus").click(
        function () {
            $("#aboutus, #kaip, #kodel, #ka").removeClass("active1 active2 active3");
            $(this).addClass("active0");
            $("#bgfotoaboutus1").css({
                height: "0px"
            });
            $("#bgfotoaboutus1").animate({
                height: "100%"
            }, 500);
            $("#bgfotoaboutus1").css({
                backgroundImage: imgarray[0]
            });
            $(".tekstoVietaAboutus").removeAttr("id");
    $(".tekstoVietaAboutus").attr("id", "tekstoVietaKasMes");
            $(".tekstasaboutus h5").text('Kas mes?');
            loadDoc("tekstoVietaKasMes", "duomPaslaugu.php", "kasMes")
        }
    );
    //

   
    
    //
    $("#kaip").click(
        function () {
            $("#aboutus, #kaip, #kodel, #ka").removeClass("active0 active2 active3");
            $(this).addClass("active1");
            $("#bgfotoaboutus1").css({
                height: "0px"
            });
            $("#bgfotoaboutus1").animate({
                height: "100%"
            }, 500);
            $("#bgfotoaboutus1").css({
                backgroundImage: imgarray[1]
            });
$(".tekstoVietaAboutus").removeAttr("id");
    $(".tekstoVietaAboutus").attr("id", "tekstoVietaKaipPradejom");
            $(".tekstasaboutus h5").text('Kaip pradejom?');
            loadDoc("tekstoVietaKaipPradejom", "duomPaslaugu.php", "kaipPradejom")
        }
    );

    //

    $("#kodel").click(
        function () {
            $("#aboutus, #kaip, #kodel, #ka").removeClass("active0 active1 active3");
            $(this).addClass("active2");
            $("#bgfotoaboutus1").css({
                height: "0px"
            });
            $("#bgfotoaboutus1").animate({
                height: "100%"
            }, 500);


            $("#bgfotoaboutus1").css({
                backgroundImage: imgarray[2]
            });
            $(".tekstasaboutus h5").text('Kodel mes?');
            $(".tekstoVietaAboutus").removeAttr("id");
    $(".tekstoVietaAboutus").attr("id", "tekstoVietaKodelMes");
            loadDoc("tekstoVietaKodelMes", "duomPaslaugu.php", "kodelMes")
        }
    );

    //

    $("#ka").click(
        function () {
            $("#aboutus, #kaip, #kodel, #ka").removeClass("active0 active1 active2");
            $(this).addClass("active3");
            $("#bgfotoaboutus1").css({
                height: "0px"
            });
            $("#bgfotoaboutus1").animate({
                height: "100%"
            }, 500);

            $("#bgfotoaboutus1").css({
                backgroundImage: imgarray[3]
            });
            $(".tekstasaboutus h5").text('Paslaugos trumpai');
            $(".tekstoVietaAboutus").removeAttr("id");
    $(".tekstoVietaAboutus").attr("id", "tekstoVietaKaMes");
            loadDoc("tekstoVietaKaMes", "duomPaslaugu.php", "kaMes")
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
        center: {
            lat: 54.898521,
            lng: 23.903597
        },
        zoom: 8
    });
}

//

  

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
