@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
@endpush
@section('content')

@push('preload')

@endpush
  <!-- Header Banner -->
  <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-right caption mt-90">
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
<!-- Rooms 3 -->
<div class="rooms3 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="square-flip">
                    <div class="square bg-img" data-background="img/rooms/11.jpg">
                        <span class="category"><a href="rooms2">Book</a></span>
                        <div class="square-container d-flex align-items-end justify-content-end">
                            <div class="box-title">
                                <h6>Rs.6000 / Night</h6>
                                <h4>Junior Suite</h4>
                            </div>
                        </div>
                        <div class="flip-overlay"></div>
                    </div>
                    <div class="square2">
                        <div class="square-container2">
                            <h6>Rs.6000  / Night</h6>
                            <h4>Junior Suite</h4>
                            <p>Best option for single.</p>
                            <div class="row room-facilities mb-30">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1 Person</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                       <li><i class="flaticon-bed"></i> Single Bed</li>
                                       <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-line"><a href="room-details">Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="square-flip">
                    <div class="square bg-img" data-background="img/rooms/12.jpg">
                        <span class="category"><a href="rooms2">Book</a></span>
                        <div class="square-container d-flex align-items-end justify-content-end">
                            <div class="box-title">
                                <h6>Rs.8000  / Night</h6>
                                <h4>Family Room</h4>
                            </div>
                        </div>
                        <div class="flip-overlay"></div>
                    </div>
                    <div class="square2">
                        <div class="square-container2">
                            <h6>Rs.8000  / Night</h6>
                            <h4>Family Room</h4>
                            <p>Best option for couples.</p>
                            <div class="row room-facilities mb-30">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                       <li><i class="flaticon-bed"></i> Single Bed</li>
                                       <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-line"><a href="room-details">Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="square-flip">
                    <div class="square bg-img" data-background="img/rooms/14.jpg">
                        <span class="category"><a href="rooms2">Book</a></span>
                        <div class="square-container d-flex align-items-end justify-content-end">
                            <div class="box-title">
                                <h6>Rs.9000  / Night</h6>
                                <h4>Double Room</h4>
                            </div>
                        </div>
                        <div class="flip-overlay"></div>
                    </div>
                    <div class="square2">
                        <div class="square-container2">
                            <h6>Rs.9000  / Night</h6>
                            <h4>Double Room</h4>
                            <p>Recomended for friends.</p>
                            <div class="row room-facilities mb-30">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                       <li><i class="flaticon-bed"></i> Twin Bed</li>
                                       <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-line"><a href="room-details">Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="square-flip">
                    <div class="square bg-img" data-background="img/rooms/6.jpg">
                        <span class="category"><a href="rooms2">Book</a></span>
                        <div class="square-container d-flex align-items-end justify-content-end">
                            <div class="box-title">
                                <h6>Rs.12000 / Night</h6>
                                <h4>Deluxe Room</h4>
                            </div>
                        </div>
                        <div class="flip-overlay"></div>
                    </div>
                    <div class="square2">
                        <div class="square-container2">
                            <h6>Rs.12000 / Night</h6>
                            <h4>Deluxe Room</h4>
                            <p>Expirience Ultra luxary lifestyle.</p>
                            <div class="row room-facilities mb-30">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                       <li><i class="flaticon-bed"></i> Twin Bed</li>
                                       <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-line"><a href="room-details">Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="square-flip">
                    <div class="square bg-img" data-background="img/rooms/8.jpg">
                        <span class="category"><a href="rooms2">Book</a></span>
                        <div class="square-container d-flex align-items-end justify-content-end">
                            <div class="box-title">
                                <h6>Rs.12000 / Night</h6>
                                <h4>Superior Room</h4>
                            </div>
                        </div>
                        <div class="flip-overlay"></div>
                    </div>
                    <div class="square2">
                        <div class="square-container2">
                            <h6>Rs.12000 / Night</h6>
                            <h4>Superior Room</h4>
                            <p>Expirience Ultra luxary lifestyle.</p>
                            <div class="row room-facilities mb-30">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                       <li><i class="flaticon-bed"></i> Twin Bed</li>
                                       <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-line"><a href="room-details">Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="square-flip">
                    <div class="square bg-img" data-background="img/rooms/9.jpg">
                        <span class="category"><a href="rooms2">Book</a></span>
                        <div class="square-container d-flex align-items-end justify-content-end">
                            <div class="box-title">
                                <h6>Rs.15000 / Night</h6>
                                <h4>Wellness Room</h4>
                            </div>
                        </div>
                        <div class="flip-overlay"></div>
                    </div>
                    <div class="square2">
                        <div class="square-container2">
                            <h6>Rs.15000 / Night</h6>
                            <h4>Wellness Room</h4>
                            <p>Expirience Ultra luxary lifestyle.</p>
                            <div class="row room-facilities mb-30">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                       <li><i class="flaticon-bed"></i> Twin Bed</li>
                                       <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-line"><a href="room-details">Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

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

