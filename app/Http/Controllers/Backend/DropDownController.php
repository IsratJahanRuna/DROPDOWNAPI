<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dropdown;

class DropDownController extends Controller
{
    public function dropDownApi()
    {
       $api = Dropdown::get();
        return response()->json($api);
    }
}
