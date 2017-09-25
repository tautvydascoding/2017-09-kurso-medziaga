Route::get('/get-doctors', function () {
  // uzduotis grazinti viuss daktarus
    $daktarai = App\doctors::all();
    return response()->json( array('doctors'=> $daktarai), 200);
});


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
   </script>
    <title></title>
  </head>
  <body>

    <h1>Musu poliklinikos gydytojai:</h1>

    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

    <div class="all-doctors">

    </div>
    <h3 class="zinute">Noredami pamatyti dirbancius daktarus, paspauskite mygtuka zemiau</h3>
    <button onclick="getAndShowDoctors()">Rodyti gydytojus</button>


    <script>
        function getAndShowDoctors() {
          $.ajax({
                 type:'GET',
                 url:'get-doctors',
                 data:'_token = <?php echo csrf_token() ?>',
                 success:function(data){
                        // console.log("data" , data.doctors);
                        //  console.log(data.doctors[0].name);
                        $('.all-doctors').html('');
                        data.doctors.forEach(function(item){
                            $('.all-doctors').append(item.name + item.lname + "<br>");
                        });
                        $('.zinute').html('');
                 }
              });
        }
    </script>
  </body>
</html>
