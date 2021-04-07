@extends('backend.layouts.app')
@section('content')

<div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row page-title">
                            <div class="col-md-12">
                                <nav aria-label="breadcrumb" class="float-right mt-1">
                                    <ol class="breadcrumb">
                                       
                                        <li class="breadcrumb-item"><a href="#">Administrators</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">products</li>
                                    </ol>
                                </nav>
                                <h4 class="mb-1 mt-0">Products</h4>
                            </div>
                            <div class="col-md-6 offset-3">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mt-0 mb-1">Administrators</h4>
                                        
                                            <a class="btn btn-primary pullright small-btn" href="{{ url('admin/add_product') }}" >Add New</a>
                                         
                                        <p class="sub-header">
                                       
                                        </p>
                                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Product Desc</th>
                                                <th>Product Price</th>
                                                <!--th>Attended</th-->
                                                <th width="10%"Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tfoot>
                                           
                                            <tr>
                                                <th>#</th>
                                               
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Product Desc</th>
                                                <th>Product Price</th>

                                                <th>Image</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                           
                                        </tfoot>
                                        <tbody>
                                        @php 
                                            $i = 1;
                                        @endphp
                                        @foreach($products as $row)
                                            <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->get_category->category_name }}</td>
                                            <td>{{ $row->description }}</td>
                                            <td>{{ $row->price }}</td>
                                            <td><img src="../images/{{ $row->image }}" width="40" /></td>
                                            
                                            <td class="actions">
                                            <a class="btn btn-primary small-btn" href="{{ url('admin/edit_product',$row->id) }}" >Edit</a>
                                            <a class="btn btn-danger small-btn"  href="{{ url('admin/delete_product',$row->id) }}" >Delete</a>

                                            </td>
                                            </tr>
                                            @php 
                                                $i++;
                                            @endphp
                                        @endforeach
                                        
                                    </tbody>
                                    </table>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


                        
                       
                    </div> <!-- container-fluid -->

</div> <!-- content -->

        
@endsection