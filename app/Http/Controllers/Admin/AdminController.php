<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $req)
    {
        return view('admin.home',[
            'title' => 'Admin homepage'
        ]);
    }
}
