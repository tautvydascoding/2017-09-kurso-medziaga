<?php
    include_once ('./header.php');
 ?>
 <div class="container-fluid contacts p-3">
     <div class="row">
         <article class="col abtColor">
<h2>Register</h2>
             <form class="form" action="./registration.php" method="post">
                 <label for="uname">Username</label> <br>
                 <input type="text" name="uname" required value=""> <br>

                 <label for="pass">Password</label> <br>
                 <input type="password" name="pass" required> <br>

                 <label for="pass2">Re-Password</label> <br>
                 <input type="password" name="pass2" required> <br>

                 <label for="email">Email</label> <br>
                 <input type="email" name="email" required> <br>

                 <input class="btn btn-lg btn-info mt-1" type="submit" name="" value="Registration">
             </form>

         </article>
     </div>
 </div>

    <?php
        include_once ('./footer.php');
     ?>
