@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
@endpush
@section('content')

@push('preload')
     @include('layouts.partials.preload')
@endpush


 <!-- Slider -->
 <header class="header slider-fade">
     <div class="owl-carousel owl-theme">
         <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
         <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/slider/2.jpg">
             <div class="v-middle caption">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-10 offset-md-1">
                             <span>
                                 <i class="star-rating"></i>
                                 <i class="star-rating"></i>
                                 <i class="star-rating"></i>
                                 <i class="star-rating"></i>
                                 <i class="star-rating"></i>
                             </span>
                             <h4>Luxury Hotel & Best Resort</h4>
                             <h1>Enjoy a Luxury Experience</h1>
                             <div class="butn-light mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>Rooms & Suites</span></a> </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/slider/3.jpg">
             <div class="v-middle caption">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-10 offset-md-1">
                             <span>
                                 <i class="star-rating"></i>
                                 <i class="star-rating"></i>
                                 <i class="star-rating"></i>
                                 <i class="star-rating"></i>
                                 <i class="star-rating"></i>
                             </span>
                             <h4>Unique Place to Relax & Enjoy</h4>
                             <h1>The Perfect Base For You</h1>
                             <div class="butn-light mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>Rooms & Suites</span></a> </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/slider/1.jpg">
             <div class="v-middle caption">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-10 offset-md-1">
                             <span>
                                 <i class="star-rating"></i>
                                 <i class="star-rating"></i>
                                 <i class="star-rating"></i>
                                 <i class="star-rating"></i>
                                 <i class="star-rating"></i>
                             </span>
                             <h4>The Ultimate Luxury Experience</h4>
                             <h1>Enjoy The Best Moments of Life</h1>
                             <div class="butn-light mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>Rooms & Suites</span></a> </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 @include('layouts.components.about-para-index')
 @include('layouts.components.rooms-index')
 
 @include('layouts.components.extra-services-index')
 <!-- Promo Video -->
 <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3" data-background="img/slider/2.jpg">
         <div class="container">
             <div class="row">
                 <div class="col-md-8 offset-md-2 text-center">
                    <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                     <div class="section-subtitle"><span>Zamindar Hotel</span></div>
                     <div class="section-title"><span>Promotional Video</span></div>
                 </div>
             </div>
             <div class="row">
                 <div class="text-center col-md-12">
                     <a class="vid" href="https://youtu.be/7BGNAGahig8">
                     <div class="vid-butn">
                         <span class="icon">
                             <i class="ti-control-play"></i>
                         </span>
                     </div>
                 </a>
                 </div>

             </div>
         </div>
 </section>
 
 @include('layouts.components.facilities-hotel-index')
 
 @include('layouts.components.testimonials-guests-index')
 <!-- Services -->
 <section class="services section-padding">
     <div class="container">
         <div class="row">
             <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                 <div class="img left">
                     <a href="restaurant"><img src="img/restaurant/1.jpg" alt=""></a>
                 </div>
             </div>
             <div class="col-md-6 p-0 bg-darkblack valign animate-box" data-animate-effect="fadeInRight">
                 <div class="content">
                     <div class="cont text-left">
                         <div class="info">
                             <h6>Discover</h6>
                         </div>
                         <h4>The Restaurant</h4>
                         <p>Restaurant inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami acsestion augue artine.</p>
                         <div class="butn-dark"> <a href="restaurant"><span>Learn More</span></a> </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-6 bg-darkblack p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                 <div class="content">
                     <div class="cont text-left">
                         <div class="info">
                             <h6>Experiences</h6>
                         </div>
                         <h4>Spa Center</h4>
                         <p>Spa center inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami acsestion augue artine.</p>
                         <div class="butn-dark"> <a href="spa-wellness"><span>Learn More</span></a> </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                 <div class="img">
                     <a href="spa-wellness"><img src="img/spa/3.jpg" alt=""></a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                 <div class="img left">
                     <a href="spa-wellness"><img src="img/spa/2.jpg" alt=""></a>
                 </div>
             </div>
             <div class="col-md-6 p-0 bg-darkblack valign animate-box" data-animate-effect="fadeInRight">
                 <div class="content">
                     <div class="cont text-left">
                         <div class="info">
                             <h6>Modern</h6>
                         </div>
                         <h4>Fitness Center</h4>
                         <p>Restaurant inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami acsestion augue artine.</p>
                         <div class="butn-dark"> <a href="spa-wellness"><span>Learn More</span></a> </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-6 bg-darkblack p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                 <div class="content">
                     <div class="cont text-left">
                         <div class="info">
                             <h6>Experiences</h6>
                         </div>
                         <h4>The Health Club & Pool</h4>
                         <p>The health club & pool at elit finibus viverra nec a lacus themo the nesudea seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami acsestion augue artine.</p>
                         <div class="butn-dark"> <a href="spa-wellness"><span>Learn More</span></a> </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                 <div class="img">
                     <a href="spa-wellness"><img src="img/spa/1.jpg" alt=""></a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- News -->
 <section class="news section-padding bg-darkblack">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="section-subtitle"><span>Hotel Blog</span></div>
                 <div class="section-title">Our News</div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-12">
                 <div class="owl-carousel owl-theme">
                     <div class="item">
                         <div class="position-re o-hidden"> <img src="img/news/1.jpg" alt="">
                             <div class="date">
                                 <a href="post"> <span>Dec</span> <i>02</i> </a>
                             </div>
                         </div>
                         <div class="con"> <span class="category">
                                 <a href="news">Restaurant</a>
                             </span>
                             <h5><a href="post">Historic restaurant renovated</a></h5>
                         </div>
                     </div>
                     <div class="item">
                         <div class="position-re o-hidden"> <img src="img/news/2.jpg" alt="">
                             <div class="date">
                                 <a href="post"> <span>Dec</span> <i>04</i> </a>
                             </div>
                         </div>
                         <div class="con"> <span class="category">
                                 <a href="news">Spa</a>
                             </span>
                             <h5><a href="post">Benefits of Spa Treatments</a></h5>
                         </div>
                     </div>
                     <div class="item">
                         <div class="position-re o-hidden"> <img src="img/news/3.jpg" alt="">
                             <div class="date">
                                 <a href="post"> <span>Dec</span> <i>06</i> </a>
                             </div>
                         </div>
                         <div class="con"> <span class="category">
                                 <a href="news">Bathrooms</a>
                             </span>
                             <h5><a href="post">Hotel Bathroom Collections</a></h5>
                         </div>
                     </div>
                     <div class="item">
                         <div class="position-re o-hidden"> <img src="img/news/4.jpg" alt="">
                             <div class="date">
                                 <a href="post"> <span>Dec</span> <i>08</i> </a>
                             </div>
                         </div>
                         <div class="con">
                             <span class="category">
                                 <a href="news">Health</a>
                             </span>
                             <h5><a href="post">Weight Loss with Fitness Health Club</a></h5>
                         </div>
                     </div>

                     <div class="item">
                         <div class="position-re o-hidden"> <img src="img/news/6.jpg" alt="">
                             <div class="date">
                                 <a href="post"> <span>Dec</span> <i>08</i> </a>
                             </div>
                         </div>
                         <div class="con"> <span class="category">
                                 <a href="news">Design</a>
                             </span>
                             <h5><a href="post">Retro Lighting Design in The Hotels</a></h5>
                         </div>
                     </div>
                     <div class="item">
                         <div class="position-re o-hidden"> <img src="img/news/5.jpg" alt="">
                             <div class="date">
                                 <a href="post"> <span>Dec</span> <i>08</i> </a>
                             </div>
                         </div>
                         <div class="con"> <span class="category">
                                 <a href="news">Health</a>
                             </span>
                             <h5><a href="post">Benefits of Swimming for Your Health</a></h5>
                         </div>
                     </div>


                 </div>
             </div>
         </div>
     </div>
 </section>
 
@include('layouts.components.reservation-and-booking-index')

@include('layouts.components.clients-logo-index')


    {{-- <!-- @include('admin.transactions.components.addCost')-- --}}
    {{-- @include('admin.transactions.components.editCost') -->-- --}}
@endsection
@push('js')
    {{-- <!-- @include('admin.components.datatableScript') -->-- --}}
    <script>

    </script>

   {{--  <!-- @include('admin.transactions.components.addItemsScript') -->-- --}}
@endpush
