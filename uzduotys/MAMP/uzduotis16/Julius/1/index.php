<?php
//pirmiausia sukuriam prisijungimo prie sql duomenu konstantas
define ("DB_NAME", 'savaite4');
define ("HOST", 'localhost');
define ("DB_USERNAME", 'julius');
define ("DB_PASS", 'slaptazodis');

// prisijungiam su duotais kintamaisiais
$connection = mysqli_connect (HOST,DB_USERNAME,DB_PASS,DB_NAME);
//patikrinam ar pavyko prisijungt
if($connection) {
    echo "pavyko prisijungt";
} else {
    die ("nepavyko prisijungt del klaidos: " . mysqli_connect_error());
}

// sukuriam funkcija(kuria naudosim toliau, kad paimtu prisijungima is globalios deklaracijos(nes kazkodel nematys kitaip)

function getConnection() {
    global $connection;
    return $connection;
    
}

// noriu paziuret users lentele
    // apsirasom php funkcija kurioj bus sql kintamasis kuris selectina lentele
function getTable($tableName, $id){
    $sql="SELECT * FROM $tableName
    WHERE id = $id";
    // mysql_query yra funkcija, kurioj rasom savo aprasyta $sql
    $rezultatai = mysqli_query(getConnection(), $sql);
       if ($rezultatai) {
           
           // mysqli_fetch_assoc konvertuoja duomenis is sql kalbos i associatyvu masyva
           $rezultatai = mysqli_fetch_assoc($rezultatai);
           return $rezultatai;
       }else {
           echo "ERROR: getUser nesuveike!!!!!!";
           return null;
       }
}
// iskvieciam ta funkcija su lenteles pavadinimu
$lentele=getTable("users", 1);
echo "lentele users: <br>" . $lentele['id'];


