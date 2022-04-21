@extends('web-side.setup.master')

@section('content')
    <section class="home-section">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 c-img img-fluid" id="al-noor"
                        src="{{ asset('public/assets/images/Marina-Sports/WhatsApp Image 2022-04-14 at 12.29.25 AM.jpeg') }}" alt="First slide">
                </div>

            </div>
        </div>


        <div class="overview mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="font-weight-bold">Marina Sports City
                            AL NOOR ORCHARD</h5>
                        <p class="al mt-3 mb-3">The new project of Al Noor Orchard provides you the best opportunity in
                            Lahore, to
                            build your dream house at very low price. Marina Sports City is a new and modern housing project
                            by
                            Al-Jalil Developers which offers you 03 Marla, 05 Marla, 10 Marla, and 01 Kanal residential
                            plots with the
                            best amenities and facilities in Lahore west. The endeavor of Al Jalil Developers is to deliver
                            a better
                            living with all modern world facilities. We are working hard to enhance the housing sector and
                            our clients
                            in the best possible way and embark on a reliable real estate developer brand. Book your plot
                            today and
                            get a chance to develop your dream home.
                        </p>
                        <a href="#" class="btn btn-default btn-payment mt-3"><i class="fa fa-book"
                                aria-hidden="true"></i>
                            &nbsp; Payment Plan</a>
                        <a href="#" class="btn btn-default btn-payment mt-3"><i class="fa fa-map-marker"
                                aria-hidden="true"></i>
                            &nbsp; Location</a>
                    </div>

                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('public/assets/images/Marina-Sports/Affiliation.jpg') }}"
                                        alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('public/assets/images/Marina-Sports/CCTV.jpg') }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('public/assets/images/Marina-Sports/power-backup.jpg') }}"
                                        alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('public/assets/images/Marina-Sports/Surbana-jurong.jpg') }}"
                                        alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="overview mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselExampleControlss" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('public/assets/images/Marina-Sports/Affiliation.jpg') }}"
                                        alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('public/assets/images/Marina-Sports/CCTV.jpg') }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('public/assets/images/Marina-Sports/power-backup.jpg') }}"
                                        alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('public/assets/images/Marina-Sports/Surbana-jurong.jpg') }}"
                                        alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControlss" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControlss" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5 class="font-weight-bold">WEST MARINA EXECUTIVE BLOCK</h5>
                        <p class="al mt-3 mb-3">Al-Jalil Developers has set a benchmark in the infrastructure and real
                            estate
                            industry of Pakistan progressing towards providing innovative infrastructure solutions and
                            improving the
                            standard of living for people. Over the past two decades, Al Jalil Developers has participated
                            in number
                            of projects, one of them is “Al Noor Orchard Housing Scheme”. The new deal of Al Noor Orchard
                            provides you
                            the best opportunity in Lahore, to build your dream house at very low price. Marina Sports City
                            is a
                            well-planned living community with state-of-the-art infrastructure and modern developments. Al
                            Noor
                            Orchard offers a luxurious lifestyle with all modern amenities and facilities. Marina sports
                            city is going
                            launch a 100-acres luxury apartment tower for the first time in West Lahore that gives a very
                            beautiful
                            view Al Noor Orchard Housing Society and Marina Sports City view to residents.
                        </p>
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
