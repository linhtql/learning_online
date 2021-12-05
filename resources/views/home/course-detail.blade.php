@extends('layouts.main')

@section('content')

<section class="portfolio-single-page section-sm">
    @foreach($courseDetail as $cd)
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="portfolio-single-slider owl-carousel owl-theme">
                    <div><img src="{{$cd->thumb}}"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-details mt-50">
                    <h4>Chi tiết khoá học</h4>
                    <ul>
                        <li><span><i class="fa fa-shirtsinbulk "></i> Tên khoá học</span><strong>{{$cd->name}}</strong></li>
                        <li><span><i class="icon-calendar3"></i>Thời gian tạo:</span> {{$cd->updated_at->diffForHumans()}}</li>
                        <li><span><i class="icon-lightbulb"></i>Danh mục:</span> <a href="/course-list/{{$cd->category->id}}/{{$cd->category->slug}}.html">{{$cd->category->name}}</a></li>
                        <li><span><i class="icon-calendar3"></i>Giá :</span> {{$cd->price}} VND</li>
                        <li><span><i class="icon-calendar3"></i>Khuyến mãi :</span> {{$cd->price_sale}} VND</li>
                        <li><span><i class="icon-calendar3"></i>Thành tiền :</span>{{$cd->price- $cd->price_sale}} VND</li>
                        <li><span><i class="icon-link"></i>Đăng bởi:</span>Admin</li>
                        <li><span class="btn btn-main"><a style="color: #fff;" href="/payment/{{$id_user}}/{{$cd->id}}">Thanh toán</a></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="project-content mt-50">
                    <h2>Sơ lược</h2>
                    <p><strong>{{$cd->excerpt}}</strong></p>
                    <p>{!! $cd->description !!}</p>
                </div>
            </div>
            <div class="col-md-5">

            </div>
        </div>

    </div>
    @endforeach
</section>
<section class="related-projects section-sm bg-gray">
    <div class="container">
        <div class="row">
            <div class="title">
                <h2>Khoá học liên quan</h2>
            </div>
        </div>
        <div class="row">
            @foreach($courseRelated as $cr)
            <div class="col-md-4">
                <div class="content">
                    <img class="img-responsive" src="{{$cr->thumb}}" style="width: auto; height: 300px;">
                    <div class="content">
                        <h4>{{$cr->name}} </h4>
                        <p>{{$cr->excerpt}}</p>
                        <a href="/course-detail/{{$cr->id}}/{{$cr->slug}}.html" class="btn btn-small">Xem thêm...</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection