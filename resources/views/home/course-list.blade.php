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
                        <div class="btn-group btn-group-toggle justify-content-center" data-toggle="buttons">
                            <label class="btn btn-sm btn-primary active">
                                <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
                            </label>
                            <label class="btn btn-sm btn-primary">
                                <input type="radio" name="shuffle-filter" value="design" />UI/UX Design
                            </label>
                            <label class="btn btn-sm btn-primary">
                                <input type="radio" name="shuffle-filter" value="video" />Video
                            </label>
                            <label class="btn btn-sm btn-primary">
                                <input type="radio" name="shuffle-filter" value="illustration" />ILLUSTRATION
                            </label>
                        </div>
                    </div>
                    <div class="row shuffle-wrapper">
                        <div class="col-md-4 portfolio-item shuffle-item" data-groups="[&quot;design&quot;]">
                            <img src="/home/images/portfolio/work1.jpg" alt="">
                            <div class="portfolio-hover">
                                <div class="portfolio-content">
                                    <a href="/home/images/portfolio/work1.jpg" class="portfolio-popup"><i class="icon ion-search"></i></a>
                                    <a class="h3" href="portfolio-single.html">Rio Furniture</a>
                                    <p>Labore et dolore magna aliqua. Ut enim ad </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 portfolio-item shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
                            <img src="images/portfolio/work2.jpg" alt="">
                            <div class="portfolio-hover">
                                <div class="portfolio-content">
                                    <a href="/home/images/portfolio/work2.jpg" class="portfolio-popup"><i class="icon ion-search"></i></a>
                                    <a class="h3" href="portfolio-single.html">Rio Furniture</a>
                                    <p>Labore et dolore magna aliqua. Ut enim ad </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 portfolio-item shuffle-item" data-groups="[&quot;illustration&quot;]">
                            <img src="/home/images/portfolio/work3.jpg" alt="">
                            <div class="portfolio-hover">
                                <div class="portfolio-content">
                                    <a href="images/portfolio/work3.jpg" class="portfolio-popup"><i class="icon ion-search"></i></a>
                                    <a class="h3" href="portfolio-single.html">Rio Furniture</a>
                                    <p>Labore et dolore magna aliqua. Ut enim ad </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 portfolio-item shuffle-item" data-groups="[&quot;video&quot;,&quot;illustration&quot;]">
                            <img src="/home/images/portfolio/work4.jpg" alt="">
                            <div class="portfolio-hover">
                                <div class="portfolio-content">
                                    <a href="images/portfolio/work4.jpg" class="portfolio-popup"><i class="icon ion-search"></i></a>
                                    <a class="h3" href="portfolio-single.html">Rio Furniture</a>
                                    <p>Labore et dolore magna aliqua. Ut enim ad </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 portfolio-item shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
                            <img src="/home/images/portfolio/work5.jpg" alt="">
                            <div class="portfolio-hover">
                                <div class="portfolio-content">
                                    <a href="images/portfolio/work5.jpg" class="portfolio-popup"><i class="icon ion-search"></i></a>
                                    <a class="h3" href="portfolio-single.html">Rio Furniture</a>
                                    <p>Labore et dolore magna aliqua. Ut enim ad </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 portfolio-item shuffle-item" data-groups="[&quot;design&quot;,&quot;video&quot;]">
                            <img src="/home/images/portfolio/work6.jpg" alt="">
                            <div class="portfolio-hover">
                                <div class="portfolio-content">
                                    <a href="images/portfolio/work6.jpg" class="portfolio-popup"><i class="icon ion-search"></i></a>
                                    <a class="h3" href="portfolio-single.html">Rio Furniture</a>
                                    <p>Labore et dolore magna aliqua. Ut enim ad </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection