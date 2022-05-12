@extends('web-side.setup.master')

@section('content')
    <section class="about-section">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block img-fluid top-img" src="{{ asset('public/assets/images/Al-Jalil-Gardens-SlideShow-07.jpg') }}" alt="First slide">
                    <div class="carousel-caption">
                        <h1 class="us">ABOUT US</h1>
                        <p>Home > About us</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="first mb-5">
            <div class="container" id="cont">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="font-weight-bold">THE A TEAM</h1>
                        <h5 class="mt-4">EXCLUSIVE REAL ESTATE AGENT OF AL JALIL DEVELOPERS</h5>
                        <p class="mt-4 rung">The A Team is a Lahore-Based exclusive real estate agent of Al Jalil
                            Developers that
                            helps
                            small-budget property investors grow their wealth, build their dream home, and secure their
                            loved ones’
                            future.
                        </p>
                        <p class="mt-4 rung">The A Team entered the Pakistani Real Estate Market around 1.5 years ago
                            when
                            experienced
                            professionals from diverse businesses teamed up to make property investment simple, transparent,
                            and
                            reliable.
                        </p>
                        <p class="mt-4 rung">The A Team scaled to the main dealer level in just two months and became
                            the
                            second-highest
                            seller of Al-Noor Orchard Housing Scheme Lahore with the biggest contribution from Block D. It
                            won a
                            Grandy
                            at the 2021 Dealers Summit and Dealership for Al Aziz Residencia. The company achieved the
                            milestone of
                            launching Pakistan’s first Property Trading Hub in DHA in February 2021.
                        </p>
                        <p class="mt-4 rung">The decade-long companionship of its members, expertise in real estate,
                            construction,
                            sales,
                            and marketing, and its vision to revolutionize the Pakistani real estate industry for trust and
                            transparency
                            and to elevate the living standards of Pakistanis is what makes the team, The A Team.
                        </p>
                        <p class="mt-4 rung">The A Team’s partnership with Lahore Rung and AV Pakistan is a reflection
                            of our
                            willingness
                            to help people and strives to build a sense of community around us.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <h1 class="font-weight-bold">ACHIEVEMENTS</h1>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="box">
                                    <img src="{{ asset('public/assets/images/A-icon.png') }}" class="img-fluid" alt="">
                                    <p class="font-weight-bold mt-3 level">BECAME MAIN LEVEL DEALER OF AL JALIL DEVELOPERS
                                    </p>
                                </div>
                                <div class="box1 mt-3">
                                    <i class="fa fa-shield a-icon1" aria-hidden="true"></i>
                                    <p class="font-weight-bold mt-3 level">SUCCESSFULLY LAUNCHED SIGNATURE</p>
                                </div>
                                <div class="box2 mt-3">
                                    <img src="{{ asset('public/assets/images/Icon-2.png') }}" class="img-fluid" alt="">
                                    <p class="font-weight-bold mt-3 level">WON AL AZIZ RESIDENCIA DEALERSHIPT</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="box3">
                                    <img src="{{ asset('public/assets/images/Icon4.png') }}" class="img-fluid" alt="">
                                    <p class="font-weight-bold mt-3 level">WON GRANDY IN DEALERS <br> SUMMIT</p>
                                </div>
                                <div class="box4 mt-3">
                                    <i class="fa fa-cloud a-icon2" aria-hidden="true"></i>
                                    <p class="font-weight-bold mt-3 level">HIGHEST SELLER IN AL - NOOR ORCHARD</p>
                                </div>
                                <div class="box5 mt-3">
                                    <img src="{{ asset('public/assets/images/Icon-3.png') }}" class="img-fluid hub" alt="">
                                    <p class="font-weight-bold mt-3 level">LAUNCHED THE A TEAM TRADING HUB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="third">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="dot">...</h2>
                        <h2 class="font-weight-bold">MESSAGE FROM <br> CHAIRMAN</h2>
                        <h5 class="mt-4">EXCLUSIVE REAL ESTATE AGENT OF AL JALIL DEVELOPERS</h5>
                        <p class="mt-4 rung">Excellence, a quality that sets the best ones apart from everyone else, is
                            what we seek in our business
                            and our talented team that strives for your trust, goes the extra mile to provide you the
                            safest,
                            securest, and most profitable investment opportunities across the country. Our mission is to
                            help you grow
                            your wealth, build your dream home and secure your loved ones' future. Our vision is to make the
                            Pakistani
                            real estate industry transparent and trustworthy.
                        </p>
                        <a href="{{ url('contact') }}" class="btn btn-default btn-us">Contact Us</a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('public/assets/images/01-Arsalan-Ghous.png.jpg') }}" class="img-fluid mt-4 arslan" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="second mb-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box text-center mt-3">
                            <i class="fa fa-star star" aria-hidden="true"></i>
                            <h5 class="mt-4 state">REAL ESTATE <br> CONSULTANCY</h5>
                            <p class="mt-4 help">Our experienced team of investment consultants help you enhance your
                                decision making
                                perspective by
                                providing authentic information so that you make the right investment decision.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box1 text-center mt-3">
                            <i class="fa fa-star star" aria-hidden="true"></i>
                            <h5 class="mt-4 state">REAL ESTATE <br> MANAGEMENT</h5>
                            <p class="mt-4 help">The A Team is experienced in managing multi-million real estate
                                properties for its
                                national and international clients.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box2 text-center mt-3">
                            <i class="fa fa-star star" aria-hidden="true"></i>
                            <h5 class="mt-4 state">REAL ESTATE <br> DEVELOPMENT</h5>
                            <p class="mt-4 help">The A Team has planned strategic partnerships and collaborations to
                                bring its
                                investors with exclusive opportunities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="forth mt-5">
            <div class="text-center all-d">
                <p class="font-weight-bold text-white">WANT TO INVEST WITH THE TEAM? </p>
                <h1 class="cl">CALL US: </h1>
                <h1 class="num">03413333301</h1>
                <a href="#" class="btn btn-default btn-whats">WhatsApp</a>
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
