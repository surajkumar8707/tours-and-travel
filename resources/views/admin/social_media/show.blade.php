@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">

        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Social Media Links</h2>
                        </div>
                        <div class="col-md-6 text-end mb-md-2">
                            <a href="{{ route('admin.social.media.create') }}" class="btn btn-primary">Edit <i class="menu-icon tf-icons bx bx-pencil"></i></a>
                        </div>
                    </div>

                    <ul class="list-group">
                        @if ($socialMediaLinks)
                            <li class="list-group-item"><strong class="ml-5">YouTube:</strong> <a
                                    href="{{ $socialMediaLinks?->youTube }}">{{ $socialMediaLinks?->youTube }}</a></li>
                            <li class="list-group-item"><strong class="ml-5">Instagram:</strong> <a
                                    href="{{ $socialMediaLinks?->instagram }}">{{ $socialMediaLinks?->instagram }}</a></li>
                            <li class="list-group-item"><strong class="ml-5">Facebook:</strong> <a
                                    href="{{ $socialMediaLinks?->facebook }}">{{ $socialMediaLinks?->facebook }}</a></li>
                            <li class="list-group-item"><strong class="ml-5">LinkedIn:</strong> <a
                                    href="{{ $socialMediaLinks?->linkedin }}">{{ $socialMediaLinks?->linkedin }}</a></li>
                        @else
                            <li class="list-group-item"><strong>YouTube:</strong> {{ $socialMediaLinks?->youTube }}</li>
                            <li class="list-group-item"><strong>Instagram:</strong> {{ $socialMediaLinks?->instagram }}</li>
                            <li class="list-group-item"><strong>Facebook:</strong> {{ $socialMediaLinks?->facebook }}</li>
                            <li class="list-group-item"><strong>LinkedIn:</strong> {{ $socialMediaLinks?->linkedin }}</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
