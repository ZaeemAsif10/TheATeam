@extends('web-side.setup.master')

@section('content')
    <section class="about-section">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block img-fluid top-img" src="{{ asset('public/assets/images/1.jpeg') }}"
                        alt="First slide">
                    <div class="carousel-caption">
                        <h1 class="us">CONTACT US</h1>
                        <p>Home > Contact Us</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mt-4">"BUILDING A BETTER GROW TOGETHER"</h5>
                        <h5 class="con ml-2 mt-4 mb-4">CONTACT DETAILS</h5>
                        <ul class="contact-us">
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p class="loc">Corporate Office, 61xx DHA PHASE III, Lahore, Pakistan</p>
                            </li>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p class="loc">Plaza No#3 Commercial, DHA Raya Phase 6 , Lahore</p>
                            </li>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p class="loc">Executive Office #15, Grand Boulevard Al Jalil Garden, Faizpur
                                    Interchange, Lahore.
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
                        <ul class="last-icon">
                            <li><a href="https://www.facebook.com/theateam.pk" target="_blank"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/theateampk" target="_blank"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/theateam.pk/" target="_blank"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/theateampk/" target="_blank"><i
                                        class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCpaf1VqhdpiQV11Q-brPYpQ" target="_blank"><i
                                        class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>


                    </div>
                    <div class="col-md-6">
                        <h5 class="con ml-2 mt-4 mb-4">GET IN TOUCH</h5>
                        <form action="{{ url('contact-us') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="phone" placeholder="Phone Number"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea cols="30" rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-default send-msg mt-4 ml-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-5">
                    <h4 class="text-center font-weight-bold w-100 mt-4 mb-4">THE A TEAM</h4>
                    <iframe width="100%" height="400" style="margin: 0px 12px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1203.119635560383!2d74.35996931478351!3d31.470940848146206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919076225fcb8cb%3A0x1adce4db5160bb42!2sThe%20A%20Team%20Real%20Estate%20%26%20Builders%20-%20Corporate%20Office!5e0!3m2!1sen!2s!4v1640852735291!5m2!1sen!2s"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>




    </section>
@endsection
