@extends('web-side.setup.master')

@section('content')
    <section class="home-section">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 c-img img-fluid" id="al-noor" src="{{ asset('public/assets/images/Al-Bari/ABR-Gate-Render-scaled.jpg') }}"
                        alt="First slide">
                    <div class="carousel-caption">
                        <h1 class="team1 text-white">AL BAARI</h1>
                        <h1 class="team1 text-white">RESIDENCIA</h1>
                        <a href="#" class="btn btn-default btn-book">Book Now</a>
                        <a href="#" class="btn btn-default btn-learn">Payment Plan</a>
                    </div>
                </div>

            </div>
        </div>


        <div class="overview mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="font-weight-bold">AL BAARI RESIDENCIA</h5>
                        <p class="al mt-3 mb-3">AL Baari Residencia Sheikhupura, a project of Al Jalil Developers. Al
                            Baari
                            Residencia is an equally perfect option for investment and residential purposes. Pakistan’s Real
                            Estate
                            Trends are moving towards Sheikhupura now as Lahore’s real region is almost covered with other
                            housing
                            projects. The region is very popular for industrial purposes. Al Baari Residencia Sheikhupura is
                            all about
                            a quality living experience with all modern-day facilities. The location of the project is ideal
                            which
                            adds to the value of this project regarding investment benefits.𝟷.𝟻 𝘬𝘮 𝘧𝘳𝘰𝘮
                            𝘴𝘩𝘦𝘪𝘬𝘩𝘶𝘱𝘶𝘳𝘢
                            𝘪𝘯𝘵𝘦𝘳𝘤𝘩𝘢𝘯𝘨𝘦.
                        </p>
                        <a href="#" class="btn btn-default btn-pres mt-3"><i class="fa fa-map-marker"
                                aria-hidden="true"></i> &nbsp;
                            Location</a>
                        <a href="#" class="btn btn-default btn-payment mt-3"><i class="fa fa-paper-plane"
                                aria-hidden="true"></i>
                            &nbsp; Executive Block</a>
                    </div>

                    <div class="col-md-6 text-center">
                        <iframe height="300" id="ifram" src="https://www.youtube.com/embed/BDn1A9OvZuI"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>


        <div class="location mt-5 mb-5">
            <div class="container-fluid">
                <div class="text-center">
                    <i class="fa fa-map-marker loc-mark" aria-hidden="true"></i>
                    <h4 class="font-weight-bold mt-3">THE LOCATION MAP</h4>
                    <p class="km text-secondary">Just 3 km from Faizpur Interchange via M2 Motorway</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.6684389326074!2d74.17969714956689!3d31.56071278126476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3918e3e8db04ad19%3A0x669b0607e3b439d2!2sAl%20Noor%20Orchard%20West%20Marina%20Cottages%20and%20Villas!5e0!3m2!1sen!2s!4v1641197353566!5m2!1sen!2s"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="booking mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="{{ asset('public/assets/images/Al-Noor/the-a-team.png') }}" class="img-fluid al-noor-logo" alt="">
                            <p class="mt-4">Your Agent</p>
                            <p class="contact-num">+92 341 333 3301</p>
                            <p>info@theateam.pk</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <h4 class="font-weight-bold mt-3">FOR BOOKING & DETAILS</h4>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control input" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control input" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control input" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea cols="30" rows="4" class="form-control" placeholder="I WOULD LIKE MORE INFORMATION ABOUT THIS"></textarea>
                                        </div>
                                        <a href="#" class="btn btn-default btn-booking">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <p class="loc">Corporate Office, 61xx DHA PHASE III, Lahore, Pakistan</p>
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
