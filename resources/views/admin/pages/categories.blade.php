@extends('admin.layouts.main')

@section('content')
    <div class="shadow data_table">
        <div class="d-flex justify-content-between mb-3">
            <div id="example_wrapper"></div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCategoryModal">Create</button>
        </div>
        <table id="example" class="display table table-hover" style="width:60%">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Destinations</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td class="text-center">{{ $item->destinations->count() }}</td>
                        <td class="d-flex">
                            <button class="btn btn-warning m-2 edit-category" data-bs-toggle="modal"
                                data-bs-target="#editCategoryModal" value="{{ $item->id }}">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                            <button class="btn btn-danger m-2 btn-delete" value="{{ $item->id }}">
                                <i class="fa-solid fa-trash text-white"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Destinations</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
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
