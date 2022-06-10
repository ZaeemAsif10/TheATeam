@extends('web-side.setup.master')

@section('content')
    <section class="home-section">

        <style>
            .animate {
                /* height: 100vh; */
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .animate h3 {
                padding: 0.5rem;
                font-weight: bold;
                letter-spacing: 0.1rem;
                text-align: center;
                overflow: hidden;
            }

            .animate h3 span.typed-text {
                font-weight: normal;
                color: #dd7732;
            }

            .animate h3 span.cursor {
                display: inline-block;
                background-color: #ccc;
                margin-left: 0.1rem;
                width: 3px;
                animation: blink 1s infinite;
            }

            .animate h3 span.cursor.typing {
                animation: none;
            }

            @keyframes blink {
                0% {
                    background-color: #ccc;
                }

                49% {
                    background-color: #ccc;
                }

                50% {
                    background-color: transparent;
                }

                99% {
                    background-color: transparent;
                }

                100% {
                    background-color: #ccc;
                }
            }
        </style>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
                        <img class="w-100 f-img img-fluid"
                            src="{{ asset('storage/app/public/uploads/slider/' . $slider->image) }}" alt="First slide">
                    </div>
                @endforeach
            </div>
        </div>






        <div class="container">
            <div class="text-center mt-5">

                <div class="animate">
                    <h3>Choose The A Team For <span class="typed-text"></span><span class="cursor">&nbsp;</span>
                    </h3>
                </div>
                {{-- <h3 id="choose">Choose The A Team For</h3>
                    <span class="best" id="choose" style="font-size: 30px;">Best DealsSafest</span> --}}

            </div>
        </div>

        <div class="second mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h1 class="font-weight-bold left-head">...</h1>
                        <h2 class="font-weight-bold left-head">THE A TEAM REAL</h2>
                        <h2 class="font-weight-bold left-head">ESTATE AND BUILDERS</h2>
                        <h5 class="mt-4 mb-4 left-head">YOU IMAGINE WE BUILD</h5>
                        <p class="para mb-4">The A-Team Real Estate and Builders provides local market intelligence to
                            occupiers,
                            investors and
                            developers of real estate dealing in 1,2 Kanal 3,10, 5 Marla residential plots in Lahore. We are
                            serving
                            as the main authorized dealer of Al Jalil Developers. Al-Jalil Garden was our most successful
                            LDA
                            approved
                            project in Lahore. Our running multiple successful projects are at Al Noor Orchard Housing
                            Scheme &
                            Al
                            Baari Residencia. West Marina in Al Noor Orchard is the Signature block of Al Noor. In Our
                            readymade housing plan Villas providing you readymade 5 Marla
                            house in
                            Lahore and West Marina Executive Block is providing you 4 Kanal residential plots in West Lahore
                            for
                            the
                            1st time.</p>
                        <div class="d-flex">
                            <a href="#" class="btn btn-default today" data-toggle="modal" data-target="#leftModal">Invest
                                Today</a>
                            @php
                                $navbars = App\Models\Project::first();
                            @endphp
                            <a href="{{ url('projects/' . $navbars->id) }}" class="btn btn-default detail">Details</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <ul class="ul">
                            <li><i class="fa fa-home icon" aria-hidden="true"></i></li>
                            <li>
                                <h4 class="garden">AL JALIL GARDEN</h4>
                            </li>
                        </ul>
                        <div class="">
                            <p id="scheme" class="ml-4">Al Jalil Garden Housing Scheme is the main project of
                                Al-Jalil
                                Developers
                                which
                                offers commercial and residential 03, 08, 10, and 05 marla plots in Lahore With All
                                facilites & amenities and offering a 3 year flexible payment plan The latest project of Al
                                Jalil Developers is
                                Marina Sports City. The endeavor of Al Jalil Developers is to deliver a better living with
                                all modern world facilities.</p>
                        </div>
                        <ul class="ul">
                            <li><i class="fa fa-home icon" aria-hidden="true"></i></li>
                            <li>
                                <h4 class="garden">AL BAARI RESIDENCIA</h4>
                            </li>
                        </ul>
                        <div class="">
                            <p class="para ml-4">Al Baari Residencia Sheikhupura, a project of Al Jalil Developers.
                                It’s an
                                equally
                                perfect option for a quality living experience offering 01, 02 Kanal, 10, 5 and 3 marla
                                residential plot
                                in Sheikhupura with all modern-day facilities and investment for industrial purposes. The
                                latest block of Al Noor Orchard is Marina Sports City.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <ul class="ul">
                            <li><i class="fa fa-home icon" aria-hidden="true"></i></li>
                            <li>
                                <h4 class="garden">Al NOOR ORCHARD <br> HOUSING SCHEME</h4>
                            </li>
                        </ul>
                        <div class="">
                            <p class="para ml-4">Al Noor Orchard Housing Scheme is the largest LDA approved project,
                                which
                                offering
                                you 01 Kanal, 10, 3, and 5 marla residential plots in Lahore West with best facilities along
                                with central commercial areas. The latest project of Al Noor Orchard is Marina Sports City.
                            </p>
                        </div>
                        <ul class="ul1">
                            <li><i class="fa fa-home icon" aria-hidden="true"></i></li>
                            <li>
                                <h4 class="garden">MARINA SPORTS CITY <br> AL NOOR ORCHARD</h4>
                            </li>
                        </ul>
                        <div class="">
                            <p class="para5 ml-4">MARINA SPORTS CITY AL NOOR ORCHARD
                                The new project of Al Noor Orchard provides you the best opportunity in Lahore, to build
                                your dream house at a very low price. Marina Sports City is a new and modern housing project
                                by Al Jalil Developers which offers you 1 Kanal, 3 Marla, 10 Marla, and 5 Marla residential
                                plots with the best amenities and facilities in Lahore west.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="third mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 text-center">
                        <img src="{{ asset('public/assets/images/the-a-team.png') }}" class="img-fluid team-logo" alt="">
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <h1 class="font-weight-bold right-head">...</h1>
                        <h1 class="font-weight-bold text-white top-pro">PROJECTS</h1>
                        <h4 class="text-white mt-3 mb-3 lead">THE A TEAM LEADS</h4>
                        <div class="row">
                            <div class="owl-carousel owl-theme">
                                @foreach ($project_slider as $key => $project_slid)
                                    <div class="col-md-12">
                                        <img src="{{ asset('storage/app/public/uploads/projects/' . $project_slid->image) }}"
                                            class="img-fluid right-img" alt="">
                                        <h6 class="text-white mt-3">{{ $project_slid->name }}</h6>
                                        <a href="{{ url('projects/' . $project_slid->id) }}" target="_blank"
                                            class="more">Read
                                            More >></a>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="all-project">
                            <a href="{{ url('all-projects') }}" class="btn btn-default btn-project">All Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-5 text-center">
            <h1 class="font-weight-bold forth-head">...</h1>
            <h4 class="font-weight-bold  mt-3 mb-3">DO NOT WAIT TO BUY REAL ESTATE, BUY REAL ESTATE AND WAIT</h3>
        </div>

        <div class="fourth mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="text-center">
                                <h5 class="text-white">VERY NICE PLACE TO LIVE</h5>
                                <p class="mt-5 wish">I wish I could have more money. So, I could buy a few more plots.
                                    People are
                                    already offering me
                                    good deals on my files.
                                </p>
                                <h5 class="text-white mt-5">SHEIKH LATIF</h5>
                                <h6 class="client">CLIENT - THE A TEAM</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box1">
                            <div class="text-center">
                                <h1 class="font-weight-bold forth-head">...</h1>
                                <h1 class="text-white font-weight-bold mt-2">CLIENT'S <br> REVIEWS</h1>
                                <h5 class="text-white mt-5">ELEGENT AND LUXUARY</h5>
                                <p class="mt-5 wish">I got the best deal and the best location in Al Noor Orchard
                                    Housing
                                    Scheme Lahore.
                                    I recommend The A Team for best deals in Al Noor Orchard.
                                </p>
                                <h5 class="text-white mt-5">AHMAD ALI</h5>
                                <h6 class="client">CLIENT - THE A TEAM</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box">
                            <div class="text-center">
                                <h5 class="text-white">BEST PLACE EVER!</h5>
                                <p class="mt-5 wish">I got the best deal and the best location in Al Noor Orchard
                                    Housing
                                    Scheme Lahore.
                                    I recommend The A Team for best deals in Al Noor Orchard.
                                </p>
                                <h5 class="text-white mt-5">MUHAMMAD SHOIB</h5>
                                <h6 class="client">CLIENT - THE A TEAM</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mb-5 text-center">
            <h1 class="font-weight-bold forth-head">...</h1>
            <h1 class="font-weight-bold noor">LATEST NEWS</h1>
        </div>


        <div class="fifth mb-5">
            <div class="container">
                <div class="row">
                    @foreach ($news as $new)
                        <div class="col-md-4">
                            <div class="card border-0 mt-2">
                                <div class="card-header border-0 p-0">
                                    <img src="{{ asset('storage/app/public/uploads/news/' . $new->image) }}"
                                        class="img-fluid news" alt="">
                                </div>
                                <div class="card-body border-top-0">
                                    <h6 class="font-weight-bold mt-4 mb-4 lda">{{ $new->title }}</h6>
                                    <a href="{{ url('more/news/' . $new->id) }}" class="more">Read More >></a>
                                </div>
                                <div class="card-footer text-center c-f">
                                    <p class="span">
                                        {{ \Carbon\Carbon::parse($new->created_at)->isoFormat('MMM - Do - YYYY') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <a href="{{ url('news') }}" class="btn btn-default read">Read More</a>
                </div>
            </div>
        </div>


        <div class="sixth mb-5">
            <div class="mb-5 text-center">
                <h1 class="font-weight-bold forth-head">...</h1>
                <h1 class="font-weight-bold noor text-white">NEARBY PLACES</h1>
                <img src="{{ asset('public/assets/images/Near-Places-1024x683-1.jpg') }}" class="img-fluid near" alt="">
            </div>
        </div>


        <div class="mb-5 text-center">
            <h1 class="font-weight-bold forth-head">...</h1>
            <h1 class="font-weight-bold noor">BLOG POST</h1>
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
                                    <a href="{{ url('more/' . $blog->id) }}" class="more">Read More >></a>
                                </div>
                                <div class="card-footer text-center c-f">
                                    <p class="span">
                                        {{ \Carbon\Carbon::parse($blog->created_at)->isoFormat('MMM - Do - YYYY') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <a href="{{ url('blog') }}" class="btn btn-default read">Read More</a>
                </div>
            </div>
        </div>


        {{-- <div class="seventh">
            <div class="container">
                <div class="row" style="padding: 105px 5px;">
                    <div class="col-md-4" id="md-5">

                        <div class="text-center">
                            <h6 class="mt-5 talk">TALK TO US</h6>
                            <img src="{{ asset('public/assets/images/call-center.png') }}" class="img-fluid call"
                                alt="">
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
                                            Motorway (M2), Main Sharaqpur Road, Lahore</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="loc">Executive Office #15, Grand Boulevard Al Jalil Garden,
                                            Faizpur Interchange, Lahore.</p>
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
        </div> --}}
    </section>


    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" id="modalDialog" role="document">

            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <img src="{{ asset('public/assets/images/load.jpeg') }}" class="img-fluid modal-image" alt="">
            </div>
        </div>
    </div> --}}



    <!-- Modal -->
    <div class="modal fade" id="leftModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="back">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100 font-weight-bold text-white" id="exampleModalLongTitle">INVEST NOW</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('invests') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" id="marla" class="form-control input" placeholder="Your Name"
                                required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" id="marla" class="form-control input" placeholder="Email"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" id="marla" class="form-control input"
                                placeholder="Phone Number" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-white">Interested In</label>
                            <select name="interest" id="marla" class="form-control input" required>
                                <option value="3 Marla">3 Marla</option>
                                <option value="5 Marla">5 Marla</option>
                                <option value="1 Kanal">1 Kanal</option>
                                <option value="2 Kanal">2 Kanal</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-default invest w-100 mt-3">SEND</button>

                        <ul class="text-center" id="modal-icon">
                            <li><a href="https://www.facebook.com/theateam.pk" target="_blank"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li><a href="https://twitter.com/theateampk" target="_blank"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/theateam.pk/" target="_blank"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/company/theateampk/" target="_blank"><i
                                        class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>
                        </ul>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        const typedTextSpan = document.querySelector(".typed-text");
        const cursorSpan = document.querySelector(".cursor");

        const textArray = ["GREATEST RETURNS", "SAFEST INVESTMENT", "BEST DEALS"];
        const typingDelay = 50;
        const erasingDelay = 50;
        const newTextDelay = 1000; // Delay between current and next text
        let textArrayIndex = 0;
        let charIndex = 0;

        function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                setTimeout(erase, newTextDelay);
            }
        }

        function erase() {
            if (charIndex > 0) {
                if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(erase, erasingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                textArrayIndex++;
                if (textArrayIndex >= textArray.length) textArrayIndex = 0;
                setTimeout(type, typingDelay + 1100);
            }
        }

        document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
            if (textArray.length) setTimeout(type, newTextDelay + 250);
        });


        //auto show modal
        $(document).ready(function() {
            setTimeout(function() {
                $('#exampleModalCenter').modal('show');
            }, 1000);


            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        loop: false
                    }
                }
            });


        });
    </script>
@endsection
