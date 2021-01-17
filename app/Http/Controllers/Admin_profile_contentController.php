<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\profile_content;
use App\Models\member_cv;
use Illuminate\Support\Facades\Redirect;

class Admin_profile_contentController extends Controller
{
    public function index(){
        $store = new profile_content; 
        $getdata = $store->leftjoin('member_cv', 'member_cv_id', '=', 'member_cv.id') 
                    ->select('profile.*', 'member_cv.first_name', 'member_cv.last_name', 'member_cv.email')
                    ->get();
        // $getdata = DB::table('user')->get();
        $profile_content = json_decode(json_encode($getdata), true);

        // echo "<pre>";
        // var_dump($profile_content);die();

        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_profile_content/index')->with('profile_content', $profile_content);
            echo view('templates/footer_admin_view');
        }
    }

    public function addView(){
        $store = new member_cv;
        $getdata = $store->get();
        $member_cv = json_decode(json_encode($getdata), true);

        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_profile_content/addview')->with('member_cv', $member_cv);
            echo view('templates/footer_admin_view');
        }
    }

    public function addAction(Request $request){
        $store = new profile_content;
        
        $store->member_cv_id = $request->member_cv_id;
        $store->content = nl2br(trim($request->content));
        // dd($request->pass);
        $store->save();
        return Redirect::to('/list_profile_content');       
    }

    public function deleteAction(){
        $id = $_GET['id'];
        $store = new profile_content;
        $store->destroy($id);
        return Redirect::to('/list_profile_content');
    }

    public function infoView(){
        $store = new profile_content;
        $getdata = $store->leftjoin('member_cv', 'member_cv_id', '=', 'member_cv.id') 
                        ->select('profile.*', 'member_cv.first_name', 'member_cv.last_name', 'member_cv.email')
                        ->where('profile.id',$_GET['id'])
                        ->get();
        $profile_content = json_decode(json_encode($getdata), true);
        // var_dump($profile_content);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_profile_content/infoview')->with('profile_content', $profile_content);
            echo view('templates/footer_admin_view');
        }
    }

    public function editView(){
        $store = new profile_content;
        $getdata = $store->leftjoin('member_cv', 'member_cv_id', '=', 'member_cv.id') 
                        ->select('profile.*', 'member_cv.first_name', 'member_cv.last_name', 'member_cv.email')
                        ->where('profile.id',$_GET['id'])->get();
        $profile_content = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_profile_content/editview')->with('profile_content', $profile_content);
            echo view('templates/footer_admin_view');
        }
    }

    public function editAction(Request $request){
        $store = new profile_content;
        $arrdata = [
            'id'=>$request->id,
            'content'=>nl2br(trim($request->content))
        ];
        // dd($store);die();
        $store->where('id',$request->id)->update($arrdata);
        return Redirect::to('/list_profile_content');       
    }   
}
