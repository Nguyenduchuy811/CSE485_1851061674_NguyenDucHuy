<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;
use App\Models\education;
use App\Models\experience;
use App\Models\member_cv;
use App\Models\thank_letter;
use App\Models\profile_content;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $banner = new banner;
        $getdata_banner = $banner->get();
        $banner_data = json_decode(json_encode($getdata_banner), true);

        $member_cv = new member_cv;
        $getdata_member_cv = $member_cv->get();
        $member_cv_data = json_decode(json_encode($getdata_member_cv), true);
        
        $thank_letter = new thank_letter;
        $getdata_thank_letter = $thank_letter->get();
        $thank_letter_data = json_decode(json_encode($getdata_thank_letter), true);

        // var_dump($thank_letter_data);die();
        echo view('templates/header_index_view');
        echo view('index')->with('banner', $banner_data)
                          ->with('thank_letter', $thank_letter_data)
                          ->with('member_cv', $member_cv_data);
    }

    public function show_content_cv(Request $request){
        $member_cv = new member_cv;
        $getdata_member_cv = $member_cv->where('id', $request->id)->get();
        $member_cv_data = json_decode(json_encode($getdata_member_cv), true);
        
        $education = new education;
        $getdata_education = $education->where('member_cv_id', $request->id)->get();
        $education_data = json_decode(json_encode($getdata_education), true);

        $experience = new experience;
        $getdata_experience = $experience->where('member_cv_id', $request->id)->get();
        $experience_data = json_decode(json_encode($getdata_experience), true);

        $experience = new experience;
        $getdata_experience = $experience->where('member_cv_id', $request->id)->get();
        $experience_data = json_decode(json_encode($getdata_experience), true);
        
        return view('personal_profile/index')->with('education', $education_data)
                                             ->with('experience', $experience_data)
                                             ->with('member_cv', $member_cv_data);
    }
}
