<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UcapanController extends Controller
{
    public function sayHello(){
        return "Selamat Datang (saya dari controller)";
    }

    public function sayBye(){
        return "Selamat Tinggal (saya dari controller)";
    }
}
