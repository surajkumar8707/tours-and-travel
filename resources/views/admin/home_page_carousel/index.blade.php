@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Home Page Carousel</h4>
                    </div>
                    <div class="col-md-6 text-end">
                        <a class="btn btn-primary" href="{{ route('admin.home-page-carousel.create') }}">Add +</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($carousels as $key => $carousel)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $carousel->title }}</td>
                                    <td>
                                        <img class="w-25 img-thumbnail imgRenderContainer" src="{{ public_asset($carousel->image) }}" alt="{{ $carousel->title }}">
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="status" @if ($carousel->status == 1) checked @endif>
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.home-page-carousel.edit', $carousel) }}" class="text-primary"><i class="menu-icon tf-icons bx bx-pencil"></i></a>
                                        <form action="{{ route('admin.home-page-carousel.destroy', $carousel) }}" method="POST" onsubmit="if(confirm('Are you sure want to delete ?') == false){ return false; }">
                                            @csrf
                                            @method("DELETE")
                                            <button class="text-danger btn"><i class="menu-icon tf-icons bx bx-trash"></i></button>
                                        </form>
                                        {{-- <span class="badge badge-primary">{{ date('D m Y', strtotime($carousel->created_at)) }}</span> --}}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th class="text-center" colspan="10">No enquiry available in the table</th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="carousel-pagination">
                        {{ $carousels->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
