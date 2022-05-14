@extends('web-side.setup.master')

@section('content')
    <section class="home-section">

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                <li data-target="#carouselExampleFade" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($news_slider as $key => $news_slid)
                    <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
                        <img class="w-100 c-img img-fluid"
                            src="{{ asset('storage/app/public/uploads/news/slider/' . $news_slid->image) }}"
                            alt="First slide">
                        <div class="carousel-caption">
                            <h5 class="team">{{ $news_slid->title }}</h5>
                            <h1 class="team3">NEWS</h1>
                            <p class="latest">{!! $news_slid->desc !!}
                            </p>
                            <h5 class="team mt-4">#theAnews</h5>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>


        <div class="mb-5 text-center">
            <h1 class="font-weight-bold forth-head">...</h1>
            <h1 class="font-weight-bold noor">NEWS</h1>
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
                                    <p class="span">{!! Str::limit($new->description, 150,  '...') !!}
                                    </p>
                                    <a href="#" class="more">Read More</a>
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
            </div>
        </div>

    </section>
@endsection
