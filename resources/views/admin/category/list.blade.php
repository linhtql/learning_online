@extends('admin.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th>Tên</th>
                                <th>Mô tả</th>
                                <th>Kích hoạt</th>
                                <th>Ngày cập nhật</th>
                                <th style="width: 130px;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($categories as $category)
                                <th>{{ $category->id }}</th>
                                <th>{{ $category->name }}</th>
                                <th>{{ $category->excerpt }}</th>
                                <th>{{ $category->active }}</th>
                                <th>{{ $category->created_at }}</th>
                                <th>
                                    <a href="/admin/categories/edit/{{ $category->id }}" 
                                        class="btn btn-primary btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" 
                                        onclick="removeRow('. $category->id .', '/admin/categories/destroy')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
@endsection