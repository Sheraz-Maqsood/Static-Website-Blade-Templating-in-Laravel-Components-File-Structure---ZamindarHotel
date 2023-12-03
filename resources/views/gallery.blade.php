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
                <h5>Images & Videos</h5>
                <h1>Our Gallery</h1>
            </div>
        </div>
    </div>
</div>
<!-- Image Gallery -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">Images</div>
                <div class="section-title">Image Gallery</div>
            </div>
            <!-- 3 columns -->
            <div class="col-md-4 gallery-item">
                <a href="img/slider/7.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/slider/11.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 gallery-item">
                <a href="img/slider/5.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/slider/4.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 gallery-item">
                <a href="img/slider/4.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/slider/6.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <!-- 2 columns -->
            <div class="col-md-6 gallery-item">
                <a href="img/slider/2.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/slider/8.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 gallery-item">
                <a href="img/slider/1.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/slider/10.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <!-- 3 columns -->
            <div class="col-md-4 gallery-item">
                <a href="img/rooms/8.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/rooms/11.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 gallery-item">
                <a href="img/rooms/5.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/rooms/12.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 gallery-item">
                <a href="img/rooms/10.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/rooms/16.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
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

