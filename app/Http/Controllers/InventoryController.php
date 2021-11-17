<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function indexinventory(){
        return view('inventory', [
            "title" => "Inventory",
            "inventoryValue" => Inventory::all()
        ]);
    }

    public function showinventory($link){
        return view('postinventory',[
            "title" => "Single Post",
            "post" => Inventory::find($link)
        ]);
    }
}
