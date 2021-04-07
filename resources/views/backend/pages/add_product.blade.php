@extends('backend.layouts.app')
@section('content')

            
    
        
     
        <!-- Begin page -->
        <div id="wrapper">


        <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
   <div class="content">
      <!-- Start Content-->
      <div class="container-fluid">
         <div class="row page-title">
            <div class="col-md-12">
               <nav aria-label="breadcrumb" class="float-right mt-1">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Add Product</a></li>
                  </ol>
               </nav>
               <h4 class="mb-1 mt-0">Add Product</h4>
            </div>
            <div class="col-md-6 offset-3">
            @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                        @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                        @endforeach
                  </ul>
               </div>
            @endif
            </div>
         </div>
         <form action="{{ url('admin/save_product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
               <label for="inputEmail" class="col-sm-2 col-form-label">Select category</label>
               <div class="col-sm-10">
                  <select class="form-control" name="category_id">
                     <option value="">Select one</option>
                     @foreach($category as $row)
                        <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail" class="col-sm-2 col-form-label">Product Name</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" value="" name="name" placeholder="product name">
               </div>
            </div>
            <div class="form-group row">
               <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="desc" value="" name="description" placeholder="Description">
               </div>
            </div>
            <div class="form-group row">
               <label for="inputPassword" class="col-sm-2 col-form-label">Price</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="price" value="" name="price" placeholder="Price">
               </div>
            </div>
            <div class="form-group row">
               <label for="inputPassword" class="col-sm-2 col-form-label">Upload Product Picture</label>
               <div class="col-sm-10">
                  <input type="file" class="form-control" name="product_pic" id="product_pic" >
               </div>
            </div>
            <!--input type="hidden" name="user_role" value="4" /-->
            <div class="form-group row">
               <div class="col-sm-10 offset-sm-2">
                  <button type="submit" class="btn btn-primary">Add Product</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

@endsection