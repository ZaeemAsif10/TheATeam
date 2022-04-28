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
                                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                    data-target="#AddProjectModal">Add New</button>
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
                                    <th>Project Name</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="projectTable">

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


    <!--Add Porjects Modal Start -->
    <div id="AddProjectModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Projects</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="Add_project_Form" action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Project Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary add_projects">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--Add Projects Modal End -->


    <!--Edit Slider Modal Start -->
    <div id="edit_project_modal" class="modal custom-modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="Edit_project_Form" action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="project_id">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary update_projects">Update</button>
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

            getProjects();

            function getProjects() {

                $.ajax({

                    url: '{{ url('/get-projects') }}',
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
                                '<td>' + data[i].name + '</td>' +
                                '<td>' + data[i].created_at + '</td>' +
                                '<td> <div class="d-flex align-items-center gap-3 fs-6">' +
                                '<a href="#" class="text-warning btn_edit_project" data="' + data[i].id +
                                '"><ion-icon name="pencil-sharp" role="img" class="md hydrated" aria-label="pencil sharp"></ion-icon></a>' +
                                '<a href="javascript:;" class="text-danger btn_delete_project" data="' +
                                data[i].id +
                                '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp" role="img" class="md hydrated" aria-label="trash sharp"></ion-icon></a>' +
                                '</div>' +
                                '</td>' +
                                '</tr>';
                        }


                        $('#projectTable').html(html);

                    },
                    error: function() {
                        toastr.error('something went wrong');
                    }

                });
            }


            //Add Slider
            $('#Add_project_Form').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData($('#Add_project_Form')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ url('store-projects') }}",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('.add_projects').text('Saving...');
                        $(".add_projects").prop("disabled", true);
                    },
                    success: function(response) {

                        if (response.status == 200) {
                            toastr.success(response.message);
                            $('.add_projects').text('Save');
                            $(".add_projects").prop("disabled", false);
                            $(".close").click();
                            $('#Add_project_Form').find('input').val("");
                            getProjects();

                        }

                        if (response.error) {
                            toastr.error(response.error);
                        }
                    },
                    error: function() {
                        $('.add_projects').text('Save');
                        $(".add_projects").prop("disabled", false);
                        toastr.error('something went wrong');
                    },
                });

            });


            //Edit Slider
            $('#projectTable').on('click', '.btn_edit_project', function(e) {
                e.preventDefault();

                var id = $(this).attr('data');

                $('#edit_project_modal').modal('show');

                $.ajax({

                    type: 'ajax',
                    method: 'get',
                    url: '{{ url('edit-projects') }}',
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {

                        $('input[name=project_id]').val(data.id);
                        $('input[name=name]').val(data.name);
                    },

                    error: function() {

                        toastr.error('something went wrong');

                    }

                });

            });


            //Update Projects
            $('.update_projects').on('click', function(e) {
                e.preventDefault();


                let EditFormData = new FormData($('#Edit_project_Form')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ url('update-projects') }}",
                    data: EditFormData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    beforeSend: function() {
                        $('.update_projects').text('Updating...');
                        $(".update_projects").prop("disabled", true);
                    },
                    success: function(response) {

                        if (response.status == 200) {
                            $('#edit_project_modal').modal('hide');
                            $('#Edit_project_Form').find('input').val("");
                            $('.update_projects').text('Update');
                            $(".update_projects").prop("disabled", false);
                            toastr.success(response.message);
                            getProjects();
                        }
                    },
                    error: function() {
                        toastr.error('something went wrong');
                        $('.update_projects').text('Update');
                        $(".update_projects").prop("disabled", false);
                    }
                });

            });


            // script for delete data
            $('#projectTable').on('click', '.btn_delete_project', function(e) {
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
                            url: "{{ url('delete-projects') }}",
                            data: {
                                id: id
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            dataType: "json",
                            success: function(response) {

                                toastr.success(response.message);
                                getProjects();
                            }
                        });
                    }
                })

            });

        });
    </script>
@endsection
