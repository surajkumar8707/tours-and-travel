@extends('layouts.app')

@section('content')
    <!-- ################# Carousel Starts Here#######################--->
    @if (count($carousels) > 0)
        <div class="slider container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for ($i = 0; $i < count($carousels); $i++)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"
                            class="@if ($i == 0) active @endif"></li>
                    @endfor
                </ol>
                <div class="carousel-inner">
                    @foreach ($carousels as $key => $carousel)
                        <div class="carousel-item @if ($key == 0) active @endif">
                            <a href="#">
                                <img src="{{ public_asset($carousel->image) }}" class="d-block w-100"
                                    alt="{{ $carousel->title }}">
                                <div class="detail-card">
                                    <p>{{ $carousel->title }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    @endif

    <!-- ################# Why Choos US Starts Here #######################--->

    <div class="why-choos-us container-fluid">
        <div class="container">
            <div class="session-title">
                <h2>About Us ?</h2>
                <p>Sagittis vulputate magna sagittis sagittis erat feugiat nullam cubilia amet dignissim Euismod.</p>
            </div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque corporis quis exercitationem ex minima earum
                blanditiis doloribus quod rem laudantium. Accusamus harum atque quibusdam pariatur. Explicabo quas doloribus
                placeat ipsa!</div>
            {{-- <div class="why-ro row">
                <div class="col-lg-4 col-md-6">
                    <div class="col-card">
                        <div class="icon">
                            <i class="far fa-calendar-plus"></i>
                        </div>
                        <div class="detail">
                            <h4>Easy Booking</h4>
                            <p>Turpis accumsan. Proin id ligula suspendisse. Aliquet fringilla, aptent eu dignissim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-card">
                        <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="detail">
                            <h4>Value for Money</h4>
                            <p>Turpis accumsan. Proin id ligula suspendisse. Aliquet fringilla, aptent eu dignissim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-card">
                        <div class="icon">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="detail">
                            <h4>Passionate Travel</h4>
                            <p>Turpis accumsan. Proin id ligula suspendisse. Aliquet fringilla, aptent eu dignissim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-card">
                        <div class="icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="detail">
                            <h4>Awesome Places</h4>
                            <p>Turpis accumsan. Proin id ligula suspendisse. Aliquet fringilla, aptent eu dignissim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-card">
                        <div class="icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <div class="detail">
                            <h4>Diverse Destinations</h4>
                            <p>Turpis accumsan. Proin id ligula suspendisse. Aliquet fringilla, aptent eu dignissim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-card">
                        <div class="icon">
                            <i class="far fa-comments"></i>
                        </div>
                        <div class="detail">
                            <h4>24 x 7 Support</h4>
                            <p>Turpis accumsan. Proin id ligula suspendisse. Aliquet fringilla, aptent eu dignissim.</p>
                        </div>
                    </div>
                </div>

            </div> --}}
        </div>
    </div>

    <!-- ################# Popular Packages Starts Here #######################--->

    <div class="popular-pack no-bgpack container-fluid">
        <div class="container">
            <div class="session-title">
                <h2>Our Services</h2>
                <p>Sagittis vulputate magna sagittis sagittis erat feugiat nullam cubilia amet dignissim Euismod.</p>
            </div>
            <div class="row">

                <div class="col-lg-4_ col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid"
                            src="https://jim-corbett.greenhomecity.com/public/assets/frontend/img/packages/jeep-safari_01.webp"
                            alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">

                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>Night</small>

                            </div>
                            <a class="h5 text-decoration-none" href="https://jim-corbett.greenhomecity.com/package/1">Jeep
                                Safari Online Booking &amp; Tariff - Jim Corbett National Park</a>

                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">

                                    <h6 class="m-0">
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        4
                                        <small>(1250)</small>
                                    </h6>
                                    <h5 class="m-0"><i class="fa fa-rupee-sign  mr-2"> <i
                                                class='fa fa-rupee-sign  mr-2'></i>2500 - Indian <br> <i
                                                class='fa fa-rupee-sign  mr-2'></i>5000 - Foreigner</i>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4_ col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid"
                            src="https://jim-corbett.greenhomecity.com/public/assets/frontend/img/packages/banner-image-3.webp"
                            alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">

                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>Day</small>

                            </div>
                            <a class="h5 text-decoration-none"
                                href="https://jim-corbett.greenhomecity.com/package/2">Elephant Safari Online Booking &amp;
                                Tariff - Jim Corbett National Park</a>

                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">

                                    <h6 class="m-0">
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        4
                                        <small>(1250)</small>
                                    </h6>
                                    <h5 class="m-0"><i class="fa fa-rupee-sign  mr-2"> <i
                                                class='fa fa-rupee-sign  mr-2'></i>3500</i>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4_ col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid"
                            src="https://jim-corbett.greenhomecity.com/public/assets/frontend/img/packages/banner-image-2.webp"
                            alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">

                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>Per Person,
                                    Available today</small>

                            </div>
                            <a class="h5 text-decoration-none"
                                href="https://jim-corbett.greenhomecity.com/package/3">Dhikala Canter Safari Online Booking
                                &amp; Tariff - Jim Corbett National Park</a>

                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">

                                    <h6 class="m-0">
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        4
                                        <small>(1250)</small>
                                    </h6>
                                    <h5 class="m-0"><i class="fa fa-rupee-sign  mr-2"> <i
                                                class='fa fa-rupee-sign  mr-2'></i>8000 Indian <br> <i
                                                class='fa fa-rupee-sign  mr-2'></i>12000 - Foreigner</i>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4_ col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid"
                            src="https://jim-corbett.greenhomecity.com/public/assets/frontend/img/packages/banner-image-1.webp"
                            alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">

                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>Per Person,
                                    Available today</small>

                            </div>
                            <a class="h5 text-decoration-none"
                                href="https://jim-corbett.greenhomecity.com/package/4">Night Stay Accommodation Online
                                Booking &amp; Tariff - Jim Corbett National Park</a>

                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">

                                    <h6 class="m-0">
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        4
                                        <small>(1250)</small>
                                    </h6>
                                    <h5 class="m-0"><i class="fa fa-rupee-sign  mr-2"> <i
                                                class='fa fa-rupee-sign  mr-2'></i>2500.00</i>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="container mt-5">
            <div class="text-center mb-3">
                <h1>Welcome to Corbett</h1>
            </div>
            <div class="container">
                <h5>Garjiya Devi Temple</h5>
                <img class="w-100" src="https://jim-corbett.greenhomecity.com/public/assets/images/garjiya_temple.jpg"
                    alt="">
                <p class="py-2 text-justify" style="text-indent: 50px;">
                    Garjiya Devi Temple, situated on the banks of the Kosi River near Ramnagar in Uttarakhand,
                    India, is a revered Hindu sanctuary dedicated to Goddess Parvati, known as Garjiya Devi. Rooted
                    in mythology and folklore, the temple serves as a significant pilgrimage site attracting
                    devotees, pilgrims, and tourists seeking spiritual blessings and solace.
                    According to legend, the temple's inception is attributed to Muni Anand, a sage who purportedly
                    discovered an idol of Goddess Parvati submerged in the waters of the Kosi River. This auspicious
                    find led to the construction of the temple, which subsequently evolved into a sacred place of
                    worship and reverence.
                    The allure of Garjiya Devi Temple extends beyond its religious significance, as it is nestled
                    amidst the verdant Kumaon hills, offering visitors a scenic retreat. The suspension bridge
                    spanning the river further enhances the pilgrimage experience, providing breathtaking views of
                    the tranquil surroundings.
                    Throughout the year, devotees congregate at the temple, with heightened fervour during festivals
                    such as Navratri and Kartik Poornima, to partake in special prayers and rituals. Garjiya Devi
                    Temple epitomizes faith, cultural heritage, and natural splendour, inviting all to bask in its
                    divine aura and serene ambiance.

                </p>


            </div>
        </div>
    </div>


    <!--################### Tour Type Starts Here #######################--->
    <div id="why" class="our-capablit container-fluid">
        <div class="layy">
            <div class="container">
                <div class="session-title">
                    <h2>Tour Type</h2>

                </div>
                <div class="row mt-5">
                    <div class="col-md-3 col-sm-6">
                        <div class="cap-det">
                            <div class="icon">
                                <i class="fas fa-walking"></i>
                            </div>
                            <h6>Walking</h6>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="cap-det">
                            <div class="icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <h6>Safari</h6>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="cap-det">
                            <div class="icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <h6>Camp Fire</h6>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="cap-det">
                            <div class="icon">
                                <i class="fab fa-fly"></i>
                            </div>
                            <h6>Air Ride</h6>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="cap-det">
                            <div class="icon">
                                <i class="fas fa-ship"></i>
                            </div>
                            <h6>Cruise</h6>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="cap-det">
                            <div class="icon">
                                <i class="fas fa-suitcase-rolling"></i>
                            </div>
                            <h6>Hiking</h6>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="cap-det">
                            <div class="icon">
                                <i class="fas fa-hippo"></i>
                            </div>
                            <h6>Wild Life</h6>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="cap-det">
                            <div class="icon">
                                <i class="fas fa-baseball-ball"></i>
                            </div>
                            <h6>Sports</h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--################### Tour Type Starts Here #######################--->

    <!-- ################# Tour Packages Starts Here #######################--->
    <div class="tour-package container-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Packages</h2>
                <p>Jim Corbett Green Home city have a wide range of packages for your comfort</p>
            </div>
            <!-- Custom Added Packages -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="package-item">
                        <img src="https://www.adventurush.com/wp-content/uploads/2022/08/Copy-of-shutterstock_1268935471.jpg" alt="Corbett Fun Tour with Jeep Safari">
                        <div class="down-content">
                            <h4>Corbett Fun Tour with Jeep Safari</h4>
                            <p>Duration: 1 Night & 2 Days<br>
                                Jungle Safari: 1 Time Jeep Safari<br>
                                Accommodation: 1 Night Stay at Wildlife Resort<br>
                                Meal Plan: MAP (Dinner & Breakfast)<br>
                                Room Category: Deluxe Room</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price"><i class="fa fa-rupee-sign"></i> 5,200/- Per Person (Minimum 2 Members)</span>
                                {{-- <a href="{{ url('packages.show', 1) }}" class="btn btn-primary">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="package-item">
                        <img src="https://www.corbett-national-park.com/blog/wp-content/uploads/2015/09/corbett-jungle-holidays.jpg" alt="Corbett Holiday Tour with Jeep Safari">
                        <div class="down-content">
                            <h4>Corbett Holiday Tour with Jeep Safari</h4>
                            <p>Duration: 2 Nights & 3 Days<br>
                                Jungle Safari: 1 Time Jeep Safari<br>
                                Accommodation: 2 Nights Stay at Wildlife Resort<br>
                                Meal Plan: MAP (Dinner & Breakfast)<br>
                                Room Category: Deluxe Room</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price"><i class="fa fa-rupee-sign"></i> 7,000/- Per Person (Minimum 2 Members)</span>
                                {{-- <a href="{{ url('packages.show', 2) }}" class="btn btn-primary">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="package-item">
                        <img src="https://www.alkofholidays.com/admin/uploads/2020/04/AH-88725-Nainital-Tours-Uttarakhand.jpg">
                        <div class="down-content">
                            <h4>Corbett & Nainital Tour with Jungle Safari</h4>
                            <p>Duration: 2 Nights & 3 Days<br>
                                Destination: Jim Corbett & Nainital<br>
                                Jungle Safari: 1 Time Jeep Safari<br>
                                Accommodation: 2 Nights Stay at Wildlife Resort<br>
                                Meal Plan: MAP (Dinner & Breakfast)<br>
                                Room Category: Deluxe Room</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price"><i class="fa fa-rupee-sign"></i> ** Per Person (Minimum 2 Members)</span>
                                {{-- <a href="{{ url('packages.show', 3) }}" class="btn btn-primary">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Custom Added Packages -->

        </div>
    </div>

    <!--*************** Blog Starts Here ***************-->
    <div class="container-fluid blog">
        <div class="container">
            <div class="session-title">
                <h2>Our Latest Blog</h2>
            </div>
            <div class="blog-row row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-col">
                        <img src="{{ public_asset('assets/front/images/destination/d1.jpg') }}" alt="">
                        <span>August 9, 2019</span>
                        <h4>Orci varius consectetur adipiscing natoque penatibus</h4>
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Praesent accumsan, leo in venenatis dictum, </p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-col">
                        <img src="{{ public_asset('assets/front/images/destination/d2.jpg') }}" alt="">
                        <span>August 9, 2019</span>
                        <h4>Orci varius consectetur adipiscing natoque penatibus</h4>
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Praesent accumsan, leo in venenatis dictum, </p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-col">
                        <img src="{{ public_asset('assets/front/images/destination/d3.jpg') }}" alt="">
                        <span>August 9, 2019</span>
                        <h4>Orci varius consectetur adipiscing natoque penatibus</h4>
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Praesent accumsan, leo in venenatis dictum, </p>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
