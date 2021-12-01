@extends('layouts.main')
@section('content')
<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Blog</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, quibusdam.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <div class="post">
                    <div class="post-thumb">
                        <a href="blog-single.html">
                            <img class="img-responsive" src="/home/images/blog/blog-post-1.jpg" alt="">
                        </a>
                    </div>
                    <h3 class="post-title"><a href="">How To Wear Bright Shoes</a></h3>
                    <div class="post-meta">
                        <ul>
                            <li>
                                <i class="ion-calendar"></i> 20, MAR 2017
                            </li>
                            <li>
                                <i class="ion-android-people"></i> POSTED BY ADMIN
                            </li>
                            <li>
                                <a href=""><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href=""> TRAVEL</a>, <a href="">FASHION</a>
                            </li>

                        </ul>
                    </div>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum
                            asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam
                            fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus
                            sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quod, facere. </p>
                        <a href="/study" class="btn btn-main">Vào học</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="post">
                    <div class="post-thumb">
                        <a href="blog-single.html">
                            <img class="img-responsive" src="/home/images/blog/blog-post-2.jpg" alt="">
                        </a>
                    </div>
                    <h3 class="post-title"><a href="blog-single.html">Two Ways To Wear Straight Shoes</a></h3>
                    <div class="post-meta">
                        <ul>
                            <li>
                                <i class="ion-calendar"></i> 20, MAR 2017
                            </li>
                            <li>
                                <i class="ion-android-people"></i> POSTED BY ADMIN
                            </li>
                            <li>
                                <a href=""><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href=""> TRAVEL</a>, <a href="">FASHION</a>
                            </li>
                        </ul>
                    </div>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum
                            asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam
                            fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus
                            sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quod, facere</p>
                        <a href="blog-single.html" class="btn btn-main">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="post">
                    <div class="post-thumb">
                        <a href="blog-single.html">
                            <img class="img-responsive" src="/home/images/blog/blog-post-3.jpg" alt="">
                        </a>
                    </div>
                    <h3 class="post-title"><a href="blog-single.html">Making A Denim Statement</a></h3>
                    <div class="post-meta">
                        <ul>
                            <li>
                                <i class="ion-calendar"></i> 20, MAR 2017
                            </li>
                            <li>
                                <i class="ion-android-people"></i> POSTED BY ADMIN
                            </li>
                            <li>
                                <a href=""><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href=""> TRAVEL</a>, <a href="">FASHION</a>
                            </li>
                        </ul>
                    </div>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
                        <a href="blog-single.html" class="btn btn-main">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @endsection