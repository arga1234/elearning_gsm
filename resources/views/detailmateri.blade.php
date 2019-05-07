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
                                                <h3 class="panel-title" id="materi"></h3>
                                            </div>
                                            <div class="panel-body">
                                                    <div class="col-lg-12"> 
                                                            <ul class="nav nav-tabs tabs">
                                                                <li class="active tab">
                                                                    <a href="#deskripsi" data-toggle="tab" aria-expanded="false"> 
                                                                        <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                                                        <span class="hidden-xs">Deskripsi</span> 
                                                                    </a> 
                                                                </li> 
                                                                <li class="tab"> 
                                                                    <a href="#you_tube" data-toggle="tab" aria-expanded="false"> 
                                                                        <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                                                        <span class="hidden-xs">Video</span> 
                                                                    </a> 
                                                                </li> 
                                                                <li class="tab"> 
                                                                    <a href="#pdf" data-toggle="tab" aria-expanded="true"> 
                                                                        <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                                                        <span class="hidden-xs">PDF</span> 
                                                                    </a> 
                                                                </li> 
                                                                <li class="tab"> 
                                                                    <a href="#gambar" data-toggle="tab" aria-expanded="false"> 
                                                                        <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                                                        <span class="hidden-xs">Gambar</span> 
                                                                    </a> 
                                                                </li> 
                                                                <li class="tab"> 
                                                                    <a href="#tantangan" data-toggle="tab" aria-expanded="false"> 
                                                                        <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                                                        <span class="hidden-xs">Tantangan</span> 
                                                                    </a> 
                                                                </li>
                                                            </ul> 
                                                            <div class="tab-content"> 
                                                                <div class="tab-pane active" id="deskripsi"> 
                                                                </div> 
                                                                <div class="tab-pane" id="you_tube">      
                                                               </div> 
                                                                <div  class="tab-pane" id="pdf">
                                                                </div> 
                                                                <div class="tab-pane" id="gambar">
                                                                </div>
                                                                <div class="tab-pane" id="tantangan">
                                                                <div id="tantangan_text">

                                                                </div>
                                                                <div style="margin-top:20px">
                                                                        <form class="form-horizontal m-t-20" enctype="multipart/form-data" method="post" name="upload_tantangan_modul">
                                                                            <label class="control-label">Upload Tantangan</label>
                                                                            <p>Pilih beberapa foto secara langsung, lalu upload</p>
                                                                            <input type="file" multiple class="filestyle" data-buttonname="btn-white" name="image[]" id="foto_tantangan">

                                                                            <label class="control-label">Deskripsi</label>
                                                                            <p>Jelaskan secara singkat tentang jawaban dari tantangan ini</p>
                                                                            <textarea type="text" class="form-control" name="deskripsi" id="deskripsi"></textarea>

                                                                            <input type="text" id="id_user" name="user_id" style="display:none">
                                                                            <input type="text" id="id_modul" name="modul_id" style="display:none">
                                                                            <div style="text-align:right">
                                                                            <button style="text-align:right;margin-top:20px;margin-bottom:20px" type="submit" class="btn btn-default waves-effect waves-light" id="submit_tantangan">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                        
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
                var id_modul = localStorage.getItem("id_materi")    
                document.getElementById('id_modul').value = id_modul
                var id_user = JSON.parse(localStorage.getItem('data_user_elearning_gsm'))
                document.getElementById('id_user').value = id_user._id
                
                $(document).ajaxStart(function() { Pace.restart(); });
                $.ajax({
                type: 'GET',
                url :"http://207.148.68.185/api/v1/modul/"+id_modul
                }).done(function(data, status){

                    document.getElementById('materi').innerHTML = 'Materi '+data.title
                    console.log(data)
                    $('#deskripsi').append(
                    '<p>'+data.description+'</p>'
                    )

                    $('#tantangan_text').append(
                        '<p>'+data.task+'</p>'
                    )

                    

                    var jumlah_data_video = data.video.length
                    console.log(jumlah_data_video)
                    for(var i = 0; i < jumlah_data_video; i++){
                        var url_string = data.video[i].url
                        var url = new URL(url_string);
                        var v = url.searchParams.get("v");
                        
                        var ke= ["Pertama", "Kedua", "Ketiga", "Kempat", "Kelima", "Keenam", "Ketujuh", "Kedelapan", "Kesembilan", "Kesepuluh"]
                        $('#you_tube').append(
                        
                            '<br>'+
                            '<p>Video '+ ke[i] +'</p>'+
                            '<br>'+
                            '<iframe src="https://www.youtube.com/embed/'+v+'" width="100%" height="500" frameborder="0" allowfullscreenid="you_tube"></iframe>'
                       
                        )
                    }
                    console.log(v)
                    var jumlah_data_pdf = data.document.length
                    for(var i= 0; i< jumlah_data_pdf;i++){
                        var ke= ["Pertama", "Kedua", "Ketiga", "Kempat", "Kelima", "Keenam", "Ketujuh", "Kedelapan", "Kesembilan", "Kesepuluh"]
                        $('#pdf').append(
                        
                            '<br>'+
                            '<p>PDF '+ ke[i] +'</p>'+
                            '<br>'+
                            '<iframe src="'+data.document[i].url+'" width="100%" height="500"></iframe>'
                        
                        )
                    }

                    var jumlah_data_gambar = data.image.length
                    for(var i = 0; i < jumlah_data_gambar;i++){
                        var ke= ["Pertama", "Kedua", "Ketiga", "Kempat", "Kelima", "Keenam", "Ketujuh", "Kedelapan", "Kesembilan", "Kesepuluh"]
                        $('#gambar').append(
                            
                            '<br>'+
                            '<p>Gambar '+ ke[i] +'</p>'+
                            '<br>'+
                            '<img src="http://207.148.68.185/storage/images/'+data.image[i].filename+'" alt="image" class="img-responsive img-rounded" width="100%"/>'
                            
                        )
                    }
                    
                }).fail(function(data, status){
                    swal("Terjadi Kesalahan", "Cek koneksi internet Anda dan ulangi");
                    console.log(data)
                    console.log(status)
                })
            })

            var form = document.forms.namedItem("upload_tantangan_modul");
            form.addEventListener('submit', function(ev) {
            oData = new FormData(form);
            oData.append("CustomField", "This is some extra data");

            var oReq = new XMLHttpRequest();
            oReq.open("POST", "http://207.148.68.185/api/v1/modul/tantangan/jawab", true);
            oReq.onload = function(oEvent) {
                if (oReq.status == 200) {
                    swal("Selamat", "Anda berhasil mensubmit jawaban untuk tantangan ini ")
            
                } else {
                    swal("Maaf", "Terjadi kesalahan, mohon cek koneksi internet Anda")

                }
            };

            oReq.send(oData);
            ev.preventDefault();
            }, false);
            </script>


            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        @endsection