
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

        $('#daftar').click(function () {
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
                        axios({
                            method: 'post',
                            url: 'elearning.test/api/v1/register',
                            withCredentials: true,
                            crossdomain: true,
                            data:  data,    
                        headers: { 
                          "Content-Type": "application/x-www-form-urlencoded",
                          "Accept" : "application/x-www-form-urlencoded"
                        }
                      }).then(function (response) {
                        console.log("Heade With Authentication :" + response);
                      })
                      .catch(function (error) {
                        console.log("Post Error : " +error);
                      }); 


            //             // $.ajax({
            //             //     type: 'POST',  
            //             //     dataType: 'json',
            //             //     data: $.param (data),
            //             //     url: 'elearning.test/api/v1/register',
            //             //     headers     : {
            //             //                     'Content-Type': 'application/x-www-form-urlencoded', 
            //             //                     'Accept' : 'application/x-www-form-urlencoded'
            //             //                   }
            //             //   })
            //             //   .done(function(data, status){
                            
            //             //   })
            //             //   .fail(function(data, status){
            //             //       console.log(status)
            //             //       console.log(data)
            //             //       alert("hello")
            //             //   })

  
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