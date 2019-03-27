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
                                                <h3 class="panel-title">Tulis Perubahan</h3>
                                            </div>
                                            <div class="panel-body">
                                            <div class="col-md-6 form-group">
                                                    <label class="control-label">Judul Perubahan</label>
                                                    <input type="text" class="form-control" >
                                                <br>
                                                <label class="control-label">Upload Foto</label>
                                                <p>Pilih beberapa foto secara langsung, lalu upload</p>
                                                <input type="file" class="filestyle" data-buttonname="btn-white">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                    <label class="control-label">Tuliskan Cerita Anda</label>
                                                    <p>Deskripsikan cerita perubahan yang Anda lakukan</p>
                                                    <textarea id="textarea" class="form-control" maxlength="225" rows="2" placeholder=""></textarea>

                                                </div>
                                            
                                           <div class="col-md-12">
                                                <button style="float:right" type="button" class="btn btn-default waves-effect waves-light">Upload</button>
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