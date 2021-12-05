@extends('layouts.main')
@section('content')

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Học tập !!</h1>
                    <p>Học tập là hạt giống của kiến thức, kiến thức là hạt giống của hạnh phúc.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($course as $course)
                <div class="post post-single">
                    <h2 class="post-title">{{$course->name}}</h2>
                    <div class="post-meta">
                        <ul>
                            <li>
                                <i class="ion-calendar"></i> {{$course->updated_at->diffForHumans()}}
                            </li>
                            <li>
                                <i class="ion-android-people"></i> POSTED BY ADMIN
                            </li>
                            <li>
                                <a href="/course-list/{{$course->category->id}}/{{$course->category->slug}}.html"><i class="ion-pricetags"></i> {{$course->category->name}}</a>
                            </li>

                        </ul>
                    </div>
                    <div class="post-thumb">
                        <img class="img-responsive" src="{{$course->thumb}}" alt="{{ $course->name }}" style="width: auto; height: 300px;">
                    </div>
                    <div class="post-content post-excerpt">
                        <p>{{$course->excerpt}}</p>
                        <p> {!!$course->description!!}</p>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection