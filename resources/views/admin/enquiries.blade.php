@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Enquiries</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($enquiries as $key => $enquiry)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $enquiry->name }}</td>
                                    <td>{{ $enquiry->email }}</td>
                                    <td>{{ $enquiry->phone }}</td>
                                    <td>{{ $enquiry->message }}</td>
                                </tr>
                            @empty
                                <tr class="small text-center" colspan="5">No data available in the table</tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="enquiry-paginate text-end mt-3">
                        {{ $enquiries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
