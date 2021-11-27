<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\UploadService;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    protected $upload;

    public function __construct(UploadService $upload)
    {
        $this->upload = $upload;
    }
    public function store(Request $req)
    {
        $res = $this->upload->store($req);

        if ($res !== false)
        {
            return response()->json([
                'error' => false,
                'url' => $res
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
