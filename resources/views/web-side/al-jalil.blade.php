@extends('web-side.setup.master')

@section('content')
    <section class="home-section">

        <style>
            iframe {
                width: 100%;
                height: 315px;
            }
        </style>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
                @foreach ($project_slider as $key => $project_slid)
                    <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
                        <img class="w-100 c-img img-fluid"
                            src="{{ asset('storage/app/public/uploads/projects/slider/' . $project_slid->image) }}"
                            alt="First slide">
                        <div class="carousel-caption">
                            <h1 class="team1 text-white">{{ $project_slid->title }}</h1>
                            <!--<h1 class="team2 text-white">{{ substr($project_slid->title, 15, 28) }}</h1>-->
                            <h6 class="future mt-4 text-white mb-5">{!! $project_slid->description !!}</h6>
                            <a href="#" class="btn btn-default btn-book" data-toggle="modal" data-target="#bookNowModal"><i
                                    class="fa fa-book mr-2" aria-hidden="true"></i>Book Now</a>


                            @foreach ($project_details as $project_detail)
                                <a href="{{ asset('storage/app/public/uploads/detail/payment_plan/' . $project_detail->payment_plain) }}" target="_blank" class="btn btn-default btn-learn"><i class="fa fa-paper-plane mr-2" aria-hidden="true"></i>Payment Plan</a>
                            @endforeach

                        </div>
                    </div>
                @endforeach

            </div>

        </div>


        <div class="overview mt-5 mb-5">
            <div class="container">
                @foreach ($project_details as $project_detail)
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="font-weight-bold">{{ $project_detail->title }}</h5>
                            <h6 class="al mt-3 mb-3 detaillll">
                                {!! $project_detail->desc !!}
                            </h6>
                            <a href="{{ asset('storage/app/public/uploads/detail/payment_plan/' . $project_detail->payment_plain) }}"
                                target="_black" class="btn btn-default btn-pres mt-3"><i class="fa fa-book"
                                    aria-hidden="true"></i>
                                &nbsp;
                                Presentation</a>
                            <a href="#lcoation" class="btn btn-default btn-payment mt-3"><i class="fa fa-paper-plane"
                                    aria-hidden="true"></i>
                                &nbsp; Location</a>

                        </div>
                        <div class="col-md-6 text-center">
                            <x-embed url="https://www.youtube.com/watch?v={{ $project_detail->link }}" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="services mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">


                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($detail_slider as $key => $detail_slid)
                                    <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
                                        <img class="d-block w-100"
                                            src="{{ asset('storage/app/public/uploads/detail-slider/' . $detail_slid->image) }}"
                                            alt="First slide">

                                        <div class="carousel-caption text-left">
                                            <p class="nice">{{ $detail_slid->title }}</p>
                                        </div>
                                    </div>
                                @endforeach
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
                    <div class="col-md-6">
                        <div class="text-center mt-4">
                            <h5 class="font-weight-bold">Amenities & Facilities</h5>
                            <div class="row mt-4">
                                <div class="col-lg-3 col-md-4 col-6 mt-3">
                                    <img src="{{ asset('public/assets/images/icon/power-plant.png') }}"
                                        class="img-fluid" alt="">
                                    <p class="service-p mt-4">Underground electricity</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mt-3">
                                    <img src="{{ asset('public/assets/images/icon/gate.png') }}" class="img-fluid"
                                        alt="">
                                    <p class="service-p mt-4">Egyptian Style Main<br>Gate</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mt-3">
                                    <img src="{{ asset('public/assets/images/icon/filtration.png') }}"
                                        class="img-fluid" alt="">
                                    <p class="service-p mt-4">Water Filtration <br> Plant</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mt-3">
                                    <img src="{{ asset('public/assets/images/icon/casino-cctv.png') }}"
                                        class="img-fluid" alt="">
                                    <p class="service-p mt-4">24/7 CCTV <br> Surveillance</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mt-4">
                                    <img src="{{ asset('public/assets/images/icon/ambulance.png') }}"
                                        class="img-fluid" alt="">
                                    <p class="service-p mt-4">Emergency <br> Healthcare Facility</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mt-3">
                                    <img src="{{ asset('public/assets/images/icon/forest.png') }}" class="img-fluid"
                                        alt="">
                                    <p class="service-p mt-4">Green Field Family <br> Parks</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mt-4">
                                    <img src="{{ asset('public/assets/images/icon/car.png') }}" alt="">
                                    <p class="service-p mt-4">Mobile Security <br> Patrols</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mt-3">
                                    <img src="{{ asset('public/assets/images/icon/house.png') }}" class="img-fluid"
                                        alt="">
                                    <p class="service-p mt-4">Premium Brand <br> School</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mt-3">
                                    <img src="{{ asset('public/assets/images/icon/zoo.png') }}" class="img-fluid"
                                        alt="">
                                    <p class="service-p mt-4">Mini Zoo</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mt-3">
                                    <img src="{{ asset('public/assets/images/icon/soccer-player.png') }}"
                                        class="img-fluid" alt="">
                                    <p class="service-p mt-4">Recreational Areas <br> (sports complex, <br> library)</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mt-3">
                                    <img src="{{ asset('public/assets/images/icon/door.png') }}" class="img-fluid"
                                        alt="">
                                    <p class="service-p mt-4">E-Tag Entry for <br> Residents</p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mt-3">
                                    <img src="{{ asset('public/assets/images/icon/mosque.png') }}" class="img-fluid"
                                        alt="">
                                    <p class="service-p mt-4">State-of-the-art <br> Jamia Masjid</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="location mt-5 mb-5">
            <div class="container-fluid">
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-2">
                            <hr class="located">
                        </div>
                        <div class="col-md-2 mb-4"><i class="fa fa-map-marker loc-mark" aria-hidden="true"></i></div>
                        <div class="col-md-2">
                            <hr class="located">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <h4 class="font-weight-bold mt-3">THE LOCATION MAP</h4>

                    <p class="km text-secondary">{{ $projects->location }}</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <iframe id="lcoation"
                            src="https://www.google.com/maps?q={{ $projects->latitude }},{{ $projects->longitud }}&hl=es;z=1&output=embed"
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
                            <img src="{{ asset('public/assets/images/Al-Noor/the-a-team.png') }}"
                                class="img-fluid al-noor-logo" alt="">
                            <p class="mt-4">Your Agent</p>
                            <p class="contact-num">+92 341 333 3301</p>
                            <p>info@theateam.pk</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <h4 class="font-weight-bold mt-3">FOR BOOKING & DETAILS</h4>
                            <div class="container mt-4">
                                <form action="{{ url('booking-detail') }}" method="POST">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" id="input"
                                                    placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="phone" class="form-control" id="input"
                                                    placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" id="input"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea cols="30" name="message" rows="4" class="form-control" required
                                                    placeholder="I WOULD LIKE MORE INFORMATION ABOUT THIS"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-default btn-booking">Send Message</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Book Now Modal -->
        <div class="modal fade" id="bookNowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="back">
                    <div class="modal-header text-center">
                        <h5 class="modal-title w-100 font-weight-bold text-white" id="exampleModalLongTitle">BOOK NOW
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('book-now') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" id="marla" class="form-control input"
                                    placeholder="Your Name" required autocomplete="off">
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

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Payment Plan Modal -->
        {{-- <div class="modal fade bd-example-modal-lg" id="paymentPlanModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="w-100 float-right">
                        <button type="button" class="close cross" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExampleIndicatorss" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicatorss" data-slide-to="0" class="active">
                                </li>
                                <li data-target="#carouselExampleIndicatorss" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicatorss" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($payment_plans as $key => $payment_plan)
                                    <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
                                        <img class="d-block w-100"
                                            src="{{ asset('storage/app/public/uploads/detail/payment_plan/'.$payment_plan->payment_plan) }}"
                                            alt="First slide">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicatorss" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" id="arrow" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicatorss" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" id="arrow" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </section>
@endsection
