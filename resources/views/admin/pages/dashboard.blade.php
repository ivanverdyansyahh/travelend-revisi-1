@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="statistics-card">

                <div class="d-flex justify-content-start align-items-center">
                    <div class="statistics-img d-flex justify-content-center align-items-center me-3">
                        <img src="/assets/img/home/icon-1.svg" alt="">
                    </div>

                    <h4 class="statistics-title mt-2">Orders (Weekly)</h4>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div class="d-flex flex-column justify-content-between align-items-start">
                        <h5 class="content-desc">Orders Total</h5>

                        <h3 class="statistics-value">{{ $orders_count }}</h3>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12 col-sm-6">
            <div class="statistics-card">

                <div class="d-flex justify-content-start align-items-center">
                    <div class="statistics-img d-flex justify-content-center align-items-end me-3">
                        <img src="/assets/img/home/icon.svg" alt="">
                    </div>

                    <h4 class="statistics-title mt-2">Incomes (Monthly)</h4>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div class="d-flex flex-column justify-content-between align-items-start">
                        <h5 class="content-desc">Incomes Total</h5>

                        <h3 class="statistics-value">$ {{ $income_total }}</h3>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row transaction-row">
        <div class="col-12">
            <h2 class="content-title">Latest Orders</h2>
        </div>

        <div class="col-12 table-responsive">
            <table class="table table-borderless transaction-table single w-100">
                <thead>
                    <tr>
                        <th>Destination</th>
                        <th>Price</th>
                        <th>Ticket</th>
                        <th>Total Price</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($latest_orders as $item)
                        <tr>
                            <td>
                                <div
                                    class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                    @if ($item->destination->thumbnail_img)
                                        <img class="transaction-img"
                                            src="{{ asset('storage/uploads/destinations/thumbnails/' . $item->destination->thumbnail_img) }}"
                                            alt="">
                                    @else
                                        <img class="transaction-img" src="https://picsum.photos/100" alt="">
                                    @endif

                                    <div class="d-flex flex-column justify-content-center align-items-start mt-2">
                                        <h5 class="transaction-game">{{ $item->destination->name }}</h5>
                                        <h5 class="transaction-type">Brought by {{ $item->name }}</h5>
                                    </div>
                                </div>
                            </td>
                            <td>${{ $item->current_price }}</td>
                            <td>{{ $item->total_ticket }}</td>
                            <td>${{ $item->total_price }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
@endsection
