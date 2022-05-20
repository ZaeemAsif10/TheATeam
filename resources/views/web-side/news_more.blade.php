@extends('web-side.setup.master')

@section('content')
    <section class="detail-section mt-5">

        <div class="details mb-5">
            <div class="container" id="cont">
                <div class="row">
                    <div class="col-md-8">

                        <img src="{{ asset('storage/app/public/uploads/news/' . $more_news->image) }}" class="img-fluid"
                            width="700" height="300" alt="">

                        <h3 class="mt-4">{{ $more_news->title }}</h3>

                        <a href="#">News / By TheATeam90</a>

                        <div class="desc mt-4">
                            {!! $more_news->description !!}
                        </div>

                        <a href="{{ url('news') }}" class=""> >> Previous Post</a>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-secondary post">Recent Posts</h5>
                        <ul class="recent">
                            @foreach ($news_details as $news_detail)
                                <li><a href="{{ url('more/news/' . $news_detail->id) }}">{{ $news_detail->title }}</a></li>
                            @endforeach
                        </ul>


                        <h5 class="text-secondary post mt-5">Categories</h5>
                        <ul class="recent">
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                            <li><a href="{{ url('news') }}">News</a></li>
                        </ul>


                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
