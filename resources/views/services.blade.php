
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
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Discover</h5>
                    <h1>Our Services</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="restaurantg src="img/restaurant/4.jpg" alt=""></a>
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
                            <div class="butn-dark"> <a href="restaurantan>Learn More</span></a> </div>
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
                            <div class="butn-dark"> <a href="spa-wellnessan>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="spa-wellnessg src="img/spa/3.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="spa-wellnessg src="img/spa/2.jpg" alt=""></a>
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
                            <div class="butn-dark"> <a href="spa-wellnessan>Learn More</span></a> </div>
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
                            <div class="butn-dark"> <a href="spa-wellnessan>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="spa-wellnessg src="img/spa/1.jpg" alt=""></a>
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

