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
                                    <div  style="margin-top:-20px" class="col-sm-12">
                                        <div class="card-box widget-inline">
                                            <div class="row">
                                                    <div style="text-align:center"class="col-md-12">
                                                    <h1> 
                                                    <b>
                                                    Materi Basic
                                                    </b>
                                                    </h1>
                                                    <p>Materi basic merupakan materi yang wajib dipelajari sebelum lanjut ke materi advanced</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                
                                <div class="row">
                                        <div class="col-lg-12">
                                                <div class="card-box">
                                                    <div class="bar-widget">
                                                        <div class="table-box">
                                                            <div class="table-detail">
                                                                <div class="col-md-12">
                                                                    <p style="font-size:25px"> <b>This is Title</b> </p>
                                                                    <p style="color:#5d9cec">Category : This is category</p>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                                </div>
                                                                <div class="col-md-12">
                                                                        <button style="float:right" type="button" class="btn btn-default waves-effect waves-light"  href="{{ url('/detailmateri') }}">Pelajari</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                    <div class="card-box">
                                                        <div class="bar-widget">
                                                            <div class="table-box">
                                                                <div class="table-detail">
                                                                    <div class="col-md-12">
                                                                        <p style="font-size:25px"> <b>This is Title</b> </p>
                                                                        <p style="color:#5d9cec">Category : This is category</p>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                            <button style="float:right" type="button" class="btn btn-default waves-effect waves-light"  href="{{ url('/detailmateri') }}">Pelajari</button>
    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                        <div class="card-box">
                                                            <div class="bar-widget">
                                                                <div class="table-box">
                                                                    <div class="table-detail">
                                                                        <div class="col-md-12">
                                                                            <p style="font-size:25px"> <b>This is Title</b> </p>
                                                                            <p style="color:#5d9cec">Category : This is category</p>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                                <button style="float:right" type="button" class="btn btn-default waves-effect waves-light" href="{{ url('/detailmateri') }}">Pelajari</button>
                                                                        </div>
                                                                    </div>
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