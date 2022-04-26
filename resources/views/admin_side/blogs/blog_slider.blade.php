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
                                    <li class="breadcrumb-item active" aria-current="page">Blog Slider</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
                                <a href="{{ url('create-blog-slider') }}" class="btn btn-outline-primary">Add New</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->




            <!--Table Start-->
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="blogsSliderTable">
                                @foreach ($blog_slider as $key => $blog)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>
                                            <img src="{{ asset('storage/app/public/uploads/blogs/sider/' . $blog->image) }}"
                                                width="70px" height="70px" alt="">
                                        </td>
                                        <td>{{ $blog->created_at }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3 fs-6">
                                                <a href="{{ url('edit-blog-slider/'.$blog->id) }}"
                                                    class="text-warning btn_edit_blogs">
                                                    <ion-icon name="pencil-sharp" role="img" class="md hydrated"
                                                        aria-label="pencil sharp"></ion-icon>
                                                </a>
                                                <a href="javascript:;" class="text-danger btn_delete_blog_slider"
                                                    data-bs-toggle="tooltip" data="{{ $blog->id }}" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Delete" aria-label="Delete">
                                                    <ion-icon name="trash-sharp" role="img" class="md hydrated"
                                                        aria-label="trash sharp"></ion-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--Table End-->


        </div>
        <!-- end page content-->
    </div>
    <!--end page content wrapper-->

    <script type="text/javascript">
        CKEDITOR.replace('description', {
            filebrowserUploadUrl: "{{ url('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('confidentail_info', {
            filebrowserUploadUrl: "{{ url('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });

        CKEDITOR.replace('rules', {
            filebrowserUploadUrl: "{{ url('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- CDN for Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // script for delete data
        $('#blogsSliderTable').on('click', '.btn_delete_blog_slider', function(e) {
                e.preventDefault();

                var id = $(this).attr('data');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to Delete this Data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "GET",
                            url: "{{ url('delete-blog-slider') }}",
                            data: {
                                id: id
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            dataType: "json",
                            success: function(response) {

                                if (response.status == 200) {
                                    toastr.success(response.message);
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }
                            }
                        });
                    }
                })

            });
    </script>

@endsection
