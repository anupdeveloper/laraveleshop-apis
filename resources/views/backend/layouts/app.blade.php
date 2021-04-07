<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Calendar APP - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- plugins -->
        <link href="{{ asset('backend/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
        <link href="{{ asset('backend/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/multiselect/multi-select.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
        <!-- plugin css -->
        <link href="{{ asset('backend/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" /> 

        <!-- App css -->
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="{{ asset('backend/tag/bootstrap-tagsinput.css') }}">
    </head>
    <body>
    @include('backend.layouts.topmenu')
    @include('backend.layouts.leftmenu')
    @yield('content')


    <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <?=date('Y')?> &copy; Calendar APP. All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i data-feather="x-circle"></i>
                </a>
                <h5 class="m-0">Customization</h5>
            </div>
    
            <div class="slimscroll-menu">
    
                <h5 class="font-size-16 pl-3 mt-4">Choose Variation</h5>
                <div class="p-3">
                    <h6>Default</h6>
                    <a href="index.html"><img src="{{ asset('backend/images/layouts/vertical.jpg') }}" alt="vertical" class="img-thumbnail demo-img" /></a>
                </div>
                <div class="px-3 py-1">
                    <h6>Top Nav</h6>
                    <a href="layouts-horizontal.html"><img src="{{ asset('backend/images/layouts/horizontal.jpg') }}" alt="horizontal" class="img-thumbnail demo-img" /></a>
                </div>
                <div class="px-3 py-1">
                    <h6>Dark Side Nav</h6>
                    <a href="layouts-dark-sidebar.html"><img src="{{ asset('backend/images/layouts/vertical-dark-sidebar.jpg') }}" alt="dark sidenav" class="img-thumbnail demo-img" /></a>
                </div>
                <div class="px-3 py-1">
                    <h6>Condensed Side Nav</h6>
                    <a href="layouts-dark-sidebar.html"><img src="{{ asset('backend/images/layouts/vertical-condensed.jpg') }}" alt="condensed" class="img-thumbnail demo-img" /></a>
                </div>
                <div class="px-3 py-1">
                    <h6>Fixed Width (Boxed)</h6>
                    <a href="layouts-boxed.html"><img src="{{ asset('backend/images/layouts/boxed.jpg') }}" alt="boxed"
                            class="img-thumbnail demo-img" /></a>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('backend/js/vendor.min.js') }}"></script>

        
        <!-- datatable js -->
        <script src="{{ asset('backend/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        

        <script src="{{ asset('backend/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ asset('backend/libs/select2/select2.min.js') }}"></script>
        <script src="{{ asset('backend/libs/multiselect/jquery.multi-select.js') }}"></script>
        <script src="{{ asset('backend/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('backend/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('backend/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
        

        <script src="{{ asset('backend/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables/buttons.print.min.js') }}"></script>

        <script src="{{ asset('backend/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables/dataTables.select.min.js') }}"></script>

        <!-- Datatables init -->
        <script src="{{ asset('backend/js/pages/datatables.init.js') }}"></script>

        <!-- optional plugins -->
        <script src="{{ asset('backend/libs/moment/moment.min.js') }}"></script>
        <script src="{{ asset('backend/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('backend/libs/flatpickr/flatpickr.min.js') }}"></script>

       
        <!-- page js -->
        <script src="{{ asset('backend/js/pages/dashboard.init.js') }}"></script>
        <script src="{{ asset('backend/js/pages/form-advanced.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('backend/js/app.min.js') }}"></script>

        <script src="{{ asset('backend/tag/bootstrap-tagsinput.min.js') }}"></script>


    </body>
</html>              

                