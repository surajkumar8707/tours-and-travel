@extends('layouts.app')

@section('content')
    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Packages</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Packages</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ################# Popular Packages Starts Here #######################--->

    <div class="popular-pack  container-fluid">
        <div class="container">

            <div class="row pack-row">
                @forelse ($pefect_tour_packages as $package)
                    <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                        <div class="pack-col">
                            <img src="{{ public_asset($package->images) }}" alt="">
                            <div class="revire row no-margin">
                                <ul class="rat">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="pric">
                                    ${{ $package->price }}
                                </span>
                            </div>
                            <div class="detail row no-margin">
                                <h4>{{ $package->name }}</h4>
                                <p>{{ $package->description }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
