<?php

namespace App\Http\Services\Transaction;

use App\Course;
use App\Jobs\SendMail;
use App\Mail\SendMail as MailSendMail;
use App\Transaction;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class TransactionService
{
    //lay thong tin khoa hoc
    public function getInforCourse($id_course)
    {
        return Course::with('category')
            ->where('id', $id_course)
            ->get();
    }
    
    public function getUserById($id_user)
    {
        return User::where('name', $id_user)->get();
    }

    public function store($req)
    {
        try {
        Transaction::create([
            'id_user' => $req->input('id_user'),
            'course_name' => $req->input('course_name'),
            'thumb' => $req->input('thumb'),
            'note' => $req->input('note'),
        ]);
        
        $email = $req->input('user_email')??'';
        Mail::to($email)->send(new MailSendMail(['data' => $req]));
        Session::flash('success', 'Giao dịch đang được xử lí, hãy kiểm tra hộp thư của bạn !');

        } catch (\Exception $err) {
            Session::flash('error', 'Đặt hàng thất bại, mã lỗi: ' . $err->getMessage() . ' vui lòng liên hệ quản trị viên để giải quyết !');
            return false;
        }

        return true;
    }
}