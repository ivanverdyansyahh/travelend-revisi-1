@extends('layout.main')

@section('content')
    <section class="detail">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-1">Eiffel Tower in Franch</h1>
                    <p class="fs-6">Mountain | 3 Days Trip</p>
                    <img src="assets/img/img-detail.jpg" class="img-fluid img-destination mt-5" alt="Image Destinations Example">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-8">
                    <h4 class="fs-4 title">Description</h4>
                    <p class="fs-6 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque, purus sed a mi condimentum malesuada purus sollicitudin. Sit pellentesque aenean nullam volutpat sed. Nibh magna at elit eget lacus. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio. Id consequat dictumst faucibus blandit aliquam ipsum eu ornare nulla. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio. Id consequat dictumst faucibus blandit aliquam ipsum eu ornare nulla. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio. Id consequat dictumst faucibus blandit aliquam ipsum eu ornare nulla.</p>
                    <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque, purus sed a mi condimentum malesuada purus sollicitudin. Sit pellentesque aenean nullam volutpat sed. Nibh magna at elit eget lacus. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio. Id consequat dictumst faucibus blandit aliquam ipsum eu ornare nulla.</p>
                    <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque, purus sed a mi condimentum malesuada purus sollicitudin. Sit pellentesque aenean nullam volutpat sed. Nibh magna at elit eget lacus. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio. Id consequat dictumst faucibus blandit aliquam ipsum eu ornare nulla. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio.</p>
                    <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque, purus sed a mi condimentum malesuada purus sollicitudin. Sit pellentesque aenean nullam volutpat sed. Nibh magna at elit eget lacus. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio. Id consequat dictumst faucibus blandit aliquam ipsum eu ornare nulla.</p>

                    <h4 class="fs-4 title mt-5">Give Feedback</h4>
                    <form action="" class="mt-4">
                        <input type="text" class="input mb-2" placeholder="Name">
                        <input type="text" class="input mb-2" placeholder="Email">
                        <div id="full-stars-example-two">
                            <div class="rating-group">
                                <input disabled checked class="rating__input rating__input--none" name="rating" id="rating3-none" value="0" type="radio">
                                <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating" id="rating3-1" value="1" type="radio">
                                <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating" id="rating3-2" value="2" type="radio">
                                <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating" id="rating3-3" value="3" type="radio">
                                <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating" id="rating3-4" value="4" type="radio">
                                <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating" id="rating3-5" value="5" type="radio">
                            </div>
                        </div>
                        <button type="submit" class="button mt-2">Submit Now</button>
                    </form>
                </div>
                <div class="col-4">
                    <div class="card-order">
                        <h4 class="fs-4">Start From</h4>
                        <h1 class="display-6 price">$<span class="price price-count">200</span></h1>
                        <button type="button" class="button w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Ticket Now</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ticket Eiffel Tower</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="count-group text-center">
                                        <span class="minus"><i class="fa-solid fa-minus"></i></span>
                                        <span class="number">01</span>
                                        <span class="plus"><i class="fa-solid fa-plus"></i></span>
                                    </div>
                                    <div class="result-group d-flex flex-row justify-content-between mt-5">
                                        <h5 class="fs-5 result">Total Pembayaran</h5>
                                        <h5 class="fs-5 result-price">$<span class="result-number">200</span></h5>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Order Ticket</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <p class="fs-6 text-center description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel mi quis posuere suscipit.</p>

                        <h5 class="fs-5 transaction">ticket FLEXI</h5>
                        <p class="fs-6 caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. At duis at duis.</p>
                        <h5 class="fs-5 transaction">ticket CLEAN</h5>
                        <p class="fs-6 caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. At duis at duis.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h4 class="fs-4 title">Other Destinations</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card-content">
                            <div class="card-image">
                                <img src="assets/img/img-destination.jpg" class="img-fluid img-destination" alt="Image Example Destination">
                                <p class="fs-6 start-price">$200</p>
                            </div>
                            <div class="card-description">
                                <div class="time d-flex flex-row align-items-center mb-2">
                                    <i class="fa-regular fa-clock"></i> 
                                    <p class="fs-6 d-inline-block m-0 ms-2">3 Days Trip</p>
                                </div>
                                <h4 class="title-destination">Eiffel Tower in France</h4>
                                <div class="stars">
                                    <i class="fa-solid fa-star me-1"></i>
                                    <i class="fa-solid fa-star me-1"></i>
                                    <i class="fa-solid fa-star me-1"></i>
                                    <i class="fa-solid fa-star me-1"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection