<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class TrangChu extends Controller
{
    public function index()
    {
        return view('frontend.trangchu');
        
    }
    
}
