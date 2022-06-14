@extends('web-side.setup.master')

@section('content')

<style>
    #img-link{
        text-decoration: none;
        color: grey
    }
</style>
    <section class="home-section">


        <div class="mb-5 text-center mt-5">
            <h1 class="font-weight-bold noor">All Projects</h1>
        </div>


        <div class="fifth mb-5">
            <div class="container">
                <div class="row">

                    @foreach ($projects as $project)
                        <div class="col-md-4 mt-3">
                            <a href="{{ url('projects/'.$project->id) }}" id="img-link">
                                <div class="card border-0 mt-2">
                                    <div class="card-header border-0 p-0">
                                        <img src="{{ asset('storage/app/public/uploads/projects/' . $project->image) }}"
                                            class="img-fluid news" alt="No Image">
                                    </div>
                                    <div class="card-body border-top-0 text-center">
                                        <h6 class="font-weight-bold mt-4 mb-4 lda">{{ $project->name }}</h6>
                                        <p class="span">
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
