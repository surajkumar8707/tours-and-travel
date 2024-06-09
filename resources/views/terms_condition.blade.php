@extends('layouts.app')

@section('content')
    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Terms and Conditions</h2>
                <ul>
                    <li> <a href="{{ route('index') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Terms and Conditions</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ################# Terms and Conditions Starts Here #######################--->

    <div class="popular-pack  container-fluid">
        <div class="container">
            <div class="privacy-policy-content">
                <p>
                    These terms and conditions ("Terms") govern your use of {{ getSettings()->app_name }}'s website <a href="{{ route('index') }}">{{ route('index') }}</a> and any
                    related services (collectively, the
                    "Service"). By accessing or using the Service, you agree to be bound by these Terms. If you do not agree
                    with any part of these Terms, you may not use the Service.
                <p>
                    <br>
                <h5 class="text-primary">Use of the Service</h5>
                <p>
                    You must be at least 18 years old to use the Service. By using the Service, you represent and warrant
                    that
                    you are at least 18 years old.

                    You agree to use the Service only for lawful purposes and in compliance with these Terms and all
                    applicable
                    laws and regulations.


                </p>
                <p>
                    You are responsible for maintaining the confidentiality of your account credentials and for all
                    activities
                    that occur under your account.
                </p>

                <br>
                <h5 class="text-primary">Intellectual Property</h5>
                <p>
                    The Service and its original content, features, and functionality are owned by {{ getSettings()->app_name }} and are
                    protected by international copyright, trademark, patent, trade secret, and other intellectual property
                    or proprietary rights laws.

                    You may not modify, reproduce, distribute, transmit, display, perform, or create derivative works of any
                    part of the Service without the prior written consent of {{ getSettings()->app_name }}.
                </p>

                <br>
                <h5 class="text-primary">User Content</h5>
                <p>

                    You retain ownership of any content you submit or upload to the Service ("User Content"). By submitting
                    User Content, you grant {{ getSettings()->app_name }} a worldwide, non-exclusive, royalty-free, sublicensable, and
                    transferable license to use, reproduce, distribute, prepare derivative works of, display, and perform
                    the User Content in connection with the Service.

                    <br>

                    You represent and warrant that you have all necessary rights to grant the foregoing license and that
                    your User Content does not violate any third-party rights or any applicable laws or regulations.

                </p>

                <br>
                <h5 class="text-primary">Limitation of Liability</h5>
                <p>
                    In no event shall {{ getSettings()->app_name }}, its directors, officers, employees, or affiliates be liable for any
                    indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of
                    profits, data, use, goodwill, or other intangible losses, arising out of or in connection with your use
                    of the Service or these Terms.
                </p>

                <br>
                <h5 class="text-primary">Indemnification</h5>
                <p>
                    You agree to indemnify and hold harmless {{ getSettings()->app_name }}, its directors, officers, employees, and affiliates
                    from and against any and all claims, liabilities, damages, losses, costs, expenses, or fees (including
                    reasonable attorneys' fees) arising out of or in connection with your use of the Service, your breach of
                    these Terms, or your violation of any rights of any other person or entity.

                </p>

                <br>
                <h5 class="text-primary">Changes to these Terms</h5>
                <p>
                    {{ getSettings()->app_name }} reserves the right to modify or replace these Terms at any time. If a revision is material,
                    we will provide at least 30 days' notice prior to any new terms taking effect. What constitutes a
                    material change will be determined at our sole discretion.
                </p>

                <br>
                <h5 class="text-primary">Changes to these Terms</h5>
                <p>
                    These Terms shall be governed by and construed in accordance with the laws of Jurisdiction,
                    without regard to its conflict of law provisions.
                </p>
                <br>
                <h5 class="text-primary">Contact Us</h5>
                <p>
                    If you have any questions or concerns about these Terms, please contact us at <a
                        href="mailto:{{ getSettings()->email }}">{{ getSettings()->email }}</a>.
                </p>

                </p>
            </div>
        </div>
    </div>
@endsection
