
/**
* Theme: Ubold Admin Template
* Author: Coderthemes
* SweetAlert
*/



!function ($) {
    "use strict";
    

    var SweetAlert = function () {
    };

    //examples
    SweetAlert.prototype.init = function () {
        

        //Basic
        $('#sa-basic').click(function () {
            swal("Here's a message!");
        });

        //A title with a text under
        $('#sa-title').click(function () {  
            swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis")
        });

        $('#update').click(function(){
            var id = document.getElementById('id').value
            var data = {
                "name" : document.getElementById('nama').value, 
                "attendedWorkshop" : document.getElementById('workshop').value, 
                "detail" : {
                    "birthplace" : document.getElementById('tempat_lahir').value,
                    "birthdate" : document.getElementById("datepicker-autoclose").value,
                    "gender" : document.getElementById('gender').value,
                    "position" : document.getElementById('posisi').value,
                    "lastEducation" : document.getElementById('pendidikan').value,
                    "phone" : document.getElementById('no_wa').value
                }
            } 
            var data_2 = JSON.stringify(data)
            console.log(data_2)
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
        

            $(document).ajaxStart(function() { Pace.restart(); });
            $.ajax({
                type: 'POST',
                url: 'http://localhost/elearning/public/api/v1/user/'+id,
                headers: {
                    "Authorization" : "Bearer "+token_user,
                    "Content-Type": "application/json",
                    "Accept"      : "application/json"
                },
                data: data_2
                })
                .done(function(data, status){
                    console.log(status)
                    if(status){
                        swal("Bagus", "Data sudah Anda diperbarui")
                    }
                })
                .fail(function(data, status){
                    console.log(status)
                    if(status){
                        swal("Terjadi Kesalahan", "Pastikan koneksi internet Anda berjalan dengan benar")
                    }
                })
        })

        $('#lupapassword').click(function(){
            $(document).ajaxStart(function() { Pace.restart(); });
            if(document.getElementById('email').value == ""){
                swal("Isilah field email yang ada")
            }else{
            var datas = {
                "email" : document.getElementById('email').value
            }
            var data_2 = JSON.stringify(datas)
            $.ajax({
                type: 'POST',
                url: 'http://localhost/elearning/public/api/v1/password/create',
                data: data_2
                })
                .done(function(data, status){
                    // console.log(data)
                    console.log(status)
                    if(status){
                        swal("Cek Email", "Kami sudah mengirimkan link ubah pssword ke email Anda")
                    }
                })
                .fail(function(data, status){
                    // console.log(data)
                    console.log(status)
                    if(status){
                        swal("Terjadi Kesalahan", "Pastikan koneksi internet dan alamat email Anda benar")
                    }
                })
            }
            
        })

        $('#login').click(function(){
         
            // swal("Maaf", "Isilah semua data yang ada")
            if(document.getElementById('email').value == "" ||
            document.getElementById('password').value == ""
            ){
                // alert("Hello")
                swal("Isilah semua field yang ada")
            }else{
               var data = {
                    email : document.getElementById('email').value,
                    password : document.getElementById('password').value,
                }
                $(document).ajaxStart(function(){ Pace.restart() });
                $.ajax({
                    
                    type: 'POST',
                    url: 'http://localhost/elearning/public/api/v1/login',
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Accept"      : "application/x-www-form-urlencoded"
                    },
                    data: data
                    })
                    .done(function(data, status){
                     swal("Selamat", "Anda berhasil login")
                     console.log(data)
                    
                     localStorage.setItem('data_user_elearning_gsm', JSON.stringify(data.data))
                     setCookie("token_login_user_gsm", data.token, 1)
                     function setCookie(cname,cvalue,exdays) {
                     var d = new Date();
                     d.setTime(d.getTime() + (exdays*24*60*60*1000));
                     var expires = "expires=" + d.toGMTString();
                     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
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
                    //  var token_user=getCookie("token_login_user_gsm")
                    //  console.log(token_user)
                     window.location="elearning"

                    })
                    .fail(function(data,status){
                        console.log(data)
                        console.log(status)
                        swal("Maaf", "Terjadi kesalahan, silahkan cek koneksi internet Anda")

                    })


            }
        })

        $('#daftar').click(function () {
            $(document).ajaxStart(function() { Pace.restart(); });
            if(document.getElementById('nama').value=="" || 
               document.getElementById('email').value=="" || 
               document.getElementById('password').value=="" || 
               document.getElementById('repeat_password').value=="" ||
               document.getElementById('nama_sekolah').value=="" ||
               $('input[name=workshop]:checked').val() == undefined
            ){
                swal("Maaf", "Isilah semua data yang ada")
            }else{
                if(document.getElementById('password').value==document.getElementById('repeat_password').value){
                    var workshop = $('input[name=workshop]:checked').val()
                    var data = {
                        name : document.getElementById('nama').value, 
                        password : document.getElementById('password').value, 
                        c_password :document.getElementById('repeat_password').value, 
                        email : document.getElementById('email').value, 
                        attendedWorkshop : workshop, 
                        school : {
                            propinsi: document.getElementById('propinsi').value ,
                            kode_kab_kota: document.getElementById('kode_kab_kota').value   ,
                            kabupaten_kota: document.getElementById('kabupaten_kota').value ,
                            kode_kec: document.getElementById('kode_kec').value ,
                            kecamatan: document.getElementById('kecamatan').value  ,
                            npsn: document.getElementById('npsn').value ,
                            sekolah: document.getElementById('nama_sekolah').value  ,
                            bentuk: document.getElementById('bentuk').value,
                            status: document.getElementById('status').value ,
                            alamat_jalan: document.getElementById('alamat_jalan').value,
                            lintang: document.getElementById('lintang').value,
                            bujur: document.getElementById('bujur').value
                        }
                        }
                        $.ajax({
                            type: 'POST',
                            url: 'http://localhost/elearning/public/api/v1/register',
                            headers: {
                                "Content-Type": "application/x-www-form-urlencoded",
                                "Accept"      : "application/x-www-form-urlencoded"
                            },
                            data: data
                            })
                            .done(function(data, status){
                                console.log(data)
                                console.log(status)
                             swal("Selamat", "Anda berhasil mendaftar, silahkan masukan email dan password di halaman login ")
                          
                            })
                            .fail(function(data,status){
                                console.log(data)
                                console.log(status)
                                swal("Maaf", "Terjadi kesalahan, silahkan cek koneksi internet Anda")

                            })
                }else{
                    swal("Maaf", "Masukan untuk Password dan Ulangi Password tidak sama, tolong perbaiki kembali")
                }
            }

            
        });

    

        //Success Message
        $('#sa-success').click(function () {
            swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis", "success")
        });

        //Warning Message
        $('#sa-warning').click(function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-warning',
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function () {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            });
        });

        //Parameter
        $('#sa-params').click(function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function (isConfirm) {
                if (isConfirm) {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        });

        //Custom Image
        $('#sa-image').click(function () {
            swal({
                title: "Sweet!",
                text: "Here's a custom image.",
                imageUrl: "assets/plugins/bootstrap-sweetalert/thumbs-up.jpg"
            });
        });

        //Auto Close Timer
        $('#sa-close').click(function () {
            swal({
                title: "Auto close alert!",
                text: "I will close in 2 seconds.",
                timer: 2000,
                showConfirmButton: false
            });
        });

        //Primary
        $('#primary-alert').click(function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "info",
                showCancelButton: true,
                cancelButtonClass: 'btn-white btn-md waves-effect',
                confirmButtonClass: 'btn-primary btn-md waves-effect waves-light',
                confirmButtonText: 'Primary!'
            });
        });

        //Info
        $('#info-alert').click(function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "info",
                showCancelButton: true,
                cancelButtonClass: 'btn-white btn-md waves-effect',
                confirmButtonClass: 'btn-info btn-md waves-effect waves-light',
                confirmButtonText: 'Info!'
            });
        });

        //Success
        $('#success-alert').click(function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "success",
                showCancelButton: true,
                cancelButtonClass: 'btn-white btn-md waves-effect',
                confirmButtonClass: 'btn-success btn-md waves-effect waves-light',
                confirmButtonText: 'Success!'
            });
        });

        //Warning
        $('#warning-alert').click(function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: 'btn-white btn-md waves-effect',
                confirmButtonClass: 'btn-warning btn-md waves-effect waves-light',
                confirmButtonText: 'Warning!'
            });
        });

        //Danger
        $('#danger-alert').click(function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "error",
                showCancelButton: true,
                cancelButtonClass: 'btn-white btn-md waves-effect',
                confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
                confirmButtonText: 'Danger!'
            });
        });


    },
        //init
        $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.SweetAlert.init()
    }(window.jQuery);