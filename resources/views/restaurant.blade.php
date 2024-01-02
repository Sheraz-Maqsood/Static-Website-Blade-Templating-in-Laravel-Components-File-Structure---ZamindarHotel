@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
@endpush
@section('content')

@push('preload')
     @include('layouts.partials.preload')
@endpush

 <!-- Restaurant Slider -->
 <header class="header slider">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/restaurant/4.jpg"></div>
        <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/restaurant/6.jpg"></div>
        <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/restaurant/5.jpg"></div>
    </div>
    <!-- arrow down -->
    <div class="arrow bounce text-center">
        <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
    </div>
</header>
<!-- Restaurant Content -->
<section class="rooms-page section-padding" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <span>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                </span>
                <div class="section-subtitle">An Experience for the Senses</div>
                <div class="section-title">The Restaurant</div>
            </div>
            <div class="col-md-12">
                <p class="mb-30">Step into The Restaurant, a culinary haven guided by the expertise of best Chefs of Lahore. Celebrated for its exquisite cuisine and authentic Pakistani ambiance, this dining destination is a tribute to the rich tapestry of Pakistani flavors. The captivating dining room showcases three open studio kitchens, allowing you to be part of the vibrant culinary artistry in action. The menu is a blend of Pakistani heritage and global inspirations, presenting an enticing array of traditional favorites and innovative creations for you to savor. Don't miss a visit to The Wine and Cheese Cellar, a treasure within towering glass walls, where our knowledgeable team takes you on a journey through Pakistan's gastronomic delights. Come, relish an unforgettable encounter with Pakistani culinary traditions at their finest.</p>
                <h6>Hours</h6>
                <ul class="list-unstyled page-list mb-30">
                    <li>
                        <div class="page-list-icon"> <span class="ti-time"></span> </div>
                        <div class="page-list-text">
                            <p>Breakfast: 7.00 am – 11.00 am (daily)</p>
                        </div>
                    </li>
                    <li>
                        <div class="page-list-icon"> <span class="ti-time"></span> </div>
                        <div class="page-list-text">
                            <p>Lunch: 12.00 noon – 2.00 pm (daily)</p>
                        </div>
                    </li>
                    <li>
                        <div class="page-list-icon"> <span class="ti-time"></span> </div>
                        <div class="page-list-text">
                            <p>Dinner: open from 6.30 pm, last order at 10.00 pm (daily)</p>
                        </div>
                    </li>
                </ul>
                {{-- <h6>Dress Code</h6>
                <p>Smart casual (no shorts, hats, or sandals permitted)</p> --}}
                <h6>Terrace</h6>
                <p>Open for drinks</p>
            </div>
        </div>
    </div>
</section>
<!-- Restaurant Menu -->
<section id="menu" class="restaurant-menu menu section-padding bg-darkblack">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-subtitle"><span>Luxury Hotel</span></div>
                <div class="section-title">Restaurant Menu</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="tabs-icon col-md-10 offset-md-1 text-center">
                        <div class="owl-carousel owl-theme">
                            <div id="tab-1" class="active item">
                                <h6>Page 1</h6>
                            </div>
                            <div id="tab-2" class="item">
                                <h6>Page 2</h6>
                            </div>
                        </div>
                    </div>
                    <div class="restaurant-menu-content col-md-12">
                        <!-- Starters -->
                        <div id="tab-1-content" class="cont active">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="img/restaurant/zamindara_1.jpg" alt="Menu Page 1" width="500" height="600">
                                </div>
                            </div>
                        </div>
                        <!-- Mains -->
                        <div id="tab-2-content" class="cont">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="img/restaurant/zamindara_2.jpg" alt="Menu Page 2" width="500" height="600">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.components.testimonials-guests-index')

    {{-- <!-- @include('admin.transactions.components.addCost')-- --}}
    {{-- @include('admin.transactions.components.editCost') -->-- --}}
@endsection
@push('js')
    {{-- <!-- @include('admin.components.datatableScript') -->-- --}}
    <script>

    </script>

   {{--  <!-- @include('admin.transactions.components.addItemsScript') -->-- --}}
@endpush
