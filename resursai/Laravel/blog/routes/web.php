<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('home'); // uzkrauna visa "home.php" faila
});

Route::get('/gallery', function () {
    echo " <h2>Mano galerija bus </h2>";  // taip nedaryti
});
Route::get('/contacts', function () {
      return view('contact');  // uzkrauna visa "home.php" faila
});


// ? - reiskia kad "/fraze" tekstas nera butinas
Route::get('/doctor/{fraze?}', function ($fraze =  "neivestas") {
     echo "<h2>ivesta fraze: $fraze</h2>";
})->where('fraze', '[A-Za-z]+');



// 1) atvaizduoti/isvesti visus daktarus
// 2) isvesti konkretu daktara, pagal uzdota id
// 3) isvesti visus pacientus, pagal duota daktaro id
// 4) isvesti pacieto daktaro varda pavarde, pagal uzduota paciento id

 // all() -> SELECT * FROM doctors;
 // find($id)  - > SELECT * FROM doctors WHERE id = $id;
 // first()   -> SELECT * FROM doctors LIMIT 1;
 // get()     -> ~ SELECT * FROM doctors LIMIT 1;

// 1)
Route::get('/all-doctors', function () {
    // App\doctor - "nuoroda koki class'e paleisti"
    $doctors = App\doctors::all(); // all() -> SELECT * FROM doctors;
    // print_r($doctors);
    foreach( $doctors as  $doctor ) {
        $name = $doctor->name;
        echo $name . "<br />";
    }
});
// 2)
Route::get('/doctor/{docotr_id}', function ($id) {
    $doctor = App\doctors::find($id);  // "doctors" lenteleje suranda  daktara, kurio id = $id
    // print_r($doctor);
    $name = $doctor->name;  //
    $lname = $doctor->lname;
    echo $name . "  $lname <br />";
});

//// ->select('name', 'email as user_email')->get();
// $query = DB::table('users')->select('name');
// $users = $query->addSelect('age')->get();
//  ->where('status', '>', 1)->get();
//  ->where('name', 'like', 'T%')->get();
// ->where([
//     ['status', '=', '1'],
//     ['subscribed', '<>', '1'],
// ])->get();
//  ->where('votes', '>', 100)->get();
//  ->orWhere('name', 'John')->get();
 // ->whereBetween('votes', [1, 100])->get();

//  ->where('votes', '=', 100)  OR ->where('votes', 100)->get();
// 3)
Route::get('/doctors_pacients/{id}', function ($id) {
  //                                stulpelis,  salyga, salygos reiksme
    $pacients = App\pacients::where('doctor_id', '=', $id)->get();
    // print_r($pacients);
    foreach ($pacients as $pacient) {
      echo "Vardas $pacient->name, pavarde: $pacient->lname <br />";
    }

});

// 4) isvesti pacieto daktaro varda, pavarde, pagal uzduota paciento id
Route::get('/doctor-by-pacient-id/{id}', function($pacient_id){
      $doctor = App\doctors::join('pacients', 'doctors.id', '=', 'pacients.doctor_id' )
                            ->select('doctors.name', 'doctors.lname')
                            ->where('pacients.id' , '=', $pacient_id)
                            ->get();
    //  print_r($doctor);

     foreach ($doctor as $xx) {
        $doctor_name = $xx->name;
        $doctor_lname = $xx->lname;
        echo  "Paciento nr:$pacient_id dakratas yra: $doctor_name $doctor_lname";
     }
});

// =====ajax===
Route::get('/gydytojai', function () {
    return view('doctors-page'); // uzkrauna visa "doctors-page.php" faila
});
Route::get('/get-doctors', function () {
  // uzduotis grazinti viuss daktarus
    $daktarai = App\doctors::all();
    return response()->json( array('doctors'=> $daktarai), 200);
});




// !!! butinai failo galerija
// "404-page" uzkraus, kai vartotojas ives neegzistuojanti puslapi
Route::get('/{xxx}', function ($page) {
      return view('404-page');  // uzkrauna visa "home.php" faila
});

//
