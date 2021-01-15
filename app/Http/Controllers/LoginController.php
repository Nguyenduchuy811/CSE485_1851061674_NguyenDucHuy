<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
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
        Session::push('username',$_POST['email']);
        return Redirect::to('login');
    } 

    public function logoutAction(){
        Session::flush();
        return Redirect::to('login');
    } 
}
