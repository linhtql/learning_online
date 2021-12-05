@extends('layouts.main')
@section('content')
<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Tất cả khoá học.</h1>
                    <p>Hãy chọn khoá học phù hợp vớI bạn.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Portfolio Start -->
<section class="portfolio-work">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="portfolio-menu">
                        <div class="btn-group btn-group-toggle justify-content-center">
                            @foreach($category as $cate)
                            <a class="btn btn-sm btn-primary active" href="/course-list/{{$cate->id}}/{{$cate->slug}}.html">
                                {{$cate->name}}
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="row shuffle-wrapper">
                        @foreach($courseList as $cl)
                        <div class="col-md-4 portfolio-item shuffle-item" data-groups="[&quot;design&quot;]">
                            <img src="{{$cl->thumb}}" alt="" class="img-responsive" style="width: auto; height: 300px;">
                            <div class="portfolio-hover">
                                <div class="portfolio-content">
                                    <a href="{{$cl->thumb}}" class="portfolio-popup"><i class="icon ion-search"></i></a>
                                    <a class="h3" href="/course-detail/{{$cl->id}}/{{$cl->slug}}.html">{{$cl->name}}</a>
                                    <p>{{$cl->excerpt}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">{{$courseList->links()}}</div>
</section>
@endsection