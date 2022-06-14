@extends('web-side.setup.master')

@section('content')
    <style>
        .all-blocks li {
            display: inline;
            padding: 0px 6px;
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
            <h3 class="font-weight-bold mt-4 mb-4 text-center a-g">GALLERY</h3>

            <div class="text-center">
                <ul class="all-blocks">
                    <li><a href="#" class="all-gallery mt-4">All</a></li>
                    @foreach ($blocks as $block)
                        <li class="mt-4"><a href="#" class="block" data="{{ $block->id }}">{{ $block->name }}</a></li>
                    @endforeach
                </ul>
            </div>


            <div class="container" id="gell_container">
                <div class="row" id="gallery_images">

                </div>
            </div>


        </div>

        <div class="youtube mt-5 mb-5">
            <div class="container">
                <video controls class="video">
                    <source src="{{ asset('public/assets/video/WhatsApp-Video-2021-07-09-at-3.24.37-PM-1.mp4') }}" type="video/mp4">
                </video>
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
