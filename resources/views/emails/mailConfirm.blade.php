<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xac nhan gui mail</title>
</head>

<body>
    <div style="width: 500px; position: absolute; top: 25%; left: 35%; background-color: #868679;">
        <fieldset>
            <legend>
                <strong>Đơn thanh toán ngày {{ date('d-m-Y h:m:s') }}</strong>
            </legend>
            @foreach ($data as $getData)
            <label>Người mua hàng: </label> {{ Auth::user()->name }} <br>
            <label>Email : </label> {{ $getData->user_email }} <br>
            <label>Mã giao dịch : </label> {{ mt_rand() }} <br>
            <label>ID khoá học : </label> {{ $getData->id_course }} <br>
            <label>Tên khoá học : </label> {{ $getData->course_name }} <br>
            @endforeach
        </fieldset>
    </div>
</body>

</html>