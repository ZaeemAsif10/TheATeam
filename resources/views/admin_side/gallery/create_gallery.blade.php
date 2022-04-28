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
                                     <li class="breadcrumb-item active" aria-current="page">Add Gallery</li>
                                 </ol>
                             </nav>
                         </div>
                         <div class="ms-auto">
                             <div class="btn-group">
                                 <a href="{{ url('news/slider') }}" class="btn btn-outline-primary">Back</a>
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
                         <h5>Add Gallery</h5>
                         <form action="{{ url('gallery/store') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label for="">Block Name</label>
                                         <select name="block_id" class="form-control">
                                             <option value="" selected disabled>Choose block</option>
                                             @foreach ($blocks as $block)
                                                 <option value="{{ $block->id }}">{{ $block->name }}</option>
                                             @endforeach
                                         </select>
                                         <span class="text-danger"> @error('block_id')
                                                 {{ $message }}
                                             @enderror </span>
                                     </div>
                                 </div>
                                 <div class="col-md-12 mt-3">
                                     <div class="form-group">
                                         <label for="">Image</label>
                                         <input type="file" name="image[]" class="form-control">


                                         <span class="text-danger"> @error('image')
                                                 {{ $message }}
                                             @enderror </span>
                                     </div>
                                 </div>

                                 <div class="row">
                                     <!-- tabel start -->
                                     <table class="table table-bordered mt-5 table-style">
                                         <tbody id="tblPurchase">
                                             <tr>
                                                 <td>
                                                     <label for="">Image</label>
                                                     <input type="file" class="form-control " name="images[]" required>
                                                 </td>
                                                 <td><button type="button" class="btn btn-success mt-3" id="addNewRow">Add</button> </td>
                                             </tr>
                                         </tbody>
                                     </table>

                                     <div class="col-md-12 mt-3 text-center">
                                         <button type="submit" class="btn btn-primary add_blogs">Save</button>
                                     </div>
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
     <script type="text/javascript">
         $(function() {
             $('#addNewRow').on('click', function() {
                 var tr = $("#dvOrders").find("Table").find("TR:has(td)").clone();
                 console.log(tr);
                 $("#tblPurchase").append(tr);
             });
         });
     </script>
     <div id="dvOrders" style="display:none">
         <table class="table table-bordered mt-5 table-style secondtable ">
             <tr>
                 <td>
                     <label for="">Images</label>
                     <input type="file" class="form-control " name="images[]">
                 </td>
                 <td ><button class="delete-row btn btn-danger" title="Remove">Delete</button></td>
             </tr>
         </table>
     </div>
     <script>
         $(document).ready(function() {

             // Denotes total number of rows
             var rowIdx = 0;


             // jQuery button click event to remove a row.
             $('#tblPurchase').on('click', '.delete-row', function() {

                 // Getting all the rows next to the row
                 // containing the clicked button
                 var child = $(this).closest('tr').nextAll();

                 // Iterating across all the rows
                 // obtained to change the index
                 child.each(function() {

                     // Getting <tr> id.
                     var id = $(this).attr('id');

                     // Getting the <p> inside the .row-index class.
                     var idx = $(this).children('.row-index').children('p');

                     // Gets the row number from <tr> id.
                     var dig = parseInt(id.substring(1));

                     // Modifying row index.
                     idx.html(`Row ${dig - 1}`);

                     // Modifying row id.
                     $(this).attr('id', `R${dig - 1}`);
                 });

                 // Removing the current row.
                 $(this).closest('tr').remove();

                 // Decreasing total number of rows by 1.
                 rowIdx--;
             });


         });
     </script>
 @endsection