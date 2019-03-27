@extends('layout.dashboard')
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
                                    <div  style="margin-top:-20px" class="col-sm-12">
                                        <div class="card-box widget-inline">
                                            <div class="row">
                                                    <div style="text-align:center"class="col-md-12">
                                                    <h1> 
                                                    <b>
                                                    Berita GSM 
                                                    </b>
                                                    </h1>
                                                    <p>Update Berita GSM Terkini </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                 <!-- Blog -->
                    <div class="col-md-4">
                        <div class="blog-box-one">
                            <div class="cover-wrapper">
                                <a href="#"><img alt="Blog-img" src="{{asset('assets/images/blogs/5.jpg')}}"
                                                 class="img-responsive"/></a>
                            </div>
                            <div class="post-info">
                                <div class="date">
                                    <span class="day">16</span><br>
                                    <span class="month">Mar</span>
                                </div>
        
                                <div class="meta-container">
                                    <a href="#">
                                        <h4 class="text-overflow m-t-0">Beautiful Image Blog Post</h4>
                                    </a>
                                    <div class="font-13">
                                        <span class="meta">Posted by gsm in <a href="#"><b>GSM Number one in indonesia </b></a></span>
                                    </div>
                                </div>
        
                                <p class="text-muted m-b-0">
                                    Nunc nec dui vitae urna cursus lacinia. In
                                    venenatis eget justo in dictum. Vestibulum
                                    auctor raesent quisnm.Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry. Simply dummy
                                    text of the printing and typesetting.
                                </p>
        
                                <div class="row m-t-10">
                                    <div class="col-xs-6">
                                        <div class="m-t-10 blog-widget-action">
                                            <a href="javascript:void(0)">
                                                <i class="mdi md-favorite"></i> <span>54</span>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="mdi md-comment"></i> <span>26</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <a href="" class="btn btn-sm waves-effect btn-white">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end blog -->

                    <div class="col-md-4">
                        <div class="blog-box-one">
                            <div class="cover-wrapper">
                                <a href="#"><img alt="Blog-img" src="{{asset('assets/images/blogs/5.jpg')}}"
                                                 class="img-responsive"/></a>
                            </div>
                            <div class="post-info">
                                <div class="date">
                                    <span class="day">16</span><br>
                                    <span class="month">Mar</span>
                                </div>
        
                                <div class="meta-container">
                                    <a href="#">
                                        <h4 class="text-overflow m-t-0">Beautiful Image Blog Post</h4>
                                    </a>
                                    <div class="font-13">
                                        <span class="meta">Posted by gsm in <a href="#"><b>GSM Number one in indonesia </b></a></span>
                                    </div>
                                </div>
        
                                <p class="text-muted m-b-0">
                                    Nunc nec dui vitae urna cursus lacinia. In
                                    venenatis eget justo in dictum. Vestibulum
                                    auctor raesent quisnm.Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry. Simply dummy
                                    text of the printing and typesetting.
                                </p>
        
                                <div class="row m-t-10">
                                    <div class="col-xs-6">
                                        <div class="m-t-10 blog-widget-action">
                                            <a href="javascript:void(0)">
                                                <i class="mdi md-favorite"></i> <span>54</span>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="mdi md-comment"></i> <span>26</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <a href="" class="btn btn-sm waves-effect btn-white">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end blog -->
                    <div class="col-md-4">
                        <div class="blog-box-one">
                            <div class="cover-wrapper">
                                <a href="#"><img alt="Blog-img" src="{{asset('assets/images/blogs/5.jpg')}}"
                                                 class="img-responsive"/></a>
                            </div>
                            <div class="post-info">
                                <div class="date">
                                    <span class="day">16</span><br>
                                    <span class="month">Mar</span>
                                </div>
        
                                <div class="meta-container">
                                    <a href="#">
                                        <h4 class="text-overflow m-t-0">Beautiful Image Blog Post</h4>
                                    </a>
                                    <div class="font-13">
                                        <span class="meta">Posted by gsm in <a href="#"><b>GSM Number one in indonesia </b></a></span>
                                    </div>
                                </div>
        
                                <p class="text-muted m-b-0">
                                    Nunc nec dui vitae urna cursus lacinia. In
                                    venenatis eget justo in dictum. Vestibulum
                                    auctor raesent quisnm.Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry. Simply dummy
                                    text of the printing and typesetting.
                                </p>
        
                                <div class="row m-t-10">
                                    <div class="col-xs-6">
                                        <div class="m-t-10 blog-widget-action">
                                            <a href="javascript:void(0)">
                                                <i class="mdi md-favorite"></i> <span>54</span>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="mdi md-comment"></i> <span>26</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <a href="" class="btn btn-sm waves-effect btn-white">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end blog -->
                 
                 




                            
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