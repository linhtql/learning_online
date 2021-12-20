@extends('layouts.main')
@section('content')
<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    @if(count($courseBuyed)==0)
                    {
                    <h1>Bạn chưa mua khoá học nào !</h1>
                    <a href="../../course-list/1/lap-trinh.html" class="btn btn-main">Mua khoá học</a>
                    }
                    @else
                    <h1>Khoá học của tôi</h1>
                    <p>Học nữa, học mãi !</p>
                    @endif


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
                        <a href="/study/{{$cb->course->id}}/{{$cb->course->slug}}.html">
                            <img class="img-responsive" style="width: auto; height: 300px;" src="{{$cb->course->thumb}}" alt="$cb->course->name">
                        </a>
                    </div>
                    <h3 class="post-title"><a href="/study/{{$cb->course->id}}/{{$cb->course->slug}}.html">{{$cb->course->name}}</a></h3>
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
                        <p><strong>{{$cb->course->excerpt}}</strong></p>
                        <a href="/study/{{$cb->course->id}}/{{$cb->course->slug}}.html" class="btn btn-main">Vào học</a>
                    </div>
                </div>
            </div>
            @endforeach



        </div>

    </div>

    @endsection