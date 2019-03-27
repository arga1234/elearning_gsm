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
                                                <h3 class="panel-title">Detail User</h3>
                                            </div>
                                            <div class="panel-body">
                                            <div class="col-sm-4">
                                                    <img src="assets/images/avatar-2.jpg" alt="image" class="img-responsive img-rounded" width="200"/>
                                             </div>
                                             <div class="col-md-4">
                                                <h5><b>This is Text :</b></h5>
                                                <p class="text-muted m-b-15 font-13">
                                                    This is Example Text
                                                </p>

                                                <h5><b>This is Text :</b></h5>
                                                <p class="text-muted m-b-15 font-13">
                                                    This is Example Text
                                                </p>
                                                <h5><b>This is Text :</b></h5>
                                                <p class="text-muted m-b-15 font-13">
                                                    This is Example Text
                                                </p>
                                             </div>
                                             <div class="col-md-4">
                                                <h5><b>This is Text :</b></h5>
                                                <p class="text-muted m-b-15 font-13">
                                                    This is Example Text
                                                </p>
                                                <h5><b>This is Text :</b></h5>
                                                <p class="text-muted m-b-15 font-13">
                                                    This is Example Text
                                                </p>
                                                <h5><b>This is Text :</b></h5>
                                                <p class="text-muted m-b-15 font-13">
                                                    This is Example Text
                                                </p>
                                           </div>
                                           <button style="float:right" type="button" class="btn btn-default waves-effect waves-light">Edit</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="panel panel-color panel-custom">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Linimasi Perubahan User</h3>
                                            </div>
                                            <div class="panel-body">
                                                       <!-- blog content -->
                                 <div class="blog-box-one">
                                        <div class="cover-wrapper">
                                            <div id="blog-slider" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators m-b-0">
                                                    <li data-target="#blog-slider" data-slide-to="0"
                                                        class="active"></li>
                                                    <li data-target="#blog-slider" data-slide-to="1"></li>
                                                    <li data-target="#blog-slider" data-slide-to="2"></li>
                                                </ol>
                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <img alt="Blog-img" src="assets/images/blogs/1.jpg" class="img-responsive"/>
                                                    </div>
                                                    <div class="item">
                                                        <img alt="Blog-img" src="assets/images/blogs/2.jpg" class="img-responsive"/>
                                                    </div>
                                                    <div class="item">
                                                        <img alt="Blog-img" src="assets/images/blogs/6.jpg" class="img-responsive"/>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>
                                        <div class="post-info">
                                            <div class="date">
                                                <span class="day">11</span><br>
                                                <span class="month">Feb</span>
                                            </div>
    
                                            <div class="meta-container">
                                                <a href="#">
                                                    <h4 class="text-overflow m-t-0">Beautiful Image Blog Post</h4>
                                                </a>
                                                <div class="font-13">
                                                    <span class="meta">Posted by James in <a href="#"><b>Web Design</b></a></span>
                                                </div>
                                            </div>
    
                                            <p class="text-muted m-b-0">
                                                Nunc nec dui vitae urna cursus lacinia. In
                                                venenatis eget justo in dictum. Vestibulum
                                                auctor raesent quisnm.
                                            </p>
    
                                            <div class="row m-t-10">
                                                <div class="col-xs-6">
                                                    <div class="m-t-10 blog-widget-action">
                                                        <a href="javascript:void(0)">
                                                            <i class="mdi md-favorite"></i> <span>34</span>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <i class="mdi md-comment"></i> <span>58</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <a href="" class="btn btn-sm waves-effect btn-white">Share</a>
                                                </div>
                                            </div>    
                                        </div>
                                    </div><!-- end blog -->
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


        @endsection