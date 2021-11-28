@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Chỉnh sửa danh mục khoá học</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tên khoá học</label>
                        <input name="name" type="text" class="form-control" value="{{ $category->name }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kích hoạt</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="active" name="active" value="1" {{ $category->active == 1 ? 'checked=""' : '' }}>
                            <label for="active" class="custom-control-label">Có</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inactive" name="active" value="0" {{ $category->active == 0 ? 'checked=""' : '' }}>
                            <label for="inactive" class="custom-control-label">Không</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Mô tả ngắn</label>
                <input name="excerpt" type="text" class="form-control" value="{{ $category->excerpt }}">
            </div>

            <div class="form-group">
                <label>Chi tiết khoá học</label>
                <textarea id="editor" name="description" class="form-control" rows="3">{{ $category->description }}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Cập nhật</button>
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