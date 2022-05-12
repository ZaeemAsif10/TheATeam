@extends('web-side.setup.master')

@section('content')

    <section class="detail-section mt-5">

        <div class="details mb-5">
            <div class="container" id="cont">
                <div class="row">
                    <div class="col-md-8">

                        <img src="{{ asset('storage/app/public/uploads/news/'.$more_news->image) }}" class="img-fluid" width="700" height="300" alt="">

                        <h3 class="mt-4">{{ $more_news->title }}</h3>

                        <a href="#">News / By TheATeam90</a>

                        <div class="desc mt-4">
                            {!! $more_news->description !!}
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
                            <li><a href="#">Uncategorized</a></li>
                        </ul>

                        <h5 class="text-secondary post mt-5">Meta</h5>
                        <ul class="recent">
                            <li><a href="#">Log in</a></li>
                            <li><a href="#">Entries feed</a></li>
                            <li><a href="#">Comments feed</a></li>
                            <li><a href="#">WordPress.org</a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>

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
