<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\thank_letter;
use Illuminate\Support\Facades\Redirect;

class Admin_thank_letterController extends Controller
{
    public function index(){
        $store = new thank_letter; 
        $getdata = $store->get();
        // $getdata = DB::table('user')->get();
        $thank_letter = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_thank_letter/index')->with('thank_letter', $thank_letter);
            echo view('templates/footer_admin_view');
        }
    }

    public function addView(){
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_thank_letter/addview');
            echo view('templates/footer_admin_view');
        }
    }

    public function addAction(Request $request){
        $store = new thank_letter;
        $store->content = $request->content;
        // dd($request->pass);
        $store->save();
        return Redirect::to('/list_thank_letter');       
    }

    public function deleteAction(){
        $id = $_GET['id'];
        $store = new thank_letter;
        $store->destroy($id);
        return Redirect::to('/list_thank_letter');
    }

    public function infoView(){
        $store = new thank_letter;
        $getdata = $store->where('id',$_GET['id'])->get();
        $thank_letter = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_thank_letter/infoview')->with('thank_letter', $thank_letter);
            echo view('templates/footer_admin_view');
        }
    }

    public function editView(){
        $store = new thank_letter;
        $getdata = $store->where('id',$_GET['id'])->get();
        $thank_letter = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_thank_letter/editview')->with('thank_letter', $thank_letter);
            echo view('templates/footer_admin_view');
        }
    }

    public function editAction(Request $request){
        $store = new thank_letter;
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
        return Redirect::to('/list_thank_letter');       
    }   
}
