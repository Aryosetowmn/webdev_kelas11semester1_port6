<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexhome(){
        return view('home', [
            "title" => "Home",
            "homeValue" => Home::all()
        ]);
    }

    public function showhome($link){
        return view('posthome',[
            "title" => "Single Post",
            "post" => Home::find($link)
        ]);
    }
}
