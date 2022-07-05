@extends('layouts.main')
@section('content')

@include('partials.nav')

{{-- HERO --}}
    <div class="img-hero mt-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-11 col-xl-10">
                    <img src="img/example-hero.png" class="img-fluid rounded shadow-lg" alt="Hero Example">
                </div>
            </div>
        </div>
    </div>
{{-- END HERO --}}


{{-- DESCRIPTION --}}
    <div class="description mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 pe-4">
                    <h2 class="name mb-4">Kauai Beach</h2>
                    <span class="location">
                        <h6><i class="fa-solid fa-location-dot me-2"></i>Hawaii <span class="mx-5">|</span> <small>Opened: <span class="time">12pm - 12am</span></small></h6>
                    </span>
                    <div class="wrap d-flex flex-row justify-content-between mt-4 mb-3">
                        <h3 class="title ps-3">Description</h3>
                        <h3 class="review d-flex align-items-start"><i class="fa-solid fa-star me-1"></i>5.0</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>
                    
                    <div class="card-order rounded p-4 d-block d-lg-none mt-4">
                        <h3 class="caption">Start From</h3>
                        <h2 class="price">$200</h2>
                        <a href="#" class="button d-inline-block text-center w-100 mt-3">Order Ticket</a>
                        <hr>
                        <h5 class="transaction m-0">ticket FLEXI</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum.</p>
                        <h5 class="transaction m-0">ticket CLEAN</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum.</p>
                    </div>

                    <h3 class="title ps-3 mt-4">Other Destinations</h3>
                    <div class="card-destination d-flex flex-column flex-md-row rounded overflow-hidden mt-3">
                        <img src="img/example-thumb.png" class="img-fluid col-12 col-md-5" alt="Img Example">
                        <div class="card-description col p-4 py-3 d-flex flex-column justify-content-center">
                            <span class="d-flex justify-content-between mb-3">
                                <h2 class="name">Kauai Beach</h2>
                                <h3 class="review"><i class="fa-solid fa-star me-1"></i>5.0</h3>
                            </span>
                            <h3 class="mb-3"><i class="fa-solid fa-location-dot me-1"></i> Hawaii</h3>
                            <span class="d-flex justify-content-between">
                                <h2 class="price m-0">$200<small class="d-inline-block d-md-none d-xl-inline-block">/per person</small></h2>
                                <a href="#" class="button">Book Now</a>
                            </span>
                        </div>
                    </div>
                    
                </div>
                <div class="d-none d-lg-block col-lg-3">
                    <div class="card-order rounded p-4">
                        <h3 class="caption">Start From</h3>
                        <h2 class="price">$200</h2>
                        <a href="#" class="button d-inline-block text-center w-100 mt-3">Order Ticket</a>
                        <hr>
                        <h5 class="transaction m-0">ticket FLEXI</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum.</p>
                        <h5 class="transaction m-0">ticket CLEAN</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- END DESCRIPTION --}}

@include('partials.footer')

@endsection