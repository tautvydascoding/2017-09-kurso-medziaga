<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;    // pakeisti ir sita

class ajaxController extends Controller
{
    public function showHospital() {
        return view('ajax-doctors');
    }
    public function getDoctors() {
       $doctors = doctor::all();
       return response()->json( array('doctors'=> $doctors), 200);
    }

}
