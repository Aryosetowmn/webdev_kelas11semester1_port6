<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function indexabout(){
        return view('about', [
            "title" => "About",
            "aboutValue" => About::all()
        ]);
    }

    public function showabout($link){
        return view('postabout',[
            "title" => "Single Post",
            "post" => About::find($link)
        ]);
    }
}
