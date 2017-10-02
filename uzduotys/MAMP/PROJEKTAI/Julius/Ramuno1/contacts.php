<?php
include_once("Headerindex.php");
?>
<div class="row p-0 m-0 pl-5 pr-5 ">
    <div class="col-4 wrap">
        <h4 class="pt-3"> <i class="fa fa-envelope" aria-hidden="true"></i>Susisiekite el. paštu </h4>
        <form action="siusti.php" method="post" class="p-2">
            <label for="" >Jūsų El.Paštas</label>
            <input type="email" name="elpastas" value="" placeholder="pavyzdys@gmail.com">
            <br>
            <label>Tema</label>
            <input type="text" name="tema" value="" maxlength="100" placeholder="apie ką?">
            <br>
            <label>Jūsų klausimas</label>
            <textarea name="zinute" rows="6" cols="45" placeholder="rašykite čia.." class="plotis"></textarea>

            <input class= " text3 search-button m-2 d-flex float-right" type="submit" name="" value="Siųsti">
        </form>
    </div>
    
        
            <div class="col-2 d-inline-block wrap ml-2 mr-1">
                <h4 class="pb-2 pt-3">Kontaktiniai telefonai: </h4>
                
                <h5><i class="fa fa-phone-square" aria-hidden="true"></i>+37064455667</h5>
                <h5><i class="fa fa-phone-square" aria-hidden="true"></i>+37064455668</h5>
                <h5><i class="fa fa-phone-square" aria-hidden="true"></i>+37064455669</h5>
                <h4 class="mt-5 pb-2"><i class="fa fa-globe" aria-hidden="true"></i>Adresas:</h4>
                <h6>Kaunas, PvzGatve-1</h6>

            </div>
            <div class="col-5 pl-2 pr-1 m-0">
               
                    
                        
                        <div id="map" class="m-0 aukstisauto plotis"></div>
                    
               
            </div>

       
    
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzwamqd1rDLGeIQGrjVMj8uWxQaNYgBN4&callback=initMap">


</script>
<?php 
include_once('footer.php');
?>
