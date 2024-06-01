@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">
        {{-- <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.social.media.storeOrUpdate') }}" method="post">
                    @csrf

                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="youTube">YouTube:</label>
                        <input class="form-control" type="url" placeholder="Enter youTube link" name="youTube"
                            value="{{ old('youTube', $socialMediaLinks->youTube ?? '') }}" />
                        @error('youTube')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="instagram">Instagram:</label>
                        <input class="form-control" type="url" placeholder="Enter instagram link" name="instagram"
                            value="{{ old('instagram', $socialMediaLinks->instagram ?? '') }}" />
                        @error('instagram')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="facebook">Facebook:</label>
                        <input class="form-control" type="url" placeholder="Enter facebook link" name="facebook"
                            value="{{ old('facebook', $socialMediaLinks->facebook ?? '') }}" />
                        @error('facebook')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="linkedin">LinkedIn:</label>
                        <input class="form-control" type="url" placeholder="Enter linkedin link" name="linkedin"
                            value="{{ old('linkedin', $socialMediaLinks->linkedin ?? '') }}" />
                        @error('linkedin')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('admin.social.media.show') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div> --}}

        <div class="card">
            <div class="card-body">
                <div class="container">
                    {{-- <h2>Social Media Links</h2> --}}

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
