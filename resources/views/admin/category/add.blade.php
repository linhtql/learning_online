@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Thêm danh mục khoá học</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tên danh mục khoá học</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kích hoạt</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="active" name="active" value="1" checked="">
                            <label for="active" class="custom-control-label">Có</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inactive" name="active" value="0">
                            <label for="inactive" class="custom-control-label">Không</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Mô tả ngắn</label>
                <input name="excerpt" type="text" class="form-control" placeholder="Enter ...">
            </div>

            <div class="form-group">
                <label>Chi tiết danh mục khoá học</label>
                <textarea id="editor" name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Thêm</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>

@endsection

@section('script')
<script>
    CKEDITOR.replace('editor');
</script>
@endsection