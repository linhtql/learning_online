<?php

namespace App\Http\Controllers;

use App\Http\Services\Transaction\TransactionService;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    protected $transactionService;

    public function __construct(TransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }
    public function payment($id_user, $id_course)
    {
        return view('home.payment', [
            'title' => 'Thanh toán',
            'inforCourse' => $this->transactionService->getInforCourse($id_course),
            'user' => $this->transactionService->getUserById($id_user)
        ]);
    }

    public function store(Request $req)
    {
        $res = $this->transactionService->store($req);
        if (!$res) {
            return redirect()->back();
        }
        return redirect()->route('/');
    }
}
