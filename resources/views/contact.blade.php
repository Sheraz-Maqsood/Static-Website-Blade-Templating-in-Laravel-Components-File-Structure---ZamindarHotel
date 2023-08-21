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
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="img/slider/5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h5>Get in touch</h5>
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->
<section class="contact section-padding">
    <div class="container">
        <div class="row mb-90">
            <div class="col-md-6 mb-60">
                <h3>Zamindar Hotel & Resturant Lahore</h3>
                <p>Zamindar Hotel & Restaurant Lahore is a harmonious blend of historical charm and modern luxury, offering a unique experience in the heart of the city. With meticulously curated rooms, top-notch amenities, and a delectable culinary journey, we provide a haven for both travelers and locals alike.</p>

                    <p>Nestled within Lahore's cultural tapestry, Zamindar Hotel & Restaurant embraces its heritage while embracing the demands of contemporary comfort. Our warm and inviting spaces, along with an eclectic menu that showcases the best of local and international cuisine, create an unparalleled destination for memorable moments.</p>
                    
                        <p>At Zamindar Hotel & Restaurant, we invite you to discover a fusion of tradition and elegance. Our carefully designed accommodations and a restaurant that's a celebration of flavors provide an immersive experience where history meets hospitality, making every visit an unforgettable one.</p>
                <div class="reservations mb-30">
                    <div class="icon"><span class="flaticon-call"></span></div>
                    <div class="text">
                        <p>Reservation</p> <a href="tel:855-100-4444">(042) 37222354</a>
                    </div>
                </div>
                <div class="reservations mb-30">
                    <div class="icon"><span class="flaticon-envelope"></span></div>
                    <div class="text">
                        <p>Email Info</p> <a href="mailto:info@zamindarhotel.com">info@zamindarhotel.com</a>
                    </div>
                </div>
                <div class="reservations">
                    <div class="icon"><span class="flaticon-location-pin"></span></div>
                    <div class="text">
                        <p>Address</p> 98 McLeod Rd, Garhi Shahu, Lahore, Punjab 54000
                        <br>Pakistan
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-30 offset-md-1">
                <h3>Get in touch</h3>
                <form method="post" class="contact__form" action="/mail.php">
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                        </div>
                    </div>
                    <!-- form elements -->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" placeholder="Your Name *" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" placeholder="Your Email *" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="phone" type="text" placeholder="Your Number *" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="subject" type="text" placeholder="Subject *" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="butn-dark2"><span>Send Message</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Map Section -->
        <div class="row">
            <div class="col-md-12 map animate-box" data-animate-effect="fadeInUp">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13596.866638908403!2d74.3321872!3d31.573106!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191b462c89225f%3A0xc754f5b00c76405f!2sZamindar%20Hotel!5e0!3m2!1sen!2s!4v1691951781114!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
