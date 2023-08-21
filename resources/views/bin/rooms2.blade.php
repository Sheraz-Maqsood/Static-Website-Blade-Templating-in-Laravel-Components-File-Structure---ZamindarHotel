@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
@endpush
@section('content')

@push('preload')

@endpush
 <!-- Header Banner -->
 <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 caption mt-90">
                <span>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                </span>
                <h5>Zamindar Hotel & Resturant Lahore</h5>
                <h1>Rooms & Suites</h1>
            </div>
        </div>
    </div>
</div>
<!-- Rooms -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="rooms2 mb-90 animate-box" data-animate-effect="fadeInUp">
                    <figure><img src="img/slider/4.jpg" alt="" class="img-fluid"></figure>
                    <div class="caption">
                        <h3>150$ <span>/ Night</span></h3>
                        <h4><a href="room-details">Junior Suite</a></h4>
                        <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                        <div class="row room-facilities">
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                    <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="flaticon-bed"></i> Twin Bed</li>
                                    <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="flaticon-clock-1"></i> 200 sqft room</li>
                                    <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                </ul>
                            </div>
                        </div>
                        <hr class="border-2">
                        <div class="info-wrapper">
                            <div class="more"><a href="room-details" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                            <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="rooms2 mb-90 left animate-box" data-animate-effect="fadeInUp">
                    <figure><img src="img/slider/3.jpg" alt="" class="img-fluid"></figure>
                    <div class="caption">
                        <h3>200$ <span>/ Night</span></h3>
                        <h4><a href="room-details">Family Room</a></h4>
                        <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                        <div class="row room-facilities">
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                    <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="flaticon-bed"></i> Twin Bed</li>
                                    <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="flaticon-clock-1"></i> 200 sqft Room</li>
                                    <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                </ul>
                            </div>
                        </div>
                        <hr class="border-2">
                        <div class="info-wrapper">
                            <div class="more"><a href="room-details" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                            <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="rooms2 mb-90 animate-box" data-animate-effect="fadeInUp">
                    <figure><img src="img/slider/3.jpg" alt="" class="img-fluid"></figure>
                    <div class="caption">
                        <h3>250$ <span>/ Night</span></h3>
                        <h4><a href="room-details">Double Room</a></h4>
                        <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                        <div class="row room-facilities">
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="flaticon-group"></i> 2-3 Persons</li>
                                    <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="flaticon-bed"></i> Twin Bed</li>
                                    <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="flaticon-clock-1"></i> 200 sqft room</li>
                                    <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                </ul>
                            </div>
                        </div>
                        <hr class="border-2">
                        <div class="info-wrapper">
                            <div class="more"><a href="room-details" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                            <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="rooms2 left animate-box" data-animate-effect="fadeInUp">
                    <figure><img src="img/slider/2.jpg" alt="" class="img-fluid"></figure>
                    <div class="caption">
                        <h3>300$ <span>/ Night</span></h3>
                        <h4><a href="room-details">Deluxe Room</a></h4>
                        <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                        <div class="row room-facilities">
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="flaticon-group"></i> 2-4 Persons</li>
                                    <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="flaticon-bed"></i> Twin Bed</li>
                                    <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="flaticon-clock-1"></i> 200 sqft Room</li>
                                    <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                </ul>
                            </div>
                        </div>
                        <hr class="border-2">
                        <div class="info-wrapper">
                            <div class="more"><a href="room-details" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                            <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Booking Search -->
<section class="section-padding bg-darkblack" data-scroll-index="1">
    <div class="container">
            <div class="section-subtitle">Availabilitiy</div>
            <div class="section-title">Search Rooms</div>
            <div class="booking-inner clearfix">
                <form class="form1 clearfix">
                    <div class="col1 c1">
                        <div class="input1_wrapper">
                            <label>Check in</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check in">
                            </div>
                        </div>
                    </div>
                    <div class="col1 c2">
                        <div class="input1_wrapper">
                            <label>Check out</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check out">
                            </div>
                        </div>
                    </div>
                    <div class="col2 c3">
                        <div class="select1_wrapper">
                            <label>Adults</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col2 c4">
                        <div class="select1_wrapper">
                            <label>Children</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">Children</option>
                                    <option value="1">1 Child</option>
                                    <option value="2">2 Children</option>
                                    <option value="3">3 Children</option>
                                    <option value="4">4 Children</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col2 c5">
                        <div class="select1_wrapper">
                            <label>Rooms</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                    <option value="4">4 Rooms</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col3 c6">
                        <button type="submit" class="btn-form1-submit">Check Now</button>
                    </div>
                </form>
            </div>
        </div>
</section>

@include('layouts.components.extra-services-index')

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

