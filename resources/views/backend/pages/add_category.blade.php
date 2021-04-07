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
                     <li class="breadcrumb-item"><a href="#">Add Category</a></li>
                  </ol>
               </nav>
               <h4 class="mb-1 mt-0">Add Category</h4>
            </div>
         </div>
         <form action="{{ url('admin/save_category') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
               <label for="inputEmail" class="col-sm-2 col-form-label">Category Name</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="category" value="" name="category_name" placeholder="category name">
               </div>
            </div>
            <!--div class="form-group row">
               <label for="inputPassword" class="col-sm-2 col-form-label">Last Name</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="lname" value="" name="lname" placeholder="Last Name">
               </div>
            </div>
            <div class="form-group row">
               <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" value="" name="email" placeholder="Email">
               </div>
            </div>
            <div class="form-group row">
               <label for="inputPassword" class="col-sm-2 col-form-label">Upload Profile</label>
               <div class="col-sm-10">
                  <input type="file" class="form-control" name="profile_pic" id="profile_pic" >
               </div>
            </div>
            <input type="hidden" name="user_role" value="4" /-->
            <div class="form-group row">
               <div class="col-sm-10 offset-sm-2">
                  <button type="submit" class="btn btn-primary">Add Category</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

@endsection