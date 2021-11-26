@extends('layouts.main')
@section('title','Học trực tuyến')
<!-- Slider Start -->
@section('content')
<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="animated fadeInUp">Học mọi lúc,mọi nơi</h1>
                    <p class="animated fadeInUp">Chúng tôi là một tổ chức phi lợi nhuận với sứ mệnh cung cấp nền giáo dục miễn phí, đẳng cấp thế giới cho mọi người, ở bất kỳ đâu.</p>
                    <a href="{{route ('course-list')}}" class="btn btn-main animated fadeInUp">Các khoá học</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Start -->
<section class="service">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Dịch vụ</h2>
                <p>Chúng tôi sẽ mang đến cho bạn những dịch vụ tốt nhất .</p>
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i class="icon ion-coffee"></i>
                    <h4>Giảng Viên Uy Tín</h4>
                    <p>Bài giảng chất lượng</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i class="ion-compass"></i>
                    <h4>Thanh Toán 1 Lần</h4>
                    <p>Học mãi mãi</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i class="ion-planet"></i>
                    <h4>Học trực tuyến</h4>
                    <p>Hỗ trợ trực tiếp</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i class="ion-earth"></i>
                    <h4>Nội dung tin cậy</h4>
                    <p>Được tạo bởi các chuyên gia</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="text-center">Khoá Học Bán Chạy Nhất</h2>
            </div>

            <div class="col-md-6 ">
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
                        <a href="blog-single.html" class="btn btn-main">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
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
            <div class="col-md-6 ">
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
            <div class="col-md-6 ">
                <div class="post">
                    <div class="post-thumb">
                        <a href="blog-single.html">
                            <img class="img-responsive" src="/home/images/blog/blog-post-4.jpg" alt="">
                        </a>
                    </div>
                    <h3 class="post-title"><a href="blog-single.html">Standard Text Post</a></h3>
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
            <div class="col-md-6 ">
                <div class="post">
                    <div class="post-media post-media-audio">
                        <iframe height="390" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115637399&amp;color=ff5500&amp;auto_play=false&amp;show_artwork=true" class="DRAGDIS_iframe"></iframe>
                    </div>
                    <h3 class="post-title"><a href="blog-single.html">Standard Audio Post</a></h3>
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
            <div class="col-md-6 ">
                <div class="post">
                    <div class="post-media post-media-audio">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/Ljik3zsGNF4" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h3 class="post-title"><a href="blog-single.html">Standard Video Post</a></h3>
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
        <div class="text-center">
            <ul class="pagination post-pagination">
                <li><a href="#">Prev</a>
                </li>
                <li class="active"><a href="#">1</a>
                </li>
                <li><a href="#">2</a>
                </li>
                <li><a href="#">3</a>
                </li>
                <li><a href="#">4</a>
                </li>
                <li><a href="#">5</a>
                </li>
                <li><a href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>


<!-- Wrapper Start -->
<section class="about section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="block">
                    <div class="section-title">
                        <h2>Giảng Viên NhiềU Năm Kinh Nghiệm</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id </p>
                </div>
            </div><!-- .col-md-7 close -->
            <div class="col-md-5 col-sm-12">
                <div class="block">
                    <img src="/home/images/wrapper-img.png" alt="Img">
                </div>
            </div><!-- .col-md-5 close -->
        </div>
    </div>
</section>

<section class="feature bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-6">
                <h2 class="section-subtitle">WE BELIEVE IN GREAT IDEAS</h2>
                <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <a href="#" class="btn btn-view-works">View Works</a>
            </div>
        </div>
    </div>
</section>


<!-- Call to action Start -->

<section class="call-to-action bg-1 section-sm overly">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>We design delightful digital experiences.</h2>
                    <p>Read more about what we do and our philosophy of design. Judge for yourself The work and results <br> we’ve achieved for other clients, and meet our highly experienced Team who just love to design.</p>
                    <a class="btn btn-main btn-solid-border" href="#">Tell Us Your Story</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content Start -->
<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h2>Về chúng tôi</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, <br> there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <ul class="counter-box clearfix">
                        <li>
                            <div class="counter-item">
                                <i class="ion-ios-chatboxes-outline"></i>
                                <h4 class="count" data-count="99">0</h4>
                                <span>Khoá học</span>
                            </div>
                        </li>
                        <li>
                            <div class="counter-item">
                                <i class="ion-ios-glasses-outline"></i>
                                <h4 class="count" data-count="45">0</h4>
                                <span>Học Viên</span>
                            </div>
                        </li>
                        <li>
                            <div class="counter-item">
                                <i class="ion-ios-compose-outline"></i>
                                <h4 class="count" data-count="125">0</h4>
                                <span>Giảng viên</span>
                            </div>
                        </li>
                        <li>
                            <div class="counter-item">
                                <i class="ion-ios-timer-outline"></i>
                                <h4 class="count" data-count="200">0</h4>
                                <span>Đối tác</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <div class="testimonial-carousel text-center">
                    <div class="testimonial-slider owl-carousel">
                        <div>
                            <i class="ion-quote"></i>
                            <p>"Em đã xem hết video của anh,dù trước đó em đọc cũng khá nhiều bài viết trên mạng nhưng mông lung vì không có thực hành . Video của anh không chỉ hướng dẫn tận tình mà còn thực hành từng bước cho những newbier như em, em hứa sau này nếu em phát triển được sự nghiệp trên MMO , nhất định em sẽ mời anh 1 ly cafe , bây giờ em chưa có gì em sẽ luôn click vào quảng cáo để ủng hộ anh, một lần nữa em xin chân thành cảm ơn anh . Chúc anh công tác tốt và nhiều niềm vui"</p>
                            <div class="user">
                                <img src="images/item-img1.jpg" alt="Pepole">
                                <p><span>Rose Ray</span> CEO-Themefisher</p>
                            </div>
                        </div>
                        <div>
                            <i class="ion-quote"></i>
                            <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
                            <div class="user">
                                <img src="images/item-img1.jpg" alt="Pepole">
                                <p><span>Rose Ray</span> CEO-Themefisher</p>
                            </div>
                        </div>
                        <div>
                            <i class="ion-quote"></i>
                            <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
                            <div class="user">
                                <img src="images/item-img1.jpg" alt="Pepole">
                                <p><span>Rose Ray</span> CEO-Themefisher</p>
                            </div>
                        </div>
                        <div>
                            <i class="ion-quote"></i>
                            <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
                            <div class="user">
                                <img src="images/item-img1.jpg" alt="Pepole">
                                <p><span>Rose Ray</span> CEO-Themefisher</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection