<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    //home
    public function home()
    {
        return view('admin.health.index');
    }
}
