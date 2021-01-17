<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use App\Models\thank_letter;
use App\Models\member_cv;
use App\Models\banner;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(){
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            echo view('templates/header_personal_view');
            echo view('admins/login_view');
            echo view('templates/footer_admin_view');
        }else{
            return Redirect::to('dashboard');
        }
    }

    public function loginAction(Request $request){
        $store = new users;
        $getdata = $store->where('email' , $request->email)
                        ->get();
        $user = json_decode(json_encode($getdata), true);
        $pass = $user[0]['password'];
        if(password_verify($request->pass, $pass)){
            Session::push('username',$user[0]);
            return Redirect::to('login');
        }else{
            return Redirect::to('login');
        }
    } 

    public function logoutAction(){
        Session::flush();
        return Redirect::to('login');
    } 
}
