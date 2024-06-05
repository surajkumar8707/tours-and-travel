@extends('layouts.app')

@section('content')
    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Elephant Safari</h2>
                <ul>
                    <li> <a href="{{ route('index') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Elephant Safari</li>
                </ul>
            </div>
        </div>
    </div>

    <!--  ************************* Elephant Safari Starts Here ************************** -->
    <div id="portfolio" class="jeep_safari">
        <div class="container">
        </div>


    </div>
    <!-- ######## Elephant Safari End ####### -->
@endsection
