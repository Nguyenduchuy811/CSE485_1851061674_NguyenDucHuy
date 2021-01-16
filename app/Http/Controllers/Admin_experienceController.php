<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\experience;
use Illuminate\Support\Facades\Redirect;

class Admin_experienceController extends Controller
{
    public function index(){
        $store = new experience; 
        $getdata = $store->get();
        // $getdata = DB::table('user')->get();
        $experience = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_experience/index')->with('experience', $experience);
            echo view('templates/footer_admin_view');
        }
    }

    public function addView(){
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_experience/addview');
            echo view('templates/footer_admin_view');
        }
    }

    public function addAction(Request $request){
        $store = new experience;
        $store->member_cv_id = $request->member_cv_id;
        $store->year_start = $request->year_start;
        $store->year_end = $request->year_end;
        $store->content = $request->content;
        // dd($request->pass);
        $store->save();
        return Redirect::to('/list_experience');       
    }

    public function deleteAction(){
        $id = $_GET['id'];
        $store = new experience;
        $store->destroy($id);
        return Redirect::to('/list_experience');
    }

    public function infoView(){
        $store = new experience;
        $getdata = $store->where('id',$_GET['id'])->get();
        $experience = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_experience/infoview')->with('experience', $experience);
            echo view('templates/footer_admin_view');
        }
    }

    public function editView(){
        $store = new experience;
        $getdata = $store->where('id',$_GET['id'])->get();
        $experience = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_experience/editview')->with('experience', $experience);
            echo view('templates/footer_admin_view');
        }
    }

    public function editAction(Request $request){
        $store = new experience;
        $arrdata = [
            'member_cv_id'=>$request->member_cv_id,
            'year_start'=>$request->year_start,
            'year_end'=>$request->year_end,
            'content'=>$request->content,
        ];
        // dd($store);die();
        $store->where('id',$request->id)->update($arrdata);
        return Redirect::to('/list_experience');       
    }
}
