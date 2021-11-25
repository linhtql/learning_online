<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class UploadService extends Controller
{
    public function store($req)
    {
        if($req->hasFile('file')){
            
        }
    }
}