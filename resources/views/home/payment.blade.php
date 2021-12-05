@extends('layouts.main')
@section('content')
<div class="row">
    @include('alert')
    <div class="col-lg-8">
        <div class="text-center" style="margin-bottom: 30px;">
            <h2>THANH TOÁN KHOÁ HỌC</h2>
            <h3>Chúc mừng bạn đã lựa chọn được khoá học phù hợp, chỉ còn một bước nữa là chúng ta có thể vào học rồi !</h3>
        </div>
        <pre>
        Hình thức: Nộp từ tài khoản của Ngân hàng nông nghiệp và Phát triển Nông thôn dưới các hình thức:

        - Cách 1: Nộp tại quầy giao dịch Agribank trên cả nước (Bill payment).

        - Cách 3: Nộp qua kênh E - Mobile Banking.

        - Cách 4: Nộp qua kênh Internet Banking.

        - Cách 5: Nộp qua kênh ATM
        Học viên đóng tiền bằng hình thức chuyển khoản vào tài khoản của chúng tôi theo cú pháp: 
        Tên tài khoản - Tên khoá học - Họ và tên , (Ví dụ: linhtql - Javacore - TranQuangLinh)

        Thông tin tài khoản của chúng tôi:

        + Tên tài khoản: TRƯỜNG ĐẠI HỌC CNTT VÀ TRUYỀN THÔNG VIỆT - HÀN

        + Tài khoản số: 2015201003628.

        - Tên ngân hàng: Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam - Chi nhánh Tân Chính - Nam Đà Nẵng.
        - Sau khi thanh toán, bạn vui lòng chụp ảnh minh chứng và gửi vào form bên cạnh!
    </pre>
    </div>
    <div class="text-center" style="margin-bottom: 30px;">
        <h2>Thông tin thanh toán</h2>
        <h3>Hãy đảm bảo mọi thông tin dưới đây là đúng sự thật!</h3>
    </div>
    <form action="" method="POST">
        @csrf
        <div class="col-lg-3">
            <div class="block">
                @foreach ($user as $att)
                <div class="form-group">
                    <input name="user_name" type="text" class="form-control" disabled value="{{ $att->name }}">
                </div>
                <input type="hidden" name="id_user" value="{{ $att->id }}">
                @endforeach
                <div class="form-group">
                    <input name="user_email" type="text" class="form-control" placeholder="Địa chỉ email">
                </div>
                <div class="form-group">
                    @foreach($inforCourse as $info)
                    <input type="text" class="form-control" disabled value="{{ $info->name }}">
                    <input type="hidden" name="course_name" value="{{ $info->name }}">
                    <input type="hidden" name="id_course" value="{{ $info->id }}">
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Ảnh mô tả</label>
                    <input id="image" type="file" class="form-control">
                    <div id="image_show"></div>
                    <input type="hidden" name="thumb" id="thumb">
                </div>
                <div class="form-group">
                    <textarea name="note" id="note" rows="5" cols="40"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-success" type="submit">
                        Hoàn tất đăng kí
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="text-center">
    <a class="btn btn-main" style="margin-bottom: 30px;" href="/">VỀ TRANG CHỦ</a>
</div>

@endsection