<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ctam</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet">

    <!-- Messenger Plugin de discussion Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de discussion code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

   
</head>

<body>
    
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>
Rue Mohamed Ben Taieb 2080 Ariana, Tunisie</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>71 766 022</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://fr-fr.facebook.com/CTAM.tunis/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://twitter.com/Arbitrationctam"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.instagram.com/ctam.tn/?hl=fr"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.youtube.com/channel/UCQ7p7UofqpCI6g8dXMLXuDw?"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('frontend.body.navbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    
    <!-- Carousel End -->


    <!-- Feature Start -->
   
    <!-- Feature Start -->



    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-80" src="{{asset('frontend/img/ctam.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start" id="about">
                            <h1 class="display-5 mb-4">{{__('messages.about')}}  </h1>
                        </div>
                        <p class="mb-4 pb-2">{{__('messages.aboutt')}} </p>
                        

                       


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
     

    <!-- Service Start -->
    <div class="container-xxl py-5" id="service">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">{{__('messages.our service')}}

</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">{{__('messages.servciet3')}}</h4>
                            <h6>{{__('messages.servcie3')}}</h6>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">{{__('messages.servciet2')}}</h4>
                            <h6>{{__('messages.servcie2')}}</h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">{{__('messages.servciet1')}}</h4>
                            <h6>{{__('messages.service1')}}</h6>
                           
                        </div>
                    </div>
                </div>
                
    <!-- Service End -->

    <div class="container"  id="article">
    <div class="section-title text-start text-center" id="about">
                            <h1 class="display-6 mb-5">  {{__('messages.article')}} </h1>
                        </div>
      </div>
      
      @foreach($post as $p )
       <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h6 class="display-5 mb-4">{{$p->title}}</h6>
                        </div>
                        <p class="mb-4 pb-2">{{$p->content}}</p>
                        <div class="row g-4">
                            
                            <p>{{$p->created_at}}</p>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('storage/'.$p['picture']) }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
         
      @endforeach
      {!! $post->links() !!}
   
    @yield('content')
  
   

    <!-- Footer Start -->
    @include('frontend.body.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/lightbox/js/lightbox.min.js')}}"></script>
   
    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js')}}"></script>
</body>

</html>