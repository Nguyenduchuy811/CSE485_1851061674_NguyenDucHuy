<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use App\Models\thank_letter;
use App\Models\member_cv;
use App\Models\banner;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index(){
        $store = new users;
        $getdata = $store->get();
        $user = json_decode(json_encode($getdata), true);
        
        $store = new thank_letter;
        $getdata = $store->get();
        $thank_letter = json_decode(json_encode($getdata), true);
        
        $store = new member_cv;
        $getdata = $store->get();
        $member_cv = json_decode(json_encode($getdata), true);

        $store = new banner;
        $getdata = $store->get();
        $banner = json_decode(json_encode($getdata), true);

        $username = Session::get('username');
        if(!isset($username) || $username == ''){
            return Redirect::to('login');
        }else{
            echo view('templates/header_admin_view');
            echo view('admins/dashboard')->with('banner', $banner)
                                        ->with('user', $user)
                                        ->with('thank_letter', $thank_letter)
                                        ->with('member_cv', $member_cv);
            echo view('templates/footer_admin_view');
        }
    }
}
