@extends('layouts.app')

@section('content')
    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>About Our Charity</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> About Us</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="about-us container-fluid">
        <div class="container">

            <div class="row natur-row no-margin w-100">
                <div class="text-part col-md-6">
                    <h2>We Are Nature Lovers</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius faucibus
                        ligula non congue. Suspendisse at pretium massa, sit amet
                        vulputate nibh. Nam posuere eros dolor. Donec vel arcu sagittis, pretium nisl </p>
                    <p> Cras faucibus laoreet nibh, sit amet tincidunt leo mollis in. Etiam eu mauris metus.
                        Nulla facilisi. Etiam vestibulum,
                        nisi et convallis elementum, leo orci aliquam metus, id posuere massa neque vitae
                        arcu.</p>

                    <p>Integer vulputate vehicula dolor a eleifend. Duis aliquam condimentum sapien,
                        eget tempor justo. Aenean porttitor nibh metus, sollicitudin egestas metus posuere et
                        . Fusce egestas volutpat metus, in sodales sem bibendum porta. Nunc hendrerit nunc sit
                        amet tellus posuere, at malesuada sem gravida. Integer maximus ultricies augue, at
                        dapibus elit bibendum consequat. Cras faucibus tellus eleifend, fermentum purus in,
                        dapibus sapien. Praesent nec ornare risus. Etiam iaculis, ligula vel gravida
                        vestibulum, urna justo posuere ante,
                        id pretium massa arcu sed mi. Nunc a sollicitudin sem. Duis tempus </p>
                </div>
                <div class="image-part col-md-6">
                    <img src="{{ public_asset('assets/front/images/about.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>


    <!--  *************************Our Team Start Here ************************** -->

    <div class="our-team">
        <div class="container">

            <div class="row session-title">
                <h2>What We Offer</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin nisi id consequat bibendum.
                    Phasellus at convallis elit. In purus enim, scelerisque id arcu vitae</p>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card-1 team-member">
                        <img src="{{ public_asset('assets/front/images/team/team-1.jpg') }}" alt="Team Member 1">

                        <p><b>Siva Kumar</b> (CEO & Chairman)</p>
                        <ul class="row">
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                            <li><i class="fab fa-google-plus-g"></i></li>
                            <li><i class="fab fa-pinterest-p"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card-1 team-member">
                        <img src="{{ public_asset('assets/front/images/team/team-2.jpg') }}" alt="Team Member 1">

                        <p><b>Siva Kumar</b> (CEO & Chairman)</p>
                        <ul class="row">
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                            <li><i class="fab fa-google-plus-g"></i></li>
                            <li><i class="fab fa-pinterest-p"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card-1 team-member">
                        <img src="{{ public_asset('assets/front/images/team/team-3.jpg') }}" alt="Team Member 1">

                        <p><b>Siva Kumar</b> (CEO & Chairman)</p>
                        <ul class="row">
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                            <li><i class="fab fa-google-plus-g"></i></li>
                            <li><i class="fab fa-pinterest-p"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card-1 team-member">
                        <img src="{{ public_asset('assets/front/images/team/team-4.jpg') }}" alt="Team Member 1">

                        <p><b>Siva Kumar</b> (CEO & Chairman)</p>
                        <ul class="row">
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                            <li><i class="fab fa-google-plus-g"></i></li>
                            <li><i class="fab fa-pinterest-p"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ######## Our Team End ####### -->
@endsection
