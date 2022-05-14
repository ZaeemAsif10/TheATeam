@extends('web-side.setup.master')

@section('content')


    <section class="home-section">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($blog_slider as $key => $blog_slid)
                    <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
                        <img class="w-100 c-img img-fluid"
                            src="{{ asset('storage/app/public/uploads/blogs/sider/' . $blog_slid->image) }}"
                            alt="First slide">
                        <div class="carousel-caption">
                            <h5 class="team">{{ $blog_slid->title }}</h5>
                            <h1 class="team3">BLOG</h1>
                            <p class="latest">
                                {!! $blog_slid->desc !!}
                            </p>
                            <h5 class="team mt-4" id="theNews">#theAnews</h5>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>



        <div class="mb-5 text-center">
            <h1 class="font-weight-bold forth-head">...</h1>
            <h1 class="font-weight-bold noor">BLOG</h1>
        </div>


        <div class="fifth mb-5">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4">

                            <div class="card border-0 mt-2">
                                <div class="card-header border-0 p-0">
                                    <img src="{{ asset('storage/app/public/uploads/blogs/' . $blog->image) }}"
                                        class="img-fluid news" alt="">
                                </div>
                                <div class="card-body border-top-0">
                                    <h6 class="font-weight-bold mt-4 mb-4 lda">{{ $blog->title }}</h6>
                                    <p class="span">{!! Str::limit($blog->description, 150, '...') !!}
                                    </p>
                                    <a href="{{ url('more/' . $blog->id) }}" class="more">Read More >> </a>
                                </div>
                                <div class="card-footer text-center c-f">
                                    <p class="span">
                                        {{ \Carbon\Carbon::parse($blog->created_at)->isoFormat('MMM - Do - YYYY') }}</p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- <div class="fifth mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 mt-2">
                            <div class="card-header border-0 p-0">
                                <img src="{{ asset('public/assets/images/static-blog-buying-houses-with.jpg') }}"
                                    class="img-fluid news" alt="">
                            </div>
                            <div class="card-body border-top-0">
                                <h6 class="font-weight-bold mt-4 mb-4 lda">HERE’S WHY YOU SHOULD BOOK YOUR VILLA IN -WEST
                                    MARINA</h6>
                                <p class="span">Home ownership is much more than a financial investment. Your home
                                    says a lot about you
                                    and your
                                    family; it reflects your character and gives</p>
                                <a href="#" class="more">Read More</a>
                            </div>
                            <div class="card-footer text-center c-f">
                                <p class="span">March 18, 2021 - No Comments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 mt-2">
                            <div class="card-header border-0 p-0">
                                <img src="{{ asset('public/assets/images/static-blog-buying-houses-with.jpg') }}"
                                    class="img-fluid news" alt="">
                            </div>
                            <div class="card-body border-top-0">
                                <h6 class="font-weight-bold mt-4 mb-4 lda">SHOULD YOU RENOVATE OR REBUILD?
                                </h6>
                                <p class="span">Redesign or demolish and rebuild? Many homeowners experience this
                                    difficult decision
                                    because they
                                    like the location of their property but not the house on it. </p>
                                <a href="#" class="more">Read More</a>
                            </div>
                            <div class="card-footer text-center c-f">
                                <p class="span">March 18, 2021 - No Comments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 mt-2">
                            <div class="card-header border-0 p-0">
                                <img src="{{ asset('public/assets/images/apartment-living.jpg') }}" class="img-fluid news"
                                    alt="">
                            </div>
                            <div class="card-body border-top-0">
                                <h6 class="font-weight-bold mt-4 mb-4 lda">3 Pros and Cons of Various Property Types in
                                    Pakistan</h6>
                                <p class="span">Are you planning to invest in real estate? Make yourself familiar
                                    with the basic property types in
                                    Pakistan with this detailed and elaborate guide. Read on to find out about some of the
                                    biggest pros
                                    and cons of each local property type</p>
                                <a href="#" class="more">Read More</a>
                            </div>
                            <div class="card-footer text-center c-f">
                                <p class="span">March 18, 2021 - No Comments</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


    </section>
@endsection
