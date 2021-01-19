<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\member_cv;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


class Admin_membercvController extends Controller
{
    public function index(){
        $username = Session::get('username');
        if($username[0]['permission'] == null) {
            return Redirect::to('dashboard');
        }else{
            $user_permission_session = explode("|", $username[0]['permission']);
            $check = false;
            foreach ($user_permission_session as $kpers => $vpers) {
                if ($vpers == 2) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        }

        $store = new member_cv;
        $getdata = $store->get();
        $members = json_decode(json_encode($getdata), true);
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_member_cv/index')->with('members', $members);
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
                if ($vpers == 2) {
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
            echo view('admins/admin_member_cv/addview');
            echo view('templates/footer_admin_view');
        }
    }

    public function addAction(Request $request){
        $store = new member_cv;
        
        $store->first_name = $request->firstname;
        $store->last_name = $request->lastname;
        $store->gender = $request->gender;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->address = $request->address;
        $store->note = $request->note;

        $img = $request->avatar_img_member;
        $input['image'] = time().'.'.$request->avatar_img_member->getClientOriginalExtension();
        $path = public_path('/image');
        $img->move(public_path('/image'), $input['image']);
        
        $store->image = $input['image'];
        
        // dd($request->request);
        $store->save();
        return Redirect::to('/list_member_cv');     
        // dd($request->request);  
    }

    public function deleteAction(){
        $id = $_GET['id'];
        $store = new member_cv;
        $store->destroy($id);
        return Redirect::to('/list_member_cv');
    }

    public function infoView(){
        $username = Session::get('username');
        if($username[0]['permission'] == null) {
            return Redirect::to('dashboard');
        }else{
            $user_permission_session = explode("|", $username[0]['permission']);
            $check = false;
            foreach ($user_permission_session as $kpers => $vpers) {
                if ($vpers == 2) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        }

        $store = new member_cv;
        $getdata = $store->where('id',$_GET['id'])->get();
        $members = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_member_cv/infoview')->with('members', $members);
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
                if ($vpers == 2) {
                    $check = true;
                }
            };
            if ($check == false) {
                return Redirect::to('dashboard');
            };
        }
        
        $store = new member_cv;
        $getdata = $store->where('id',$_GET['id'])->get();
        $members = json_decode(json_encode($getdata), true);
        // var_dump($users);die();
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/admin_member_cv/editview')->with('members', $members);
            echo view('templates/footer_admin_view');
        }
    }

    public function editAction(Request $request){
        $store = new member_cv;

        $img = $request->avatar_img_member;
        var_dump($img);die();
        if ($img!=null) {
            $input['image'] = time().'.'.$request->avatar_img_member->getClientOriginalExtension();
            $path = public_path('/image');
            $img->move(public_path('/image'), $input['image']);
            $arrdata = [
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'gender'=>$request->gender,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'note'=>$request->note,
                'image'=>$input['image']
            ];
        }else{
            $arrdata = [
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'gender'=>$request->gender,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'note'=>$request->note
            ];
        }
        
        
        // dd($store);die();
        $store->where('id',$request->id)->update($arrdata);
        return Redirect::to('/list_member_cv');       
    }
}
