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
         <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/slider/10.jpg">
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
         <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/slider/6.jpg">
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
         <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/slider/4.jpg">
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
 <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3" data-background="img/slider/12.jpg">
         <div class="container">
             <div class="row">
                 <div class="col-md-8 offset-md-2 text-center">
                    <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                     <div class="section-subtitle"><span>Zamindar Hotel</span></div>
                     <div class="section-title"><span>Lahore Best Five Star Hotel and Resturant</span></div>
                 </div>
             </div>
             {{-- <div class="row">
                 <div class="text-center col-md-12">
                     <a class="vid" href="https://youtu.be/7BGNAGahig8">
                     <div class="vid-butn">
                         <span class="icon">
                             <i class="ti-control-play"></i>
                         </span>
                     </div>
                 </a>
                 </div>

             </div> --}}
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
                     <a href="restaurant"><img src="img/restaurant/4.jpg" alt=""></a>
                 </div>
             </div>
             <div class="col-md-6 p-0 bg-darkblack valign animate-box" data-animate-effect="fadeInRight">
                 <div class="content">
                     <div class="cont text-left">
                         <div class="info">
                             <h6>Discover</h6>
                         </div>
                         <h4>The Restaurant</h4>
                         <p>Experience a culinary voyage that fuses the richness of Pakistani flavors with international inspirations at The Restaurant. Our delectable menu and inviting ambiance promise a memorable dining journey for both connoisseurs and explorers of taste.</p>
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
                         <h4>The Cafe</h4>
                         <p>Discover a cozy retreat at The Cafe, where aromatic brews and delectable treats come together in a warm and inviting ambiance. Indulge in moments of relaxation while savoring a delightful range of beverages and bites.</p>
                         <div class="butn-dark"> <a href="spa-wellness"><span>Learn More</span></a> </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                 <div class="img">
                     <a href="spa-wellness"><img src="img/spa/4.jpg" alt=""></a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                 <div class="img left">
                     <a href="spa-wellness"><img src="img/spa/5.jpg" alt=""></a>
                 </div>
             </div>
             <div class="col-md-6 p-0 bg-darkblack valign animate-box" data-animate-effect="fadeInRight">
                 <div class="content">
                     <div class="cont text-left">
                         <div class="info">
                             <h6>Modern</h6>
                         </div>
                         <h4>The Hotel</h4>
                         <p>Welcome to an oasis of comfort and heritage at The Hotel. With elegantly appointed rooms, modern amenities, and a touch of local charm, we offer a serene haven for travelers to immerse themselves in the essence of our cultural heritage.</p>
                         <div class="butn-dark"> <a href="spa-wellness"><span>Learn More</span></a> </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 @include('layouts.components.team-about')
 <!-- News -->
 {{-- <section class="news section-padding bg-darkblack">
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
                                 <a href="news">Cafe</a>
                             </span>
                             <h5><a href="post">Mental Health benefits of Green Tea</a></h5>
                         </div>
                     </div>
                     <div class="item">
                         <div class="position-re o-hidden"> <img src="img/news/3.jpg" alt="">
                             <div class="date">
                                 <a href="post"> <span>Dec</span> <i>06</i> </a>
                             </div>
                         </div>
                         <div class="con"> <span class="category">
                                 <a href="news">Hotel</a>
                             </span>
                             <h5><a href="post">Our New Major Reforms in Hotel</a></h5>
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
 </section> --}}

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
