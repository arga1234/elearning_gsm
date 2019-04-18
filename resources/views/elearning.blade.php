@extends('layout.dashboard')
@section('content')
<style>
.title{
    text-align:center;
    font-size:50px;
    font-family: 'Passion One', cursive;
    letter-spacing: 3px;
}
.bg-custom-green{
    background-color: #81c868  !important;
}

.bg-custom-pink{
    background-color: #df78e3   !important;
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
                                        <div style="margin-top:-30px" class="card-box">
                                            <h1 class="title"> <b> <font color="#eb3986">SELAMAT</font> <font color="#eb3986">DATANG</font></b> </h1>
                                            <p  style="text-align:center;">Lorem ipsum dolor sit amet, id suas scripta efficiendi pri. </p>   
                                            <div style="margin-top:30px" id="carousel-example-captions" data-ride="carousel" class="carousel slide">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carousel-example-captions" data-slide-to="1"></li>
                                                        <li data-target="#carousel-example-captions" data-slide-to="2"></li>
                                                    </ol>
                                                    <div role="listbox" class="carousel-inner">
                                                        <div class="item active">
                                                            <img src="{{asset('assets/images/gsm_slide_welcome_page_1.jpg')}}" alt="First slide image">
                                                            <div class="carousel-caption">
                                                                <h3 class="text-white font-600">First slide label</h3>
                                                                <p>
                                                                    Nulla vitae elit libero, a pharetra augue mollis interdum.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{asset('assets/images/gsm_slide_welcome_page_2.jpg')}}" alt="Second slide image">
                                                            <div class="carousel-caption">
                                                                <h3 class="text-white font-600">Second slide label</h3>
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{asset('assets/images/gsm_slide_welcome_page_3.jpg')}}" alt="Third slide image">
                                                            <div class="carousel-caption">
                                                                <h3 class="text-white font-600">Third slide label</h3>
                                                                <p>
                                                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a>
                                                    <a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a>
                                                </div>                     			
                                        </div>     
                                                          
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="widget-panel widget-style-2 bg-white">
                                            <i class="md  md-account-balance text-primary"></i>
                                            <h2 class="m-0 text-dark counter font-600"><span id="sekolah_gsm"></span></h2>
                                            <div class="text-muted m-t-5">Sekolah GSM</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="widget-panel widget-style-2 bg-white">
                                            <i class="md  md-store-mall-directory text-pink"></i>
                                            <h2 class="m-0 text-dark counter font-600"><span id="sekolah_terdaftar"></span></h2>
                                            <div class="text-muted m-t-5">Sekolah Terdaftar</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="widget-panel widget-style-2 bg-white">
                                            <i class="md  md-assignment-ind text-info"></i>
                                            <h2 class="m-0 text-dark counter font-600"><span id="user"></span></h2>
                                            <div class="text-muted m-t-5">User</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="widget-panel widget-style-2 bg-white">
                                            <i class="md md-account-child text-custom"></i>
                                            <h2 class="m-0 text-dark counter font-600"><span id="assesor"></span></h2>
                                            <div class="text-muted m-t-5">Asessor</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <h4 class="text-dark header-title m-t-0">Peta Persebaran Sekolah Model GSM & Terdaftar</h4>
                                            <div class="row">
                                                <div id="map"></div>
                                            </div>                        			
                                            <!-- end row -->                      			
                                        </div>                              
                                    </div>
                                </div>
                        

                        <div class="col-lg-4">
                        		<div class="card-box p-0">
                        			<div class="profile-widget text-center">
			                            <div class="bg-custom bg-profile"></div>
			                            <img src="assets/images/users/avatar-1.jpg" class="thumb-lg img-circle img-thumbnail" alt="img">
			                            <h4>Arga Wirawan</h4>
                                        <p class="text-muted">SD Negeri 1 Caturtunggal</p>
			                            <p class="m-t-10 text-muted p-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lobortis magna quis ante auctor commodo.</p>
                                        <a href="#" class="btn btn-sm btn-primary m-b-20">View User</a>
			                        </div>
                        		</div>
                            </div> <!-- end col -->

                            
                        <div class="col-lg-4">
                        		<div class="card-box p-0">
                        			<div class="profile-widget text-center">
			                            <div class="bg-custom-green bg-profile"></div>
			                            <img src="assets/images/users/avatar-2.jpg" class="thumb-lg img-circle img-thumbnail" alt="img">
			                            <h4>Dedy Kurniawan S</h4>
                                        <p class="text-muted">SD Negeri 2 Caturtunggal</p>
			                            <p class="m-t-10 text-muted p-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lobortis magna quis ante auctor commodo.</p>
                                        <a href="#" class="btn btn-sm btn-primary m-b-20">View User</a>
			                        </div>
                        		</div>
                            </div> <!-- end col -->

                            
                        <div class="col-lg-4">
                        		<div class="card-box p-0">
                        			<div class="profile-widget text-center">
			                            <div class="bg-custom-pink bg-profile"></div>
			                            <img src="assets/images/users/avatar-3.jpg" class="thumb-lg img-circle img-thumbnail" alt="img">
			                            <h4>Ahmadi Ammar A.R</h4>
                                        <p class="text-muted">SD Negeri 3 Caturtunggal</p>
			                            <p class="m-t-10 text-muted p-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lobortis magna quis ante auctor commodo.</p>
                                        <a href="#" class="btn btn-sm btn-primary m-b-20">View User</a>
			                        </div>
                        		</div>
                            </div> <!-- end col -->
                            
                        <!-- end row -->
                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    © 2016. All rights reserved.
                </footer>

            </div>
            <script>
                $(document).ready(function(){
                    $.ajax({
                    type: 'GET',
                    url :"http://localhost/elearning/public/api/v1/elearning/analytic"

                    }).done(function(data, status){
                        console.log(data)
                        console.log(status)
                        document.getElementById('sekolah_gsm').innerHTML = data.sekolahGsm
                        document.getElementById('sekolah_terdaftar').innerHTML = data.sekolahTerdaftar
                        document.getElementById('assesor').innerHTML = data.jumlahAsessor
                        document.getElementById('user').innerHTML = data.jumlahUser
                    }).fail(function(data,status){
                        console.log(status)
                    })
                })
            </script>

<script>
    function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
               zoom: 5,
               center: {lat: -2.5489, lng: 118.0149}
           });

           setMarkers(map);
           }

           function setMarkers(map) {
           $.ajax({
           type: 'GET',
           url :"http://localhost/elearning/public/api/v1/school-gsm/map"

           }).done(function(datas, status){
               console.log(datas)
               var school = []
               for(i=0;i<datas.length;i++){
               school += '["'
               school += datas[i].sekolah
               school += '",'
               school += datas[i].lokasi[1]
               school += ','
               school += datas[i].lokasi[0]
               school += ']'
               if (i==datas.length-1) {
                   school +=''
               }else {
                   school +=','
               }
               }
               
               var obj2 = JSON.parse("["+school+"]");
               console.log(obj2)
               var schools = obj2
               var image = {
                   url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                   // This marker is 20 pixels wide by 32 pixels high.
                   size: new google.maps.Size(20, 32),
                   // The origin for this image is (0, 0).
                   origin: new google.maps.Point(0, 0),
                   // The anchor for this image is the base of the flagpole at (0, 32).
                   anchor: new google.maps.Point(0, 32)
               };
               var shape = {
                   coords: [1, 1, 1, 20, 18, 20, 18, 1],
                   type: 'poly'
               };
               for (var i = 0; i < schools.length; i++) {
                   var school = schools[i];
                   var marker = new google.maps.Marker({
                   position: {lat: school[1], lng: school[2]},
                   map: map,
                   icon: image,
                   shape: shape,
                   title: school[0],
                   zIndex: school[3]
                   })
               }
           })
           .fail(function(data, status){
               console.log(status)
           })
           }
           </script>

   <script async defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAS6ZdI6zn_QX7ceEWJtdFzdCMuHQijNmc&callback=initMap">
   </script>
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        @endsection