@extends('layout.basiclayout')
@section('content')

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">


<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
    <div class="panel-heading"> 
        <h3 class="text-center"> Login ke <strong class="text-custom">E-Learning GSM</strong> </h3>
    </div> 


    <div class="panel-body">
    <form class="form-horizontal m-t-20" enctype="multipart/form-data" method="post" name="loginform">
        
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" id="email" placeholder="Email" value="">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="password" required="" id="password" placeholder="Password" value="">
            </div>
        </div>
        
        <div class="form-group text-center m-t-40">
            <div class="col-xs-12">
                <button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="button" id="login">Login</button>
            </div>
        </div>

        <div class="form-group m-t-30 m-b-0">
            <div class="col-sm-12">
                <a href="{{ url('/resetpassword') }}" class="text-dark"><i class="fa fa-lock m-r-5"></i> Lupa Password ?</a>
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

{{-- <script>
var form = document.forms.namedItem("loginform");
form.addEventListener('submit', function(ev) {

      oData = new FormData(form);

  oData.append("CustomField", "This is some extra data");

  var oReq = new XMLHttpRequest();
  oReq.open("POST", "elearning.test/api/v1/login", true);
  oReq.onload = function(oEvent) {
    if (oReq.status == 200) {
        console.log("sukses")
 
    } else {
      console.log("Maaf Gagal")
    }
  };

  oReq.send(oData);
  ev.preventDefault();
}, false);
</script> --}}

{{-- Sweet Alerts --}}
<script src="{{asset('assets/plugins/bootstrap-sweetalert/sweet-alert.min.js')}}"></script>
<script src="{{asset('assets/pages/jquery.sweet-alert.init.js')}}"></script>




@endsection