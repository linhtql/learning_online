@extends('layouts.main')
@section('content')
<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Khoá học của tôi</h1>
                    <p>Học nữa, học mãi !</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            @foreach($courseBuyed as $cb)
            <div class="col-md-4 ">
                <div class="post">
                    <div class="post-thumb">
                        <a href="blog-single.html">
                            <img class="img-responsive" src="{{$cb->course->thumb}}" alt="">
                        </a>
                    </div>
                    <h3 class="post-title"><a href="">{{$cb->course->name}}</a></h3>
                    <div class="post-meta">
                        <ul>
                            <li>
                                <i class="ion-calendar"></i> {{$cb->course->updated_at->diffForHumans()}}
                            </li>
                            <li>
                                <i class="ion-android-people"></i> POSTED BY ADMIN
                            </li>
                            <li>
                                <a href="/course-list/{{$cb->course->category->id}}/{{$cb->course->category->slug}}.html"><i class="ion-pricetags"></i> {{$cb->course->category->name}}</a>
                            </li>

                        </ul>
                    </div>
                    <div class="post-content">
                        <p>{{$cb->course->excerpt}}</p>
                        <a href="/study/{{$cb->course->id}}/{{$cb->course->slug}}.html" class="btn btn-main">Vào học</a>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>

    @endsection