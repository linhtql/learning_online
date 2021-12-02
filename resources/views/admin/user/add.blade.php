@extends('admin.main')

@section('content')
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Thêm khoá học</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <div class="row">
                @foreach ($user as $us)
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tên người dùng</label>
                        <input type="text" class="form-control" disabled value="{{ $us->name }}">
                    </div>
                </div>
                <input type="hidden" name="id_user" value="{{ $us->id }}">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Email người dùng</label>
                        <input type="text" class="form-control" disabled value="{{ $us->email }}">
                    </div>
                </div>
                @endforeach
            </div>
            <div class="form-group">
                <label>Khoá học</label>
                <select name="id_course">
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}"> {{ $course->name }} </option>
                    @endforeach
                </select>
            </div>
    </div>
    <div class="form-group">
        <label>Ghi chú</label>
        <textarea name="note" class="form-control" placeholder="Enter ..."></textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Thêm</button>
    </div>
    </form>
</div>
</div>
@endsection