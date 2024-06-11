@extends('layouts.app')

@section('content')
    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Contact Us</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact US</li>
                </ul>
            </div>
        </div>
    </div>

    <!--  ************************* Contact Us Starts Here ************************** -->

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">
                <div style="padding:20px" class="col-sm-7">
                    <h2>Contact Form</h2> <br>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Enter Name" name="name"
                                    class="form-control input-sm @error('name') is-invalid @enderror" required
                                    value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Email Address </label><span>:</span></div>
                            <div class="col-sm-8">
                                <input type="email" name="email" placeholder="Enter Email Address"
                                    class="form-control input-sm @error('email') is-invalid @enderror" required
                                    value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                            <div class="col-sm-8">
                                <input type="text" name="phone" placeholder="Enter Mobile Number"
                                    class="form-control input-sm @error('phone') is-invalid @enderror" required
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                            <div class="col-sm-8">
                                <textarea name="message" rows="5" placeholder="Enter Your Message"
                                    class="form-control input-sm @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <button class="btn btn-success btn-sm">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">
                        <h2 style="margin-top:10px;">Address</h2>
                        {!! getSettings()->address !!}
                        Email:{{ (isset(getSettings()->email) and !empty(getSettings()->email)) ? getSettings()->email : '' }}<br>
                        Website: <a class="text-primary" href="{{ url('') }}">{{ url('') }}</a><br>
                    </div>
                </div>

            </div>
            <div class="my-3" style="margin-top:0px;" class="row no-margin">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5378.468357060265!2d79.12717096668277!3d29.38377932093444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390a13433e699765%3A0x9b54a29992723ba2!2sTRAVEL%20ADVENTURE%20SAFARI%20(traveljimcorbett.in)!5e0!3m2!1sen!2sin!4v1718129476523!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
@endsection
