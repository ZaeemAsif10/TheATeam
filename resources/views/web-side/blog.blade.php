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
                            src="{{ asset('storage/app/public/uploads/blogs/sider/' . $blog_slid->image) }}" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="team">{{ $blog_slid->title }}</h5>
                        <h1 class="team3">BLOG</h1>
                        <p class="latest">
                            {!! $blog_slid->desc !!}
                        </p>
                        <h5 class="team mt-4">#theAnews</h5>
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
                                    <a href="#" class="more">Read More</a>
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


        <div class="seventh">
            <div class="container">
                <div class="row" style="padding: 105px 5px;">
                    <div class="col-md-4" id="md-5">

                        <div class="text-center">
                            <h6 class="mt-5 talk">TALK TO US</h6>
                            <img src="{{ asset('public/assets/images/call-center.png') }}" class="img-fluid call" alt="">
                        </div>
                        <hr class="mb-4">
                        <h6 class="mt-5 talk">SEND MESSAGE</h6>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Phone">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <textarea cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-default mb-3 send">SEND</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8" id="md-8">
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1203.119635560383!2d74.35996931478351!3d31.470940848146206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919076225fcb8cb%3A0x1adce4db5160bb42!2sThe%20A%20Team%20Real%20Estate%20%26%20Builders%20-%20Corporate%20Office!5e0!3m2!1sen!2s!4v1640852735291!5m2!1sen!2s"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="row">
                            <div class="col-md-6" id="md-6">
                                <h5 class="mt-5 talk">LOCATION DETAIL</h5>
                                <ul class="contact-us">
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="loc">Corporate Office, 61xx DHA PHASE III, Lahore, Pakistan
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="loc">Office # 15 B Commercial 3 Km from Faizpur Interchange,
                                            Motorway (M2), Main Sharaqpur
                                            Road, Lahore</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="loc">Executive Office #15, Grand Boulevard Al Jalil Garden,
                                            Faizpur Interchange, Lahore.
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="email">Phone: +92 341 333 3301</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <p class="email">Email: info@theateam.pk</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5 talk">OPENING HOURS</h5>
                                <ul class="contact-us">
                                    <li>
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p class="email">Monday - Sunday: 10 am to 6 pm
                                        </p>
                                    </li>
                                </ul>
                                <ul class="last-icon">
                                    <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-youtube-play" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
