@extends('layout.form')
@section('content')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-color panel-custom">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Edit Profile User</h3>
                                            </div>
                                            <div class="panel-body">
                                            <div style="text-align:center" class="col-sm-4">
                                                    <img  src="assets/images/avatar-2.jpg" alt="image" class="img-rounded" width="200"/>
                                                    <div style="margin-top:20px" class="col-md-12">
                                                        <button style="width:30%" type="button" class="btn btn-default waves-effect waves-light">Ganti</button>
                                                        <button style="width:30%" type="button" class="btn btn-danger waves-effect waves-light">Delete</button>        
                                                    </div>
                                                </div>
                                             <div class="col-md-4">
                                                <h5><b>This is Text :</b></h5>
                                                <input type="text" class="form-control" value="This Is Example Text">
                                                <h5><b>This is Text :</b></h5>
                                                <input type="text" class="form-control" value="This Is Example Text">
                                                <h5><b>This is Text :</b></h5>
                                                <input type="text" class="form-control" value="This Is Example Text">
                                             </div>
                                             <div class="col-md-4">
                                                <h5><b>This is Text :</b></h5>
                                                <input type="text" class="form-control" value="This Is Example Text">
                                                <h5><b>This is Text :</b></h5>
                                                <input type="text" class="form-control" value="This Is Example Text">
                                                <h5><b>This is Text :</b></h5>
                                                <input type="text" class="form-control" value="This Is Example Text">
                                           </div>
                                           <div class="col-md-12">
                                                <button style="float:right" type="button" class="btn btn-default waves-effect waves-light">Edit</button>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>                              
                    </div> <!-- container -->
                </div> <!-- content -->
                <footer class="footer text-right">
                    © 2016. All rights reserved.
                </footer>

            </div>
            
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        @endsection