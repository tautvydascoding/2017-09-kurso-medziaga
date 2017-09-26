===========LARAVEL HINTS===========
<?php



// redirect()->route('/home');  // peradresuoja vartotoja i home page
// SQL
// ->orderBy('id')
// ->count();
// ->max('price');
// ->avg('price');
// ->select('name', 'email as user_email')->get();
// $query = DB::table('users')->select('name');
// $users = $query->addSelect('age')->get();
//  ->where('status', '>', 1)->get();
//  ->where('name', 'like', 'T%')
// ->where([
//     ['status', '=', '1'],
//     ['subscribed', '<>', '1'],
// ])
//  ->where('votes', '>', 100)
//  ->orWhere('name', 'John')
 // ->whereBetween('votes', [1, 100])->get();

//  ->where('votes', '=', 100)  OR ->where('votes', 100)
//  ->groupBy('status')
// ->join('orders', 'users.id', '=', 'orders.user_id')
// ->select('users.*', 'contacts.phone', 'orders.price')
// ->whereColumn('updated_at', '>', 'created_at')

 

Route::get('doctor/{id?}', function($id = 1){
    //  $doctors

})->where('id', '[0-9]+'); // regex - tik skaiciai leidziami
// ->where('name', '[A-Za-z]+');

// butinai paskutintas !
Route::get('/{xxx}', function(){
  return view('404');
});

//======================using controllers================

Route::get('controller-doctor/{id?}', 'DoctorController@showDoctor'  );
Route::get('controller-doctors', 'DoctorController@showAll'  );

Route::get('hospital', 'ajaxController@showHospital');
Route::get('load-doctors', 'ajaxController@getDoctors');





//=========================AJAX========================
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\doctor;

class AjaxController extends Controller {

   public function doctorsList(){
      $users = doctor::all();

      // $array [] = (array) $users;
      return response()->json( array('doctors'=> $users), 200);
   }
}

<script>
      function getDoctors(){
         $.ajax({
            type:'GET',
            url:'getdoctors',
            data:'_token = <?php echo csrf_token() ?>',
                success:function(data){
                    console.log(data.doctors[0].name);
                   data.doctors.forEach(function(item){
                     $('.doctors').append(item.name + "<br>");
                   });
                   $('#msg').html('');
            }
         });
      }
</script>


?>
