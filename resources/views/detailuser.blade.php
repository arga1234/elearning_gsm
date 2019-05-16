@extends('layout.form')
@section('content')

<style>
.title{
    text-align:center;
    font-size:50px;
    font-family: 'Passion One', cursive;
    letter-spacing: 3px;
}
.date{
    float: left;
    border-bottom: 3px solid #71b6f9;
}
.day {
    font-size: 22px;
    color: #333;
    font-weight: 600;
    line-height: 22px;
}

.month {
    text-transform: uppercase;
    text-align: center;
    width: 100%;
    display: inline-block;
}
.tes{
    margin-left:-20px
}
@media only screen and (max-width: 600px) {
.title{
    font-size:30px;
}
.tes{
    margin-left:50px
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
                                                    Loading
                                                </p>

                                                <h5><b>Tempat Lahir :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="birthplace">
                                                    Loading
                                                </p>
                                                <h5><b>Tanggal Lahir :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="birthdate">
                                                    Loading
                                                </p>
                                                <h5><b>Nomor WA :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="phone">
                                                    Loading
                                                </p>
                                             </div>
                                             <div class="col-md-4">
                                                <h5><b>Sudah Ikut Workshop :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="attendedWorkshop">
                                                    Loading
                                                </p>
                                                <h5><b>Gender :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="gender">
                                                    Loading
                                                </p>
                                                <h5><b>Posisi di Sekolah :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="position">
                                                    Loading
                                                </p>
                                                <h5><b>Pendidikan Terakhir :</b></h5>
                                                <p class="text-muted m-b-15 font-13" id="lastEducation">
                                                    Loading
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
                                
                                <div class="row" >
                                    <div class="col-md-4">
                                    <div class="panel panel-color panel-custom">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Modul Diambil</h3>
                                            </div>
                                            <div class="panel-body" style="height: 300px;overflow: auto;">
                                                <div class="row" style="margin-bottom:20px">
                                                    <div class="col-md-3">
                                                        <div class="date">
                                                                <span class="day">11</span><br>
                                                                <span class="month">Nov</span>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-9 tes">
                                                        <p style="margin-bottom:1px"><b>Materi Pertama</b></p>
                                                        <p style="margin-top:0px" >Kategori : Ekosistem Positif</p>
                                                        <p style="margin-top:0px" >Level : Basic</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row" style="margin-bottom:20px">
                                                        <div class="col-md-3">
                                                                <div class="date">
                                                                        <span class="day">12</span><br>
                                                                        <span class="month">Nov</span>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-9 tes">
                                                                <p style="margin-bottom:1px"><b>Materi Kedua</b></p>
                                                                <p style="margin-top:0px" >Kategori : Ekosistem Positif</p>
                                                                <p style="margin-top:0px" >Level : Basic</p>
                                                            </div>
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-4">
                                        <div class="panel panel-color panel-custom">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Tantangan Dijawab</h3>
                                                </div>
                                                <div class="panel-body" style="height: 300px;overflow: auto;">
                                                    <div class="row" style="margin-bottom:20px;">
                                                        <div class="col-md-12" style="text-align:center">
                                                          <img src="assets/images/open-book.png" alt="image" class="" width="200"/>
                                                        </div>
                                                            <div class="col-md-3">
                                                                <div class="date">
                                                                        <span class="day">11</span><br>
                                                                        <span class="month">Nov</span>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-9 tes">
                                                                <p style="margin-bottom:1px"><b>Judul Tantangan 1</b></p>
                                                                <p style="margin-top:0px"> Modul :  Materi Pertama </p>
                                                                <p style="margin-top:0px" >Kategori : Ekosistem Positif</p>
                                                                <p style="margin-top:0px"> Level :  Basic </p>
                                                            </div>
                                                        </div>
                                                    <hr>
                                                    <div class="row" style="margin-bottom:20px;">
                                                            <div class="col-md-12" style="text-align:center">
                                                              <img src="assets/images/open-book.png" alt="image" class="" width="200"/>
                                                            </div>
                                                                <div class="col-md-3">
                                                                    <div class="date">
                                                                            <span class="day">12</span><br>
                                                                            <span class="month">Nov</span>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-9 tes">
                                                                    <p style="margin-bottom:1px"><b>Judul Tantangan 2</b></p>
                                                                    <p style="margin-top:0px"> Modul :  Materi Kedua </p>
                                                                    <p style="margin-top:0px" >Kategori : Ekosistem Positif</p>
                                                                    <p style="margin-top:0px"> Level :  Advanced </p>
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-md-4">
                                            <div class="panel panel-color panel-custom">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">Tantangan Dinilai</h3>
                                                    </div>
                                                    <div class="panel-body" style="height: 300px;overflow: auto;">
                                                            <div class="row" style="margin-bottom:20px;">
                                                                <div class="col-md-3">
                                                                    <div class="date">
                                                                            <span class="day">11</span><br>
                                                                            <span class="month">Nov</span>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-9 tes">
                                                                    <p style="margin-bottom:5px"><b>Tantangan Pertama</b></p>
                                                                    <p style="margin-top:0px" >Rating :</p>
                                                                    <p style="margin-top:0px"> Modul :  Materi Pertama </p>
                                                                    <p style="margin-top:0px" >Kategori : Ekosistem Positif</p>
                                                                    <p style="margin-top:0px"> Level :  Basic </p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row" style="margin-bottom:20px">
                                                                    <div class="col-md-3">
                                                                            <div class="date">
                                                                                    <span class="day">12</span><br>
                                                                                    <span class="month">Nov</span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-9 tes">
                                                                            <p style="margin-bottom:5px"><b>Tantangan Kedua</b></p>
                                                                            <p style="margin-top:-1px" >Rating :</p>
                                                                            <p style="margin-top:0px"> Modul :  Materi Pertama </p>
                                                                            <p style="margin-top:0px" >Kategori : Ekosistem Positif</p>
                                                                            <p style="margin-top:0px"> Level :  Basic </p>
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