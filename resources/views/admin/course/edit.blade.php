@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Sửa khoá học {{ $course->name }}</h3>
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
                        <input name="name" value="{{ $course->name }}" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Kích hoạt</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="active" name="active" value="1" {{ $course->active == 1 ? 'checked=""' : '' }}>
                            <label for="active" class="custom-control-label">Có</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inactive" name="active" value="0" {{ $course->active == 0 ? 'checked=""' : '' }}>
                            <label for="inactive" class="custom-control-label">Không</label>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Danh mục khoá học</label><br>
                        <select name="id_category" class="form-group">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $course->id_category == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Mô tả ngắn</label>
                <input name="excerpt" value="{{ $course->excerpt }}" type="text" class="form-control" placeholder="Mô tả ngắn">
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Học phí</label>
                        <input name="price" value="{{ $course->price }}" type="number" class="form-control" placeholder="Học phí">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Học phí khuyến mãi</label>
                        <input name="price_sale" value="{{ $course->price_sale }}" type="number" class="form-control" placeholder="Học phí khuyến mãi">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Ảnh mô tả</label>
                <input id="image" type="file" class="form-control">
                <div id="image_show">
                    <img style="width: 192px; height: 108px" src="{{ $course->thumb }}" alt="{{ $course->slug }}">
                </div>
                <input type="hidden" name="thumb" value="{{ $course->thumb }}" id="thumb">
            </div>

            <div class="form-group">
                <label>Chi tiết khoá học</label>
                <textarea id="editor" name="description" class="form-control" rows="3" placeholder="Chi tiết khoá học">{{ $course->description }}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Cập nhật</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>

@endsection

@section('scripts')
<script>
    CKEDITOR.replace('editor');
</script>
@endsection