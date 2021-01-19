<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use App\Models\permission;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class Admin_userController extends Controller
{
    public function index(){
        $username = Session::get('username');
        if($username[0]['permission'] == null) {
            return Redirect::to('dashboard');
        }else{
            $user_permission_session = explode("|", $username[0]['permission']);
            $check = false;
            foreach ($user_permission_session as $kpers => $vpers) {
                if ($vpers == 1) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        } 

        $store = new users; 
        $getdata = $store->get();
        // $getdata = DB::table('user')->get();
        $users = json_decode(json_encode($getdata), true);
        
        
        // var_dump($username);die();
        Session::put('err_add',false);
        Session::put('err_pass',false);
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
        if($username[0]['permission'] == null) {
            return Redirect::to('dashboard');
        }else{
            $user_permission_session = explode("|", $username[0]['permission']);
            $check = false;
            foreach ($user_permission_session as $kpers => $vpers) {
                if ($vpers == 1) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        } 

        $store = new permission;
        $getdata = $store->get();
        $permission = json_decode(json_encode($getdata), true);
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_user/addview')->with('permission', $permission);
            echo view('templates/footer_admin_view');
        }
    }

    public function addAction(Request $request){
        $store = new users;
        $getdata = $store->where('email' , $request->email)
                        ->get();
        $user = json_decode(json_encode($getdata), true);
        if ($user != null) {
            Session::put('err_add',true);
            return Redirect::to("add_user");
        }else{
            Session::put('err_add',false);
            if ($request->pass == $request->cpass) {
                $store->username = $request->username;
                $store->password = password_hash($request->pass, PASSWORD_DEFAULT);
                $store->firstname = $request->firstname;
                $store->lastname = $request->lastname;
                $store->gender = $request->gender;
                $store->email = $request->email;
                $store->phone = $request->phone;
                $store->address = $request->address;
                $store->permission = implode('|', $request->permission);
                $store->save();
                Session::put('err_pass',false);
                return Redirect::to('list_user'); 
            }else{
                Session::put('err_pass',true);
                return Redirect::to('add_user');
            }
        }    
        // var_dump(Session::get('err_pass'));die();
    }

    public function deleteAction(){
        $id = $_GET['id'];
        $store = new users;
        $store->destroy($id);
        return Redirect::to('/list_user');
    }

    public function infoView(){
        $username = Session::get('username');
        if($username[0]['permission'] == null) {
            return Redirect::to('dashboard');
        }else{
            $user_permission_session = explode("|", $username[0]['permission']);
            $check = false;
            foreach ($user_permission_session as $kpers => $vpers) {
                if ($vpers == 1) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        } 

        $store = new permission;
        $getdata = $store->get();
        $permission = json_decode(json_encode($getdata), true);

        $store = new users;
        $getdata = $store->where('id',$_GET['id'])->get();
        $user = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_user/infoview')->with('user', $user)
                                                ->with('permission', $permission);
            echo view('templates/footer_admin_view');
        }
    }

    public function editView(){
        $username = Session::get('username');
        if($username[0]['permission'] == null) {
            return Redirect::to('dashboard');
        }else{
            $user_permission_session = explode("|", $username[0]['permission']);
            $check = false;
            foreach ($user_permission_session as $kpers => $vpers) {
                if ($vpers == 1) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        } 
        
        $store = new permission;
        $getdata = $store->get();
        $permission = json_decode(json_encode($getdata), true);

        $store = new users;
        $getdata = $store->where('id',$_GET['id'])->get();
        $user = json_decode(json_encode($getdata), true);

        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_user/editview')->with('user', $user)
                                                    ->with('permission', $permission);
            echo view('templates/footer_admin_view');
        }
    }

    public function edit_admin_userView(){
        $store = new permission;
        $getdata = $store->get();
        $permission = json_decode(json_encode($getdata), true);

        $store = new users;
        $getdata = $store->where('id',$_GET['id'])->get();
        $user = json_decode(json_encode($getdata), true);

        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            if ($username[0]['id'] == $_GET['id']) {
                echo view('templates/header_admin_view');
                echo view('admins/admin_user/editview')->with('user', $user)
                                                        ->with('permission', $permission);
                echo view('templates/footer_admin_view');
            }else{
                return Redirect::to('dashboard');
            }
        }
    }

    public function editAction(Request $request){
        $store = new users; 
        $getdata = $store->where('id',$request->id)->get();
        $user = json_decode(json_encode($getdata), true);
        // var_dump();die();
        if ($user[0]['password'] == $request->pass) {
            if (isset($request->permission)) {
                $permission =implode('|', $request->permission);
                $arrdata = [
                    'username'=>$request->username,
                    'password'=>$request->pass,
                    'firstname'=>$request->firstname,
                    'lastname'=>$request->lastname,
                    'gender'=>$request->gender,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'address'=>$request->address,
                    'permission' => $permission
                ];
            }else{
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
            }
        }else{
            if (isset($request->permission)) {
                $permission =implode('|', $request->permission);
                $arrdata = [
                    'username'=>$request->username,
                    'password'=>password_hash($request->pass, PASSWORD_DEFAULT),
                    'firstname'=>$request->firstname,
                    'lastname'=>$request->lastname,
                    'gender'=>$request->gender,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'address'=>$request->address,
                    'permission' => $permission
                ];
            }else{
                $arrdata = [
                    'username'=>$request->username,
                    'password'=>password_hash($request->pass, PASSWORD_DEFAULT),
                    'firstname'=>$request->firstname,
                    'lastname'=>$request->lastname,
                    'gender'=>$request->gender,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'address'=>$request->address
                ];
            }
        }
        // die();
        
        // dd($store);die();
        $store->where('id',$request->id)->update($arrdata);
        
        
        $user_id_session = Session::get('username');
        if($user_id_session[0]['id'] == $request->id){
            $getdata = $store->where('id',$request->id)->get();
            $user = json_decode(json_encode($getdata), true);
            Session::put('username', $user);
        }
        return Redirect::to('/list_user');       
    }
}
