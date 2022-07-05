@extends('layouts.main')
@section('content')

@include('partials.nav')
    {{-- SEARCHING --}}
        <div class="searching mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-6">

                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Searching destination.." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-dark" type="button" id="button-addon2">Search</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    {{-- END SEARCHING --}}


    {{-- CATEGORIES --}}
        <div class="categories mt-3">
            <div class="container">
                <div class="row">
                    <div class="card-category col-12 d-flex justify-content-between align-items-center">
                        <select class="form-select d-block d-lg-none mb-2" aria-label="Default select example">
                            <option selected>Categories Destinations</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        <ul class="list-category d-flex flex-row p-0 m-0 d-none d-lg-block">
                            <a href="#" class="item d-inline-block text-decoration-none p-3">
                                <li>All destination</li>
                            </a>
                        </ul>
                        <span class="result">1 destination found</span>
                    </div>
                </div>
            </div>
        </div>
    {{-- END CATEGORIES --}}


    {{-- DESTINATION --}}
        <div class="destination mt-4">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                        <div class="card-destination rounded overflow-hidden">
                            <img src="img/example-thumb.png" class="img-fluid w-100" alt="Image Example">
                            <div class="content px-4 py-4">
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <span class="name">Kauai Beach</span>
                                    <span class="review d-flex align-items-center">
                                        <i class="fa-solid fa-star me-1"></i> 5.0
                                    </span>
                                </div>
                                <span class="location">
                                    <i class="fa-solid fa-location-dot me-1"></i> Hawai
                                </span>
                                <div class="col-12 d-flex justify-content-between align-items-center mt-2">
                                    <span class="price">$200</span>
                                    <a href="#" class="button">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    {{-- END DESTINATION --}}


    {{-- BUTTON LOAD --}}
        <div class="load mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <a href="#" class="button reverse">View More</a>
                    </div>
                </div>
            </div>
        </div>
    {{-- END BUTTON LOAD --}}
@include('partials.footer')
@endsection
