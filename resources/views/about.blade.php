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
                <h5>Luxury Hotel</h5>
                <h1>About Us</h1>
            </div>
        </div>
    </div>
</div>
@include('layouts.components.about-para-index')


@include('layouts.components.extra-services-index')

@include('layouts.components.facilities-hotel-index')
<!-- Team -->
<section class="team section-padding bg-darkblack">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">Professionals</div>
                <div class="section-title">Meet The Team</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 owl-carousel owl-theme">
                <div class="item">
                    <div class="img"> <img src="img/team/4.jpg" alt=""> </div>
                    <div class="info">
                        <h6>Valentina Karla</h6>
                        <p>General Manager</p>
                        <div class="social valign">
                            <div class="full-width">
                               <a href="#"><i class="ti-instagram"></i></a>
                               <a href="#"><i class="ti-twitter"></i></a>
                               <a href="#"><i class="ti-facebook"></i></a>
                               <a href="#"><i class="ti-pinterest"></i></a>
                               <p>valentina@hotel.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img src="img/team/1.jpg" alt=""> </div>
                    <div class="info">
                        <h6>Micheal White</h6>
                        <p>Guest Service Department</p>
                        <div class="social valign">
                            <div class="full-width">
                                <a href="#"><i class="ti-instagram"></i></a>
                                <a href="#"><i class="ti-twitter"></i></a>
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-pinterest"></i></a>
                                <p>micheal@hotel.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img"> <img src="img/team/2.jpg" alt=""> </div>
                    <div class="info">
                        <h6>Olivia Martin</h6>
                        <p>Reservations Manager</p>
                        <div class="social valign">
                            <div class="social valign">
                                <div class="full-width">
                                   <a href="#"><i class="ti-instagram"></i></a>
                                   <a href="#"><i class="ti-twitter"></i></a>
                                   <a href="#"><i class="ti-facebook"></i></a>
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>olivia@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img"> <img src="img/team/5.jpg" alt=""> </div>
                    <div class="info">
                        <h6>Mariana Dana</h6>
                        <p>F&B Manager</p>
                        <div class="social valign">
                            <div class="full-width">
                               <a href="#"><i class="ti-instagram"></i></a>
                               <a href="#"><i class="ti-twitter"></i></a>
                               <a href="#"><i class="ti-facebook"></i></a>
                               <a href="#"><i class="ti-pinterest"></i></a>
                               <p>mariana@hotel.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img"> <img src="img/team/3.jpg" alt=""> </div>
                    <div class="info">
                        <h6>Enrico Brown</h6>
                        <p>Head Chef</p>
                        <div class="social valign">
                            <div class="full-width">
                               <a href="#"><i class="ti-instagram"></i></a>
                               <a href="#"><i class="ti-twitter"></i></a>
                               <a href="#"><i class="ti-facebook"></i></a>
                               <a href="#"><i class="ti-pinterest"></i></a>
                               <p>enrico@hotel.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img"> <img src="img/team/6.jpg" alt=""> </div>
                    <div class="info">
                        <h6>Victoria Dan</h6>
                        <p>Meetings and Events Manager</p>
                        <div class="social valign">
                            <div class="full-width">
                               <a href="#"><i class="ti-instagram"></i></a>
                               <a href="#"><i class="ti-twitter"></i></a>
                               <a href="#"><i class="ti-facebook"></i></a>
                               <a href="#"><i class="ti-pinterest"></i></a>
                               <p>victoria@hotel.com</p>
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