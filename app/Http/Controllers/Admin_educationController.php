<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\education;
use App\Models\member_cv;
use Illuminate\Support\Facades\Redirect;

class Admin_educationController extends Controller
{
    public function index(){
        $username = Session::get('username');
        if($username[0]['permission'] == null) {
            return Redirect::to('dashboard');
        }else{
            $user_permission_session = explode("|", $username[0]['permission']);
            $check = false;
            foreach ($user_permission_session as $kpers => $vpers) {
                if ($vpers == 3) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        }

        $store = new education; 
        $getdata = $store->leftjoin('member_cv', 'member_cv_id', '=', 'member_cv.id') 
                        ->select('education.*', 'member_cv.first_name', 'member_cv.last_name', 'member_cv.email')
                        ->get();
        // $getdata = DB::table('user')->get();
        $education = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
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
        if($username[0]['permission'] == null) {
            return Redirect::to('dashboard');
        }else{
            $user_permission_session = explode("|", $username[0]['permission']);
            $check = false;
            foreach ($user_permission_session as $kpers => $vpers) {
                if ($vpers == 3) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        }

        $store = new member_cv;
        $getdata = $store->get();
        $member_cv = json_decode(json_encode($getdata), true);

        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_education/addview')->with('member_cv', $member_cv);
            echo view('templates/footer_admin_view');
        }
    }

    public function addAction(Request $request){
        $store = new education;
        $store->member_cv_id = $request->member_cv_id;
        $store->year_start = $request->year_start;
        $store->year_end = $request->year_end;
        $store->content = nl2br(trim($request->content));
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
        $username = Session::get('username');
        if($username[0]['permission'] == null) {
            return Redirect::to('dashboard');
        }else{
            $user_permission_session = explode("|", $username[0]['permission']);
            $check = false;
            foreach ($user_permission_session as $kpers => $vpers) {
                if ($vpers == 3) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        }

        $store = new education;
        $getdata = $store->leftjoin('member_cv', 'member_cv_id', '=', 'member_cv.id') 
                        ->select('education.*', 'member_cv.first_name', 'member_cv.last_name', 'member_cv.email')
                        ->where('education.id',$_GET['id'])
                        ->get();
        $education = json_decode(json_encode($getdata), true);
        // var_dump($education);die();
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_education/infoview')->with('education', $education);
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
                if ($vpers == 3) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        }
        
        $store = new education;
        $getdata = $store->leftjoin('member_cv', 'member_cv_id', '=', 'member_cv.id') 
                        ->select('education.*', 'member_cv.first_name', 'member_cv.last_name', 'member_cv.email')
                        ->where('education.id',$_GET['id'])
                        ->get();
        $education = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
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
            'year_start'=>$request->year_start,
            'year_end'=>$request->year_end,
            'content'=>nl2br(trim($request->content)),
        ];
        // dd($arrdata);die();
        $store->where('id',$request->id)->update($arrdata);
        return Redirect::to('/list_education');       
    }
}
