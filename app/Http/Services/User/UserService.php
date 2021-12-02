<?php

namespace App\Http\Services\User;

use App\Course;
use App\Enroll;
use App\User;
use Illuminate\Support\Facades\Session;

class UserService
{
    public function getUser()
    {
        return User::where('isAdmin', 0)->orderByDesc('id')->get();
    }

    public function getCourse()
    {
        return Course::where('active', 1)->orderByDesc('id')->get();
    }

    public function getUserById($id)
    {
        return User::where('id', $id)->get();
    }

    public function store($req)
    {
        $res = Enroll::create([
            'id_user' => $req->input('id_user'),
            'id_course' => $req->input('id_course'),
            'note' => $req->input('note')
        ]);

        if (!$res)
        {
            Session::flash('error', 'Thêm khoá học cho người dùng thật bại!');
        }

        Session::flash('success', 'Thêm khoá học cho người dùng thành công!');

        return true;
    }
}