<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container-fluid p-0 m-0 hidden">
        <header class="row ausktis m-0">
            <div class="col-12 p-0 ">
                <nav class="navbar navbar-toggleable-md fixed-top  navboxshadow navbg">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand nav-link navtext1 textshadow onhover" href="index.html"><img class="aukplot30p" src="img/wranch2.png"> sugedusios-stakles.eu</a>

                    <span class="collapse navbar-collapse d-flex float-right" id="navbarSupportedContent">
                        <ul class="navbar-nav d-flex float-right">

                            <li class="nav-item ">
                                <a class="nav-link navtext1 textshadow onhover" href="AboutUs.html">Apie mus</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn  dropdown-toggle btndrop navtext1 onhover textshadow" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Paslaugos
                                </button>
                                <div class="dropdown-menu btndrop" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item navtext1 onhover textshadow" href="linijos.html">Apdailos linijos ir įrengimai</a>
                                    <a class="dropdown-item navtext1 onhover textshadow" href="robotai.html">Robotai</a>
                                    <a class="dropdown-item navtext1 onhover textshadow" href="medis.html">Medžio masyvas</a>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link navtext1 onhover textshadow" href="AboutUs.html">Kontaktai </a>
                            </li>
                        </ul>
                        <form id= "frmSearch" class="form-inline my-2 my-lg-0 d-flex float-right">
                            <input id="txtSearch" class="form-control mr-sm-2 searchbg" type="text" name="q" placeholder="Ieškoti">
                            <button class="search-button my-2 my-sm-0 onhoversearchicon " type="submit"><img class= "searchicon " src="img/search.png"></button>
                        </form>
                    </span>
                </nav>

                






            </div>
        </header>
             <div class="row">
                 <div class="col-6">
                     <h1> Susisiekite el. paštu </h1>
       
       <form class="" action= "siusti.php" method="post">
       <label for="">Jūsų El.Paštas</label>
       <input type="email" name="elpastas" value="" placeholder="pavyzdys@gmail.com">
       <br>
       <br>
       <label> Tema</label>
       <input type="text" name="antraste" value="" maxlength="150" placeholder="pvz.: Dėl medžio masyvo"> 
     <br>
     <br>
       <label></label>
       <textarea name="zinute"  cols="50" rows="8" placeholder="rašykite čia..."></textarea>
       <button type="submit" name=""> Siųsti</button>
<!--   arba   button-->
<!--      <button type="button" name="button">Register</button>-->
       </form>
                 </div>
                 <div class="col-6">
                     
                 </div>
             </div>
        <footer class="row m-0 p-5">
           <div class="col-12 d-inline-block ">
               <h4 class="d-flex justify-content-center"> footer</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id culpa nam ducimus cupiditate eius, debitis deleniti dicta sapiente similique, consequatur animi expedita voluptas ratione fugit excepturi molestias quis dolorem assumenda delectus enim, esse placeat incidunt laboriosam. Unde, voluptas, nemo. Quam consequuntur ad sapiente vitae! Repellat dolorum modi repudiandae necessitatibus nisi quos fuga optio iste provident est autem a eaque praesentium expedita unde labore minus exercitationem vel impedit numquam fugit, deleniti non accusamus dignissimos? Ad perspiciatis, sequi inventore! Magni vitae quibusdam sit expedita consequuntur rem, labore nesciunt tenetur, laborum aspernatur voluptate fugit qui est natus, vero culpa voluptatum accusamus! Doloremque, ipsum.</p>
           </div>
            
        </footer>




    </div>









    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
    <script src="main.js"></script>
</body>

</html>