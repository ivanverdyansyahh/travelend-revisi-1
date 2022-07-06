@extends('admin.layouts.main')

@section('content')
    <div class="card shadow mb-4">
        <div class="d-flex justify-content-between card-header py-3">
            <h6 class="mt-2 font-weight-bold text-primary">List Categories Table</h6>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createCategoryModal"><i
                    class="fas fa-plus"></i> Create</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="40%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Destinations</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Destinations</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td class="text-center">{{ $category->destinations->count() }}</td>
                                <td class="d-flex justify-content-around">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#editCategoryModal"
                                        value="{{ $category->id }}" class="btn edit-category"><i
                                            class="fas fa-pencil"></i></button>
                                    <button type="button" class="btn btn-delete" value="{{ $category->id }}"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.components.create-category-modal')
    @include('admin.components.edit-category-modal')
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
                    document.location.href = `/categories/delete/${$(this).val()}`
                }
            })
        })
    </script>
@endsection
