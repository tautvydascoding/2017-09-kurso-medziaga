<?php
include_once("Headerindex.php");
?>
<div class="row pl-5 pr-5">
    <div class="col-4">
        <h4> Susisiekite el. paštu </h4>

        <form class="" action="emailforma.php" method="post">
            <label for="">Jūsų El.Paštas</label>
            <input type="email" name="elpastas" value="" placeholder="pavyzdys@gmail.com">
            <br>
            <br>
            <label> Tema</label>
            <input type="text" name="antraste" value="" maxlength="150" placeholder="pvz.: Dėl medžio masyvo">
            <br>
            <br>
            <label></label>
            <textarea name="zinute" cols="50" rows="8" placeholder="rašykite čia..."></textarea>
            <button type="submit" name=""> Siųsti</button>
            <!--   arba   button-->
            <!--      <button type="button" name="button">Register</button>-->
        </form>
    </div>
    <div class="col-8">
        <div class="row aukstis">
           <div class="col-4 d-inline-block ">
                <h4 class="">Kontaktiniai telefonai: </h4>
                <h5>+37064455667</h5>
                <h5>+37064455668</h5>
                <h5>+37064455669</h5>
            
            </div>
            <div class="col-8">
                <h4> Mus rasite adresu: Kaunas</h4>
                <div id="map"></div>
            </div>
            
        </div>
    </div>
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzwamqd1rDLGeIQGrjVMj8uWxQaNYgBN4&callback=initMap">


</script>
<?php 
include_once('footer.php');
?>
