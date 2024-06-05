<header class="continer-fluid ">
    <div class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            {{ $settings->email }}
                            <span>|</span>
                        </li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            {{ $settings->contact }}
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12">
                    <ul class="ulright">
                        <li>
                            <a class="text-light" href="{{ $social_media_link->facebook }}">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-light" href="{{ $social_media_link->twitter }}">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-light" href="{{ $social_media_link->instagram  }}">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-light" href="{{ $social_media_link->linkedin  }}">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-light" href="{{ $social_media_link->youTube  }}">
                                <i class="fab fa-youtube-square"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="index.html">
                        <img src="{{ public_asset($settings->header_image) }}" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i
                                class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                    <ul class="navbad">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('index') }}">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('packages') }}">Packages</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('jeep.safari') }}">Jeep Safari</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('elephant.safari') }}">Elephant Safari</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('canter.safari') }}">Canter Safari</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dhikala.night') }}">Dhikala Night</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cancel.refund') }}">Cancel Refund</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
