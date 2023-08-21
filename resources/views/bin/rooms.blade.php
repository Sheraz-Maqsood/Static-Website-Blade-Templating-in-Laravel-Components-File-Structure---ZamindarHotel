@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
@endpush
@section('content')

@push('preload')
     @include('layouts.partials.preload')
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
@include('layouts.components.rooms-index')

@include('layouts.components.extra-services-index')

@include('layouts.components.reservation-and-booking-index')

@include('layouts.components.clients-logo-index')

@endsection
@push('js')
    {{-- <!-- @include('admin.components.datatableScript') -->-- --}}
    <script>

    </script>

   {{--  <!-- @include('admin.transactions.components.addItemsScript') -->-- --}}
@endpush

