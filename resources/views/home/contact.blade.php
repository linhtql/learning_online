@extends('layouts.main')
@section('content')

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Bạn cần hỗ trợ</h1>
                    <p>Hãy để lại thông tin của bạn, Chúng tôi sẽ hồi âm qua email nhanh nhất có thể trong giờ làm việc.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form start -->
<section class="contact-form">
    <div class="container">
        <div class="row">
            <form id="contact-form">
                @csrf
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        <div class="form-group">
                            <input name="user_name" type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input name="user_email" type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input name="user_subject" type="text" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        <div class="form-group-2">
                            <textarea name="user_message" class="form-control" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button class="btn btn-default" type="submit">Gửi phản hồi</button>
                    </div>
                </div>
                <div class="error" id="error">Có lỗi xảy ra, vui lòng thử lại;</div>
                <div class="success" id="success">Đã gửi phản hồi</div>
            </form>
        </div>
        <div class="contact-box row">
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <h2>Trường Đại học Công nghệ Thông tin & Truyền thông Việt - Hàn</h2>
                    <ul class="address-block">
                        <li>
                            <i class="ion-ios-location-outline"></i>470 Trần Đại Nghĩa - quận Ngũ Hành Sơn - TP. Đà Nẵng
                        </li>
                        <li>
                            <i class="ion-ios-email-outline"></i>Email: contact@mail.com
                        </li>
                        <li>
                            <i class="ion-ios-telephone-outline"></i>Phone:+84 961 389 719
                        </li>
                    </ul>
                    <ul class="social-icons">
                        <li>
                            <a href="http://www.themefisher.com"><i class="ion-social-googleplus-outline"></i></a>
                        </li>
                        <li>
                            <a href="http://www.themefisher.com"><i class="ion-social-linkedin-outline"></i></a>
                        </li>
                        <li>
                            <a href="http://www.themefisher.com"><i class="ion-social-pinterest-outline"></i></a>
                        </li>
                        <li>
                            <a href="http://www.themefisher.com"><i class="ion-social-dribbble-outline"></i></a>
                        </li>
                        <li>
                            <a href="http://www.themefisher.com"><i class="ion-social-twitter-outline"></i></a>
                        </li>
                        <li>
                            <a href="http://www.themefisher.com"><i class="ion-social-facebook-outline"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927796.5416861256!2d106.01202646249997!3d15.9750106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2sKorea%20-%20Vietnam%20Friendship%20Information%20Technology%20College!5e0!3m2!1sen!2s!4v1637649189688!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection