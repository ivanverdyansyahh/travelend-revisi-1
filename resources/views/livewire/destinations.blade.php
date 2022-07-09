@extends('layout.main')

@section('content')
    <section class="hero-destination">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center">

                    <form action="" class="search-group text-end">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        <input type="text" class="input" name="search" placeholder="Search your destinations..">
                        <button type="submit" class="button-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="category">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="category-group">
                        <a href="/destinations" class="text-decoration-none link-category {{ !request('category') ? 'active' : '' }}">All
                            Category</a>
                        @foreach ($categories as $category)
                            <a href="/destinations?category={{ $category->slug }}"
                                class="text-decoration-none link-category {{ request('category') === $category->slug ? 'active' : '' }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="other">
        <div class="container">
            <div class="row">
                <div class="col-12 text-end">
                    @if ($destinations->count() > 1)
                        <p class="m-0">{{ $destinations->count() }} destinations found.</p>
                    @else
                        <p class="m-0">{{ $destinations->count() }} destination found.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="card-destination">
        <div class="container">
            <div class="row">

                @foreach ($destinations as $item)
                    <div class="col-4 mt-4">
                        <a href="/destinations/{{ $item->category_slug }}/{{ $item->slug }}"
                            class="text-decoration-none">
                            <div class="card-content">
                                <div class="card-image">
                                    @if ($item->thumbnail_img)
                                        <img src="{{ asset('storage/uploads/destinations/thumbnails/' . $item->thumbnail_img) }}"
                                            class="img-fluid img-destination" alt="Image Example Destination">
                                    @else
                                        <img src="https://picsum.photos/200" class="img-fluid w-100"
                                            alt="Image Example">
                                    @endif

                                    <p class="fs-6 price">${{ $item->price }}</p>
                                </div>
                                <div class="card-description">
                                    <div class="time d-flex flex-row align-items-center mb-2">
                                        <i class="fa-regular fa-clock"></i>
                                        <p class="fs-6 d-inline-block m-0 ms-2">3 Days Trip</p>
                                    </div>
                                    <h4 class="title-destination">{{ $item->name }} in {{ $item->location }}</h4>
                                    <div class="stars">
                                        @for ($i = 0; $i < $item->rating; $i++)
                                            <i class="bi bi-star-fill me-1"></i>
                                        @endfor
                                        @for ($j = $item->rating + 1; $j <= 5; $j++)
                                            <i class="bi bi-star me-1"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                <div class="col-4 mt-4">
                    <a href="/destinations/{{ $item->category_slug }}/{{ $item->slug }}" class="text-decoration-none">
                        <div class="card-content">
                            <div class="card-image">
                                @if ($item->thumbnail_img)
                                    <img src="{{ asset('storage/uploads/destinations/thumbnails/' . $item->thumbnail_img) }}"
                                        class="img-fluid img-destination" alt="Image Example Destination">
                                @else
                                    <img src="https://picsum.photos/200" class="img-fluid w-100"
                                        alt="Image Example">
                                @endif
                                <p class="fs-6 price">${{ $item->price }}</p>
                            </div>
                            <div class="card-description">
                                <div class="time d-flex flex-row align-items-center mb-2">
                                    <i class="fa-regular fa-clock"></i> 
                                    <p class="fs-6 d-inline-block m-0 ms-2">3 Days Trip</p>
                                </div>
                                <h4 class="title-destination">{{ $item->name }} in {{ $item->location }}</h4>
                                <div class="stars">
                                    @for ($i = 0; $i < $item->rating; $i++)
                                        <i class="bi bi-star-fill me-1"></i>
                                    @endfor
                                    @for ($j = $item->rating + 1; $j <= 5; $j++)
                                        <i class="bi bi-star me-1"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="row mt-5">
                @if (!request('category') && !request('search'))
                    <div class="col-12 text-center">
                        <a href="#" class="button {{ $isAllLoaded ? 'd-none' : '' }}"
                            wire:click.prevent="loadMore">View More</a>
                        @if ($perPage > $destinations->count())
                            <p>No more pages to load</p>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection