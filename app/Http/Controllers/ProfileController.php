<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){
    	$users = DB::select('select * from user');
    	// return view('welcome');
    	var_dump($users);
    }
}
