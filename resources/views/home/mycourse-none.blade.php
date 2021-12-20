@extends('layouts.main')
@section('content')

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    @if(Auth::user() == null)
                    <h1>Vui lòng đăng nhập !!!!</h1>
                    <a href="/login" class="btn btn-main">Đăng Nhập</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>


@endsection