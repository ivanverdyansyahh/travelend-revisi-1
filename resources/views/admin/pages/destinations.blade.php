@extends('admin.layouts.main')

@section('content')
    <div class="card shadow mb-4">
        <div class="d-flex justify-content-between card-header py-3">
            <h6 class="mt-2 font-weight-bold text-primary">List Destination Table</h6>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createDestinationModal"><i
                    class="fas fa-plus"></i> Create</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Review</th>
                            <th>Price</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Review</th>
                            <th>Price</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($destinations as $destination)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $destination->name }}</td>
                                <td>{{ $destination->category_name }}</td>
                                <td>
                                    @if ($destination->rating)
                                        {{ number_format($destination->rating, 1) }}
                                    @else
                                        0.0
                                    @endif
                                </td>
                                <td>${{ $destination->price }}</td>
                                <td>{{ $destination->time }}</td>
                                <td>{{ $destination->location }}</td>
                                <td class="{{ $destination->status ? 'text-success' : 'text-danger' }}">
                                    {{ $destination->status ? 'Active' : 'Inactive' }}</td>
                                <td class="d-flex justify-content-around">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#editDestinationModal"
                                        class="btn edit-destination" value="{{ $destination->id }}"><i
                                            class="fas fa-pencil"></i></button>
                                    <button type="button" class="btn btn-delete" value="{{ $destination->id }}"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.components.create-destination-modal')
    @include('admin.components.edit-destination-modal')
@endsection

@section('scripts')
    <script>
        $('.btn-delete').on('click', function() {

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = `/destinations/delete/${$(this).val()}`
                }
            })
        })
    </script>
@endsection
