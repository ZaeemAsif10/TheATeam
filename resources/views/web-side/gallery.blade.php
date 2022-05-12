@extends('web-side.setup.master')

@section('content')
    <style>
        .all-blocks li {
            display: inline;
            padding: 0px 22px;
            color: black;
            font-weight: bold;

        }

        .all-blocks li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

    </style>

    <section class="about-section">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block img-fluid top-img" src="{{ asset('public/assets/images/rev_slidehome1_1.jpg') }}"
                        alt="First slide">
                    <div class="carousel-caption">
                        <h1 class="us">GALLARY</h1>
                        <p>Home > Gallery</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="fifth mt-5 mb-5">
            <h3 class="font-weight-bold mt-4 mb-4 text-center a-g">ALL GALLERY</h3>

            <div class="text-center">
                <ul class="all-blocks">
                    <li><a href="#" class="all-gallery">All</a></li>
                    @foreach ($blocks as $block)
                        <li><a href="#" class="block" data="{{ $block->id }}">{{ $block->name }}</a></li>
                    @endforeach
                </ul>
            </div>


            <div class="container">
                <div class="row" id="gallery_images">

                </div>
            </div>


        </div>

        <div class="youtube mt-5 mb-5">
            <div class="container">
                <video controls class="video">
                    <source src="video/WhatsApp-Video-2021-07-09-at-3.24.37-PM-1.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="seventh">
            <div class="container">
                <div class="row" style="padding: 105px 5px;">
                    <div class="col-md-4" id="md-5">

                        <div class="text-center">
                            <h6 class="mt-5 talk">TALK TO US</h6>
                            <img src="images/call-center.png" class="img-fluid call" alt="">
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


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(function() {

            AllGallery();

            $('.all-blocks').on('click', '.all-gallery', function(e) {
                e.preventDefault();

                AllGallery();

            });

            //get Gallery All Images
            function AllGallery() {



                $.ajax({

                    url: '{{ url('/all-gallery-images') }}',
                    type: 'get',
                    async: false,
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i;
                        var c = 0;

                        for (i = 0; i < data.length; i++) {

                            c++;
                            html += '<div class="col-md-4">' +
                                '<img src="{{ asset('storage/app/public/uploads/gallery/') }}/' +
                                data[i].images + '" class="img-fluid d-img" alt="">' +
                                '</div>';
                        }


                        $('#gallery_images').html(html);

                    },
                    error: function() {
                        toastr.error('something went wrong');
                    }

                });



        }


            //get block id base images
            $('.all-blocks').on('click', '.block', function(e) {
                e.preventDefault();

                var id = $(this).attr('data');

                $.ajax({

                    url: '{{ url('/gallery-images') }}',
                    type: 'get',
                    async: false,
                    dataType: 'json',
                    data: {
                        id: id
                    },
                    success: function(data) {

                        var html = '';
                        var i;
                        var c = 0;

                        for (i = 0; i < data.length; i++) {

                            c++;
                            html += '<div class="col-md-4">' +
                                '<img src="{{ asset('storage/app/public/uploads/gallery/') }}/' +
                                data[i].images + '" class="img-fluid d-img" alt="">' +
                                '</div>';
                        }


                        $('#gallery_images').html(html);

                    },
                    error: function() {
                        toastr.error('something went wrong');
                    }

                });

            });

        });
    </script>
@endsection
