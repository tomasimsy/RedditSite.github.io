@extends('layouts.app')

@section('content')
<header class="">
    <div class="position-relativebg-image shadow-2-strong" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/76.webp'); height: 80vh;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.8); height:100vh;">
            <div class=" container px-5 " style="background-color: rgba(0, 0, 0, 0.2);" >
                <div class="row ">
                    <div class="col-xxl-5 ">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start text-white" style="font-family:crimson_text;" >
                            
                            <div class="fs-3 fw-light ">We invest in people with big dreams & the drive to make them come true. </div>
                            <h1 class="fw-bolder mb-5"><span class="text-gradient d-inline">We contribute capital, global networks and deep expertise.</span></h1>
                            <h2 class="fs-4 fw-light ">We help make it happen.</h2>
                            <div class="fs-4 fw-light ">Let's talk.</div>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start my-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume.html">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 bg-secondary " style="background-color: rgba(0, 0, 0, 0.2);">
                        <!-- Header profile picture-->
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                            <div class="profile ">
                                <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                <img class="img-fluid rounded-2 my-5" src="img/bg-callout.jpg" alt="..." />
                                <div class="dots-1">
                                    <!-- SVG Dots-->
                                    
                                    <!-- END of SVG dots-->
                                </div>
                                <div class="dots-2">
                                    <!-- SVG Dots-->
                                
                                    <!-- END of SVG dots-->
                                </div>
                                <div class="dots-3">
                                    <!-- SVG Dots-->
                                    
                                    <!-- END of SVG dots-->
                                </div>
                                <div class="dots-4">
                                    <!-- SVG Dots-->
                                    
                                    <!-- END of SVG dots-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
 <!-- About Section-->
 <section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p class="lead fw-light mb-4">My name is Start Bootstrap and I help brands grow.</p>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
