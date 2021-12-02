<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\User\UserService;
use Illuminate\Http\Request;

class UserManageController extends Controller
{

    protected $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }
    public function index()
    {
        return view('admin.user.list', [
            'title' => 'Quản lý người dùng',
            'users' => $this->user->getUser()
        ]);
    }

    public function create($id)
    {
        return view('admin.user.add', [
            'title' => 'Thêm khoá học cho người dùng',
            'courses' => $this->user->getCourse(),
            'user' => $this->user->getUserById($id)
        ]);
    }

    public function store(Request $req)
    {
       $res = $this->user->store($req);

       if ($res)
       {
           return redirect()->route('user-manage');
       }
    }
}
