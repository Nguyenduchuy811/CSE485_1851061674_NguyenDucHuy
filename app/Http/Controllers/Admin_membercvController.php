<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\member_cv;
use Illuminate\Support\Facades\Redirect;

class Admin_membercvController extends Controller
{
    public function index(){
        $store = new member_cv;
        $getdata = $store->get();
        $members = json_decode(json_encode($getdata), true);
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_member_cv/index')->with('members', $members);
            echo view('templates/footer_admin_view');
        }
    }

    public function addView(){
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_member_cv/addview');
            echo view('templates/footer_admin_view');
        }
    }

    public function addAction(Request $request){
        $store = new member_cv;
        $store->username = $request->username;
        $store->password = $request->pass;
        $store->firstname = $request->firstname;
        $store->lastname = $request->lastname;
        $store->gender = $request->gender;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->address = $request->address;
        // dd($request->pass);
        $store->save();
        return Redirect::to('/list_member_cv');       
    }

    public function deleteAction(){
        $id = $_GET['id'];
        $store = new member_cv;
        $store->destroy($id);
        return Redirect::to('/list_member_cv');
    }

    public function infoView(){
        $store = new member_cv;
        $getdata = $store->where('id',$_GET['id'])->get();
        $members = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_member_cv/infoview')->with('members', $members);
            echo view('templates/footer_admin_view');
        }
    }
}
