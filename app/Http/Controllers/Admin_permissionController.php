<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\permission;
use Illuminate\Support\Facades\Redirect;

class Admin_permissionController extends Controller
{
    public function index(){
        $store = new permission; 
        $getdata = $store->get();
        // $getdata = DB::table('user')->get();
        $permission = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_permission/index')->with('permission', $permission);
            echo view('templates/footer_admin_view');
        }
    }
}
