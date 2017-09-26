<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ajax-doctors</title>
  </head>
  <body>

    <h1>Hospital Doctors</h1>

    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

    <div class="doctors">
        <button onclick="getDoctors()">Load Doctors</button>
    </div>

    <p class='message'>
        Noredami pamatyti daktaru sarasa, paspauskite mygtuka.
    </p>

    <footer>
      <script>
            function getDoctors(){
              if( $('.message').html() != "") {
                   $.ajax({
                      type:'GET',
                      url:'load-doctors',
                      data:'_token = <?php echo csrf_token() ?>',
                          success:function(data){
                              console.log(data.doctors[0].name);
                             data.doctors.forEach(function(item){

                               $('.doctors').append(item.name + " " + item.lname + "<br>");
                             });
                             $('.message').html('');

                      }
                   });
                 }
            }
      </script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </footer>
  </body>
</html>
