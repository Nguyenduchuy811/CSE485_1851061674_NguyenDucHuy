<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\education;
use Illuminate\Support\Facades\Redirect;

class Admin_educationController extends Controller
{
    public function index(){
        $store = new education; 
        $getdata = $store->get();
        // $getdata = DB::table('user')->get();
        $education = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_education/index')->with('education', $education);
            echo view('templates/footer_admin_view');
        }
    }

    public function addView(){
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_education/addview');
            echo view('templates/footer_admin_view');
        }
    }

    public function addAction(Request $request){
        $store = new education;
        $store->member_cv_id = $request->member_cv_id;
        $store->year_start = $request->year_start;
        $store->year_end = $request->year_end;
        $store->content = $request->content;
        // dd($request->pass);
        $store->save();
        return Redirect::to('/list_education');       
    }

    public function deleteAction(){
        $id = $_GET['id'];
        $store = new education;
        $store->destroy($id);
        return Redirect::to('/list_education');
    }

    public function infoView(){
        $store = new education;
        $getdata = $store->where('id',$_GET['id'])->get();
        $education = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_education/infoview')->with('education', $education);
            echo view('templates/footer_admin_view');
        }
    }

    public function editView(){
        $store = new education;
        $getdata = $store->where('id',$_GET['id'])->get();
        $education = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_education/editview')->with('education', $education);
            echo view('templates/footer_admin_view');
        }
    }

    public function editAction(Request $request){
        $store = new education;
        $arrdata = [
            'member_cv_id'=>$request->member_cv_id,
            'year_start'=>$request->year_start,
            'year_end'=>$request->year_end,
            'content'=>$request->content,
        ];
        // dd($store);die();
        $store->where('id',$request->id)->update($arrdata);
        return Redirect::to('/list_education');       
    }
}
