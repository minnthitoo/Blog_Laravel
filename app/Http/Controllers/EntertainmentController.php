<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    //home
    public function home()
    {
        return view('admin.entertainment.index');
    }
}
