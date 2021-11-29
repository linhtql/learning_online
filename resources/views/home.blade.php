@extends('layouts.main')
<!-- Slider Start -->
@section('content')
<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="animated fadeInUp">Học mọi lúc,mọi nơi</h1>
                    <p class="animated fadeInUp">Chúng tôi là một tổ chức phi lợi nhuận với sứ mệnh cung cấp nền giáo dục miễn phí, đẳng cấp thế giới cho mọi người, ở bất kỳ đâu.</p>
                    <a href="course-list/1/lap-trinh.html" class="btn btn-main animated fadeInUp">Các khoá học</a>
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
            @foreach($courseSelling as $cs)
            <div class="col-md-6 ">
                <div class="post">
                    <div class="post-thumb">
                        <a href="/course-detail/{{$cs->id}}/{{$cs->slug}}.html">
                            <img class="img-responsive" src="{{$cs->thumb}}" alt="">
                        </a>
                    </div>
                    <h3 class="post-title"><a href="/course-detail/{{$cs->id}}/{{$cs->slug}}.html">{{$cs->name}}</a></h3>
                    <div class="post-meta">
                        <ul>
                            <li>
                                <i class="ion-calendar"></i> {{$cs->updated_at->diffForHumans()}}
                            </li>
                            <li>
                                <i class="ion-android-people"></i> POSTED BY ADMIN
                            </li>
                            <li>
                                <a href="/course-detail/{{$cs->id}}/{{$cs->slug}}.html"><i class="ion-pricetags">{{$cs->category->name}}</i></a>
                            </li>

                        </ul>
                    </div>
                    <div class="post-content">
                        <p>{{$cs->excerpt}}</p>
                        <a href="/course-detail/{{$cs->id}}/{{$cs->slug}}.html" class="btn btn-main">Xem thêm...</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            {{$courseSelling->links()}}

            <!-- <ul class="pagination post-pagination">
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
            </ul> -->
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
                        <p>Đội ngũ Giảng viên tại Website là những người giàu KINH NGHIỆM THỰC TẾ. Họ là những người đã có nhiều năm làm thực tế các các loại hình doanh nghiệp khác nhau, cùng với kỹ năng giảng dạy hiện đại. Họ sẵn sàng chia sẻ với bạn những gì quý báu nhất trong sự nghiệp của mình. Và trên hết là lòng nhiệt thành, tận tâm của họ đối với từng học viên thân yêu!</p>
                    </div>
                    <p>Họ đến từ nhiều nơi khác nhau và quá trình làm việc công tác cũng khác nhau. Nhưng hơn hết tất cả họ đều cùng một niềm đam mê là truyền đạt những kiến thức thực tế họ tích cóp được trong thời gian đi làm của mình cho những thế hệ các bạn trẻ mới chập chững bước vào nghề.
                        Họ đến Website để cùng chung thực hiện SỨ MỆNH mà Học Viện đã đề ra. Cùng trải nghiệm những GIÁ TRỊ CỐT LÕI nơi đây.</p>
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
                <h2 class="section-subtitle">Hãy là tất cả những gì bạn muốn </h2>
                <p>Học để biết, học để làm, học để tự khẳng định mình, học để cùng chung sống.</p>
                <p>Tri thức là chìa khóa mở cửa tương lai.</p>
                <p>Không đọc sách thì cuộc sống thực là nặng nề</p>
                <a href="course-list/1/lap-trinh.html" class="btn btn-view-works">Tham gia</a>
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
                    <h2>Đối tác của chúng tôi </h2>
                    <ul>
                        <li style="display: inline;"><img src="http://quangn3.sg-host.com/wp-content/uploads/2020/08/logos-01-free-img.png" alt=""></li>
                        <li style="display: inline;"><img src="http://quangn3.sg-host.com/wp-content/uploads/2020/08/logos-02-free-img.png" alt=""></li>
                        <li style="display: inline;"><img src="http://quangn3.sg-host.com/wp-content/uploads/2020/08/logos-03-free-img.png" alt=""></li>
                        <li style="display: inline;"><img src="http://quangn3.sg-host.com/wp-content/uploads/2020/08/logos-04-free-img.png" alt=""></li>




                    </ul>
                    <a class="btn btn-main btn-solid-border" href="{{ route('contact-us') }}">Liên hệ</a>
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
                <p>Chúng tôi là một học liệu rải khắp mọi nơi trên thế giới, chúng tôi mang đến giá trị và cơ hội kinh doanh bằng cách kết nối đỘi ngũ giảng viên hàng đầu thế giới với một kênh phân phối gồm các đại lý công nghệ, nhà tích hợp hệ thống và nhà cung cấp dịch vụ.</p>
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
                                <img src="http://quangn3.sg-host.com/wp-content/uploads/2020/08/testimonial4-free-img-1.jpg" alt="Pepole">
                                <p><span>Tran Quang Linh</span> CEO-LTStore</p>
                            </div>
                        </div>
                        <div>
                            <i class="ion-quote"></i>
                            <p>"Cám ơn Linh, những video rất hữu ích và rất hay. Chúc bạn thành công !"</p>
                            <div class="user">
                                <img src="http://quangn3.sg-host.com/wp-content/uploads/2020/08/testimonial3-free-img-1.jpg" alt="Pepole">
                                <p><span>Le Van Long</span> CEO-Anti-Covid</p>
                            </div>
                        </div>
                        <div>
                            <i class="ion-quote"></i>
                            <p>"Em đã xem hết video của anh,dù trước đó em đọc cũng khá nhiều bài viết trên mạng nhưng mông lung vì không có thực hành . Video của anh không chỉ hướng dẫn tận tình mà còn thực hành từng bước cho những newbier như em, em hứa sau này nếu em phát triển được sự nghiệp trên MMO , nhất định em sẽ mời anh 1 ly cafe , bây giờ em chưa có gì em sẽ luôn click vào quảng cáo để ủng hộ anh, một lần nữa em xin chân thành cảm ơn anh . Chúc anh công tác tốt và nhiều niềm vui"</p>
                            <div class="user">
                                <img src="http://quangn3.sg-host.com/wp-content/uploads/2020/08/testimonial2-free-img-1.jpg" alt="Pepole">
                                <p><span>Rose Huan</span> CEO-Fuho</p>
                            </div>
                        </div>
                        <div>
                            <i class="ion-quote"></i>
                            <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
                            <div class="user">
                                <img src="http://quangn3.sg-host.com/wp-content/uploads/2020/08/testimonial1-free-img-1.jpg" alt="Pepole">
                                <p><span>Kha Banh</span> CEO-Mua Quat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection