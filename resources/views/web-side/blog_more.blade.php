@extends('web-side.setup.master')

@section('content')

    <section class="detail-section mt-5">

        <div class="details mb-5">
            <div class="container" id="cont">
                <div class="row">
                    <div class="col-md-8">

                        <img src="{{ asset('storage/app/public/uploads/blogs/'.$more->image) }}" class="img-fluid" width="700" height="300" alt="">

                        <h3 class="mt-4">{{ $more->title }}</h3>

                        <a href="#">Blog / By TheATeam90</a>

                        <div class="desc mt-4">
                            {!! $more->description !!}
                        </div>

                        <a href="{{ url('/') }}" class=""> >> Previous Post</a>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-secondary post">Recent Posts</h5>
                        <ul class="recent">
                            <li><a href="#">MAKE YOUR HOME MORE ECO-FRIENDLY</a></li>
                            <li><a href="#">Buying Houses with a Limited Budget</a></li>
                            <li><a href="#">Apartment Living vs House Living: The Right Choice</a></li>
                            <li><a href="#">HERE’S WHY YOU SHOULD BOOK YOUR <br> VILLA IN -WEST MARINA</a></li>
                            <li><a href="#">SHOULD YOU RENOVATE OR REBUILD?</a></li>
                        </ul>

                        <h5 class="text-secondary post mt-5">Recent Comments</h5>
                        <h5 class="text-secondary post mt-5">Archives</h5>
                        <ul class="recent">
                            <li><a href="#">December 2021</a></li>
                            <li><a href="#">November 2021</a></li>
                            <li><a href="#">October 2021</a></li>
                            <li><a href="#">September 2021</a></li>
                            <li><a href="#">August 2021</a></li>
                            <li><a href="#">June 2021</a></li>
                            <li><a href="#">April 2021</a></li>
                            <li><a href="#">March 2021</a></li>
                        </ul>

                        <h5 class="text-secondary post mt-5">Categories</h5>
                        <ul class="recent">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">News</a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
