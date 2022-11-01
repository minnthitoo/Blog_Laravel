<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportsController extends Controller
{
    //home
    public function home()
    {
        return view('admin.sports.index');
    }
}
