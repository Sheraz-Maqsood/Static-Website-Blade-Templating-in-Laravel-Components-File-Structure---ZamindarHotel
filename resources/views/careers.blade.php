@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
@endpush
@section('content')

@push('preload')

@endpush
 <!-- Header Banner -->
 <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/4.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h5>Careers</h5>
                <h1>Job Opening</h1>
            </div>
        </div>
    </div>
</div>
<!-- Careers -->
<section class="positions section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-60">
                <div class="position">
                    <a class="position-link" href="contact"></a>
                    <div class="position-title">Senior Executive Assistant <span>Manager</span></div>
                    <div class="position-location"><span>Location</span> New York, NY</div>
                    <div class="position-time">Employment Type <span>Full-time</span></div>
                    <div class="position-icon"><i class="ti-arrow-top-right"></i></div>
                </div>
                <div class="position">
                    <a class="position-link" href="contact"></a>
                    <div class="position-title">Receptionist <span>Employee</span></div>
                    <div class="position-location"><span>Location</span> San Francisco, CA</div>
                    <div class="position-time">Employment Type <span>Full-time</span></div>
                    <div class="position-icon"><i class="ti-arrow-top-right"></i></div>
                </div>
                <div class="position">
                    <a class="position-link" href="contact"></a>
                    <div class="position-title">Senior Architecture <span>Employee</span></div>
                    <div class="position-location"><span>Location</span> New York, NY</div>
                    <div class="position-time">Employment Type <span>Full-time</span></div>
                    <div class="position-icon"><i class="ti-arrow-top-right"></i></div>
                </div>
                <div class="position">
                    <a class="position-link" href="contact"></a>
                    <div class="position-title">Intern <span>Intern</span></div>
                    <div class="position-location"><span>Location</span> San Francisco, CA</div>
                    <div class="position-time">Employment Type <span>Part-time</span></div>
                    <div class="position-icon"><i class="ti-arrow-top-right"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p><small>Please submit a resume and cover letter with compensation history to <b>info[at]luxuryhotel.com</b>.</small></p>
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
