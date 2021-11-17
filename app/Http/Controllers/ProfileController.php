<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function indexprofile(){
        return view('profile', [
            "title" => "Profile",
            "profileValue" => Profile::all()
        ]);
    }

    public function showprofile($link){
        return view('postprofile',[
            "title" => "Single Post",
            "post" => Profile::find($link)
        ]);
    }
}
