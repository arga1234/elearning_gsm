@extends('layout.form')
@section('content')
<link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

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
                                                <h3 class="panel-title">Update Profile</h3>
                                            </div>
                                            <div class="panel-body">                                         
                                                    <div class="col-md-4">
                                                        <h5><b>Nama lengkap :</b></h5>
                                                        <input type="text" class="form-control" id="nama" placeholder="Inputkan Nama">            
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5><b>Tempat lahir :</b></h5>
                                                        <input type="text" id="tempat_lahir" class="form-control">            
                                                    </div>
                                                    <div class="col-md-4">
                                                            <h5><b>Tanggal lahir :</b></h5>
                                                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">                                                    </div>
                                                    <div class="col-md-4">
                                                            <h5><b>Sudah Pernah ikut Workshop GSM ? </b></h5>
                                                            <select class="selectpicker" data-live-search="true"  data-style="btn-white" id="workshop">
                                                                <option selected disabled>Please Select</option>
                                                                <option value=true>Sudah Pernah</option>
                                                                <option value=false>Belum Pernah</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                            <h5><b>Gender :</b></h5>
                                                            <select class="selectpicker" data-live-search="true"  data-style="btn-white" id="gender">
                                                                <option selected disabled>Please Select</option>
                                                                <option value="Pria">Pria</option>
                                                                <option value="Wanita">Wanita</option>
                                                            </select>         
                                                    </div>
                                                    <div class="col-md-4">
                                                            <h5><b>Posisi di sekolah :</b></h5>
                                                            <input type="text" class="form-control" id="posisi">            
                                                    </div>
                                                    <div class="col-md-4">
                                                            <h5><b>Pendidikan terakhir :</b></h5>
                                                            <select class="selectpicker" data-live-search="true"  data-style="btn-white" id="pendidikan">
                                                                <option selected >Please Select</option>
                                                                <option value="SMA">SMA</option>
                                                                <option value="S1">S1</option>
                                                                <option value="S2">S2</option>
                                                                <option value="S3">S3</option>
                                                            </select>                                                               </div>
                                                    <div class="col-md-4">
                                                            <h5><b>Nomor WA/HP :</b></h5>
                                                            <input type="text" class="form-control" id="no_wa">            
                                                        </div>
                                                        <input type="text" id="id" style="display:none">
                                                    <div class="col-md-4">
                                                        </div>
                                                
                                          
                                           <div class="col-md-12">
                                                <button style="float:right" type="button" class="btn btn-default waves-effect waves-light" id="update">Update</button>
                                            </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                            <div class="panel panel-color panel-custom">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Foto Profil Anda </h3>
                                                </div>
                                                <div class="panel-body">
                                                <div style="text-align:center" class="col-md-4">
                                                    <img  src="assets/images/avatar-2.jpg" alt="image" class="img-rounded" width="200"/>  
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="row">
                                                            <div style="margin-top:20px" class="col-md-8">
                                                                    <h5><b>Ubah Foto Profil</b></h5>
                                                                    <input type="file" class="filestyle" data-icon="false" data-buttonname="btn-white">
                                                                </div>
                                                                <div style="margin-top:20px" class="col-md-8">
                                                                        <h5><b>Hapus Foto Profil</b></h5>
                                                                        <button style="float:left" type="button" class="btn btn-default waves-effect waves-light">Delete</button>
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
                    document.getElementById('nama').value = data_user_profile.user.name
                    document.getElementById('tempat_lahir').value = data_user_profile.user.detail.birthplace
                    document.getElementById('datepicker-autoclose').value = data_user_profile.user.detail.birthdate
                    document.getElementById('posisi').value = data_user_profile.user.detail.position
                    document.getElementById('no_wa').value = data_user_profile.user.detail.phone
                    $('#workshop').val(data_user_profile.user.attendedWorkshop);
                    $('#workshop').change();
                    $('#workshop').selectpicker("refresh");

                    $('#pendidikan').val(data_user_profile.user.detail.lastEducation);
                    $('#pendidikan').change();
                    $('#pendidikan').selectpicker("refresh");

                    $('#gender').val(data_user_profile.user.detail.gender);
                    $('#gender').change();
                    $('#gender').selectpicker("refresh");

                })
                   .fail(function(data, status){
                    console.log(status)
                    swal("Terjadi Kesalahan", "Cek koneksi internet Anda dan ulangi");

                })
                   
                })

            </script>
                    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
                    <script src="{{asset('assets/plugins/timepicker/bootstrap-timepicker.js')}}"></script>
                    <script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
                    <script src="{{asset('assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>
                    <script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>    
                    <script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
                    <script src="{{asset('assets/pages/jquery.form-pickers.init.js')}}"></script>
                    <script src="{{asset('assets/plugins/bootstrap-sweetalert/sweet-alert.min.js')}}"></script>
                    <script src="{{asset('assets/pages/jquery.sweet-alert.init.js')}}"></script>
        @endsection