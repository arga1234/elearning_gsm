@extends('layout.form')
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
                                    <div class="col-lg-12">
                                        <div class="panel panel-color panel-custom">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Materi : This Is Title</h3>
                                            </div>
                                            <div class="panel-body">
                                                    <div class="col-lg-12"> 
                                                            <ul class="nav nav-tabs tabs">
                                                                <li class="active tab">
                                                                    <a href="#home-2" data-toggle="tab" aria-expanded="false"> 
                                                                        <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                                                        <span class="hidden-xs">Deskripsi</span> 
                                                                    </a> 
                                                                </li> 
                                                                <li class="tab"> 
                                                                    <a href="#profile-2" data-toggle="tab" aria-expanded="false"> 
                                                                        <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                                                        <span class="hidden-xs">Video</span> 
                                                                    </a> 
                                                                </li> 
                                                                <li class="tab"> 
                                                                    <a href="#messages-2" data-toggle="tab" aria-expanded="true"> 
                                                                        <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                                                        <span class="hidden-xs">PDF</span> 
                                                                    </a> 
                                                                </li> 
                                                                <li class="tab"> 
                                                                    <a href="#settings-2" data-toggle="tab" aria-expanded="false"> 
                                                                        <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                                                        <span class="hidden-xs">Gambar</span> 
                                                                    </a> 
                                                                </li> 
                                                            </ul> 
                                                            <div class="tab-content"> 
                                                                <div class="tab-pane active" id="home-2"> 
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p> 
                                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p> 
                                                                </div> 
                                                                <div class="tab-pane" id="profile-2">
                                                                    <iframe src="http://www.youtube.com/embed/W7qWa52k-nE"
                                                                    width="100%" height="500" frameborder="0" allowfullscreen></iframe>
                                                               </div> 
                                                                <div  class="tab-pane" id="messages-2">
                                                                    <iframe src="https://drive.google.com/file/d/1jeEEucLxFwehH1YYVRSzKS4fuKabK78I/preview" width="100%" height="500"></iframe>                                                                
                                                                </div> 
                                                                <div class="tab-pane" id="settings-2">
                                                                 <img src="assets/images/small/img1.jpg" alt="image" class="img-responsive img-rounded" width="100%"/>                                                                             
                                                                </div>
                                                        </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
    
                    </div> <!-- container -->

                                
                    <div class="row">
                            <div class="col-md-12">
                            <div class="panel panel-color panel-custom">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Tantangan</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                                <h5><b>This is Title </b></h5>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>     
                                        </div>

                                            <div style="margin-top:20px" class="col-md-6">
                                                    <label class="control-label">Upload Tantangan</label>
                                                    <p>Pilih beberapa foto secara langsung, lalu upload</p>
                                                    <input type="file" class="filestyle" data-buttonname="btn-white">
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
                      
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    © 2016. All rights reserved.
                </footer>

            </div>
            
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        @endsection