 @extends('admin_side.setup.master')

 @section('content')
     <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

     <!-- start page content wrapper-->
     <div class="page-content-wrapper">
         <!-- start page content-->
         <div class="page-content">

             <!--start breadcrumb-->
             <div class="card">
                 <div class="card-body">
                     <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                         <div class="breadcrumb-title pe-3">Home</div>
                         <div class="ps-3">
                             <nav aria-label="breadcrumb">
                                 <ol class="breadcrumb mb-0 p-0 align-items-center">
                                     <li class="breadcrumb-item"><a href="javascript:;">
                                             <ion-icon name="home-outline" role="img" class="md hydrated"
                                                 aria-label="home outline"></ion-icon>
                                         </a>
                                     </li>
                                     <li class="breadcrumb-item active" aria-current="page">Edit Annual Events</li>
                                 </ol>
                             </nav>
                         </div>
                         <div class="ms-auto">
                             <div class="btn-group">
                                 <a href="{{ url('events/slider') }}" class="btn btn-outline-primary">Back</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!--end breadcrumb-->



             <!--Create Form Start-->
             <div class="row">

                 <div class="card">
                     <div class="card-body">
                         <h5>Edit Annual Events</h5>
                         <form action="{{ url('annual_event/update/'.$annual->event_id) }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label for="">Event Name</label>
                                         <select name="event_id" class="form-control">
                                             <option value="" selected disabled>Choose event</option>
                                             @foreach ($events as $event)
                                                 <option value="{{ $event->id }}">
                                                     {{ $event->name }}</option>
                                             @endforeach
                                         </select>
                                         <span class="text-danger"> @error('event_id')
                                                 {{ $message }}
                                             @enderror </span>
                                     </div>
                                 </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        @if(isset($annual))
                                        @foreach($annual as $img)
                                        <input type="file" name="images[]" class="form-control mt-3">
                                        <img src="{{ asset('storage/app/public/uploads/annual_events/'.$img->images) }}" class="mt-3" width="50px" alt="">
                                        @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3 text-center">
                                    <button type="submit" class="btn btn-primary add_blogs">Update</button>
                                </div>

                             </div>
                         </form>
                     </div>
                 </div>

             </div>
             <!--Create Form End-->

         </div>
         <!-- end page content-->
     </div>
     <!--end page content wrapper-->



     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


 @endsection
