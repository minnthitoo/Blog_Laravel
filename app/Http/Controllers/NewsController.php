<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //home
    public function home()
    {
        return view('admin.news.index');
    }
}
