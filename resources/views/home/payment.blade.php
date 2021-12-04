@extends('layouts.main')
@section('content')
<div class="text-center">
    <h2>THANH TOÁN KHOÁ HỌC</h2>
    <h3>Chúc mừng bạn đã lựa chọn được khoá học phù hợp, chỉ còn một bước nữa là chúng ta có thể vào học rồi !</h3>
</div>
<h4>Để thanh toán, bạn hãy làm như sau :</h4>
<pre>
        Hình thức: Nộp từ tài khoản của Ngân hàng nông nghiệp và Phát triển Nông thôn dưới các hình thức:

        - Cách 1: Nộp tại quầy giao dịch Agribank trên cả nước (Bill payment).

        - Cách 3: Nộp qua kênh E - Mobile Banking.

        - Cách 4: Nộp qua kênh Internet Banking.

        - Cách 5: Nộp qua kênh ATM
        Học viên đóng tiền bằng hình thức chuyển khoản vào tài khoản của chúng tôi theo cú pháp: Tên tài khoản - Tên khoá học - Họ và tên , (Ví dụ: linhtql - Javacore - TranQuangLinh)

        Thông tin tài khoản của chúng tôi:

        + Tên tài khoản: TRƯỜNG ĐẠI HỌC CNTT VÀ TRUYỀN THÔNG VIỆT - HÀN

        + Tài khoản số: 2015201003628.

        - Tên ngân hàng: Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam - Chi nhánh Tân Chính - Nam Đà Nẵng.
    </pre>

<form id="contact-form" action="">
    @csrf
    <div class="col-md-6 col-sm-12">
        <div class="block">
            <div class="form-group">
                <input name="user_name" type="text" class="form-control" disabled value="{{$user}}">
            </div>
            <div class="form-group">
                <input name="user_email" type="text" class="form-control" placeholder="Địa chỉ email">
            </div>
            <div class="form-group">
                @foreach($inforCourse as $infor)
                <input name="user_subject" type="text" class="form-control" disabled value="{{$infor->name}}">
                @endforeach
            </div>
            <div class="form-group">
                <input type="file" name="user_photo" id="">
            </div>
            <input class="btn btn-default" type="submit" value="Gửi phản hồi">
        </div>
    </div>
    <div class="error" id="error">Có lỗi xảy ra, vui lòng thử lại;</div>
    <div class="success" id="success">Đã gửi phản hồi</div>
</form>

<div class="text-center">
    <a class="btn btn-main" href="/">VỀ TRANG CHỦ</a>
</div>


@endsection