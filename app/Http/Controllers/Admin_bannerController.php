<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\banner;
use Illuminate\Support\Facades\Redirect;

class Admin_bannerController extends Controller
{
    public function index(){
        $store = new banner; 
        $getdata = $store->get();
        // $getdata = DB::table('user')->get();
        $banner = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_banner/index')->with('banner', $banner);
            echo view('templates/footer_admin_view');
        }
    }

    public function addView(){
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_banner/addview');
            echo view('templates/footer_admin_view');
        }
    }

    public function addAction(Request $request){
        $store = new banner;
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
        return Redirect::to('/list_banner');       
    }

    public function deleteAction(){
        $id = $_GET['id'];
        $store = new banner;
        $store->destroy($id);
        return Redirect::to('/list_banner');
    }

    public function infoView(){
        $store = new banner;
        $getdata = $store->where('id',$_GET['id'])->get();
        $banner = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_banner/infoview')->with('banner', $banner);
            echo view('templates/footer_admin_view');
        }
    }
}
