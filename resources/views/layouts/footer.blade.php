<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h2>About Us</h2>
                <p>
                    Smart Eye is a leading provider of information technology, consulting, and business process
                    services. Our dedicated employees offer strategic insights, technological expertise and industry
                    experience.
                </p>
                <p>We focus on technologies that promise to reduce costs, streamline processes and speed
                    time-to-market, Backed by our strong quality processes and rich experience managing global...
                </p>
            </div>
            <div class="col-md-4 col-sm-12">
                <h2>Useful Links</h2>
                <ul class="list-unstyled link-list">
                    <li><a ui-sref="about" href="{{ route('about') }}">About Us</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="portfolio" href="{{ route('packages') }}">Packages</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="terms-condition" href="{{ route('terms.condition') }}">Terms Condition</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="privacy-policy" href="{{ route('privacy.policy') }}">Privacy Policy</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="contact" href="{{ route('contact') }}">Contact US</a><i class="fa fa-angle-right"></i></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 map-img">
                <h2>Contact Us</h2>
                <address class="md-margin-bottom-40">
                    <strong>Address : </strong>
                    <span class="address">
                        {!! $settings->address !!}
                    </span>
                    <br>
                    <strong>Phone:</strong> {{ $settings->contact }} <br>
                    <strong>Email:</strong> <a class="text-white" href="mailto:{{ $settings->email }}" class="">{{ $settings->email }}</a><br>
                </address>

            </div>
        </div>
    </div>


</footer>
<div class="copy">
    <div class="container">
        <a href="{{ url('') }}">{{ date('Y') }} &copy; All Rights Reserved | Designed and Developed by <strong>Gaurav Tiwari</strong></a>

        <span>
            <a class="text-light" href="{{ $social_media_link->twitter }}"> <i class="fab fa-twitter"></i></a>
            <a class="text-light" href="{{ $social_media_link->facebook }}"> <a><i class="fab fa-facebook-f"></i></a>
            <a class="text-light" href="{{ $social_media_link->instagram  }}"> <i class="fab fa-instagram"></i> </a>
            <a class="text-light" href="{{ $social_media_link->linkedin  }}"> <i class="fab fa-linkedin"></i> </a>
            <a class="text-light" href="{{ $social_media_link->youTube  }}"> <i class="fab fa-youtube-square"></i> </a>
        </span>
    </div>

</div>
