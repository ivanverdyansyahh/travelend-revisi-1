@extends('admin.layouts.main')

@section('content')
    <div class="shadow data_table">
        <div id="example_wrapper" class="mb-3"></div>
        <table id="example" class="display table table-hover" style="width:70%">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Total Ticket</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td class="text-center">{{ $item->total_ticket }}</td>
                        <td>${{ $item->total_price }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Total Ticket</th>
                    <th>Total Price</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
