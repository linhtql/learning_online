<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('home', [
            'title' => 'Học trựC tuyến'
        ]);
    }

    public function contact()
    {
        return view('home.contact', [
            'title' => 'Liên hệ'
        ]);
    }
}
