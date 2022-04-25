@extends('admin_side.setup.master')

@section('content')
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
                                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                    data-target="#AddBlogsModal">Add New</button>
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
                            <tbody id="blogsTable">

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


    <!--Add Slider Modal Start -->
    <div id="AddBlogsModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Blogs</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="Add_Blogs_Form" action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" id="" class="form-control" cols="30" rows="4" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary add_blogs">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--Add Slider Modal End -->


    <!--Edit Slider Modal Start -->
    <div id="edit_blogs_modal" class="modal custom-modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Blogs</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="Edit_Blogs_Form" action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="blogs_id">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" id="" class="form-control" cols="30" rows="4" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    <span id="store_image"></span>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary update_blogs">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--Edit Slider Modal End -->



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- CDN for Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {

            getBlogs();

            function getBlogs() {

                $.ajax({

                    url: '{{ url('/get-blogs') }}',
                    type: 'get',
                    async: false,
                    dataType: 'json',

                    success: function(data) {

                        var html = '';
                        var i;
                        var c = 0;

                        for (i = 0; i < data.length; i++) {

                            c++;
                            html += '<tr>' +
                                '<td>' + c + '</td>' +
                                '<td>' + data[i].title + '</td>' +
                                '<td><img src="{{ asset('storage/app/public/uploads/blogs') }}/' +
                                data[i].image +
                                '" width="40px" height="50px" ></td>' +
                                '<td>' + data[i].created_at + '</td>' +
                                '<td> <div class="d-flex align-items-center gap-3 fs-6">' +
                                '<a href="#" class="text-warning btn_edit_blogs" data="' + data[i].id +
                                '"><ion-icon name="pencil-sharp" role="img" class="md hydrated" aria-label="pencil sharp"></ion-icon></a>' +
                                '<a href="javascript:;" class="text-danger btn_delete_blogs" data="' +
                                data[i].id +
                                '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp" role="img" class="md hydrated" aria-label="trash sharp"></ion-icon></a>' +
                                '</div>' +
                                '</td>' +
                                '</tr>';
                        }


                        $('#blogsTable').html(html);

                    },
                    error: function() {
                        toastr.error('something went wrong');
                    }

                });
            }


            //Add Blogs
            $('#Add_Blogs_Form').on('submit', function(e) {
                e.preventDefault();
                $('.add_blogs').text('Saving...');

                let formData = new FormData($('#Add_Blogs_Form')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ url('store-blogs') }}",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {

                        if (response.status == 200) {
                            toastr.success(response.message);
                            $('.add_blogs').text('Save');
                            $(".close").click();
                            $('#Add_Blogs_Form').find('input').val("");
                            getBlogs();

                        }

                        if (response.errors) {
                            toastr.error(response.errors);
                        }
                    },
                    error: function() {
                        $('.add_blogs').text('Save');
                        toastr.error('something went wrong');
                    },
                });

            });


            //Edit Blogs
            $('#blogsTable').on('click', '.btn_edit_blogs', function(e) {
                e.preventDefault();

                var id = $(this).attr('data');

                $('#edit_blogs_modal').modal('show');

                $.ajax({

                    type: 'ajax',
                    method: 'get',
                    url: '{{ url('edit-blogs') }}',
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {

                        $('input[name=blogs_id]').val(data.id);
                        $('input[name=title]').val(data.title);
                        $('textarea[name=description]').val(data.description);
                        $('#store_image').html(
                            '<img src="{{ asset('storage/app/public/uploads/blogs/') }}/' +
                            data.image + '" class="mt-4 ml-4" width="40px" height="50px" />'
                            );
                        $('#store_image').append(
                            '<input type="hidden" name="hidden_image" value="' + data
                            .image + '" />');
                    },

                    error: function() {

                        toastr.error('something went wrong');

                    }

                });

            });


            //Update Blogs
            $('.update_blogs').on('click', function(e) {
                e.preventDefault();
                $('.update_blogs').text('Updating...');

                let EditFormData = new FormData($('#Edit_Blogs_Form')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ url('update-blogs') }}",
                    data: EditFormData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function(response) {

                        if (response.status == 200) {
                            $('#edit_blogs_modal').modal('hide');
                            $('#Edit_Blogs_Form').find('input').val("");
                            $('.update_blogs').text('Update');
                            toastr.success(response.message);
                            getBlogs();
                        }
                    },
                    error: function() {
                        toastr.error('something went wrong');
                        $('.update_blogs').text('Update');
                    }
                });

            });


            // script for delete data
            $('#blogsTable').on('click', '.btn_delete_blogs', function(e) {
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
                            url: "{{ url('delete-blogs') }}",
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
                                    getBlogs();
                                }
                            }
                        });
                    }
                })

            });

        });
    </script>
@endsection
