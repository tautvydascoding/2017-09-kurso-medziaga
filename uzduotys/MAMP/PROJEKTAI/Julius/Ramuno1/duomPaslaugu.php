                        <?php
$q = $_REQUEST["q"];

require('connection.php');
    


           function getTable($tableName, $stulpelis, $eilute){
               $sql=" select * from $tableName where $stulpelis = '$eilute'";
               
               $rezultatai = mysqli_query(getConnection(), $sql);
               if ($rezultatai) {
//                   echo "testtttttt";
                   $rezultatai = mysqli_fetch_assoc($rezultatai);
                   return $rezultatai;
                           }
               else {
                           echo "ERROR: getTable nesuveike!!!!!!";
                           return null;
                              }
                               
                                                    }
                      
if($q=='apdailosTekstas') { $tekstas=getTable('paslaugos','pavadinimas','apdaila');
                    if($tekstas != null) {
                        echo '<h5 class="justify-content-center d-flex"> Apdailos linijos ir įrengimai</h5>';
echo '<p>'. $tekstas['tekstas']. '</p>';
                        
                    }
}
//-----------------apdailostekstas END----------------------//
if($q=='robotuTekstas') { $tekstas=getTable('paslaugos','pavadinimas','robotai');
                    if($tekstas != null) {
echo '<h5 class="justify-content-center d-flex"> Robotai</h5>';
echo '<p>'. $tekstas['tekstas']. '</p>';
                    }
}
//-----------------robotutekstas END----------------------//
if($q=='medzioTekstas') { $tekstas=getTable('paslaugos','pavadinimas','medis');
                    if($tekstas != null) {
echo '<h5 class="justify-content-center d-flex"> Medžio masyvas</h5>';
echo '<p>'. $tekstas['tekstas']. '</p>';
                    }
                         
//-------------------
                         ///
                         ///
 //===========ABOUTUS------------- 
                         
}
if($q=='kasMes') { $tekstas=getTable('aboutus','id',1);
                    if($tekstas != null) {
echo $tekstas['kas'];
                    }
}
if($q=='kaipPradejom') { $tekstas=getTable('aboutus','id',1);
                    if($tekstas != null) {
echo $tekstas['kaip'];
                    }
}

if($q=='kodelMes') { $tekstas=getTable('aboutus','id',1);
                    if($tekstas != null) {
echo $tekstas['kodel'];
                    }
}

if($q=='kaMes') { $tekstas=getTable('aboutus','id',1);
                    if($tekstas != null) {
echo $tekstas['ka'];
                    }
}
                    ?>