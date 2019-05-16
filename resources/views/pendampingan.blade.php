@extends('layout.dashboard')
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
                                                    <h3 class="panel-title">Assesor </h3>
                                                </div>
                                                <div class="panel-body">  
                                                    <p style="margin-bottom:20px">Anda belum memiliki assesor, pilih seorang assesor untuk mulai pendampingan dan pengambilan modul</p> 
                                                    
                                                    <table id="datatable" class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>Nama</th>
                                                                <th>Sekolah</th>
                                                                <th>Jabatan</th>
                                                                <th>Provinsi</th>
                                                                <th>Kab/Kota</th>
                                                                <th>Kuota</th>
                                                            </tr>
                                                            </thead>
                            
                            
                                                            <tbody>
                                                            <tr>
                                                                <td>Ahmadi Ar Rayyan</td>
                                                                <td>SD Negeri 01 Surakarta</td>
                                                                <td>Guru kelas 3</td>
                                                                <td>Jawa Tengah</td>
                                                                <td>Sukoharjo</td>
                                                                <td>5/10 <button  style="margin-left:10px" class="btn btn-default waves-effect waves-light">Pilih</button></td>
                                                            </tr>
                                                            </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-lg-12">
                                        <div class="panel panel-color panel-custom">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Chat Dengan Assesor </h3>
                                            </div>
                                            <div class="panel-body">                                         
                                                    <!-- CHAT -->
                            <div class="col-lg-12">
                                    {{-- <div class="card-box">     --}}
                                        <div class="chat-conversation">
                                            <ul class="conversation-list nicescroll">
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/avatar-1.jpg" alt="male">
                                                        <i>10:00</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Assesor 1</i>
                                                            <p>
                                                                Hello!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="Female">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Arga Wirawan</i>
                                                            <p>
                                                                Hi, How are you? What about our next meeting?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/avatar-1.jpg" alt="male">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Assesor 1</i>
                                                            <p>
                                                                Yeah everything is fine
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                        <i>10:02</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Arga Wirawan</i>
                                                            <p>
                                                                Wow that's great
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="row">
                                                <div class="col-sm-9 chat-inputbar">
                                                    <input type="text" class="form-control chat-input" placeholder="Ketikan Pesan">
                                                </div>
                                                <div class="col-sm-3 chat-send">
                                                    <button type="submit" class="btn btn-md btn-info btn-block waves-effect waves-light">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    {{-- </div> --}}
    
                                </div> <!-- end col-->
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
            <!-- chatjs  -->
            <script src="assets/pages/jquery.chat.js"></script>
        @endsection