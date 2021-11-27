@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Thêm khoá học</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="" method="POST">
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tên khoá học</label>
                        <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Tên khoá học">
                    </div>
                </div>
                <div class="col-sm-3">
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

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Danh mục khoá học</label><br>
                        <select name="id_category" class="form-group">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Mô tả ngắn</label>
                <input name="excerpt" value="{{ old('excerpt') }}" type="text" class="form-control" placeholder="Mô tả ngắn">
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Học phí</label>
                        <input name="price" type="number" class="form-control" placeholder="Học phí">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Học phí khuyến mãi</label>
                        <input name="price_sale" type="number" class="form-control" placeholder="Học phí khuyến mãi">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Ảnh mô tả</label>
                <input id="image" type="file" class="form-control">
                <div id="image_show"></div>
                <input type="hidden" name="thumb" id="thumb">
            </div>

            <div class="form-group">
                <label>Chi tiết khoá học</label>
                <textarea id="editor" name="description" class="form-control" rows="3" placeholder="Chi tiết khoá học">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Thêm</button>
            </div>
            @csrf
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