@extends('layouts.main')

@section('content')

@include('partials.navbar')

{{-- HOME CAROUSEL --}}
    <div class="home mobile-view">
        <div class="row">
            <div class="col-12">
                <div class="carousel-caption">
                    <p class="mb-3">Make Your Youth Life Exciting and Fun</p>
                    <h1 class="text-center mb-4">Let's Make Your Best Trip With Us</h1>
                    <a href="#" class="button d-inline-block text-decoration-none">Explore Now</a>
                </div>

                <div id="carouselExampleCaptions" class="carousel slide d-none d-lg-block" data-bs-ride="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/home-hero-1.png" class="d-block w-100" alt="img/home-hero-1">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="mb-3">Make Your Youth Life Exciting and Fun</p>
                                <h1 class="text-center mb-4">Let's Make Your Best Trip With Us</h1>
                                <a href="#" class="button d-inline-block text-decoration-none">Explore Now</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/home-hero-2.png" class="d-block w-100" alt="img/home-hero-2">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="mb-3">Make Your Youth Life Exciting and Fun</p>
                                <h1 class="text-center mb-4">The Best Places Are Waiting For You</h1>
                                <a href="#" class="button d-inline-block text-decoration-none">Explore Now</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/home-hero-3.png" class="d-block w-100" alt="img/home-hero-3">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="mb-3">Make Your Youth Life Exciting and Fun</p>
                                <h1 class="text-center mb-4">Travel Beautiful Land For Adventure</h1>
                                <a href="#" class="button d-inline-block text-decoration-none">Explore Now</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
{{-- END HOME CAROUSEL --}}


{{-- ABOUT --}}
    <section class="about">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex">
                <div class="d-none d-lg-block col-lg-6 col-xl-5 pe-3">
                    <img src="img/about-img.png" class="img-fluid img-about rounded shadow-lg" alt="Image About">
                </div>
                <div class="col-12 col-lg-6 col-xl-5 ps-3 text-center text-lg-start content">
                    <h3 class="sub-title">About Us</h3>
                    <h2 class="d-inline-block title mb-4">Introduction Who's TravelWorld</h2>
                    <img src="img/about-img.png" class="img-fluid img-about rounded shadow-lg d-block d-lg-none text-center col-5 m-auto mb-4" alt="Image About">
                    <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna euismod et nisi. Faucibus mauris quisque massa fusce in. Risus vitae integer convallis habitasse et. Sit elit ullamcorper ullamcorper netus mauris id justo lobortis sed. Quam fringilla netus nunc euismod duis odio scelerisque fusce. Id aliquet velit eu eget donec. Commodo, pharetra, nibh sit cras mauris euismod sed at. Diam elementum est molestie commodo id est. Vulputate non, cras parturient arcu. Quis sapien sagittis sit facilisi egestas turpis mattis. Lectus turpis fringilla neque amet, tortor mi magna ac. Egestas neque enim fames tristique amet, donec arcu. Congue sed porttitor nulla nisi. Arcu fringilla eu, ridiculus nibh facilisis amet semper ultrices.</p>
                </div>
            </div>
        </div>
    </section>
{{-- END ABOUT --}}


{{-- FEATURED --}}
    <section class="featured section-reverse">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h3 class="sub-title">Special Featured</h3>
                    <h2 class="d-inline-block title">See Some Benefit Of Joining With Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="card-featured rounded text-center px-3 py-5">
                        <i class="fa-solid fa-headset"></i>
                        <h3 class="title mt-4">Tour Guide</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-featured rounded text-center px-3 py-5">
                        <i class="fa-solid fa-bed"></i>
                        <h3 class="title mt-4">Delux Room</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-featured rounded text-center px-3 py-5">
                        <i class="fa-solid fa-wifi"></i>
                        <h3 class="title mt-4">Free Wifi</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-featured rounded text-center px-3 py-5">
                        <i class="fa-solid fa-briefcase-medical"></i>
                        <h3 class="title mt-4">Free Medication</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- END FEATURED --}}


{{-- POPULAR --}}
    <section class="popular">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h3 class="sub-title">Popular Destinations</h3>
                    <h2 class="d-inline-block title">The Best Of Our Destinations</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                    <div class="card-destination rounded overflow-hidden">
                        <img src="img/img-1.png" class="img-fluid" alt="img example">
                        <div class="card-description p-3">
                            <span class="d-flex flex-row justify-content-between align-items-center">
                                <h2 class="name">Colorado Springs</h2>
                                <h3 class="review"><i class="fa-solid fa-star me-1"></i>5.0</h3>
                            </span>
                            <p class="location"><i class="fa-solid fa-location-dot me-3"></i>United States</p>
                            <span class="d-flex flex-row justify-content-between">
                                <h2 class="price m-0">$250</h2>
                                <a href="#" class="button">Explore</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card-destination rounded overflow-hidden">
                        <img src="img/img-3.png" class="img-fluid" alt="img example">
                        <div class="card-description p-3">
                            <span class="d-flex flex-row justify-content-between align-items-center">
                                <h2 class="name">Havasu Falls</h2>
                                <h3 class="review"><i class="fa-solid fa-star me-1"></i>5.0</h3>
                            </span>
                            <p class="location"><i class="fa-solid fa-location-dot me-3"></i>United States</p>
                            <span class="d-flex flex-row justify-content-between">
                                <h2 class="price m-0">$275</h2>
                                <a href="#" class="button">Explore</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 d-none d-lg-block">
                    <div class="card-destination rounded overflow-hidden">
                        <img src="img/img-2.png" class="img-fluid" alt="img example">
                        <div class="card-description p-3">
                            <span class="d-flex flex-row justify-content-between align-items-center">
                                <h2 class="name">Maldives</h2>
                                <h3 class="review"><i class="fa-solid fa-star me-1"></i>5.0</h3>
                            </span>
                            <p class="location"><i class="fa-solid fa-location-dot me-3"></i>Maladewa</p>
                            <span class="d-flex flex-row justify-content-between">
                                <h2 class="price m-0">$375</h2>
                                <a href="#" class="button">Explore</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- END POPULAR --}}


{{-- TESTIMONI --}}
    <section class="testimoni section-reverse">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h3 class="sub-title">Special Featured</h3>
                    <h2 class="d-inline-block title">See Some Benefit Of Joining With Us</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
                    <div class="card-testimoni d-flex flex-row rounded p-4">
                        <img src="img/testimonial-1.png" class="img-testimoni rounded-circle d-inline-block me-4" alt="Image Testimonial 1">
                        <div class="comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id duis amet sem habitasse nisi egestas nisi egestas nisi.</p>
                            <h6 class="name">- Tsamara Caria Azra</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="card-testimoni d-flex flex-row rounded p-4">
                        <img src="img/testimonial-2.png" class="img-testimoni rounded-circle d-inline-block me-4" alt="Image Testimonial 2">
                        <div class="comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id duis amet sem habitasse nisi egestas nisi egestas nisi.</p>
                            <h6 class="name">- Dita Levia Putri</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 d-none d-xl-block">
                    <div class="card-testimoni d-flex flex-row rounded p-4">
                        <img src="img/testimonial-3.png" class="img-testimoni rounded-circle d-inline-block me-4" alt="Image Testimonial 3">
                        <div class="comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id duis amet sem habitasse nisi egestas nisi egestas nisi.</p>
                            <h6 class="name">- Winda Caca Ashana</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- END TESTIMONI --}}


{{-- CONTACT --}}
    <section class="contact">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h3 class="sub-title">Contact Us</h3>
                    <h2 class="d-inline-block title">Get In Touch</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 col-lg-8 col-xl-6">
                    <form class="input-contact" action="">
                        <div class="d-flex flex-column flex-lg-row mb-2">
                            <div class="col-md-12 col-lg-6">
                                <input type="name" class="form-control mb-2 mb-lg-0" id="exampleFormControlInput1" placeholder="Name">
                            </div>
                            <div class="col-md-12 col-lg-6 mx-0 mx-lg-1">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-lg-row mb-2">
                            <div class="col-md-12 col-lg-6">
                                <input type="phone" class="form-control mb-2 mb-lg-0" id="exampleFormControlInput1" placeholder="Phone">
                            </div>
                            <div class="col-md-12 col-lg-6 mx-0 mx-lg-1">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="button d-inline-block">Submit Now</button>
                    </form>
                </div>
                <div class="col-12 col-md-6 col-lg-4 offset-xl-1 mt-4 mt-md-0">
                    <div class="contact-information d-inline-block rounded p-4 py-5">
                        <div class="mb-4">
                            <h3 class="name mb-3">Phone</h3>
                            <p>(123) 456-7890</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="name mb-3">Address</h3>
                            <p>2369 Robinson Lane Jackson, OH 45640</p>
                        </div>
                        <div class="">
                            <h3 class="name mb-3">Email</h3>
                            <p class="m-0">travelworld@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- END CONTACT --}}

@include('partials.footer')

@endsection