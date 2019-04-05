@extends('layout.basiclayout')
@section('content')

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
    <div class="panel-heading"> 
        <h3 class="text-center"> Login ke <strong class="text-custom">E-Learning GSM</strong> </h3>
    </div> 


    <div class="panel-body">
    <form class="form-horizontal m-t-20" action="index.html">
        
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Username">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="password" required="" placeholder="Password">
            </div>
        </div>
        
        <div class="form-group text-center m-t-40">
            <div class="col-xs-12">
                <button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit">Login</button>
            </div>
        </div>

        <div class="form-group m-t-30 m-b-0">
            <div class="col-sm-12">
                <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Lupa Password ?</a>
            </div>
        </div>
    </form> 
    
    </div>   
    </div>                              
        <div class="row">
        <div class="col-sm-12 text-center">
            <p>Belum punya akun ? <a href="page-register.html" class="text-primary m-l-5"><b>Daftar Sekarang</b></a></p>
                
            </div>
    </div>
    
</div>




<script>
    var resizefunc = [];
</script>



@endsection