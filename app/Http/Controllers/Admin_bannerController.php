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
        $username = Session::get('username');
        if($username[0]['permission'] == null) {
            return Redirect::to('dashboard');
        }else{
            $user_permission_session = explode("|", $username[0]['permission']);
            $check = false;
            foreach ($user_permission_session as $kpers => $vpers) {
                if ($vpers == 5) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        }

        $store = new banner; 
        $getdata = $store->get();
        // $getdata = DB::table('user')->get();
        $banner = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
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
        if($username[0]['permission'] == null) {
            return Redirect::to('dashboard');
        }else{
            $user_permission_session = explode("|", $username[0]['permission']);
            $check = false;
            foreach ($user_permission_session as $kpers => $vpers) {
                if ($vpers == 5) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        }
        
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
        
        $img = $request->avatar_img_member;
        $input['image'] = time().'.'.$request->avatar_img_member->getClientOriginalExtension();
        $path = public_path('/image');
        $img->move(public_path('/image'), $input['image']);
        
        $store->image = $input['image'];
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
        $username = Session::get('username');
        if($username[0]['permission'] == null) {
            return Redirect::to('dashboard');
        }else{
            $user_permission_session = explode("|", $username[0]['permission']);
            $check = false;
            foreach ($user_permission_session as $kpers => $vpers) {
                if ($vpers == 5) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        }

        $store = new banner;
        $getdata = $store->where('id',$_GET['id'])->get();
        $banner = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_banner/infoview')->with('banner', $banner);
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
                if ($vpers == 5) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        }
        
        $store = new banner;
        $getdata = $store->where('id',$_GET['id'])->get();
        $banner = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_banner/editview')->with('banner', $banner);
            echo view('templates/footer_admin_view');
        }
    }

    public function editAction(Request $request){
        $store = new banner;
        $img = $request->avatar_img_member;
        if ($img!=null) {
            $input['image'] = time().'.'.$request->avatar_img_member->getClientOriginalExtension();
            $path = public_path('/image');
            $img->move(public_path('/image'), $input['image']);
            $arrdata = [
                'image'=>$input['image']
            ];
        }else{
            $arrdata = [
            ];
        }
        // dd($store);die();
        $store->where('id',$request->id)->update($arrdata);
        return Redirect::to('/list_banner');       
    }
}
