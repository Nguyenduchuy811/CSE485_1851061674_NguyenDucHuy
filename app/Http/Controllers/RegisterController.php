<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    protected function redirectTo()
    {
        if (auth()->user()->role_id == 1) {
            return '/admin';
        }
        return '/home';
    }

    public function index(){
        $users = DB::table('member_cv')->get();
        echo view('templates/header_index_view');
        echo view('index')->with('data', $users[0]);
    }
}
