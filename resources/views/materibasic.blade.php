@extends('layout.form')
@section('content')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                            <div class="row">
                                    <div  style="margin-top:-20px" class="col-sm-12">
                                        <div class="card-box widget-inline">
                                            <div class="row">
                                                    <div style="text-align:center"class="col-md-12">
                                                    <h1> 
                                                    <b>
                                                    Materi Basic
                                                    </b>
                                                    </h1>
                                                    <p style="margin:10px">Materi basic merupakan materi yang wajib dipelajari sebelum lanjut ke materi advanced</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                
                                <div class="row">
                                        <div class="col-lg-12">
                                                <div class="card-box">
                                                        <div class="bar-widget">
                                                            <div class="table-box">
                                                                <div class="table-detail">
                                                                    <div class="col-md-12">
                                                                        <p style="font-size:25px"> <b>Category</b> </p>
                                                                        <p style="color:#5d9cec">Pilih materi sesuai kategori pada pilihan berikut ini : </p>
                                                                        <div class="col-md-6" style="margin-left:-10px">
                                                                        <select class="selectpicker" data-live-search="true"  data-style="btn-white" id="pilih_kategori_materi" onchange="pilih_kategori()">
                                                                                <option selected value="ekosistem-positif">Penciptaan Ekosistem Positif di Sekolah</option>
                                                                                <option value="trisentra-pendidikan">Tri Sentra Pendidikan</option> 
                                                                                <option value="pengembangan-karakter">Pengembangan Karakter</option>
                                                                                <option value="pembelajaran-riset">Pembelajaran Berbasis Riset</option>
                                                                            </select>
                                                                        </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="list_materi">
                                                    
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
                function pilih_kategori(){
                    $('#list_materi')
                    .find('div')
                    .remove()
                    // alert(document.getElementById('pilih_kategori_materi').value)
                    $(document).ajaxStart(function() { Pace.restart(); });
                    $.ajax({
                            type: 'GET',
                            url :"http://207.148.68.185/api/v1/modul/aspect-grade/"+document.getElementById('pilih_kategori_materi').value+"/basic"
                            }).done(function(data, status){
                                var jumlah_materi = data.length
                                for(var i = 0; i<jumlah_materi;i++){
                                    var judul = data[i].title  
                                var title = judul.replace(/\b\w/g, l => l.toUpperCase())
                                var category = document.getElementById('pilih_kategori_materi').value
                                if(category=="ekosistem-positif"){
                                    var category_materi = "Penciptaan Ekosistem Positif di Sekolah"
                                } else if(category=="trisentra-pendidikan"){
                                    var category_materi = "Tri Sentra Pendidikan"
                                } else if(category=="pengembangan-karakter"){
                                    var category_materi = "Pengembangan Karakter"
                                } else if(category=="pembelajaran-riset"){
                                    var category_materi = "Pembelajaran Berbasis Riset"
                                }
                                $('#list_materi').append(
                                        '<div class="card-box">'+
                                        '<div class="bar-widget">'+
                                            '<div class="table-box">'+
                                                '<div class="table-detail">'+
                                                    '<div class="col-md-12">'+
                                                        '<div class="row">'+
                                                        '<div class="col-md-6">'+
                                                            '<p style="font-size:25px"> <b>'+title+'</b> </p>'+
                                                        '</div>'+
                                                        '<div class="col-md-6">'+
                                                            '<p style="text-align:right;color:#bff88b" id="'+data[i]._id+'">Tes</p>'+
                                                        '</div>'+
                                                    '</div>'+
                                                        '<p style="color:#5d9cec">Category : '+category_materi+'</p>'+
                                                        '<p>'+data[i].description+'</p>'+
                                                    '</div>'+
                                                    '<div class="col-md-12">'+
                                                            // '<button style="float:right" type="button" class="btn btn-default waves-effect waves-light" onclick=enroll("'+data[i]._id+'") href="{{ url("/detailmateri") }}">Pelajari</button>'+
                                                            '<button style="float:right" type="button" class="btn btn-default waves-effect waves-light" onclick=enroll("'+data[i]._id+'")>Pelajari</button>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'
                                    )
                                }

                                var data_id_enrolled = JSON.parse(localStorage.getItem("module_enrolled"))
                                var data_id_answered= JSON.parse(localStorage.getItem("module_answered"))
                                var data_id_scored = JSON.parse(localStorage.getItem("module_scored"))
                                var data_user = JSON.parse(localStorage.getItem("data_user_elearning_gsm"))
                               
                                for(var i = 0; i<jumlah_materi;i++){
                                    var arraycontainsidenrolled = (data_id_enrolled.indexOf(data[i]._id) > -1);
                                    if(arraycontainsidenrolled){
                                        document.getElementById(data[i]._id).innerHTML = "Sudah Mengambil Modul"
                                    }

                                    var arraycontainsidanswered = (data_id_answered.indexOf(data[i]._id) > -1);
                                    if(arraycontainsidanswered){
                                        document.getElementById(data[i]._id).innerHTML = "Tantangan Telah Dikerjakan"
                                    }

                                    var arraycontainsidscored = (data_id_scored.indexOf(data[i]._id) > -1);
                                    if(arraycontainsidscored){
                                        document.getElementById(data[i]._id).innerHTML = "Tantangan Sudah Dinilai"
                                    }
                                }
                            }).fail(function(data,status){
                                swal("Terjadi Kesalahan", "Cek koneksi internet Anda dan ulangi");
                                console.log(status)
                            })
                }
                    $(document).ready(function(){
                        var data_user = JSON.parse(localStorage.getItem("data_user_elearning_gsm"))
                        var banyak_quiz = data_user.quiz.length
                        var data_id_module = ''
                        var module_answered = ''
                        var module_scored = ''
                        for(var i = 0; i<banyak_quiz ; i++){
                            if(data_user.quiz[i].flag == "enrolled"){
                            data_id_module += '"'
                            data_id_module += data_user.quiz[i].modul_id
                            data_id_module += '"'
                            if(i==banyak_quiz-1){
                                data_id_module += ''
                            }else{
                                data_id_module += ','
                            }
                            }

                            if(data_user.quiz[i].flag == "answered"){
                                module_answered += '"'
                                module_answered += data_user.quiz[i].modul_id
                                module_answered += '"'
                                if(i==banyak_quiz-1){
                                module_answered += ''
                                }else{
                                module_answered += ','
                            }
                            }

                            if(data_user.quiz[i].flag == "scored"){
                                module_scored += '"'
                                module_scored += data_user.quiz[i].modul_id
                                module_scored += '"'
                                if(i==banyak_quiz-1){
                                    module_scored += ''
                                }else{
                                    module_scored += ','
                            }
                            }
                        }
                        
                        // Ini untuk modul enrolled
                        var data_id_module2 = data_id_module.replace(/^[,\s]+|[,\s]+$/g, '').replace(/,[,\s]*,/g, ',');
                        var data_id_module3 = '['+data_id_module2+']'
                        var data_id_module4 = JSON.parse(data_id_module3)
                        localStorage.setItem("module_enrolled", JSON.stringify(data_id_module4))

                        // Ini untuk modul answered 
                        var module_answered2 = module_answered.replace(/^[,\s]+|[,\s]+$/g, '').replace(/,[,\s]*,/g, ',');
                        var module_answered3 = '['+module_answered2+']'
                        var module_answered4 = JSON.parse(module_answered3)
                        localStorage.setItem("module_answered", JSON.stringify(module_answered4))

                        // Ini untuk modul scored 
                        var module_scored2 = module_scored.replace(/^[,\s]+|[,\s]+$/g, '').replace(/,[,\s]*,/g, ',');
                        var module_scored3 = '['+module_scored2+']'
                        var module_scored4 = JSON.parse(module_scored3)
                        localStorage.setItem("module_scored", JSON.stringify(module_scored4))


                        $(document).ajaxStart(function() { Pace.restart(); });
                        $.ajax({
                            type: 'GET',
                            url :"http://207.148.68.185/api/v1/modul/aspect-grade/ekosistem-positif/basic"
                            }).done(function(data, status){
                                var jumlah_materi = data.length
                               
                                
                                for(var i = 0; i<jumlah_materi;i++){
                                var judul = data[i].title  
                                var title = judul.replace(/\b\w/g, l => l.toUpperCase())
                                var category = document.getElementById('pilih_kategori_materi').value
                                if(category=="ekosistem-positif"){
                                    var category_materi = "Penciptaan Ekosistem Positif di Sekolah"
                                } else if(category=="trisentra-pendidikan"){
                                    var category_materi = "Tri Sentra Pendidikan"
                                } else if(category=="pengembangan-karakter"){
                                    var category_materi = "Pengembangan Karakter"
                                } else if(category=="pembelajaran-riset"){
                                    var category_materi = "Pembelajaran Berbasis Riset"
                                }
                                    $('#list_materi').append(
                                        '<div class="card-box">'+
                                        '<div class="bar-widget">'+
                                            '<div class="table-box">'+
                                                '<div class="table-detail">'+
                                                    '<div class="col-md-12">'+
                                                    '<div class="row">'+
                                                        '<div class="col-md-6">'+
                                                            '<p style="font-size:25px"> <b>'+title+'</b> </p>'+
                                                        '</div>'+
                                                        '<div class="col-md-6">'+
                                                        '<p style="text-align:right;color:#bff88b" id="'+data[i]._id+'"></p>'+
                                                        '</div>'+
                                                    '</div>'+
                                                        '<p style="color:#5d9cec">Category : '+category_materi+'</p>'+
                                                        '<p>'+data[i].description+'</p>'+
                                                    '</div>'+
                                                    '<div class="col-md-12">'+
                                                            '<button style="float:right" type="button" class="btn btn-default waves-effect waves-light" onclick=enroll("'+data[i]._id+'") href="{{ url("/detailmateri") }}">Pelajari</button>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'
                                    )
                                }

                                var data_user = JSON.parse(localStorage.getItem("data_user_elearning_gsm"))
                                var banyak_quiz = data_user.quiz.length
                                for(var i =0 ; i <banyak_quiz ; i++){
                                var status = data_user.quiz[i].flag
                                if(status == "enrolled"){
                                    var status2 = "Modul telah di ambil"
                                } 
                                // document.getElementById(data_user.quiz[i]._id).innerHTML = status2
                                }
                                
                            }).fail(function(data,status){
                                swal("Terjadi Kesalahan", "Cek koneksi internet Anda dan ulangi");
                                console.log(status)
                            })
                    })
                    </script>
                    <script>
                    function enroll(id_modul){
                    var data_diri = JSON.parse(localStorage.getItem("data_user_elearning_gsm"))
                    var id_user = data_diri._id
                    var data = {
                        "user_id" : id_user, 
                        "modul_id" : id_modul
                    }
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
                    console.log(token_user)
                    $.ajax({
                            type: 'POST',
                            url :"http://207.148.68.185/api/v1/users/modul/enroll", 
                            headers: {
                                        "Authorization" : "Bearer "+token_user,
                                        "Content-Type": "application/json",
                                        "Accept"      : "application/json"
                                    },
                            data : JSON.stringify(data)
                            }).done(function(data, status){
                                console.log("This is respon from enroll ")
                                console.log(data)
                                swal("Membuka Materi");
                                localStorage.setItem('id_materi', id_modul)
                                window.location="detailmateri"
                                $.ajax({
                                    type: 'GET', 
                                    url : "http://207.148.68.185/api/v1/users/quiz",
                                    headers: {
                                        "Authorization" : "Bearer "+token_user,
                                        "Content-Type": "application/json",
                                        "Accept"      : "application/json"
                                    }
                                })
                                .done(function(data,status){
                                    console.log(data)
                                    localStorage.setItem("data_user_elearning_gsm",JSON.stringify(data.data) )

                                })
                            }).fail(function(data, status){
                                swal("Terjadi Kesalahan", "Cek koneksi internet Anda dan ulangi");
                            })
                    }
                    </script>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        @endsection