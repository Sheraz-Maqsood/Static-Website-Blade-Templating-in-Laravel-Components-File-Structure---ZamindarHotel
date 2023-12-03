@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
@endpush
@section('content')

@push('preload')

@endpush

<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/10.jpg">
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
@include('layouts.components.team-about')

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
