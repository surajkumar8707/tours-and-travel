@extends('layouts.app')

@section('content')
    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Privacy Policy</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Privacy Policy</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ################# Privacy Policy Starts Here #######################--->

    <div class="popular-pack  container-fluid">
        <div class="container m-5">
            <br><br><br>
            <div class="container">
                <h2>Information We Collect</h2>
                <p>{{ isset(getSettings()->app_name) ? getSettings()->app_name : 'Corbett' }} is committed to protecting
                    your privacy and ensuring that your personal information is secure. This privacy policy explains how we
                    collect, use, and disclose your personal information.</p>
                    <br>

                <ol type="1">
                    <br><li>1) Collection of Personal Information: a) We collect personal information from you when you book a trip
                        with us or contact us through our website or other communication channels. b) The personal
                        information we collect may include your name, address, email address, telephone number, passport
                        information, and travel preferences.</li>
                    <br><li>2) Use of Personal Information: a) We use your personal information to provide you with travel
                        services, including booking flights, hotels, and other activities, as well as to communicate with
                        you about your trip. b) We may also use your personal information to send you marketing
                        communications, such as newsletters and promotional offers, if you have given us your consent to do
                        so. c) We do not sell or rent your personal information to third parties.</li>
                    <br><li>3) Disclosure of Personal Information: a) We may disclose your personal information to third-party
                        service providers, such as airlines, hotels, and tour operators, in order to provide you with the
                        travel services you have requested. b) We may also disclose your personal information if required to
                        do so by law or to protect our legal rights or the safety of our clients and staff.</li>
                    <br><li>4) Security of Personal Information: a) We take reasonable steps to protect your personal information
                        from unauthorized access, use, or disclosure. b) We store your personal information in a secure
                        database and restrict access to those who have a legitimate need to know.</li>
                    <br><li>5) Retention of Personal Information: a) We retain your personal information only for as long as
                        necessary to provide you with travel services and as required by law. b) We securely destroy or
                        anonymize your personal information when it is no longer needed.</li>
                    <br><li>6) Access to and Correction of Personal Information: a) You have the right to access and correct your
                        personal information held by us. b) To request access to or correction of your personal information,
                        please contact us using the contact information provided below.</li>
                    <br><li>7) Changes to this Privacy Policy: a) We may update this privacy policy from time to time to reflect
                        changes in our practices or legal requirements. b) We will post the updated privacy policy on our
                        website and notify you of any material changes.</li>
                    <br><li>8) Contact Us: If you have any questions or concerns about this privacy policy or how we handle your
                        personal information, please contact us at <a href="mailto:{{ getSettings()->email }}" target="_new"
                            rel="noopener">{{ getSettings()->email }}</a></li>
                </ol>
            </div>
        </div>
    </div>
@endsection
