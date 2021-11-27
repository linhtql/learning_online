<?php

namespace App\Http\Services;

class UploadService
{
    public function store($req)
    {
        if ($req->hasFile('file')) {
            try {
                $name = $req->file('file')->getClientOriginalName();
                
                $full_path = 'uploads/' . date("Y-m-d");

                $req->file('file')->storeAs(
                    'public/' . $full_path, $name
                );
                
                return '/storage/'. $full_path . '/' . $name;
            } catch (\Exception $err) {
                return false;
            }
        }
    }
}