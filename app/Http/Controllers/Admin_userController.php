<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Admin_userController extends Controller
{
    public function index(){
        $getdata = DB::table('user')->get();
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

    public function addAction(){
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        // $sql = "INSERT INTO `user`(`username`, `password`, `fisrtname`, `lastname`, `gender`, `email`, `phone`, `address`) VALUES ('{$username}','{$pass}','{$firstname}','{$lastname}','{$gender}','{$email}','{$phone}','{$address}')";
        $arrdata=[
            'username'=> $username,
            'password'=> $pass,
            'firstname'=> $firstname,
            'lastname'=> $lastname,
            'gender'=> $gender,
            'email'=> $email,
            'phone'=> $phone,
            'address'=> $address
        ];
        
        DB::table('user')->insert($arrdata);
        return Redirect::to('/list_user');
    }

    public function deleteAction(){
        $id = $_GET['id'];
        DB::table('user')->delete($id);
        return Redirect::to('/list_user');
    }

    public function infoView(){
        $getdata = DB::table('user')->where('id',$_GET['id'])->get();
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
}
