<!-- Header Start -->
<header class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- header Nav Start -->
                <nav class="navbar">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="{{ asset('home/images/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Khoá Học <span class="ion-ios-arrow-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/list-course">Danh sách khoá học</a></li>
                                        <li><a href="/detail-course">Chi tiết</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="{{route ('course-list')}}">Khoá học</a></li>
                                <li><a href="/mycourse">Khoá học của tôi</a></li>
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="ion-ios-arrow-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="ion-ios-arrow-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="pricing.html">Pricing Table</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="{{ route('contact-us') }}">Liên Hệ</a></li>
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng Nhập') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng Ký') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest

                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</header><!-- header close -->