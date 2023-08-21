@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
@endpush
@section('content')

@push('preload')

@endpush
  <!-- Header Banner -->
  <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h5>Pricing Plan</h5>
                <h1>Extra Pricing</h1>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Light -->
<section class="pricing section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <div class="pricing-card">
                        <img src="img/pricing/1.jpg" alt="">
                        <div class="desc">
                            <div class="name">Room cleaning</div>
                            <div class="amount">$50<span>/ month</span></div>
                            <ul class="list-unstyled list">
                                <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="pricing-card">
                        <img src="img/pricing/2.jpg" alt="">
                        <div class="desc">
                            <div class="name">Drinks included</div>
                            <div class="amount">$30<span>/ daily</span></div>
                            <ul class="list-unstyled list">
                                <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="pricing-card">
                        <img src="img/pricing/3.jpg" alt="">
                        <div class="desc">
                            <div class="name">Room Breakfast</div>
                            <div class="amount">$30<span>/ daily</span></div>
                            <ul class="list-unstyled list">
                                <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Dark -->
<section class="pricing section-padding bg-darkblack">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <div class="pricing-card">
                        <img src="img/pricing/4.jpg" alt="">
                        <div class="desc">
                            <div class="name">Safe & Secure</div>
                            <div class="amount">$15<span>/ daily</span></div>
                            <ul class="list-unstyled list">
                                <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="pricing-card">
                        <img src="img/pricing/2.jpg" alt="">
                        <div class="desc">
                            <div class="name">Drinks included</div>
                            <div class="amount">$30<span>/ daily</span></div>
                            <ul class="list-unstyled list">
                                <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="pricing-card">
                        <img src="img/pricing/3.jpg" alt="">
                        <div class="desc">
                            <div class="name">Room Breakfast</div>
                            <div class="amount">$30<span>/ daily</span></div>
                            <ul class="list-unstyled list">
                                <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                            </ul>
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

