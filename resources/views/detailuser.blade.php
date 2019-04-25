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
                                                <h3 class="panel-title">Detail User</h3>
                                            </div>
                                            <div class="panel-body">
                                            <div class="col-sm-4">
                                                    <img src="assets/images/avatar-2.jpg" alt="image" class="img-responsive img-rounded" width="200"/>
                                             </div>
                                             <div class="col-md-4">
                                                <h5><b>Nama :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="name">
                                                    This is Example Text
                                                </p>

                                                <h5><b>Tempat Lahir :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="birthplace">
                                                    This is Example Text
                                                </p>
                                                <h5><b>Tanggal Lahir :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="birthdate">
                                                    This is Example Text
                                                </p>
                                                <h5><b>Nomor WA :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="phone">
                                                    This is Example Text
                                                </p>
                                             </div>
                                             <div class="col-md-4">
                                                <h5><b>Sudah Ikut Workshop :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="attendedWorkshop">
                                                    This is Example Text
                                                </p>
                                                <h5><b>Gender :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="gender">
                                                    This is Example Text
                                                </p>
                                                <h5><b>Posisi di Sekolah :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="position">
                                                    This is Example Text
                                                </p>
                                                <h5><b>Pendidikan Terakhir :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="lastEducation">
                                                    This is Example Text
                                                </p>
                                                <input type="text" id="id" style="display:none">
                                                
                                           </div>
                                        <a href="{{ url('/editprofile') }}">
                                            <button style="float:right" type="button" class="btn btn-default waves-effect waves-light">Edit</button>
                                           </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="panel panel-color panel-custom">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Linimasi Perubahan User</h3>
                                            </div>
                                            <div class="panel-body">
                                                       <!-- blog content -->
                                 <div class="blog-box-one">
                                        <div class="cover-wrapper">
                                            <div id="blog-slider" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators m-b-0">
                                                    <li data-target="#blog-slider" data-slide-to="0"
                                                        class="active"></li>
                                                    <li data-target="#blog-slider" data-slide-to="1"></li>
                                                    <li data-target="#blog-slider" data-slide-to="2"></li>
                                                </ol>
                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <img alt="Blog-img" src="assets/images/blogs/1.jpg" class="img-responsive"/>
                                                    </div>
                                                    <div class="item">
                                                        <img alt="Blog-img" src="assets/images/blogs/2.jpg" class="img-responsive"/>
                                                    </div>
                                                    <div class="item">
                                                        <img alt="Blog-img" src="assets/images/blogs/6.jpg" class="img-responsive"/>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>
                                        <div class="post-info">
                                            <div class="date">
                                                <span class="day">11</span><br>
                                                <span class="month">Feb</span>
                                            </div>
    
                                            <div class="meta-container">
                                                <a href="#">
                                                    <h4 class="text-overflow m-t-0">Beautiful Image Blog Post</h4>
                                                </a>
                                                <div class="font-13">
                                                    <span class="meta">Posted by James in <a href="#"><b>Web Design</b></a></span>
                                                </div>
                                            </div>
    
                                            <p class="text-muted m-b-0">
                                                Nunc nec dui vitae urna cursus lacinia. In
                                                venenatis eget justo in dictum. Vestibulum
                                                auctor raesent quisnm.
                                            </p>
    
                                            <div class="row m-t-10">
                                                <div class="col-xs-6">
                                                    <div class="m-t-10 blog-widget-action">
                                                        <a href="javascript:void(0)">
                                                            <i class="mdi md-favorite"></i> <span>34</span>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <i class="mdi md-comment"></i> <span>58</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <a href="" class="btn btn-sm waves-effect btn-white">Share</a>
                                                </div>
                                            </div>    
                                        </div>
                                    </div><!-- end blog -->
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
            
            <script>
             $(document).ready(function(){
                var data_diri = JSON.parse(localStorage.getItem("data_user_elearning_gsm"))
                document.getElementById('id').value= data_diri._id
                var id = data_diri._id
            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for(var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
            var token_user=getCookie("token_login_user_gsm")
            // console.log(token_user)
            $(document).ajaxStart(function() { Pace.restart(); });
                   $.ajax({
                    type: 'GET',
                    url: 'http://localhost/elearning/public/api/v1/user/'+id,
                    headers: {
                        "Authorization" : "Bearer "+token_user
                    }
                   })
                   .done(function(data, status){
                       console.log(status)
                       console.log(data)
                    localStorage.setItem('data_user_profile', JSON.stringify(data))
                    var data_user_profile = JSON.parse(localStorage.getItem("data_user_profile"))
                    document.getElementById('name').innerHTML = data_user_profile.user.name
                    document.getElementById('birthplace').innerHTML = data_user_profile.user.detail.birthplace
                    document.getElementById('birthdate').innerHTML = data_user_profile.user.detail.birthdate
                    document.getElementById('position').innerHTML = data_user_profile.user.detail.position
                    document.getElementById('phone').innerHTML = data_user_profile.user.detail.phone
                    if(data_user_profile.user.detail.attendedWorkshop){
                        var attendedWorkshop = "Sudah Pernah"
                    }else{
                        var attendedWorkshop = "Belum Pernah"
                    }
                    document.getElementById('attendedWorkshop').innerHTML = attendedWorkshop
                    document.getElementById('lastEducation').innerHTML = data_user_profile.user.detail.lastEducation
                    document.getElementById('gender').innerHTML = data_user_profile.user.detail.gender
                })
                   .fail(function(data, status){
                    console.log(status)
                    swal("Terjadi Kesalahan", "Cek koneksi internet Anda dan ulangi");

                }) 
                })
            </script>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        @endsection