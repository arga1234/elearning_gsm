@extends('layout.basiclayout')
@section('content')

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

<div class="account-pages"></div>
<div class="clearfix"></div>


<div class="container-alt">
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="wrapper-page signup-signin-page">
            <div class="card-box">
                <div class="panel-heading">
                    <h3 class="text-center">Halaman pendaftaran <strong class="text-custom">E-Learning GSM</strong></h3>
                    <p style="text-align:Center">Isilah form di bawah ini sesuai dengan data diri anda</p>
                </div>

                <div class="panel-body">
                    <div style="margin-top:20px" class="row">

                        <div style="margin-top:-55px" class="col-lg-6">
                            <div class="p-20">
                              
                                <form class="form-horizontal m-t-20" action="index.html">
                                    <div class="form-group ">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" required id="nama" placeholder="Nama" value="">
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="email" required id="email" placeholder="Email" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" required id="password" placeholder="Password" value="">
                                            </div>
                                        </div>

                                    <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" required id="repeat_password" placeholder="Ulangi Password" value="" >
                                            </div>
                                        </div> 
            
                                </form>
                            </div>
                        </div>
                        
                        
                        <div style="margin-top:-60px"  class="col-lg-6">
                            <div class="p-20">
                                <form class="form-horizontal m-t-20" action="index.html">                                    
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                                <p>Kabupaten/Kota Sekolah Anda</p>
                                                <select name="daerah[]" id="my_select" data-live-search="true" data-style="btn-white" class="selectpicker"><option value="" selected disabled>Please select</option>
                                                </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <div class="col-xs-12">
                                                    <p>Pilih Sekolah Anda</p>
                                                    <select name="sekolah[]"  id="sekolah" data-live-search="true" data-style="btn-white" class="selectpicker"><option value="" selected disabled>Please select</option>
                                                    </select>
                                                    <input type="text" style="display:none" id="propinsi">
                                                    <input type="text" style="display:none" id="kode_kab_kota">
                                                    <input type="text" style="display:none" id="kabupaten_kota">
                                                    <input type="text" style="display:none" id="kode_kec">
                                                    <input type="text" style="display:none" id="kecamatan">
                                                    <input type="text" style="display:none" id="npsn">
                                                    <input type="text" style="display:none" id="bentuk">
                                                    <input type="text" style="display:none" id="status">
                                                    <input type="text" style="display:none" id="lintang">
                                                    <input type="text" style="display:none" id="alamat_jalan">
                                                    <input type="text" style="display:none" id="bujur">
                                                    <input type="text" style="display:none" id="nama_sekolah">

                                                </div>
                                        </div>

                                    <div class="form-group">
                                            <div class="col-xs-12">
                                                <p style="font-size:10px">Apa Anda sudah pernah mengikuti workshop yang diadkan GSM secara langsung ?</p>
                                                <div style="margin-top:-10px;margin-left:-10px" class="radio radio-custom"> 
                                                    <div class="col-md-2">
                                                        <input type="radio" name="workshop" id="radio1" value=true>
                                                        <label for="radio1">Iya</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                            <input type="radio" name="workshop" id="radio2" value=false>
                                                            <label for="radio2">Tidak</label>
                                                    </div>
                                                </div>
                                          
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group text-right m-t-20 m-b-0">
                                <div style="text-align:center" class="col-xs-12">
                                    <button  class="btn btn-info text-uppercase waves-effect waves-light w-sm" id="daftar">
                                        Daftar
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
</div>


<script>
    var resizefunc = [];
</script>

<script>

    $(document).ready(function(){
    $.get("http://jendela.data.kemdikbud.go.id/api/index.php/cwilayah/wilayahKabGet", function(data, status){
        // console.log(data.data)
        var banyak_data = data.data.length;
          var daerah ="";
          for (var i = 0; i < banyak_data; i++) {
            daerah += '<option tes="tai" id ="'+data.data[i]["mst_kode_wilayah"]+'"'+ 'value="'+data.data[i]["nama"] +'"'+'>' +data.data[i]["nama"]+'</option>'
          }
          $("select[name='daerah[]']").append(daerah);
          $("select[name='daerah[]']").selectpicker("refresh");

    })
    $("#my_select").change(function() {
    var id = $(this).children(":selected").attr("id");
    var id_mst_kode_wilayah = id.replace(/\s/g, "")
    sekolah(id_mst_kode_wilayah)
    })

    $("#sekolah").change(function() {
    document.getElementById('propinsi').value = $(this).children(":selected").attr("propinsi");
    document.getElementById('kode_kab_kota').value = $(this).children(":selected").attr("kode_kab_kota");
    document.getElementById('kabupaten_kota').value = $(this).children(":selected").attr("kabupaten_kota");
    document.getElementById('kode_kec').value = $(this).children(":selected").attr("kode_kec");
    document.getElementById('kecamatan').value = $(this).children(":selected").attr("kecamatan");
    document.getElementById('npsn').value = $(this).children(":selected").attr("npsn");
    document.getElementById('nama_sekolah').value = $(this).children(":selected").attr("value");
    document.getElementById('bentuk').value = $(this).children(":selected").attr("bentuk");
    document.getElementById('status').value = $(this).children(":selected").attr("status");
    document.getElementById('alamat_jalan').value = $(this).children(":selected").attr("alamat_jalan");
    document.getElementById('lintang').value = $(this).children(":selected").attr("lintang");
    document.getElementById('bujur').value = $(this).children(":selected").attr("bujur");
    })
    })
</script>
<script>
    function sekolah(id){
        var url = "http://jendela.data.kemdikbud.go.id/api/index.php/Csekolah/detailSekolahGET?mst_kode_wilayah="+id+"&bentuk=sd"
        console.log(url)
        $.get(url, function(data, status){
            $("#sekolah")
            .find('option')
            .remove()
            $("#sekolah").selectpicker("refresh");

          var banyak_data = data.data.length;
          var sekolah ="<option  selected disabled>Please select</option>";
          for (var i = 0; i < banyak_data; i++) {
            sekolah += '<option id ="'+i+'"'+ 
            'value="'+data.data[i]["sekolah"] +'"'+
            'propinsi="'+data.data[i]["propinsi"]+'"'+
            'kode_kab_kota="'+data.data[i]["kode_kab_kota"]+'"'+
            'kabupaten_kota="'+data.data[i]["kabupaten_kota"]+'"'+
            'kode_kec="'+data.data[i]["kode_kec"]+'"'+
            'kecamatan="'+data.data[i]["kecamatan"]+'"'+
            'npsn="'+data.data[i]["npsn"]+'"'+
            'bentuk="'+data.data[i]["bentuk"]+'"'+
            'status="'+data.data[i]["status"]+'"'+
            'alamat_jalan="'+data.data[i]["alamat_jalan"]+'"'+
            'lintang="'+data.data[i]["lintang"]+'"'+
            'bujur="'+data.data[i]["bujur"]+'"'+
            '>' +data.data[i]["sekolah"]+
            '</option>'
          }
          $("select[name='sekolah[]']").append(sekolah);
          $("select[name='sekolah[]']").selectpicker("refresh");
        });
    }
</script>

        {{-- Sweet Alerts --}}
        <script src="{{asset('assets/plugins/bootstrap-sweetalert/sweet-alert.min.js')}}"></script>
        <script src="{{asset('assets/pages/jquery.sweet-alert.init.js')}}"></script>

@endsection