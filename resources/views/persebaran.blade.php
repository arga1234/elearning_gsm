@extends('layout.dashboard')
@section('content')
<style>
.title{
    text-align:center;
    font-size:50px;
    font-family: 'Passion One', cursive;
    letter-spacing: 3px;
}

@media only screen and (max-width: 600px) {
    .title{

    font-size:30px;

}
}
</style>
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
                                                    Persebaran Sekolah Model GSM 
                                                    </b>
                                                    </h1>
                                                    <p>Anda dapat melihat persebaran Sekolah Model GSM & user/sekolah yang terdaftar di E-Learning ini</p>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-color panel-custom">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Peta Persebaran</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="col-md-4">
                                                    <p><b>Pilih Subjek</b></p>
                                                    <select class="selectpicker" data-live-search="true"  data-style="btn-white">
                                                            <option selected disabled>Please Select</option>
                                                            <option>Sekolah Model GSM</option>
                                                            <option>Sekolah Terdaftar Pengikut GSM</option> 
                                                        </select>
                                                </div>
                                                <div style="margin-bottom:20px" class="col-md-4">
                                                        <p><b>Pilih Lokasi Tersedia</b></p>
                                                        <select class="selectpicker" data-live-search="true"  data-style="btn-white">
                                                                <option selected disabled>Please Select</option>
                                                                <option>Tempat A</option>
                                                                <option>Tempat B</option>
                                                                <option>Tempat C</option>
                                                            </select>
                                                </div>

                                                <div id="map"></div>
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