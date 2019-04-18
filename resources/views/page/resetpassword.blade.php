@extends('layout.basiclayout')
@section('content')

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">


<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
    <div class="panel-heading" style="margin-bottom:-20px"> 
        <h3 class="text-center"> Halaman <strong class="text-custom">Lupa Password</strong> </h3>
        <p style="text-align:center;font-size:12px">Silahkan kirimkan email Anda dan cek untuk merubah password </p>
    </div> 


    <div class="panel-body">
    <form class="form-horizontal m-t-20" enctype="multipart/form-data" method="post" name="loginform">
        
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" id="email" name="email" placeholder="Email" value="">
            </div>
        </div>

        <div class="form-group text-center m-t-40">
            <div class="col-xs-12" style="margin-top:-20px">
                <button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit" id="ubahpassword">Ubah Password</button>
            </div>
        </div>

    </form>
    <div></div> 
    
    </div>   
    </div>                              
        <div class="row">
        <div class="col-sm-12 text-center">
            <p>Belum punya akun ? <a href="{{ url('/daftar') }}" class="text-primary m-l-5"><b>Daftar Sekarang</b></a></p>
                
            </div>
    </div>
    
</div>




<script>
    var resizefunc = [];
</script>

<script>
    var form = document.forms.namedItem("loginform")
    console.log(form)
    form.addEventListener('submit', function(ev) {

    oData = new FormData(form);
    oData.append("CustomField", "This is some extra data");
    console.log(oData)
    var oReq = new XMLHttpRequest();
    oReq.open("POST", "http://localhost/elearning/public/api/v1/password/create", true);
    oReq.onload = function(oEvent) {
        if (oReq.status == 200) {
            console.log("sukses")
            // window.location="daftar"
        } else {
        console.log("Maaf Gagal")
        }
    };

    oReq.send(oData);
    ev.preventDefault();
    }, false);
</script>

{{-- Sweet Alerts --}}
<script src="{{asset('assets/plugins/bootstrap-sweetalert/sweet-alert.min.js')}}"></script>
<script src="{{asset('assets/pages/jquery.sweet-alert.init.js')}}"></script>




@endsection