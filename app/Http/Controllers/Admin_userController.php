<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use Illuminate\Support\Facades\Redirect;

class Admin_userController extends Controller
{
    public function index(){
        $store = new users;
        $getdata = $store->get();
        // $getdata = DB::table('user')->get();
        $users = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_user/index')->with('users', $users);
            echo view('templates/footer_admin_view');
        }
    }

    public function addView(){
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_user/addview');
            echo view('templates/footer_admin_view');
        }
    }

    public function addAction(Request $request){
        $store = new users;
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
        return Redirect::to('/list_user');       
    }

    public function deleteAction(){
        $id = $_GET['id'];
        $store = new users;
        $store->destroy($id);
        return Redirect::to('/list_user');
    }

    public function infoView(){
        $store = new users;
        $getdata = $store->where('id',$_GET['id'])->get();
        $user = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_user/infoview')->with('user', $user);
            echo view('templates/footer_admin_view');
        }
    }

    public function editView(){
        $store = new users;
        $getdata = $store->where('id',$_GET['id'])->get();
        $user = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_user/editview')->with('user', $user);
            echo view('templates/footer_admin_view');
        }
    }

    public function editAction(Request $request){
        $store = new users;
        // $store->find($request->id);
        // $store->username = $request->username;
        // $store->password = $request->pass;
        // $store->firstname = $request->firstname;
        // $store->lastname = $request->lastname;
        // $store->gender = $request->gender;
        // $store->email = $request->email;
        // $store->phone = $request->phone;
        // $store->address = $request->address;
        $arrdata = [
            'username'=>$request->username,
            'password'=>$request->pass,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address
        ];
        // dd($store);die();
        $store->where('id',$request->id)->update($arrdata);
        return Redirect::to('/list_user');       
    }
}
